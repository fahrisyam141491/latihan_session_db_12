<?php 
session_start();

if(isset($_SESSION['message'])) {
	if($_SESSION['message']!="") {
		echo "<span style ='color:red'>".$_SESSION['message']."</span>";
		$_SESSION['message'] = "";
	}
}

?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title>REGISTER FORM</title>
 	<link rel="stylesheet" type="text/css" href="stylereg.css">
 </head>
 <body>
 	<div class="badiy">
 	<h2 class="ha2">REGISTER HERE</h2>
 	<form method="POST" class="tebel" action="cekregister.php">
 		<table>
 			<tr>
 				<td class="tede1">Username</td>
 			</tr>
 			<tr>
 				<td><input type="text" name="username" placeholder="Username" class="uname" required></td>
 			</tr>
 			<tr>
 				<td class="tede2">Password</td>
 			</tr>
 			<tr>	
 				<td><input type="password" name="password" placeholder="Password" class="passw" required></td>
 			</tr>
 			<tr>
 				<td><button class="tumbol" type="submit" name="register">SIGN UP</button></td>
 			</tr>
 		</table>
 	</form>
 	<div class="bawah">
 		<p>Already have an account?</p>
 		<p><a href="login.php" class="login-up">SIGN IN NOW</a></p>
 	</div>
 	</div>
 </body>
 </html>