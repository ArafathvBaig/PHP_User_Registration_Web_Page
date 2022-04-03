<!DOCTYPE html>
<html>

<head>
    <title>Login Page</title>
    <link rel="stylesheet" type="text/css" href="../css/style.css">
</head>

<body>
    <div class="heading">
        <h2>Login Page</h2>
    </div>
    <form method="post" action="../php/Login.php" class="login_form">
        <div>
            <input type="text" name="Email" class="user_input"
			pattern="(([a-z A-Z]{3,})([-$&+,:;=?#|'<>.^*()%!]?[0-9 a-z A-Z]{3,})?([@]{1})([0-9 a-z]{1,})([.]{1})([a-z]{2,3})([.]{1}[a-z]{2,3})?)" 
			title="Email EX: abcd.123@gmail.com or abcd123@gmail.com or abcd123@gmail.co.in"
			placeholder="Enter Your Email" required 
			oninvalid="this.setCustomValidity('You Must Enter Your Email.')" oninput="this.setCustomValidity('')" />
		</div>
        <div>
            <input type="text" name="Password" class="user_input" 
			pattern="(([a-zA-Z0-9]{5,}[@#$%*&]{1})([a-zA-Z0-9]{3,})?)" 
			title="Password EX: (a-zA-Z0-9 min=5 + (@#$%*&) any one) + (a-zA-Z0-9 min=3) 0 or once"
			placeholder="Enter Your Password" required 
			oninvalid="this.setCustomValidity('You Must Enter Your Password.')" oninput="this.setCustomValidity('')" />
		</div>
        <button value="submit" type="submit" name="login" id="add_btn" class="add_btn">Login</button>
        <a href="./User_Registration.php">
            <input type="button" class="add_btn" value="Sign Up" name="signUp">
        </a>
    </form>
</body>

</html>