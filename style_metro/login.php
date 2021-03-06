<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Login</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="../css/bootstrap.css" media="all" title="Bootstrap"/>
<link rel="stylesheet" type="text/css" href="../css/eis_framework.css" media="all" title="Bootstrap"/>
<script type="text/javascript" src="../js/jquery-1.10.2.js"></script>
<script type="text/javascript" src="../js/jquery-ui.js"></script>
<script type="text/javascript" src="../js/mega_menu.js"></script>
</head>

<body id="login_metro" class="aside_nav_layout">
<div id="metro_style" class="reset">
		<div id="login_header_wrap_metro" class="fluid_wrap">
			<!--<a href="#" id="logotipo">Logotipo Metro</a>-->
		</div>

		<div id="login_metro_wrap" class="fluid_wrap">
			<div id="login_container" class="container">
				<div id="form_container">
					<div class="left_side">
						<h2>Login</h2> <span>Login Icon</span>
					</div><!--end left_side-->
					<div class="right_side">
						<form>
							<ul>
								<li>
									<label for="user_name">User Name:</label>
									<input type="text" id="user_name" name="user_name" required="true"/>
									<label class="textfield_error">User name is required</label>
								</li>

								<li>
									<label for="user_password">Password:</label>
									<input type="password" id="user_password" name="user_password" required="true"/>
									<label class="textfield_error">Password is required</label>
								</li>

								<li class="rememberme">
									<input type="checkbox" id="remenberme" name="remenberme"/>
									<label for="remenberme">Remember me next time</label>
								</li>

								<li><a href="#" class="lost_password">Lost Password?</a></li>

								<li><input type="submit" id="" class="dark_blue_metro_button metro_button"/></li>
								
								<li><p class="error_notify_metro">Please fix the following input errors: Report Type cannot be blank.</p></li>	
							</ul>
						</form>
					</div><!--end right_side-->
				</div>
			</div>
		</div>

		<div id="footer_login_metro" class="fluid_wrap">
			<!--<a href="http://www.eisdr.com">Powered by: Excellent Integrity Solutions (EIS)</a>-->
			<div id="footer_login_container" class="container"> </div>
		</div>
	</div><!--end metro_style-->
</body>
</html>