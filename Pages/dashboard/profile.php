<?php include('../php/session.php');?>
<!DOCTYPE html>
<html>
<head>
<title>Profile</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="../../css/w3.css">
<link rel="stylesheet" href="../../css/w3-theme-blue.css">
<link rel="stylesheet" href="../../css/font-awesome.css">
<script type="text/javascript" src="../../js/togglecontent.js"></script>

</head>
<body onload="hideAdminTools();">
<input type="hidden" id="usertype" value="<?php echo $user_type ?>" />
<!-- Navbar -->
<div class="w3-top">
  <div class="w3-bar w3-theme w3-top w3-left-align w3-large">
    <a class="w3-bar-item w3-button w3-right w3-hide-large w3-hover-white w3-large w3-theme-l1" href="javascript:void(0)" onclick="w3_open()"><i class="fa fa-bars"></i></a>
    <img class="w3-left" src="../../img/AWS Sdn Bhd Logo2.jpg" alt="AWS Logo" style="width:100px;height:42.5px;">
    <a href="#" class="w3-bar-item w3-button w3-hover-white w3-mobile w3-hide-small">Home</a>
    <a href="../php/logout.php" class="w3-bar-item w3-button w3-hover-white w3-right w3-theme-l1">Logout</a>
    <div class="w3-hide-small" id="searchInput" style="display: none;">
    <button class="w3-bar-item w3-button w3-theme w3-right w3-hover-white" onclick="hideSearch()">&times</button>
    <form action="../search/search.php" method="GET">
        <button class="w3-bar-item w3-button w3-theme w3-right w3-hover-white" type="submit" value="Search" ><i class="fa fa-search"></i></button>
        <input class="w3-bar-item w3-cyan w3-input w3-text-white w3-right" type="search" name="query" id="query" placeholder="Enter Hospital/WR-No" />
        <button class="w3-bar-item w3-ripple w3-theme w3-right" type="reset" style=""><i class="fa fa-eraser"></i></button>
    </form>
    </div>
    <button class="w3-bar-item w3-button w3-theme w3-right w3-hover-white w3-hide-small" id="searchIcon" onclick="showSearch();"><i class="fa fa-search"></i></button>
  </div>
</div>

<!-- Sidebar -->
<nav class="w3-sidebar w3-bar-block w3-collapse w3-large w3-theme-l5" style="z-index:3;width:250px;margin-top:43px;" id="mySidebar">
  <a href="javascript:void(0)" onclick="w3_close()" class="w3-right w3-xlarge w3-padding-large w3-hover-black w3-hide-large" title="Close Menu">
    <i class="fa fa-remove"></i>
  </a>
  <h4 class="w3-bar-item"><b>Menu</b></h4>
  <div class="w3-dropdown-hover" id="adminTools">
    <button class="w3-button">Admin Tools
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="w3-dropdown-content w3-bar-block">
      <a class="w3-bar-item w3-button w3-hover-black" href="../adminTools/show_employee.php">Employee</a>
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

  <div class="w3-row" style="padding-top: 32px;">
    <div class="w3-twothird w3-container">
    <h1 class="w3-text-teal">Facilities Services Management System</h1>
    </div>
  </div>
  <div class="w3-row">
    <div class="w3-col m1  w3-container">
      <b>Welcome</i></b>
    </div>
    <div class="w3-col m4  w3-container">
      <b><i><?php echo $employee_name; ?></i></b>
    </div>
    <div class="w3-col m4  w3-container">
      <b>Level : <i><?php echo $user_type; ?></i></b> 
    </div>

  </div>
        


</div>





<script src="../../js/sidebar.js"></script>
</body>
</html>