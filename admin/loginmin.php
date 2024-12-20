<?php
include '../koneksi.php';
session_start();

if(isset($_SESSION['username'])) {
    header("Location: welcome.php");
    exit;
}

$message = '';

if(isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // You can add your authentication logic here
    // For example, checking the username and password against a database

    if($username == 'admin' && $password == 'password') {
        $_SESSION['username'] = $username;
        header("Location: welcome.php");
        exit;
    } else {
        $message = 'Invalid username or password';
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>
<body>
    <h1>Login</h1>
    <form method="post" action="">
        <input type="text" name="username" placeholder="Username" required><br>
        <input type="password" name="password" placeholder="Password" required><br>
        <input type="submit" name="login" value="Login">
    </form>
    <p><?php echo $message; ?></p>
</body>
</html>
