<!DOCTYPE html>
<html>
<head>
	<title>login page.</title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</head>
<body class = "body">

<div class="flex-container">
		<div class = "header">
			<h1>MMUST RUGBY FAN LOGIN PAGE</h1>
		</div>
		<br>
		<div>
			<form class="mango" action="login.php" method="post">

				<div class= "row form-group">
				<label for="email">Email: </label>
				<input type="email" name="email" placeholder="enter yoour email adress"  class="form-comtrol">
			</div>
			
			
			
			<div>
					<label for ="password"> password:</label>
					<input type="password" name="password" placeholder="enter password">
				</div>
				<div>
				<button class="btn btn-success">login</button>
				</div>
				
			</div>

			</form>
			<div>
					<p> havent registered yet click the button below</p>
			
				</div>
			<a href="register.php"><button class="btn btn-warning">back to registration</button> </a>
			
</body>
</html>
