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

<!-- Navbar & Sidebar -->
<?php include('../php/menu.php');?>

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
        </div>

        <div class="w3-row w3-container">
          <div class="w3-col m4 w3-padding-small">
            <label> Staff ID :</label>
            <input class="w3-input w3-border" type="text" name="staff_ID"  value='<?php echo $staff_ID ?>'> 
          </div>
        </div>

        <div class="w3-row w3-container">
          <div class="w3-col m4 w3-padding-small">
            <label> Assigned Area :</label>
            <input class="w3-input w3-border" type="text" name="assigned_area" placeholder="District/Location" value='<?php echo $assigned_area ?>'> 
          </div>
        </div>

        <div class="w3-row w3-container">
          <div class="w3-col m4 w3-padding-small">
            <label> User Type :</label>
            <select class="w3-select w3-border" id="usertype" name="usertype" >
            <option value="" <?php echo $selected1 ?>>Select</option>
            <option value="Admin" <?php echo $selected2 ?>>Admin</option>
            <option value="Technician" <?php echo $selected3 ?>>Technician</option>
          </select> 
          </div>
        </div>

        <div class="w3-row w3-container w3-padding-16">
          <div class="w3-col m4 w3-padding-small">
            <label> Username :</label>
            <input class="w3-input w3-border" type="text" name="username" required value='<?php echo $username ?>'>  
          </div>
        </div>

        <div class="w3-row w3-container">
          <div class="w3-col m4 w3-padding-small">
            <label> Password :</label>
            <input class="w3-input w3-border" type="text" name="password" required value='<?php echo $password ?>'>
          </div>
        </div>

        <div class="w3-row w3-container" style="padding-top: 32px">
          <div class="w3-col m2 w3-padding-small">
            <input class="w3-button w3-round w3-theme w3-hover-aqua w3-padding-large w3-block" type="submit" name="Add" value="Save">
          </div>   
  </form>
        <div class="w3-col m2 w3-padding-small">
            <button class="w3-button w3-round w3-theme w3-hover-aqua w3-padding-large w3-block" onclick="window.location='show_employee.php'">Cancel</button>
          </div>
        </div>

</div>





<script src="../../js/sidebar.js"></script>
</body>
</html>