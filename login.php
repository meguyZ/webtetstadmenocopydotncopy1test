<?php include('include/connect.php');?>
<?php include('include/checklogin.php');?>
<!DOCTYPE html>
<html lang="en">
<?php include('include/head.php');?>
</head>
	<div class="limiter">
		<div class="container-login100" style="background-color:rgba(15,15,15,1);">
			<div class="wrap-login100 p-t-90 p-b-30">

				<form class="login100-form validate-form" ACTION="login.php" name="loginform" method="POST">
					<span class="login100-form-title p-b-40" style="color:whitesmoke;">
						Login
					</span>


					<div class="wrap-input100 validate-input m-b-16" data-validate="Please enter username">
						<input class="input100" type="text" name="user" placeholder="Username">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input m-b-20" data-validate = "Please enter password">
						<span class="btn-show-pass">
							<i class="fa fa fa-eye"></i>
						</span>
						<input class="input100" type="password" name="pass" placeholder="Password">
						<span class="focus-input100"></span>
					</div>

					<div class="container-login100-form-btn" style="background-color:transparent;">
						<button class="login100-form-btn" type="submit" name="submit" style="background-color:transparent;">
							Login
						</button>
					</div>

					<div class="flex-col-c p-t-224" style="background-color:transparent;">
						<span class="txt2 p-b-10" style="background-color:transparent;">
							Don’t have an account?
						</span>

						<a href="register.php" class="txt3 bo1 hov1" style="color:whitesmoke;">
							Sign Up now
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
