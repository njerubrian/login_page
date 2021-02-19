


<?php
$fullname = $email = $phone = $dob = $password = $cpassword = $gender = "";

$fullnameerr= $emailerr = $phoneerr =  $doberr = $passworderr = $cpassworderr = $gendererr =  "";

//checks the records when the submit button is clicked.

if (isset($_POST["save"])) {

	// checks if the fullname field is empty

	if (empty($_POST["fullname"])) {

		$fullnameerr = "name required";
	}
	else{
		$fullname = test_input($_POST["fullname"]);

		// checks if the name only contains letters a-z and whitespaces
		if (!preg_match("/^[a-zA-Z-']*$/", $fullname)) {
		$fnameErr = "only leters a-z and white spaces";
		
	}

	}
	// checks if email filed is empty

	if (empty($_POST["email"])) {

		$emailerr = "email is required";

	}
	else{
		$email = test_input($_POST["email"]);
		// validates email format
		if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
	$emailErr = "invalid email format.";
}

		
		}
		// checks if the phone number is empty

		if (empty($_POST["phone"])) {
			$phoneerr = "please provide a phone number";
		}
		else{
			// validates phone
			$phone = test_input($_POST["phone"]);
			function validate_phone_number($phone)
{
     // Allow +, - and . in phone number
     $filtered_phone_number = filter_var($phone, FILTER_SANITIZE_NUMBER_INT);
     // Remove "-" from number
     $phone_to_check = str_replace("-", "", $filtered_phone_number);

     // Check the lenght of number
     // This can be customized if you want phone number from a specific country
     if (strlen($phone_to_check) < 10 || strlen($phone_to_check) > 14) {
        $phoneerr = "invalid phone number";
     } 
}
		}
		// prompts the user to provide date of birth

		if (empty($_POST["dob"])) {
			$doberr = "please provide dates of birth";

		}
		else{
			$dob = test_input($_POST["dob"]);
		}
		if (empty($_POST["password"])) {
			$passworderr = "please provide a password";
		
		}
		else{
			$password = test_input($_POST["password"]);
				 //password must be strong
			if(!preg_match("/^.*(?=.{8,})(?=.*[0-9])(?=.*[a-z])(?=.*[A-Z]).*$/", $_password)){
$passwordErr= ' Password must be at least 8 characters and must contain at least one lower case letter, one upper case letter and one digit';
}
			}
			if (empty($_POST["cpassword"])) {
	$cpasswordErr = "please confirm your password";
}
else{
	$cpassword = test_input($_POST["cpassword"]);

	if ($cpassword != $password) {
		$cpasswordErr = "password does not match please try again";
	}
}
		
if (empty($_POST["gender"])) {
	$gendererr = "please select your gender";
}
else{
	$gendererr = test_input($_POST["gender"]);
}
	
}

function test_input($data){
	$data = trim($data);
	$data = stripcslashes($data);
	$data = htmlspecialchars($data);
	return $data;
}












?>
<html>
<head>




	<title></title>
	

<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<body class="body">


	<div class="flex-container">
		<div class = "header">
			<h1>MMUST RUGBY FAN PAGE</h1>
			<div class="buttons">
		<a href="login.php">	<button class= "btn btn primary">login</button> </a>
		</div>
		<div class="buttons">
			<a href="register.php"><button class="btn btn primary">register</button> </a>
		</div>
		</div>
		<br>


			
		
		<form class="mango" action="register.php" method="post">


			<div class="header">
			<h3>please fill the form below as required</h3>
		</div>
		<br>
		<p> <span class = "error"><small class = "error">* required fields</small></span></p>
			
			<div class="row form-group">
				<label for="fullname">full name:</label>
				<input type="text" name="fullname" placeholder="enter your name" class="form-comtrol">
				 <span class="error">* <?php echo $fullnameerr; ?></span>
			</div>
			<div class= "row form-group">
				<label for="email">Email: </label>
				<input type="email" name="email" placeholder="enter yoour email adress"  class="form-comtrol">

			 <span class="error">* <?php echo $emailerr; ?></span>

			</div>
			<div class = "rowform-group">
				<label for="phone">phone: </label>
				<input type="tel" name="phone" placeholder="enter your phone number"  class="form-comtrol">

				 <span class="error">* <?php echo $phoneerr; ?></span>
			</div>
				<div class="row form-group">
					<label for="D.O.B">Date of birth: </label>
					<input type="date" name="dob" placeholder="enter your date of birth"  class="form-comtrol">

					 <span class="error">* <?php echo $doberr; ?></span>
				</div>
				<div>
					<label for ="password"> password:</label>
					<input type="password" name="password" placeholder="enter password">
					 <span class="error">* <?php echo $passworderr; ?></span>
				</div>
				<div>
					<label for ="cpassword">confirm password </label>
					<input type="password" name="cpassword" placeholder="confirm password">

					 <span class="error">* <?php echo $cpassworderr; ?></span>


					</div>


					<div class = "gender">
					<input type="radio" name="gender">
					<label for = "male">male</label>

					<input type="radio" name="gender">
					<label for = "female"> female</label>
						
						 <span class="error">* <?php echo $gendererr; ?></span>
					</div>
			




				<div class="row form-group button">
					<div class="col">
						<input class =" btn btn-primary "type="submit" name="save" class="form-comtrol">
						
					</div>

					
				
				<div class="col">
					<input type="reset" name="warn" value="reset" class="btn btn-warning form-group" class="form-comtrol">

				</div>
			</div>
				
			</div>
		</form>



</div>
</body>
</html>

