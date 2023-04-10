<?php 
    include("include/user_record.php");
    include('include/head.php');
    include('include/connect.php');

    $uservoted = $user_record['u_name'];
    $uservotedSQL = "SELECT * FROM user_voted WHERE user = '".$uservoted."' ORDER BY id DESC";
    $uservoted_query = mysqli_query($conn,$uservotedSQL);
    $uservoted_record = mysqli_fetch_array($uservoted_query);
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
<h2 class="dashbord-title" style="color:whitesmoke;">Dashboard</h2>
</div>
<div class="dashboard-wrapper">
<div class="dashboard-sections">
<div class="row">
<table class="table table-responsive dashboardtable tablemyads">
<thead>
<tr>
<th style="text-align:center;">TOPIC</th>
<th style="text-align:center;">STATUS</th>

</tr>
</thead>

<?php if($uservoted_record == 0){ ?>
    <td style="text-align:center;">EMPTY</td>
    <td style="text-align:center;">EMPTY</td>
<?php 
  }else{
   do { ?>
<tbody>
<td style="text-align:center;">
<?php

$selectvote = $uservoted_record['idvote']; 
$selectvoteSQL = "SELECT * FROM allthink WHERE id = '".$selectvote."'";
$selectvote_query = mysqli_query($conn,$selectvoteSQL);
$selectvote_record = mysqli_fetch_array($selectvote_query);

echo $selectvote_record['ttopic'];

?>
</td>

<td style="text-align:center;">
<?php 
    if ($uservoted_record['status'] == 1){
        echo 'VOTED';
    }else{
        echo 'ERROR';
    }
?>
</td>
<?php }while ($uservoted_record = mysqli_fetch_array($uservoted_query));}?>
</tbody>
</table>
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