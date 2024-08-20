 <?php
$username=$_SESSION['username'];
?>
<!-- Navbar -->
<nav class="main-header navbar navbar-expand navbar-white navbar-light">
<!-- Left navbar links -->
<ul class="navbar-nav">
<li class="nav-item">
<a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
</li>
</ul>
<ul class="navbar-nav ml-auto">
	<img src="/qvision/images/quadsellogo.png" alt="Quadsel Systems Private Limited">
	</ul>
<ul class="navbar-nav ml-auto">
<li class="dropdown">
	<a class="dropdown-toggle" data-toggle="dropdown" href="#">
	<i class="fa fa-user fa-fw"></i>  
	<b style="color:#df8459;text-align:center;"><?php echo $username;?></b>
	<b class="caret"></b>
	</a>
	<a href="login/login.php"><ul class="dropdown-menu dropdown-user">
	<li><i class="fa fa-sign-out fa-fw"></i> Logout
	</li>
	</ul></a>
	</li>
</ul>
</nav>
<!-- /.navbar -->