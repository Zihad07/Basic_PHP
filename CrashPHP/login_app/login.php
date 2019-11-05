<?php 	

	require_once("db_config.php");
	require_once("function.php");

	if(isset($_POST['submit'])){
		// echo "We get INformation";
		$username = sanitize($_POST['username'])??'';
		$password = sanitize($_POST['password'])??'';

		$hash_password = password_hash($password,PASSWORD_BCRYPT);

		$sql = "INSERT INTO users(username,password) ";
		$sql .= "VALUES ('{$username}','{$hash_password}')";

		$result = mysqli_query($connection,$sql);

		if(!$result){
			die("Query FAILD".mysqli_error($connection));
		}
	}



?>

<!doctype html>
<html lang="en">

<head>
	<title>Login app</title>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
		integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>

	<div class="container">
		<div class="row">
			<div class="col-md-4 mx-auto mt-4">
				<div class="card">
					<div class="card-body">
						<form action="login.php" method="post">
							<div class="form-group">
								<label for="username">Username</label>
								<input type="text" class="form-control" name="username" id="username"
									aria-describedby="helpId" placeholder="Username">
							</div>
							<div class="form-group">
								<label for="password">Password</label>
								<input type="password" class="form-control" name="password" id="password"
									aria-describedby="helpId" placeholder="Password">
							</div>

							<input type="submit" value="Submit" name="submit" class="btn btn-outline-primary">
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
		integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
	</script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
		integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
	</script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
		integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
	</script>
</body>

</html>