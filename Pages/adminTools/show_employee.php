<!DOCTYPE html>
<html>
<head>
<title>Employee</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="../../css/w3.css">
<link rel="stylesheet" href="../../css/w3-theme-blue.css">
<link rel="stylesheet" href="../../css/font-awesome.css">
<script src="../../js/togglecontent.js"></script>

</head>
<body>

<!-- Navbar & Sidebar -->
<?php include('../php/menu.php');?>

<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!--content-->
<div class="w3-main" style="margin-left:250px">

  <div class="w3-row w3-padding-64">
    <div class="w3-twothird w3-container">
    <h1 class="w3-text-teal">AWS Employee</h1>
    <?php include('php_script/viewAll_employee.php');?>
    </div>
  </div>

</div>





<script src="../../js/sidebar.js"></script>
</body>
</html>