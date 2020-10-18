<!DOCTYPE html>
<html>
 <head>

<title>BWK</title>
<style>
body {
  background-image: url('navitaslogo.jpg');
  background-repeat: no-repeat;
  background-size: 50%;
  background-attachment: fixed;
  background-position: center;
}
input[type=text] {
  width: 100%;
  padding: 12px 20px;
  margin: 15px 0;
  box-sizing: border-box;
}
input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 15px 0;
  box-sizing: border-box;
}
</style>
<meta charset="utf-8" />
<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="css/login.css" />
<script src="js/jquery.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>

<script>
	$(document).ready(function() {
		//打开会员登录
		$("#Login_start_").click(function() {
			$("#regist_container").hide();
			$("#_close").show();
			$("#_start").animate({
				left: '350px',
				height: '400px',
				width: '400px'
			}, 500, function() {
				$("#login_container").show(500);
				$("#_close").animate({
					height: '40px',
					width: '40px'
				}, 500);
			});
		});

		//关闭
		$("#_close").click(function() {

			$("#_close").animate({
				height: '0px',
				width: '0px'
			}, 500, function() {
				$("#_close").hide(500);
				$("#login_container").hide(500);
				$("#regist_container").hide(500);
				$("#_start").animate({
					left: '0px',
					height: '0px',
					width: '0px'
				}, 500);
			});
		});

		//去 登录
		$("#toLogin").click(function(){
			$("#regist_container").hide(500);
			$("#login_container").show(500);
		});
	});
</script>
 </head>

 <body>

<center>
<a id="Login_start_" class="btn btn-danger"
style=
"width:150px;height:60px;border-radius: 10;color:#F8F8FF;background-color:#07B441;border-color:#07B441;text-align: center; font-size: 30px">Login</a>
<a id="visitor" class="btn btn-danger"
style=
"width:250px;height:60px;border-radius: 10;color:#F8F8FF;background-color:#07B441;border-color:#07B441;text-align: center;font-size: 30px" href="level1.php">Map Direction</a>
</center>
 <div id='_start'>
	<div id='_close' style="display: none;">
		<span class="glyphicon glyphicon-remove"></span>
	</div>
	<br />
	<!--登录框-->
	<div id="login_container">
		<div id="lab1">
			<span id="lab_login" style="color:#5D6D7E">User Login</span>

		</div>
		<div style="width:330px;">
			<span id="lab_type1" style="color:#ABB2B9">Account Login</span>
		</div>
		<div id="form_container1">
			<form action="logincheck.php" method="post">
                        <input type="text" class="form-control" name="userid" placeholder="Please enter ID" maxLength="12"/>

                        <input type="password" class="form-control" name="userpwd" placeholder="Please enter Password" maxLength="10"/>
                        <br/>
                        <input type="submit" class="form-control" name="submit" value="login"
                        style="background-color: #07B441; color: white; border-radius: 10; font-size: 18px;width:150px;height:40px"/>
			</form>
		</div>

	</div>

</div>

 </body>
</html>
