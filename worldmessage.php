<?php 
 include('include/user_record.php');
 include('include/head.php');
 include('include/connect.php');
  
 
    $allmessageSQL = "SELECT * FROM worldmessage ORDER BY id DESC";
    $allmessage_query = mysqli_query($conn,$allmessageSQL);
    $allmessage_record = mysqli_fetch_array($allmessage_query);
   
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
<h2 class="dashbord-title" style="color:whitesmoke;">OPEN CHAT | แชทรวม</h2>
</div>
<div class="dashboard-wrapper">
<div class="dashboard-sections">
<div class="row">
<form action="worldmessage.php" method="POST"><br>
<input class="input100" style = "width:80%; color:black; border-bottom:1px solid black; border-radius:0px;" type="text" name="message" placeholder="message">
<button type="sendmessage" name="sendmessage" style="float:right; width:20%; background-color:rgba(15,15,15,0.9); color:whitesmoke; top:-60px;  height:60px; position: relative;">Send</button>
</form>
<div class = "col-sm-12">
<div id="link_wrapper">

</div>
</div>
<script>
function loadXMLDoc() {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200){
      document.getElementById("link_wrapper").innerHTML =
      this.responseText;
    }
  };
  xhttp.open("GET","include/realtimechat.php",true);
  xhttp.send();
}
setInterval(function(){
  loadXMLDoc();
},1000)

window.onload = loadXMLDoc;
</script>
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

<?php 
  if(isset($_POST['sendmessage'])){

    $user = $user_record['u_nickname'];
    $message = $_POST['message'];
    $addtoSQL = "INSERT INTO `worldmessage`(`msgtext`, `whosend`) VALUES ('$message','$user')";
    $addtoSQL_query = mysqli_query($conn,$addtoSQL);

  }
?>