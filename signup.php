<?php

include "./includes/db.php";


if(isset($_POST['submit'])) {

    $fullname = $_POST['fullname'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];


$query = "INSERT INTO users(fullname, username, email, password) ";

$query .= 
"VALUES('{$fullname}','{$username}','{$email}','{$password}') ";

$create_user_query = mysqli_query($connection, $query);

if($create_user_query) {

    echo "Account Created";
} else {

    echo "Account not created";
}




}




?>


<!DOCTYPE html>
<html>
<head>
	<title>Euroswallet | Finance tracker app </title>
</head>
<body>
               

                <div class="form-signup">
                <h1>Create your account</h1>
                    <form action="#" method="POST">
                        <input type="text" placeholder="Fullname" name="fullname"> 
                        <input type="text" placeholder="Username" name= "username">
                        <input type="email" placeholder="Email" name="email">
                        <input type="password" placeholder="Password" name="password">
                        <input type="password" placeholder="Verify Password">
                        <input type="submit" placeholder="Submit" name="submit">
                        <input type="checkbox">
                        <span>By clicking submit, you agree to our</span><a class="link" href="#"> terms and conditions.</a>
                    </form>
                    <span>Already have an account?</span><a href="login.php">Log in</a>
                </div>
</body>
</html>