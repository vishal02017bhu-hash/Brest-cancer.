<?php
session_start();
include 'includes/db.php';

if(isset($_POST['login'])) {

    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM users WHERE email='$email'";

    $result = mysqli_query($conn, $sql);

    $user = mysqli_fetch_assoc($result);

    if($user && password_verify($password, $user['password'])) {

        $_SESSION['user'] = $user['name'];

        header("Location: index.php");

    } else {
        echo "Invalid Credentials";
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="assets/style.css">
</head>
<body>

<div class="form-container">

<h2>Login</h2>

<form method="POST">

<input type="email" name="email" placeholder="Email" required>

<input type="password" name="password" placeholder="Password" required>

<button name="login">Login</button>

</form>

</div>

</body>
</html>