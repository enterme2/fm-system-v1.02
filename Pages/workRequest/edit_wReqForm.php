<?php require('php_script/view_wReqForm.php');
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<title>Work Request</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="../../css/w3.css">
<link rel="stylesheet" href="../../css/w3-theme-blue.css">
<link rel="stylesheet" href="../../css/font-awesome.css">
<link rel="stylesheet" href="../../css/mystyle.css">

</head>
<body onload="showJustification();hideAdminTools();">
<input type="hidden" id="usertype" value="<?php echo $_SESSION['user_type'] ?>" />

<!-- Navbar & Sidebar -->
<?php include('../php/menu.php');?>

<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!--content-->
<div class="w3-main" style="margin-left:250px">

  <div class="w3-cell-row " style="padding-top: 64px;">
    <div class="w3-cell w3-container">
    <h2 class="w3-text-teal w3-center">Work Request (FEMS)</h2>
    </div>
  </div>
      <form action="php_script/update_wReq.php" method="post">
      <input type="hidden" name="id" value="<?php echo $id; ?>"/>
        <div class="w3-row w3-container">

          <div class="w3-col m8 w3-padding-small"><wbr></div>

          <div class="w3-col m2 w3-padding-small">
            <label> Status :</label>
            <select class="w3-select w3-border" id="status" name="status" onchange="showJustification();requireAction();" >
            <option value="Open" <?php echo $selected1 ?>>Open</option>
            <option value="Pending" <?php echo $selected2 ?>>Pending</option>
            <option value="Closed" <?php echo $selected3 ?>>Closed</option>
          </select> 
          </div>
        </div>

        <div class="w3-row w3-container">
          <div class="w3-col m2 w3-padding-small"><wbr></div>
          <div class="w3-col m2 w3-padding-small">
            <label> Hospital :</label>
            <input class="w3-input w3-border" type="text" name="hospital" required value='<?php echo $hospital ?>'>  
          </div>

          <div class="w3-col m3 w3-padding-small">
            <wbr>
          </div>

          <div class="w3-col m3 w3-padding-small">
            <label> Work Request No :</label>
            <input class="w3-input w3-border" type="text" name="wrNo" required value='<?php echo $wrNo ?>'>  
          </div>
        </div>

        <div class="w3-row w3-container">
          <div class="w3-col m2 w3-padding-small"><wbr></div>

          <div class="w3-col m3 w3-padding-small">
            <label> Date </label>
            <input class="w3-input w3-border" type="date" name="dateRequested" value='<?php echo $dateRequested ?>'> 
          </div>

          <div class="w3-col m2 w3-padding-small">
            <label> Time Requested :</label>
            <input class="w3-input w3-border" type="time" name="timeRequested" value='<?php echo $timeRequested ?>'> 
          </div>
          <div class="w3-col m3 w3-padding-small">
            <label> Target Date :</label>
            <input class="w3-input w3-border" type="date" name="targetDate" value='<?php echo $targetDateView ?>'>  
          </div>

        </div>

        <div class="w3-row w3-container">
          <div class="w3-col m2 w3-padding-small"><wbr></div>
          <div class="w3-col m3 w3-padding-small">
            <label> Requestor :</label>
            <input class="w3-input w3-border" type="text" name="requestor" required value='<?php echo $requestor ?>'>  
          </div>

          <div class="w3-col m3 w3-padding-small">
            <label> Category :</label>
            <input class="w3-input w3-border" type="text" name="category" value='<?php echo $category ?>'>  
          </div>
        </div>

        <div class="w3-row w3-container">
          <div class="w3-col m2 w3-padding-small"><wbr></div>
          <div class="w3-col m3 w3-padding-small">
            <label> Asset No :</label>
            <input class="w3-input w3-border" type="text" name="assetNo" value='<?php echo $assetNo ?>'>  
          </div>

          <!--
          <div class="w3-col m2 w3-padding-small">
            <label> Workgroup :</label>
            <input class="w3-input w3-border" type="text" name="workgroup" value='<?php echo $workgroup ?>'>  
          </div>
          -->
          
        </div>

        <div class="w3-row w3-container">
          <div class="w3-col m2 w3-padding-small"><wbr></div>
          <div class="w3-col m8 w3-padding-small">
            <label> Details :</label>
            <textarea class="w3-input w3-border" rows="3" style="resize: none;"  input type="text" name="details"><?php echo $details ?></textarea>
          </div>
        </div>

        <div class="w3-row w3-container">
          <div class="w3-col m2 w3-padding-small"><wbr></div>
          <div class="w3-col m8 w3-padding-small">
            <label> Action Taken :</label>
            <textarea class="w3-input w3-border" rows="3" style="resize: none;"  input type="text" name="actionTaken" id="actionTaken"><?php echo $actionTaken ?></textarea>
          </div>
        </div>

        <div class="w3-row w3-container">
          <div class="w3-col m2 w3-padding-small"><wbr></div>
          <div class="w3-col m3 w3-padding-small">
            <label> Start Date/Time :</label>
            <input class="w3-input w3-border" type="datetime-local" name="startDatetime" value='<?php echo $startdatetimeView ?>'>  
          </div>

          <div class="w3-col m3 w3-padding-small">
            <label> End Date/Time :</label>
            <input class="w3-input w3-border" type="datetime-local" name="endDatetime" value='<?php echo $enddatetimeView ?>'>  
          </div>
          <div class="w3-col m3 w3-padding-small">
            <label> Actual Closed Date :</label>
            <input class="w3-input w3-border" type="date" name="actualclosedDate" style="width: 180px" value='<?php echo $actualclosedDateView ?>'>  
          </div>
        </div>

        <div class="w3-row w3-container">
          <div class="w3-col m2 w3-padding-small"><wbr></div>
          <div class="w3-col m4 w3-padding-small">
            <label> Justification Outstanding :</label>
            <textarea class="w3-input w3-border" rows="3" style="resize: none;"  input type="text" name="justificationOutstanding" value='<?php echo $justificationOutstanding ?>'></textarea>
          </div>
          <div class="w3-col m3 w3-padding-small" id="pendingInput" style="display: none;">
            <label> Pending Justification :</label>
            <select class="w3-select w3-border" name="pendingJustification">
            <option value="" <?php echo $selectedJustification4 ?>>Select Justification</option>
            <option value="Parts" <?php echo $selectedJustification1 ?> >Parts</option>
            <option value="Vendor"<?php echo $selectedJustification2 ?> >Vendor</option>
            <option value="CA/BER Report" <?php echo $selectedJustification3 ?> >CA/BER Report</option>
          </select> 
          </div>
        </div>

        <div class="w3-row w3-container" style="padding-top: 32px">
          <div class="w3-col m4 w3-padding-small"><wbr></div>
          <div class="w3-col m2 w3-padding-small">
          <input class="w3-button w3-round w3-theme w3-hover-aqua w3-padding-large w3-block" type="submit" name="Add" value="Save">
          </div>
      </form>
          <div class="w3-col m2 w3-padding-small">
          <button class="w3-button w3-round w3-theme w3-hover-aqua w3-padding-large w3-block" onclick="window.location='../dashboard/profile.php'">Cancel</button>
          </div>
        </div>


      
</div>

<div class="w3-container w3-center w3-padding-64"></div>




<script src="../../js/togglecontent.js"></script>
<script src="../../js/sidebar.js"></script>
</body>
</html>