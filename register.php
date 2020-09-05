<?php
//print_r($_POST);

// define variables and set to empty values
$success ='';
$nameErr = $bloodErr = $addressErr =  $emailErr = $contactErr ='';
$name = $blood = $address = $email = $contact ='';
$created_at = date("Y-m-d h:i:s");

// if(isset($_POST['submit'])) {
if($_SERVER["REQUEST_METHOD"]=="POST"){

		
		//validate name field 
		if (empty($_POST["name"])) {
		   $nameErr = "Name is required";
		  } 
		  else {
		    $name = test_input($_POST["name"]);
		    // check if name only contains letters and whitespace
		    if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
		     $nameErr = "Invalid name"; 
		    }
		  }
		 //validate blood field 
		if (empty($_POST["blood"])) {
	    $bloodErr = "blood group is required";
		  } else {
		    $blood = test_input($_POST["blood"]);
		    // check if blood only contains letters and [-,+]]
		    if (!preg_match("/([AaBbOo]|[Aa][Bb])[\+-]/",$blood)) {
		      $bloodErr = "Invalid blood group"; 
		    }
		   
		  }
		 //validate address field 
		if (empty($_POST["address"])) {
		    $addressErr = "address is required";
		  } 
		  else {
		    $address = test_input($_POST["address"]);
		    // check if address only contains letters and whitespace
		    if (!preg_match("/^[a-zA-Z ]*$/",$address)) {
		      $addressErr = "Invalid address"; 
		    }
		  }

		 //validate email field 
		if (empty($_POST["email"])) {
	    $emailErr = "email is required";
		  } else {
		    $email = test_input($_POST["email"]);
		    // check if e-mail address is well-formed
		    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
		      $emailErr = "Invalid email address"; 
		    }
		  }
		//validate contact field
		if (empty($_POST["contact"])) {
	    $contactErr = "contact is required";
		  } else {
		    $contact = test_input($_POST["contact"]);
		    // check if name only contains letters and whitespace
		    if (!preg_match('/^[0-9]{10}+$/', $contact)) {
		      $contactErr = "Invalid contact number"; 
		    }
		  }
	//if there is not any validation then lets insert data
	if ($nameErr =='' and $bloodErr =='' and $addressErr == '' and $emailErr == '' and $contactErr == ''){
		//clear all the input values
		unset($_POST['submit']);
		require_once('db_connect.php');
		$sql = "INSERT INTO donor_list(name, blood, address, email, contact, date_time ) VALUES(?,?,?,?,?,?)";
		$insert = $db->prepare($sql);
		$result = $insert->execute([ $name, $blood, $address, $email, $contact, $created_at]);

		if($result){
		$success = "Thank you for your support.";
      	$name = $email = $address = $phone = $message ="";		
		}else{
		echo "Oops something went wrong.";
		}

	}

}


function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data); 
  return $data;
}

?>