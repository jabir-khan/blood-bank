<?php	
	// variable declaration
	$username = "";
	$email    = "";
	$errors = array();
	$_SESSION['success'] = "";
	// connect to database
	$db = mysqli_connect('localhost', 'root', '', 'donor');
	// REGISTER USER
	if (isset($_POST['donate'])) {
		// receive all input values from the form
		@$name = mysqli_real_escape_string($db, $_POST['name']);
		@$blood = mysqli_real_escape_string($db, $_POST['blood']);
		@$address = mysqli_real_escape_string($db, $_POST['address']);
		@$email = mysqli_real_escape_string($db, $_POST['email']);
		@$contact = mysqli_real_escape_string($db, $_POST['contact']);
		// form validation: ensure that the form is correctly filled
		if (empty($email)) { array_push($errors, "Email is required"); }
		}
		// register user if there are no errors in the form
		if (count($errors) == 0) {
			$query = "INSERT INTO donor_list (name, blood, address, email, contact)
					VALUES('$name', '$blood',  '$address', '$email', '$contact')";
			mysqli_query($db, $query);
			$_SESSION['success'] = "Thank you ! We expect help from you in future.";
			header('location: index.php');
		}
?>