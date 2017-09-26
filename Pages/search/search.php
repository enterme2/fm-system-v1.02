<!DOCTYPE html>
<html>
<head>
<title>Search Result</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="../../css/w3.css">
<link rel="stylesheet" href="../../css/w3-theme-blue.css">
<link rel="stylesheet" href="../../css/font-awesome.css">
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
        <button class="w3-bar-item w3-button w3-theme w3-right w3-hover-white" type="submit" value="Search"><i class="fa fa-search"></i></button>
        <input class="w3-bar-item w3-cyan w3-input w3-text-white w3-right" type="search" name="query" id="query" placeholder="Enter Hospital/WR-No" />
        <button class="w3-bar-item w3-ripple w3-theme w3-right" type="reset" style=""><i class="fa fa-eraser"></i></button>
    </form>
    </div>
    <button class="w3-bar-item w3-button w3-theme w3-right w3-hover-white" id="searchIcon" onclick="showSearch();"><i class="fa fa-search"></i></button>
  </div>
</div>

<!-- Navbar & Sidebar -->
<?php include('../php/menu.php');?>

<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!--content-->
<div class="w3-main" style="margin-left:250px">
  <div class="w3-row w3-padding-64">    
    <div class="w3-twothird w3-container">
    <h1 class="w3-text-teal">Search Results <i class="fa fa-search"></i> </h1>
    <?php include('php_script/searchResult.php'); ?>
    </div>
  </div>
</div>

</body>
</html>