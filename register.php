<?php 
    $code = rand(10000,99999);
    include('include/connect.php');
    include('include/head.php');
?>

</head>
	<div class="limiter">
		<div class="container-login100" style="background-color:rgba(15,15,15,1);">
			<div class="wrap-login100 p-t-90 p-b-30">
				
				<form class="login100-form validate-form" ACTION="register.php" name="regisform" method="POST">
					<span class="login100-form-title p-b-40" style="color:whitesmoke;">
						REGISTER
					</span>


					<div class="wrap-input100 validate-input m-b-16" data-validate="Please enter username: example01">
						<input class="input100" type="text" name="username" placeholder="Username">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input m-b-20" data-validate = "Please enter password">
						<span class="btn-show-pass">
							<i class="fa fa fa-eye"></i>
						</span>
						<input class="input100" type="password" name="pass" placeholder="Password">
						<span class="focus-input100"></span>
					</div>

                    <div class="wrap-input100 validate-input m-b-20" data-validate = "Please Confirm password">
						<span class="btn-show-pass">
							<i class="fa fa fa-eye"></i>
						</span>
						<input class="input100" type="password" name="cpass" placeholder="Confirm Password">
						<span class="focus-input100"></span>
					</div>

                    <div class="wrap-input100 validate-input m-b-16" data-validate="Please enter email: example01@gmail.com">
						<input class="input100" type="text" name="mail" placeholder="Email">
						<span class="focus-input100"></span>
					</div>

                    <div class = "container" style="width:100%;">
                   <h1 style="color:red; text-align:center;"> <?= $code; ?> </h1><br>
                    <input type="hidden" name="answer" value="<?= $code; ?>" />
                    <input type="text" name="antibot" class="input100" placeholder="Please enter antibot code" pattern="([0-9]){5,}" maxlength="5" autocomplete="off" required />
                    </div> 
                    <br>

                 

					<div class="container-login100-form-btn" style="background-color:transparent;">
						<button class="login100-form-btn" type="submit" name="submit" value="click" style="background-color:transparent;">
							REGISTER
						</button>
					</div>

					<div class="flex-col-c p-t-224" style="background-color:transparent;">
                    <span class="txt2 p-b-10" style="background-color:transparent;">
							Already have ?
						</span>
						<a href="login.php" class="txt3 bo1 hov1" style="color:whitesmoke;">
							Sign In now
						</a>
					</div>

				</form>
			</div>
		</div>
	</div>


<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="js/main.js"></script>


</body>

</html>

<?php 
if(isset($_POST['submit']))
{
  if(empty($_POST['username'])){
    $title = 'เว้น Username ว่างไม่ได้!'; $text = 'กรุณากรอก Username!'; $delay = '3000';
    msg_waring($title,$text,$delay);
  }
  if(empty($_POST['pass'])){
    $title = 'เว้น Password ว่างไม่ได้!'; $text = 'กรุณากรอก Password!'; $delay = '3000';
    msg_waring($title,$text,$delay);
  }
  if(empty($_POST['mail'])){
    $title = 'เว้น E-mail ว่างไม่ได้!'; $text = 'กรุณากรอก E-mail!'; $delay = '3000';
    msg_waring($title,$text,$delay);
  }

  $name = $_POST['username'];
  $nickname = $name;
  $pass = $_POST['pass'];
  $cpass = $_POST['cpass'];
  $e_mail = $_POST['mail'];

  if($_POST['antibot'] == $_POST['answer']){
      
    if($pass != $cpass){
        $title = 'ยืนยันรหัสผ่าน ไม่ตรงกัน!'; $text = 'กรุณากรอก Password และ Confirm-Password ให้ตรงกัน!'; $delay = '3000';
        msg_error($title,$text,$delay);
    }else{

        $check = "SELECT * FROM user_profile WHERE u_name = '$name'";
        $result = mysqli_query($conn,$check);
        $num = mysqli_num_rows($result); 
        if($num > 0){
            $title = 'Username นี้มีผู้ใช้แล้ว!'; $text = 'กรุณาใช้ Username อื่น!'; $delay = '3000';
            msg_error($title,$text,$delay);
        }else{

            $check = "SELECT * FROM user_profile WHERE e_mail = '$e_mail'";
            $result = mysqli_query($conn,$check);
            $num = mysqli_num_rows($result);
            if($num > 0){
            $title = 'E-mail นี้มีผู้ใช้แล้ว!'; $text = 'กรุณาใช้ E-mail อื่น!'; $delay = '3000';
            msg_error($title,$text,$delay);
        }else{
            
            $U_SID = base64_encode(md5(base64_encode(md5($name,rand()))));
            $cypass= base64_encode($pass);
            $sql = "INSERT INTO user_profile ( u_name, u_nickname , p_word, e_mail, U_SID) VALUES ('$name','$nickname','$cypass','$e_mail','$U_SID')";
            $query = mysqli_query($conn,$sql); 

            $message = 'ผู้ใช้ : '.$name." ได้เป็นส่วนหนึ่งของ SYT แล้ว";
            $user = 'SYT | SYSTEM';
            $addtoSQL = "INSERT INTO `worldmessage`(`msgtext`, `whosend`) VALUES ('$message','$user')";
            $addtoSQL_query = mysqli_query($conn,$addtoSQL);

			      $title = 'สมัครสมาชิกสำเร็จ'; $text = 'กำลังเชื่อมต่อข้อมูล...'; $delay = '1000'; $link = 'login.php';
         	 msg_success($title,$text,$delay,$link);
            
            }
        }
    }
  }else{
    $title = 'ANTI BOT ไม่ถูกต้อง'; $text = 'กรุณากรอก ANTI BOT ให้ถูกต้อง!'; $delay = '1000';
    msg_error($title,$text,$delay);
  }
} 
?>