<?php
require('../php/connect.php');

$result=mysqli_query($db,"SELECT * FROM complaint");
if (!$result)
  {
  echo "Sorry, this website is experiencing problems.";

  //remove this later
  echo("Error description: " . mysqli_error($db));
  }

$per_page = 20;
$total_results = mysqli_num_rows($result);
$total_pages = ceil($total_results / $per_page);
if (isset($_GET['page']) && is_numeric($_GET['page']))

{

$show_page = $_GET['page'];
// make sure the $show_page value is valid
if ($show_page > 0 && $show_page <= $total_pages)

{
$start = ($show_page -1) * $per_page;
$end = $start + $per_page;
}

else

{
// error - show first set of results
$start = 0;
$end = $per_page;
}

}

else

{
// if page isn't set, show first set of results
$start = 0;
$end = $per_page;
}


  echo "<div class='w3-responsive w3-container'>";
  echo "<table class='w3-table w3-bordered'>";

  echo "<tr> <th>No</th> <th>Complaint No</th> <th>Requested Date/Time</th> <th>Status</th> <th></th> <th></th> </tr>";

//Alternative to mysql_result()
  function mysqli_result($result, $iRow, $field = 0,$field2 = 0)
{
    if(!mysqli_data_seek($result, $iRow))
        return false;
    if(!($row = mysqli_fetch_array($result)))
        return false;
    if(!array_key_exists($field, $row))
        return false;
    if ($field=='dateRequested') {
      //return $dateView = date("d-m-Y h:i A", strtotime($row[$field]));
      if($row[$field]=="0000-00-00")
        { $dateNotSet="Not specified";
          return $dateNotSet;}
      else{
      //return $dateView = date("d-M-Y", strtotime($row[$field]));
        $dateView = date("d-M-Y", strtotime($row[$field]));
        $timeView = date("h:i A", strtotime($row[$field2]));
        $string = $dateView. ' ' .$timeView;
        return $string;
      }
    }
    return $row[$field];
}

/*
  function calculateAging($result, $iRow, $field = 0)
{
    if(!mysqli_data_seek($result, $iRow))
        return false;
    if(!($row = mysqli_fetch_array($result)))
        return false;
    if(!array_key_exists($field, $row))
        return false;

    if($row[$field]=="0000-00-00")
      { $dateNotSet="";
        return $dateNotSet;}
    else {
    date_default_timezone_set("Asia/Kuala_Lumpur");
    $current=date('d-M-Y H:i:s');
    $days = (strtotime($current) - strtotime($row[$field])) / (60 * 60 * 24);
    return ceil($days);
    }
}
*/
$j=1;


for ($i = $start; $i < $end; $i++)

{
// make sure that PHP doesn't try to show results that don't exist

if ($i == $total_results) { break; }

	echo "<tr>";
  	echo '<td>'.$j. '</td>';
  	echo '<td>' . mysqli_result($result, $i, 'complaintNo') . '</td>';
    echo '<td>' . mysqli_result($result, $i, 'dateRequested','timeRequested') . '</td>';
  	echo '<td>' . mysqli_result($result, $i, 'status') . '</td>';
  	echo '<td><a href="edit_complaintForm.php?id=' . mysqli_result($result, $i, 'ID') . '">Edit</a></td>';
  	echo '<td><a href="php_script/delete_complaint.php?id=' . mysqli_result($result, $i, 'ID') . '">Delete</a></td>';
  	$j++;
  }

echo "</table>";
echo "</div>";


echo "<div class='w3-center w3-padding-16'><b>Pages</b><br></div>";
// echo out the contents of each row into a table
  for ($i = 1; $i <= $total_pages; $i++)

{


  // Pagination
echo "<div class='w3-center'>";
echo "<div class='w3-bar'>";
echo "<a class='w3-button w3-theme' href='showAll_complaint.php?page=$i'>$i</a>";
echo "</div>";
echo "</div>";


}

mysqli_close($db);
?>