<?php
	session_start();
	if(!isset($_SESSION['access_token'])){
		header('Location: login.php');
		exit();
	}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Welcome</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
	<div class="container" style="margin-top: 100px;">
		<div class="row">
			<div class="col-md-3">
				<img style="width: 80%;" src="<?php echo $_SESSION['userData']['picture']['url'];?>">
			</div>
			<div class="col-md-9" align="center">
				<table class="table table-hover table-bordered">
					<tbody>
						<tr>
							<td>ID</td>
							<td><?php echo $_SESSION['userData']['id']; ?></td>
						</tr>
						<tr>
							<td>First Name</td>
							<td><?php echo $_SESSION['userData']['first_name']; ?></td>
						</tr>
						<tr>
							<td>Last Name</td>
							<td><?php echo $_SESSION['userData']['last_name']; ?></td>
						</tr>
						<tr>
							<td>Email</td>
							<td><?php echo $_SESSION['userData']['email']; ?></td>
						</tr>
					</tbody>
				</table>
				<a href="/facebooklogin/logout.php" class="btn btn-danger">Log Out</a>
			</div>
		</div>
	</div>
</body>
</html>