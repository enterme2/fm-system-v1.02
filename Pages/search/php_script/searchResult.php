<?php
	include('../php/connect.php');
    
    $keyword = $_GET['query']; // gets value sent over search form
    $keyword2 = $_GET['query'];
    $min_length = 1; // you can set minimum length of the keyword if you want
    $ifEmpty = NULL;

    if ($keyword=="" or $keyword==NULL)
        {
            echo "<h3 class='w3-text-red'>Enter Keyword !</h3>";
            exit();
    }

    //function to popup error
    function phpAlert($msg) {
    echo '<script type="text/javascript">alert("' . $msg . '")</script>';
    }


    function search($keyword,$tableName,$min_length,$db,$header)
    {
    if(strlen($keyword) >= $min_length)
    { // if keyword length is more or equal minimum length then
         
        $keyword = htmlspecialchars($keyword); // changes characters used in html to their equivalents, for example: < to &gt;
        $keyword = mysqli_real_escape_string($db,$keyword);// makes sure nobody uses SQL injection
         

        $raw_results = mysqli_query($db,"SELECT * FROM $tableName
            WHERE (`hospital` LIKE '%".$keyword."%') OR (`wrNo` LIKE '%".$keyword."%')");
        

        // * means that it selects all fields, you can also write: `id`, `title`, `text`
        // articles is the name of our table
         
        // '%$keyword%' is what we're looking for, % means anything, for example if $query is Hello
        // it will match "hello", "Hello man", "gogohello", if you want exact match use `title`='$keyword'
        // or if you want to match just full word so "gogohello" is out use '% $keyword %' ...OR ... '$keyword %' ... OR ... '% $keyword'
    

    $j=1;

        if (mysqli_num_rows($raw_results) < 1){ // if there is no matching rows do following
            echo "<h3><i class='w3-red fa fa-times'></i> No results found in " .$header. "</h3><br>";

        }
        //elseif(mysqli_num_rows($raw_results) > 0)

        else
        { // if one or more rows are returned do following

    echo "<h3><i class='w3-green fa fa-check'></i> Found in ".$header. "</h3>";
    //echo "";    
    echo "<div class='w3-container w3-responsive'>";
    echo "<table class='w3-table w3-bordered'>";
    echo "<tr> <th>No</th> <th>Hospital</th> <th>Work Request No</th> <th>Status</th> <th></th> </tr>";
            while($results = mysqli_fetch_assoc($raw_results))
            {
            // $results = mysql_fetch_array($raw_results) puts data from database into array, while it's valid it does the loop
            echo "<tr>";
            echo '<td>'. $j .'</td>';
            echo "<td>" .$results['hospital']. "</td>";
            echo "<td>" .$results['wrNo']. "</td>";
            echo "<td>" .$results['status']. "</td>";
            if($tableName=="workrequest")
                {   
            echo '<td><a href="../../workRequest/edit_wReqForm.php?id=' . $results['ID'] . '">Edit</a></td>'; 
            }
            elseif ($tableName=="preventivemaintenance")
                {   echo '<td><a href="../../preventiveMainteanance/edit_pMainForm.php?id=' . $results['ID'] . '">Edit</a></td>';}
            else
                {   echo '<wbr>';}

            echo "</tr>"; 
            ++$j;

                // posts results gotten from database(title and text) you can also show id ($results['id'])
            }
    echo "</table>";
    echo "</div>";
    echo "</br>";

        }

    }
    else{ // if query length is less than minimum
        //echo "Minimum length is ".$min_length;
        $ifEmpty=TRUE;
    }

    mysqli_free_result($raw_results);
    }



    search($keyword,'workrequest',$min_length,$db,'Work Request');
    search($keyword2,'preventivemaintenance',$min_length,$db,'Preventive Maintenance');
    mysqli_close($db);
?>