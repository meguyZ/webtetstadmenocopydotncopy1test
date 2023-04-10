<?php 
 include('include/user_record.php');
 include('include/head.php');
 include('include/connect.php');
  if(isset($_POST['readpost'])){
    $my_id = $_POST['readpost'];

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
<h2 class="dashbord-title" style="color:whitesmoke;">READ POST | <?php echo $searchpostfromID_record['ttopic']; ?></h2>
</div>
<div class="dashboard-wrapper">
<div class="dashboard-sections">
<div class="row">
<div class = "col-sm-12" style="display:block; text-align:center; width:100%; word-wrap:break-word;">
<h1><?php echo $searchpostfromID_record['ttopic']; ?></h1><br>
<h3>WRITER : <?php echo $searchpostfromID_record['twhowrite']; ?></h3>
<hr>
<figure>
<a href="#"><img class="img-fluid" style = "width:30%;" src="<?= $searchpostfromID_record['timg']; ?>" alt=""></a>
</figure>
<br>
<div class = "container" style="display:block; text-align:center; word-wrap:break-word;">
<p><?= $searchpostfromID_record['tcontent']; ?></p>
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