<?php
session_start();
include_once('connect_db.php');
if(isset($_SESSION['username'])){
$id=$_SESSION['admin_id'];
$user=$_SESSION['username'];
}else{
header("location:http://".$_SERVER['HTTP_HOST'].dirname($_SERVER['PHP_SELF'])."/index.php");
exit();
}
?>
<!DOCTYPE html>
<html>
<head>
<title><?php echo $user;?> - Pharmacy</title>
<link rel="stylesheet" type="text/css" href="style/mystyle.css">
<link rel="stylesheet" href="style/style.css" type="text/css" media="screen" /> 
<link rel="stylesheet" type="text/css" href="style/dashboard_styles.css"  media="screen" />
<script src="js/function.js" type="text/javascript"></script>
<style>
#left_column{
height: 470px;
}

</style>
</head>
<body>
<div id="content">
<div id="header">
<h1><a href="#"><img src="https://www.graphicsprings.com/filestorage/stencils/62eedfb5818a17fdb9581b1b9324a630.png?width=500&height=500"></a> Pharmacy</h1></div>
<div id="left_column">
<div id="button">
<ul>
			<li><a href="admin.php">Dashboard</a></li>
			<li><a href="admin_pharmacist.php">Pharmacist</a></li>
			<li><a href="admin_manager.php">Manager</a></li>
			<li><a href="admin_cashier.php">Cashier</a></li>
			<li><a href="logout.php">Logout</a></li>
		</ul>	
</div>
		</div>
<div id="main">
    
 <!-- Dashboard icons -->
            <div class="grid_7">
            	<a href="admin.php" class="dashboard-module">
                	<img src="https://help.classter.com/wp-content/uploads/2020/02/admin-icon.png" width="75" height="75" alt="edit" />
                	<span>Dashboard</span>
                </a>
                <a href="admin_pharmacist.php" class="dashboard-module">
                	<img src="https://www.pngitem.com/pimgs/m/399-3997570_pharmacist-pharmacist-icon-png-transparent-png.png"  width="75" height="75" alt="edit" />
                	<span>Pharmacist</span>
                </a>
                
                <a href="admin_manager.php" class="dashboard-module">
                	<img src="data:image/png;base64,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"  width="75" height="75" alt="edit" />
                	<span>Manager</span>
                </a>
                  
                <a href="admin_cashier.php" class="dashboard-module">
                	<img src="https://cdn.onlinewebfonts.com/svg/img_507209.png" width="75" height="75" alt="edit" />
                	<span>Cashier</span>
                </a>				  
			</div>
</div>
<div id="footer" align="Center"> Pharmacy Management 2021. Copyright All Rights Reserved</div>
</div>
</body>
</html>
