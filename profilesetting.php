<?php 
    include("include/user_record.php");
    include('include/head.php');
    include('include/connect.php');
    include('include/checkprofile.php');
    include('include/checkimageprofile.php');
    $mytopicuser = $user_record['u_name'];
    $mytopicSQL = "SELECT * FROM allthink WHERE twhowrite = '".$mytopicuser."'";
    $mytopic_query = mysqli_query($conn,$mytopicSQL);
    $mytopic_record = mysqli_fetch_array($mytopic_query);
?>
</head>
<body>
<header id="header-wrap">
<?php 
if($user_record['level'] == 7){
    include('include/nav_admin.php'); 
    $rank = "ADMIN";
}elseif($user_record['level'] == 0){
    include('include/nav_member.php'); 
    $rank = "MEMBER";
}
?>
</header>
<body>

<header id="header-wrap">


<div id="content" class="section-padding" > 
<?php include('include/asideprofile.php'); ?>

<div class="col-sm-12 col-md-8 col-lg-9">
<div class="page-content">
<div class="inner-box">
<div class="dashboard-box" style="background-color:rgba(15,15,15,0.9); color:whitesmoke;">
<h2 class="dashbord-title" style="color:whitesmoke;">PROFILE SETTINGS</h2>
</div>
<div class="dashboard-wrapper">
<div class="dashboard-sections">
<div class="row">
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
<div class="dashboardbox">
<h1>USERNAME </h1>
<h4>: <?php echo $user_record['u_name'];?></h4>
<h1>NICKNAME </h1>
<h4>: <?php echo $user_record['u_nickname'];?></h4>
<h1>EMAIL </h1>
<h4>: <?php echo $user_record['e_mail'];?></h4>
<h1>USID </h1>
<h4>: <?php echo $user_record['U_SID'];?></h4>
</div>
</div>
</div>
</div>
</div>
</div>

<div class="dashboard-box" style="background-color:rgba(15,15,15,0.9); color:whitesmoke;">
<h2 class="dashbord-title" style="color:whitesmoke;">CHANGE NICKNAME</h2>
</div>
<div class="dashboard-wrapper">
<div class="dashboard-sections">
<div class="row">
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
<div class="dashboardbox">
<form class="" ACTION="profilesetting.php" name="profileform" method="POST">
					<div class="wrap-input100 validate-input m-b-16">
						<input class="input100" style = "background-color:rgba(15,15,15,0.9); color:whitesmoke;" type="text" name="nickname" placeholder="<?php echo $user_record['u_nickname']; ?>">
						<span class="focus-input100"></span>
					</div>
					<div class="container-login100-form-btn" style="background-color:transparent;">
						<button class="login100-form-btn" type="submit" name="submit" style="background-color:transparent;">
							SAVE
						</button>
					</div>

				

				</form>
</div>
</div>
</div>
</div>
</div>

<div class="dashboard-box" style="background-color:rgba(15,15,15,0.9); color:whitesmoke;">
<h2 class="dashbord-title" style="color:whitesmoke;">UPDATE YOUR PROFILE</h2>
</div>
<div class="dashboard-wrapper">
<div class="dashboard-sections">
<div class="row">
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
<div class="dashboardbox">
<form class="" ACTION="profilesetting.php" name="imageform" method="POST">
					<div class="wrap-input100 validate-input m-b-16">
						<input class="input100" style = "background-color:rgba(15,15,15,0.9); color:whitesmoke;" type="text" name="urlimage" placeholder="<?php echo $user_record['user_img']; ?>">
						<span class="focus-input100"></span>
					</div>
					<div class="container-login100-form-btn" style="background-color:transparent;">
						<button class="login100-form-btn" type="changeimage" name="changeimage" style="background-color:transparent;">
							SAVE
						</button>
					</div>

				

				</form>
</div>
</div>
</div>
</div>
</div>

</div>
</div>
</div>


</div>



</div>




<footer>



</footer>
<div id="preloader">
<div class="loader" id="loader-1"></div>
</div>


<script data-cfasync="false" src="cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="assets/js/jquery-min.js"></script>
<script src="assets/js/popper.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/jquery.counterup.min.js"></script>
<script src="assets/js/waypoints.min.js"></script>
<script src="assets/js/wow.js"></script>
<script src="assets/js/owl.carousel.min.js"></script>
<script src="assets/js/jquery.slicknav.js"></script>
<script src="assets/js/main.js"></script>
<script src="assets/js/form-validator.min.js"></script>
<script src="assets/js/contact-form-script.min.js"></script>
<script src="assets/js/summernote.js"></script>
</body>


</html>