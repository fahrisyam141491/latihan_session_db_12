<?php 
	// login.php
	session_start();

	if (isset($_SESSION['message'])) {
		if ($_SESSION['message']!="") {
			echo"<span style='color:red'>".$_SESSION['message']."</span>";
			$_SESSION['message'] = "";
		}
	}

 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title>LOGIN FORM</title>
 	<link rel="stylesheet" type="text/css" href="style.css">
 </head>
 <body>
 	<div class="boday">
 	<h2 class="h2">LOGIN HERE</h2>
 	<form class="tabel" method="POST" action="ceklogin.php">
 		<table>
 			<tr>
 				<td><input class="usernem" type="text" name="username" class="username" placeholder="Username" required></td>
 			</tr>
 			<tr>
 				<td><input class="pw" type="password" name="password" placeholder="Password" required></td>
 			</tr>
 			<tr>
 				<td><p class="pepepepe">Forgot <a href="register.php" class="forgot">Username/Password?</a></p></td>
 			</tr>
 			<tr>
 				<td><button class="tomboll" type="submit" name="login">SIGN IN</button></td>
 			</tr>
 		</table>
 	</form>
 	<div class="reges">
 	<p>Don't have an account?</p>
 	<p><a href="register.php" class="sign-up">SIGN UP NOW</a></p>
 </div></div>
 </body>
 </html>