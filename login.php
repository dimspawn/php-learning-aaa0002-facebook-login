<?php 
	require_once 'config.php';

	if(isset($_SESSION['access_token'])){
		header('Location: index.php');
		exit();
	}

	$redirectURL = 'http://localhost/facebooklogin/fb-callback.php';
	$permissions = ['email'];
	$loginURL = $helper->getLoginUrl($redirectURL, $permissions);
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Login with Facebook</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
	<div class="container" style="margin-top: 100px;">
		<div class="row justify-content-center">
			<div class="col-md-6 col-offset-3" align="center">
				<form>
					<input type="email" name="email" class="form-control" placeholder="Email..."><br>
					<input type="password" name="password" class="form-control" placeholder="Password..."><br>
					<input type="submit" value="Log In" class="btn btn-primary">
					<input type="button" onclick="window.location = '<?= $loginURL; ?>';" value="Log In with Facebook" class="btn btn-primary">
				</form>
			</div>
		</div>
	</div>
</body>
</html>