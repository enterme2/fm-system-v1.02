<?php session_start();?>
<!DOCTYPE html>
<html>
<head>
<title>Preventive Maintenance</title>
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
    <h2 class="w3-text-teal w3-center">Hospital Support Services</h2>
    </div>  
  </div>

  <div class="w3-cell-row ">
    <div class="w3-cell w3-container">
    <h3 class="w3-text-teal w3-center">PREVENTIVE MAINTENANCE WORK</h3>
    </div>
  </div>

<form action="php_script/insert_pMaintenance.php" method="post">
  <div class="w3-row w3-container">

    <div class="w3-col m8 w3-padding-small"><wbr></div>

    <div class="w3-col m2 w3-padding-small">
      <label> Status :</label>
      <select class="w3-select w3-border" name="status" id="status" onchange="showJustification();requireAction();">
      <option value="Open">Open</option>
      <option value="Pending">Pending</option>
      <option value="Closed">Closed</option>
    </select> 
    </div>
  </div>

  <div class="w3-row w3-container">
    <div class="w3-col m2 w3-padding-small"><wbr></div>
    <div class="w3-col m2 w3-padding-small">
      <label> Hospital :</label>
      <input class="w3-input w3-border" type="text" name="hospital" required>  
    </div>
    <div class="w3-col m3 w3-padding-small"><wbr></div>

    <div class="w3-col m3 w3-padding-small">
      <label> Work Request No :</label>
      <input class="w3-input w3-border" type="text" name="wrNo" required>  
    </div>
  </div>

  <div class="w3-row w3-container">
    <div class="w3-col m2 w3-padding-small"><wbr></div>
    
    <div class="w3-col m3 w3-padding-small">
      <label> Date</label>
      <input class="w3-input w3-border" type="date" name="dateRequested"> 
    </div>


    <div class="w3-col m2 w3-padding-small">
      <label> Time Requested :</label>
      <input class="w3-input w3-border" type="time" name="timeRequested"> 
    </div>
    
    <div class="w3-col m3 w3-padding-small">
      <label> Target Date :</label>
      <input class="w3-input w3-border" type="date" name="targetDate">  
    </div>
  </div>

<div class="w3-row w3-container">
    <div class="w3-col m2 w3-padding-small"><wbr></div>
    <div class="w3-col m3 w3-padding-small">
      <label> Asset No :</label>
      <input class="w3-input w3-border" type="text" name="assetNo" required>  
    </div>
    <div class="w3-col m2 w3-padding-small">
      <label> Type :</label>
      <input class="w3-input w3-border" type="text" name="type">  
    </div>
  </div>


  <div class="w3-row w3-container">
    <div class="w3-col m2 w3-padding-small"><wbr></div>
    <div class="w3-col m8 w3-padding-small">
      <label> Asset Description :</label>
      <textarea class="w3-input w3-border" rows="3" style="resize: none;"  input type="text" name="assetDesc"></textarea>
    </div>
  </div>

  <div class="w3-row w3-container" style="padding-top: 16px">
    <div class="w3-col m2 w3-padding-small"><wbr></div>
    <!--
    <div class="w3-col m3 w3-padding-small">
      <label> Workgroup :</label>
      <input class="w3-input w3-border" type="text" name="workgroup" required value="eFEMS">  
    </div>
    -->
    <input class="w3-input w3-border" type="hidden" name="workgroup" value="eFEMS">
    
    <div class="w3-col m5 w3-padding-small">
      <label> Details :</label>
      <input class="w3-input w3-border" type="text" name="details" value="Preventive Work Request">  
    </div>
  </div>

  <div class="w3-row w3-container" style="padding-top: 16px">
    <div class="w3-col m2 w3-padding-small"><wbr></div>
    <div class="w3-col m8 w3-padding-small">
      <label> Task Description :</label>
      <textarea class="w3-input w3-border" rows="2" style="resize: none;"  input type="text" name="taskDesc"></textarea>
    </div>
  </div>

  <div class="w3-row w3-container">
    <div class="w3-col m2 w3-padding-small"><wbr></div>
    <div class="w3-col m3 w3-padding-small">
      <label> Start Date/Time :</label>
      <input class="w3-input w3-border" type="datetime-local" name="startDatetime">  
    </div>

    <div class="w3-col m3 w3-padding-small">
      <label> End Date/Time :</label>
      <input class="w3-input w3-border" type="datetime-local" name="endDatetime">  
    </div>
    <div class="w3-col m3 w3-padding-small">
      <label> Actual Closed Date:</label>
      <input class="w3-input w3-border" type="date" name="actualclosedDate" style="width: 180px">  
    </div>
  </div>

  <div class="w3-row w3-container">
    <div class="w3-col m2 w3-padding-small"><wbr></div>
    <div class="w3-col m8 w3-padding-small">
      <label> Action Taken :</label>
      <textarea class="w3-input w3-border" rows="3" style="resize: none;"  input type="text" name="actionTaken" id="actionTaken"></textarea>
    </div>
  </div>

  <div class="w3-row w3-container">
    <div class="w3-col m2 w3-padding-small"><wbr></div>
    <div class="w3-col m4 w3-padding-small">
      <label> Justification Outstanding :</label>
      <textarea class="w3-input w3-border" rows="3" style="resize: none;"  input type="text" name="justificationOutstanding"></textarea>
    </div>
    <div class="w3-col m3 w3-padding-small" id="pendingInput" style="display: none;">
      <label> Pending Justification :</label>
      <select class="w3-select w3-border" name="pendingJustification">
      <option value="" selected>Select Justification</option>
      <option value="Asset Not Found">Asset Not Found</option>
      <option value="Asset Under Repair">Asset Under Repair</option>
      <option value="Reschedule">Reschedule</option>
    </select> 
    </div>
  </div>

  <div class="w3-row w3-container" style="padding-top: 32px">
    <div class="w3-col m3 w3-padding-small"><wbr></div>
    <div class="w3-col m2 w3-padding-small">
    <input class="w3-button w3-round w3-theme w3-hover-aqua w3-padding-large w3-block" type="reset" name="reset" value="Reset"> 
    </div>
    <div class="w3-col m2 w3-padding-small">
    <input class="w3-button w3-round w3-theme w3-hover-aqua w3-padding-large w3-block" type="submit" name="Add" value="Save"> 
    </div>
</form>
    <div class="w3-col m2 w3-padding-small">
    <button class="w3-button w3-round w3-theme w3-hover-aqua w3-padding-large w3-block" onclick="window.location='../dashboard/profile.php'">Cancel</button>
    </div>
  </div>


</div>




<script src="../../js/togglecontent.js"></script>
<script src="../../js/sidebar.js"></script>
</body>
</html>