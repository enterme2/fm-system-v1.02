<?php require('php_script/view_employee.php');?>
<!DOCTYPE html>
<html>
<head>
<title>Employee</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="../../css/w3.css">
<link rel="stylesheet" href="../../css/w3-theme-blue.css">
<link rel="stylesheet" href="../../css/font-awesome.css">
<link rel="stylesheet" href="../../css/mystyle.css">
<script src="../../js/togglecontent.js"></script>

</head>
<body>


<!-- Navbar -->
<div class="w3-top">
  <div class="w3-bar w3-theme w3-top w3-left-align w3-large">
    <a class="w3-bar-item w3-button w3-right w3-hide-large w3-hover-white w3-large w3-theme-l1" href="javascript:void(0)" onclick="w3_open()"><i class="fa fa-bars"></i></a>
    <img class="w3-left" src="../../img/AWS Sdn Bhd Logo2.jpg" alt="AWS Logo" style="width:100px;height:42.5px;">
    <a href="../dashboard/profile.php" class="w3-bar-item w3-button w3-hover-white w3-mobile w3-hide-small">Home</a>
    <a href="../php/logout.php" class="w3-bar-item w3-button w3-hover-white w3-mobile w3-right w3-theme-l1 w3-mobile">Logout</a>
    <div id="searchInput" style="display: none;">
    <button class="w3-bar-item w3-button w3-theme w3-right w3-hover-white" onclick="hideSearch()">&times</button>
    <form action="search.php" method="GET">
        <button class="w3-bar-item w3-button w3-theme w3-right w3-hover-white" type="submit" value="Search" ><i class="fa fa-search"></i></button>
        <input class="w3-bar-item w3-cyan w3-input w3-text-white w3-right" type="search" name="query" id="query" placeholder="Enter Hospital/WR-No" />
        <button class="w3-bar-item w3-ripple w3-theme w3-right" type="reset" style=""><i class="fa fa-eraser"></i></button>
    </form>
    </div>
    <button class="w3-bar-item w3-button w3-theme w3-right w3-hover-white" id="searchIcon" onclick="showSearch();"><i class="fa fa-search"></i></button>
  </div>
</div>

<!-- Sidebar -->
<nav class="w3-sidebar w3-bar-block w3-collapse w3-large w3-theme-l5 w3-animate-left" style="z-index:3;width:250px;margin-top:43px;" id="mySidebar">
  <a href="javascript:void(0)" onclick="w3_close()" class="w3-right w3-xlarge w3-padding-large w3-hover-black w3-hide-large" title="Close Menu">
    <i class="fa fa-remove"></i>
  </a>
  <h4 class="w3-bar-item"><b>Menu</b></h4>
  <div class="w3-dropdown-hover" id="adminTools">
    <button class="w3-button">Admin Tools
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="w3-dropdown-content w3-bar-block">
      <a class="w3-bar-item w3-button w3-hover-black" href="#">Employee</a>
      <a class="w3-bar-item w3-button w3-hover-black" href="#">Report</a>
    </div>
  </div> 
  <div class="w3-dropdown-hover">
    <button class="w3-button">Work Request
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="w3-dropdown-content w3-bar-block">
      <a class="w3-bar-item w3-button w3-hover-black" href="../workRequest/wReqForm.php">Add Work Request</a>
      <a class="w3-bar-item w3-button w3-hover-black" href="../workRequest/showAll_wRequest.php?page=1">Show Work Request</a>
    </div>
  </div> 

  <div class="w3-dropdown-hover">
    <button class="w3-button">Preventive <br>Maintenance
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="w3-dropdown-content w3-bar-block">
      <a class="w3-bar-item w3-button w3-hover-black" href="../preventiveMaintenance/pMainForm.php">Add Preventive Maintenance Work</a>
      <a class="w3-bar-item w3-button w3-hover-black" href="../preventiveMaintenance/showAll_pMaintenance.php">Show Preventive Maintenance Work</a>
    </div>
  </div>

  <div class="w3-dropdown-hover">
    <button class="w3-button">Complaint
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="w3-dropdown-content w3-bar-block">
      <a class="w3-bar-item w3-button w3-hover-black" href="../complaint/complaintForm.php">Add Complaint</a>
      <a class="w3-bar-item w3-button w3-hover-black" href="../complaint/showAll_complaint.php">Show Complaint</a>
    </div>
  </div>  
</nav>

<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!--content-->
<div class="w3-main" style="margin-left:250px">
  <div class="w3-cell-row " style="padding-top: 64px;">
    <div class="w3-cell w3-container">
    <h2 class="w3-text-teal">Employee Details</h2>
    </div>
  </div>
<form action="php_script/update_employee.php" method="post">
      <input type="hidden" name="id" value="<?php echo $id; ?>"/>
        <div class="w3-row w3-container">
          <div class="w3-col m4 w3-padding-small">
            <label> Name :</label>
            <input class="w3-input w3-border" type="text" name="nameEmployee" required value='<?php echo $nameEmployee ?>'>  
          </div>

          <div class="w3-col m2 w3-padding-small">
            <label> Staff ID :</label>
            <input class="w3-input w3-border" type="text" name="nameEmployee" required value='<?php echo $staff_ID ?>'> 
          </div>
          <div class="w3-col m2 w3-padding-small">
            <label> User Type :</label>
            <select class="w3-select w3-border" id="usertype" name="usertype" >
            <option value="" <?php echo $selected1 ?>>Select</option>
            <option value="Admin" <?php echo $selected2 ?>>Admin</option>
            <option value="Technician" <?php echo $selected3 ?>>Technician</option>
          </select> 
          </div>
        </div>

        <div class="w3-row w3-container w3-padding-16">
          <div class="w3-col m2 w3-padding-small">
            <label> Username :</label>
            <input class="w3-input w3-border" type="text" name="nameEmployee" required value='<?php echo $username ?>'>  
          </div>

          <div class="w3-col m2 w3-padding-small">
            <label> Password :</label>
            <input class="w3-input w3-border" type="text" name="nameEmployee" required value='<?php echo $password ?>'> 
          </div>
        </div>

        <div class="w3-row w3-container" style="padding-top: 32px">
          <div class="w3-col m4 w3-padding-small"><wbr></div>
          <div class="w3-col m2 w3-padding-small">
          <input class="w3-button w3-round w3-theme w3-hover-aqua w3-padding-large w3-block" type="submit" name="Add" value="Save">
          </div>
        </div>
      </form>

</div>





<script src="../../js/sidebar.js"></script>
</body>
</html>