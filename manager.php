<?php
session_start();
include_once('connect_db.php');
if(isset($_SESSION['username'])){
$id=$_SESSION['manager_id'];
$fname=$_SESSION['first_name'];
$lname=$_SESSION['last_name'];
$sid=$_SESSION['staff_id'];
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
			<li><a href="manager.php">Dashboard</a></li>
			<li><a href="view.php">View Users</a></li>
			<li><a href="view_prescription.php">View Prescription</a></li>
			<li><a href="stock.php">Manage Stock</a></li>
			<li><a href="logout.php">Logout</a></li>
		</ul>	
</div>
</div>
<div id="main">
<!-- Dashboard icons -->
            <div class="grid_7">
            	<a href="manager.php" class="dashboard-module">
                	<img src="https://cdn3.iconfinder.com/data/icons/user-group-black/100/user-document-512.png" width="100" height="100" alt="edit" />
                	<span>Dashboard</span>
                </a>
				<a href="view.php" class="dashboard-module">
                	<img src="https://cdn3.iconfinder.com/data/icons/kripto-black/128/kripto-group-b-512.png"  width="100" height="100" alt="edit" />
                	<span>View Users</span>
                </a>
               	<a href="#" class="dashboard-module">
                	<img src="https://cdn.onlinewebfonts.com/svg/img_461192.png"  width="100" height="100" alt="edit" />
                	<span>View Invoices</span>
                </a>
				<a href="view_prescription.php" class="dashboard-module">
                	<img src="https://d338t8kmirgyke.cloudfront.net/icons/icon_pngs/000/006/056/original/medical-prescription.png" width="100" height="100" alt="edit" />
                	<span>View Prescription</span>
				</a>
				<a href="stock.php" class="dashboard-module">
                	<img src="https://static.thenounproject.com/png/7401-200.png" width="100" height="100" alt="edit" />
                	<span>Manage Stock</span>
                </a>
        </div>
</div>
<div id="footer" align="Center"> Pharmacy Management 2021. Copyright All Rights Reserved</div>
</div>
</body>
</html>
