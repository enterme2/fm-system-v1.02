 <?php include('php_script/view_complaintForm.php');
 session_start();
?>
<!DOCTYPE html>
<html>
<head>
<title>Complaint Form</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="../../css/w3.css">
<link rel="stylesheet" href="../../css/w3-theme-blue.css">
<link rel="stylesheet" href="../../css/font-awesome.css">
<link rel="stylesheet" href="../../css/mystyle.css">

</head>
<body onload="hideAdminTools();">
<input type="hidden" id="usertype" value="<?php echo $_SESSION['user_type'] ?>" />

<!-- Navbar & Sidebar -->
<?php include('../php/menu.php');?>

<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!--content-->
<div class="w3-main" style="margin-left:250px">

  <div class="w3-cell-row " style="padding-top: 64px;">
    <div class="w3-cell w3-container">
    <h2 class="w3-text-teal w3-center">Complaint Form</h2>
    </div>  
  </div>

<form action="php_script/update_complaint.php" method="post">
<input type="hidden" name="id" value="<?php echo $id; ?>"/>
<div class="w3-row w3-container">

    <div class="w3-col m8 w3-padding-small"><wbr></div>

    <div class="w3-col m2 w3-padding-small">
      <label> Status :</label>
      <select class="w3-select w3-border" name="status">
      <option value="Open" <?php echo $selected1 ?>>Open</option>
      <option value="Pending" <?php echo $selected2 ?>>Pending</option>
      <option value="Closed" <?php echo $selected3 ?>>Closed</option>
    </select> 
    </div>
</div>

  <div class="w3-row w3-container">
    <div class="w3-col m2 w3-padding-small"><wbr></div>
    <div class="w3-col m3 w3-padding-small">
      <label> Hospital :</label>
      <input class="w3-input w3-border" type="text" name="hospital" value='<?php echo $hospital ?>' required>  
    </div>
    <div class="w3-col m2 w3-padding-small"><wbr></div>

    <div class="w3-col m3 w3-padding-small">
      <label> Complaint No :</label>
      <input class="w3-input w3-border" type="text" name="complaintNo" value='<?php echo $complaintNo ?>' required>  
    </div>
  </div>

  <div class="w3-row w3-container">
    <div class="w3-col m7 w3-padding-small"><wbr></div>
    <div class="w3-col m3 w3-padding-small">
      <label> Reference :</label>
      <input class="w3-input w3-border" type="text" name="reference" value='<?php echo $reference ?>'>  
    </div>
  </div>

<div class="w3-row w3-container">
    <div class="w3-col m2 w3-padding-small"><wbr></div>
    
    <div class="w3-col m3 w3-padding-small">
      <label> Date</label>
      <input class="w3-input w3-border" type="date" name="dateRequested" value='<?php echo $dateRequested ?>'> 
    </div>


    <div class="w3-col m2 w3-padding-small">
      <label> Time Requested :</label>
      <input class="w3-input w3-border" type="time" name="timeRequested" value='<?php echo $timeRequested ?>'> 
    </div>
    
</div>

<div class="w3-row w3-container w3-margin-top" >
    <div class="w3-col m2 w3-padding-small"><wbr></div>
    <div class="w3-col m8 w3-padding-small">
      <label> Complaint Details :</label>
      <textarea class="w3-input w3-border" rows="3" style="resize: none;"  input type="text" name="complaintDetails"><?php echo $complaintDetails ?></textarea>  
    </div>
  </div>


  <div class="w3-row w3-container">
    <div class="w3-col m2 w3-padding-small"><wbr></div>
    <div class="w3-col m8 w3-padding-small">
      <label> Action Taken :</label>
      <textarea class="w3-input w3-border" rows="3" style="resize: none;"  input type="text" name="actionTaken"><?php echo $actionTaken ?></textarea>
    </div>
  </div>

<div class="w3-row w3-container">
    <div class="w3-col m2 w3-padding-small"><wbr></div>
    
    <div class="w3-col m4 w3-padding-small">
      <label> Name</label>
      <input class="w3-input w3-border" type="text" name="name" value='<?php echo $name ?>'> 
    </div>


    <div class="w3-col m3 w3-padding-small">
      <label> Date Completed :</label>
      <input class="w3-input w3-border" type="date" name="dateCompleted" value='<?php echo $dateCompleted ?>'> 
    </div>    
</div>

  <div class="w3-row w3-container" style="padding-top: 32px">
    <div class="w3-col m4 w3-padding-small"><wbr></div>
    <div class="w3-col m2 w3-padding-small">
    <input class="w3-button w3-round w3-theme w3-hover-aqua w3-padding-large w3-block" type="submit" name="Add" value="Save"> 
    </div>
</form>
    <div class="w3-col m2 w3-padding-small">
    <button class="w3-button w3-round w3-theme w3-hover-aqua w3-padding-large w3-block" onclick="window.location='showAll_complaint.php'">Cancel</button>
    </div>
  </div>


</div>




<script src="../../js/togglecontent.js"></script>
<script src="../../js/sidebar.js"></script>
</body>
</html>