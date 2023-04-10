<?php 
    include("include/user_record.php");
    include('include/head.php');

    $na = $user_record['u_name'];
    $mySQL = "SELECT * FROM allthink WHERE tcansee = 1 AND twhowrite = '".$na."'";
    $my_query = mysqli_query($conn,$mySQL);
    $my_record = mysqli_fetch_array($my_query);
    $totalmy_record = mysqli_num_rows($my_query);

?>
</head>
<body>
<header id="header-wrap">
<?php 
if($user_record['level'] == 7){
    include('include/nav_admin.php'); 
}elseif($user_record['level'] == 0){
    include('include/nav_member.php'); 
}else{
    include('include/nav.php'); 
}
?>
</header>

<section class="featured section-padding">
<div class="container">
<h1 class="section-title">MY TOPIC</h1>
<a href="#" class="btn btn-common" style="width: 100%; text-align:center; margin:1px; background-color:#e74c3c;" data-toggle="modal" data-target="#myModal">ADD TOPIC</a>


<div class="row">

<?php if($totalmy_record == 0){ ?>
    <h1 style="text-align:center; color:black;">EMPTY</h1>
    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<?php 
  }else{
      do { 
?>
<div class="col-xs-6 col-sm-6 col-md-6 col-lg-4">
<div class="featured-box" style="width:100%;">
<figure>
<a href="#"><img class="img-fluid" style = "width:100%;" src="<?= $my_record['timg']; ?>" alt=""></a>
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
<form class="login100-form validate-form" ACTION="readpost.php" name="readform" method="POST">
<button class="btn btn-common" type="readpost" name="readpost" value = "<?= $my_record['id']; ?>"style="width: 100%; margin:1px; background-color:red;">Read</button>
</form>
<form class="login100-form validate-form" ACTION="editpost.php" name="readform" method="POST">
<button class="btn btn-common" type="readpost" name="editpost" value = "<?= $my_record['id']; ?>"style="width: 100%; margin:1px; background-color:red;">Edit</button>
</form>
<form class="login100-form validate-form" ACTION="mytopic.php" name="readform" method="POST">
<button class="btn btn-common" type="readpost" name="deletepost" value = "<?= $my_record['id']; ?>"style="width: 100%; margin:1px; background-color:red;">Delete</button>
</form>
</div>
</div>
</div>
</div>
<?php }while ($my_record = mysqli_fetch_array($my_query));} ?>


</div>
</div>
</section>





<br><br><br><br><?php include('include/footer.php');?>


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
<!-- Modal -->
<form class="" ACTION="mytopic.php" name="newtopic" method="POST">
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">NEW TOPIC</h4>
      </div>
      <div class="modal-body">
        <div class="wrap-input100 validate-input m-b-16">
        <h3> IMAGE LINK </h3> <br>
		<input class="input100" style = "background-color:rgba(15,15,15,0.9); color:whitesmoke;" type="text" name="imagelink" placeholder="IMAGE LINK">
		<span class="focus-input100"></span>
		</div>
        <div class="wrap-input100 validate-input m-b-16">
        <h3> TOPIC </h3> <br>
		<input class="input100" style = "background-color:rgba(15,15,15,0.9); color:whitesmoke;" type="text" name="topic" placeholder="TOPIC">
		<span class="focus-input100"></span>
		</div>
        <div class="wrap-input100 validate-input m-b-16">
        <h3> MESSAGE </h3> <br>
		<textarea name="message" style="width:100%; height:200px; background-color:rgba(15,15,15,0.9); border-radius:20px; color:whitesmoke;">รายละเอียด</textarea>
		<span class="focus-input100"></span>
		</div>
        <div class="wrap-input100 validate-input m-b-16">
        <h3> CATEGORY </h3> <br>
		<select name="type" style="width:100%;">
        <option value="1" <?php if($my_record['tcate'] == 1){echo 'selected';} ?>>JOB</option>
        <option value="2" <?php if($my_record['tcate'] == 2){echo 'selected';} ?>>TRAVEL</option>
        <option value="3" <?php if($my_record['tcate'] == 3){echo 'selected';} ?>>EDUCATION</option>
        </select><br/>
		<span class="focus-input100"></span>
		</div>
      </div>
      <div class="modal-footer">
      <button class="login100-form-btn" type="addtopic" name="addtopic" style="width:100%;">
							Add
						</button><br>
        <button type="button" class="login100-form-btn" style="width:100%;" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
</form>

<?php 
  if(isset($_POST['deletepost'])){
    $my_id = $_POST['deletepost'];

    $deletefromIDSQL = "UPDATE `allthink` SET `tcansee`= 0 WHERE id = $my_id";
    $deletefromID_query = mysqli_query($conn,$deletefromIDSQL);

    $title = 'ลบสำเร็จ'; $text = 'กำลังเชื่อมต่อข้อมูล...'; $delay = '3000'; $link = 'mytopic.php';
    msg_success($title,$text,$delay,$link);
  }
?>

<?php 
  if(isset($_POST['addtopic'])){
    if(empty($_POST['imagelink'])){
        $title = 'เว้น imagelink ว่างไม่ได้!'; $text = 'กรุณากรอก imagelink!'; $delay = '3000';
        msg_waring($title,$text,$delay);
      }
      if(empty($_POST['topic'])){
        $title = 'เว้น topic ว่างไม่ได้!'; $text = 'กรุณากรอก topic!'; $delay = '3000';
        msg_waring($title,$text,$delay);
      }
      if(empty($_POST['message'])){
        $title = 'เว้น message ว่างไม่ได้!'; $text = 'กรุณากรอก message!'; $delay = '3000';
        msg_waring($title,$text,$delay);
      }
    $topic = $_POST['topic'];
    $message = $_POST['message'];
    $whowritename = $user_record['u_name'];
    $whowritenickname = $user_record['u_nickname'];
    $tcansee = 1;
    $tvote = 0;
    $category = $_POST['type'];
    $timg = $_POST['imagelink'];
    $date = date("Y/m/d");
    $sql="INSERT INTO `allthink`(`ttopic`, `tcontent`, `twhowrite`, `twhonickname`, `tcansee`, `tdate`, `tvote`, `timg`, `tcate`) VALUES ('$topic','$message','$whowritename','$whowritenickname','$tcansee','$date','$tvote','$timg','$category')";
    $result = mysqli_query($conn,$sql);

    $user = $user_record['u_name'];
    $oldcreate = $user_record['created'];
    $pluscreate = $oldcreate + 1;
    $updatecreated = "UPDATE `user_profile` SET `created` = '$pluscreate' WHERE `u_name` = '$user'";
    $update_query = mysqli_query($conn,$updatecreated);

    $title = 'สร้างหัวข้อสำเร็จ'; $text = 'กำลังเชื่อมต่อข้อมูล...'.$whowritename;  $delay = '3000';  $link = 'mytopic.php';
    msg_success($title,$text,$delay,$link);
          

  }
?>