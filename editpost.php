<?php 
 include('include/user_record.php');
 include('include/head.php');
 include('include/connect.php');
 session_start();
  if(isset($_POST['editpost'])){
    $my_id = $_POST['editpost'];
    $_SESSION['id'] = $my_id;
    $searchpostfromIDSQL = "SELECT * FROM allthink WHERE id = '".$my_id."' ";
    $searchpostfromID_query = mysqli_query($conn,$searchpostfromIDSQL);
    $searchpostfromID_record = mysqli_fetch_array($searchpostfromID_query);

  }
?>
</head>
<body>
<header id="header-wrap">
<?php 
if($user_record['level'] == 7){
    include('include/nav_admin.php'); 
}elseif($user_record['level'] == 0){
    include('include/nav_member.php'); 
}
?>
</header>
<body>

<header id="header-wrap">


<div id="content" class="section-padding" > 

<div class="col-sm-12 col-md-12 col-lg-12">
<div class="page-content">
<div class="inner-box">
<div class="dashboard-box" style="background-color:rgba(15,15,15,0.9); color:whitesmoke;">
<h2 class="dashbord-title" style="color:whitesmoke;">EDIT POST</h2>
</div>
<div class="dashboard-wrapper">
<div class="dashboard-sections">
<div class="row">
<div class = "col-sm-12" style="display:block; text-align:center; width:100%; word-wrap:break-word;">

<form class="" ACTION="savepost.php" name="edittopic" method="POST">
<h3>EDIT POST :</h3><br>
<input style = "color:black; width:100%; border-bottom:1px solid black; text-align:center; font-weight:bolder; font-size:28px;" type="text" name="topic" placeholder="TOPIC">
<br>
<input style = "color:black; width:100%; border-bottom:1px solid black; text-align:center; font-weight:bolder; font-size:28px;" type="textarea" name="content" placeholder="TEXT">
<br>
<input style = "color:black; width:100%; border-bottom:1px solid black; text-align:center; font-weight:bolder; font-size:28px;" type="text" name="img" placeholder="IMG">
<br><br>
<select name="type" style="width:150px;">
<option value="1" <?php if($searchpostfromID_record['tcate'] == 1){echo 'selected';} ?>>JOB</option>
<option value="2" <?php if($searchpostfromID_record['tcate'] == 2){echo 'selected';} ?>>TRAVEL</option>
<option value="3" <?php if($searchpostfromID_record['tcate'] == 3){echo 'selected';} ?>>EDUCATION</option>
</select><br/><br>
<button class="btn btn-common" type="savechange" name="savechange" style="width: 100%; margin:1px; background-color:green;">SAVE</button>
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

