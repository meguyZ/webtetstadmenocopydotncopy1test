<?php include('include/connect.php');?>
<?php include('include/head.php');?>
</head>
<body>
<header id="header-wrap">
<?php include('include/nav.php');?>
<?php include('include/search.php');?>

<?php 
      $mySQL = "SELECT *  FROM allthink WHERE tcansee = 1 ORDER BY tvote DESC LIMIT 3";
      $my_query = mysqli_query($conn,$mySQL);
      $my_record = mysqli_fetch_array($my_query);
      $totalmy_record = mysqli_num_rows($my_query);
  
      $strSQLweb = "SELECT *  FROM allthink WHERE tcansee = 1";
      $web_query = mysqli_query($conn,$strSQLweb);
      $web_record = mysqli_fetch_array($web_query);

?>
</header>



<section class="featured section-padding">
<div class="container">
<h1 class="section-title">TOP 3 TOPIC</h1>
<div class="row">

<?php if($totalmy_record == 0){ ?>
    <h1 style="text-align:center; color:black;">EMPTY</h1>
<?php 
  }else{
      do { 
?>
<div class="col-xs-6 col-sm-6 col-md-6 col-lg-4">
<div class="featured-box" style="width:100%;">
<figure>
<a href="#"><img class="img-fluid" style = "width:100%; background-size:cover; max-width:1920px; max-height:1080px;" src="<?= $my_record['timg']; ?>" alt=""></a>
</figure>
<div class="feature-content" style="width:100%;">
<h4 style="color:red;"><?php echo substr($my_record['ttopic'], 0, 16).'...';?></h4>
<p class="dsc"><?php echo substr($my_record['tcontent'], 0, 16).'...';?></p>
<div class="listing-bottom">
<p  style="color:red;">Category : 
<?php 
if ($my_record['tcate'] == 1){
  echo "JOB";
}elseif ($my_record['tcate'] == 2){
  echo "TRAVEL";
}elseif ($my_record['tcate'] == 3){
  echo "EDUCATION";
}elseif ($my_record['tcate'] == 9){
  echo "ANNOUNCE";
}
?>
</p>
<p  style="color:red;">Date : <?= $my_record['tdate']; ?></p>
<p  style="color:red;">Created by : <?= $my_record['twhonickname']; ?></p>
<p  style="color:red;">Voted : <?= $my_record['tvote']; ?></p>
<form class="login100-form validate-form" ACTION="guestreadpost.php" name="readform" method="POST">
<button class="btn btn-common" type="readpost" name="readpost" value = "<?= $my_record['id']; ?>"style="width: 100%; margin:1px; background-color:red;">Read</button>
</form>
</div>
</div>
</div>
</div>
<?php }while ($my_record = mysqli_fetch_array($my_query));} ?>


</div>
</div>
</section>









<?php include('include/footer.php');?>


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
