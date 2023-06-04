<?php
include_once 'config/config.php';
include_once 'classes/class.user.php';

$user = new User();
if($user->get_session()){
	header("location: index.php");
}
if(isset($_REQUEST['submit'])){
	extract($_REQUEST);
	$login = $user->check_login($useremail,$password);
	if($login){
		header("location: index.php");
	}else{
		?>
        <div id='error_notif'>Wrong email or password.</div>
        <?php
	}
	
}
?>
<!DOCTYPE html>
<html>
	
<head>
    <title>RUBY'S BREAD AND PASTRIES HOUSE</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Assistant&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/custom.css?<?php echo time();?>">
</head>
<body>
<div>

	<p?nbsp>

	<div id="header"></div>
	<div id="logo"></div>

	<div id="login-block">
		<h3>LOGIN</h3>
		<form method="POST" action="" name="login">
		<div>
			<input type="email" class="input" required name="useremail" placeholder="Enter email"/>
		</div>
		<div>
			<input type="password" class="input" required name="password" placeholder="Enter password"/>
		</div>
		<div>
			<input type="submit" name="submit" value="Login"/>
		</div>
		</form>
	</div>
</div>
</body>
</html>