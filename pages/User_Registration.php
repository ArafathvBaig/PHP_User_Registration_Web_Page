<?php
$update = false;
$firstName = "";
$lastName = "";
$email = "";
$password = "";
$phoneNumber = "";
$id = 0;
if (isset($_GET['edit_id'])) {
	$id = $_GET['edit_id'];
	$update = true;
	include '../php/DataBase.php';
	$result = mysqli_query($connection, "SELECT * FROM user WHERE id='$id'");
	if ($result) {
		$row = mysqli_fetch_assoc($result);
		$firstName = $row['firstname'];
		$lastName = $row['lastname'];
		$email = $row['email'];
		$password = $row['password'];
		$phoneNumber = $row['phonenumber'];
	}
}
?>
<!DOCTYPE html>
<html>

<head>
	<title>User Registration</title>
	<link rel="stylesheet" type="text/css" href="../css/style.css">
</head>

<body>
	<div class="heading">
		<h2>User Registration SignUp</h2>
	</div>
	<form method="post" action="../php/Submit.php" class="input_form">
		<input type="hidden" value="<?php echo $id ?>" name="id">
		<div>
			<input type="text" name="First_Name" class="user_input" value="<?php echo $firstName; ?>" 
			pattern="[A-Z]{1}[a-z]{2,}" title="First Name EX: Arafath (1st letter caps and all small, min=3)"
			placeholder="Enter Your First Name" required
			oninvalid="this.setCustomValidity('You Must Enter Your First Name.')" oninput="this.setCustomValidity('')" />
		</div>
		<div>
			<input type="text" name="Last_Name" class="user_input" value="<?php echo $lastName; ?>" 
			pattern="[A-Z]{1}[a-z]{2,}" title="Last Name EX: Baig (1st letter caps and all small, min=3)"
			placeholder="Enter Your Last Name" required 
			oninvalid="this.setCustomValidity('You Must Enter Your Last Name.')" oninput="this.setCustomValidity('')" />
		</div>
		<div>
			<input type="text" name="Email" class="user_input" value="<?php echo $email; ?>" 
			pattern="(([a-z A-Z]{3,})([-$&+,:;=?#|'<>.^*()%!]?[0-9 a-z A-Z]{3,})?([@]{1})([0-9 a-z]{1,})([.]{1})([a-z]{2,3})([.]{1}[a-z]{2,3})?)" 
			title="Email EX: abcd.123@gmail.com or abcd123@gmail.com or abcd123@gmail.co.in"
			placeholder="Enter Your Email" required 
			oninvalid="this.setCustomValidity('You Must Enter Your Email.')" oninput="this.setCustomValidity('')" />
		</div>
		<div>
			<input type="text" name="Password" class="user_input" value="<?php echo $password; ?>" 
			pattern="(([a-zA-Z0-9]{5,}[@#$%*&]{1})([a-zA-Z0-9]{3,})?)" 
			title="Password EX: (a-zA-Z0-9 min=5 + (@#$%*&) any one) + (a-zA-Z0-9 min=3) 0 or once"
			placeholder="Enter Your Password" required 
			oninvalid="this.setCustomValidity('You Must Enter Your Password.')" oninput="this.setCustomValidity('')" />
		</div>
		<div>
			<input type="text" name="Phone_Number" class="user_input" value="<?php echo $phoneNumber; ?>" 
			pattern="(([+]{1}[0-9]{2})?([0-9]{10}))" 
			title="Phone Number EX: +919876543210 9876543210"
			placeholder="Enter Your Phone Number" required 
			oninvalid="this.setCustomValidity('You Must Enter Your Phone Number.')" oninput="this.setCustomValidity('')" />
		</div>
		<?php
		if ($update == true) :
		?>
			<button formaction="../php/Update.php" value="update" type="submit" name="update" id="add_btn" class="add_btn">Update</button>
		<?php else : ?>
			<button value="submit" type="submit" name="submit" id="add_btn" class="add_btn">Sign Up</button>
		<?php endif; ?>
	</form>
</body>

</html>