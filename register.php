<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="register.css">
    <script src="https://kit.fontawesome.com/9ce994caf4.js" crossorigin="anonymous"></script>
    <title>Register</title>
    <style>
        body {
    margin: 0;
    padding: 0;
    background-color: rgb(255, 131, 64);
    background-size: cover;
    background-repeat: no-repeat;
    background-attachment: fixed;
    font-family: 'roboto', sans-serif !important;
}

.input {
    position: fixed;
    top: 50%;
    left: 610px;
    transform: translate(-30%, -50%);
    background: whitesmoke;
    padding: 50px;
    width: 270px;
    box-shadow: 0px 0px 0px 0px whitesmoke;
    border-radius: 15px;
}

.input h1{
    text-align: center;
    color: black;
    font-size: 30px;
    font-family: 'roboto', sans-serif !important;
    letter-spacing: 3px;
    padding-top: 0;
    margin-top: -20px;
}

.input h2{
    text-align: center;
    color: black;
    font-size: 20px;
    font-family: 'roboto', sans-serif !important;
    letter-spacing: 3px;
    padding-top: 0;
    margin-top: -20px;
}

.box-input {
    display: flex;
    justify-content: space-between;
    margin: 10px;
    border-bottom: 2px solid black;
    padding: 8px 0;
}

.box-input i {
    font-size: 23px;
    color: black;
    padding: 5px 0;
}

.box-input input {
    width: 85%;
    padding: 5px 0;
    background: none;
    border: none;
    outline: none;
    color: black;
    font-size: 18px;
}

.box-input input::placeholder {
    color: black;
}

.btn-input .box-input input:hover {
    background: rgba(10, 10, 10, s 0.5);
}

.btn-input {
    margin-left: 10px;
    margin-bottom: 20px;
    background: none;
    border: 1px solid rgb(255, 131, 64);
    width: 92.5%;
    padding: 10px;
    color: black;
    font-size: 18px;
    letter-spacing: 3px;
    cursor: pointer;
    transition: all .2s;
    border-radius: 10px;
}

.btn-input:hover {
    background: rgb(255, 131, 64);
}

.bottom {
    margin-left: 10px;
    margin-right: 10px;
    margin-bottom: -20px;
}

.bottom p {
    color: black;
    font-size: 15px;
    text-decoration: none;
    text-align: center;
}

.bottom a {
    color: rgb(255, 131, 64);
    font-size: 15px;
    text-decoration: none;
}

.bottom a:hover {
    text-decoration: none;
}
    </style>
</head>
<body>
    <div class="input">
        <h1>Register</h1>
        <div class="box-input">
            <i class="fa-solid fa-user"></i>
            <input type="text" placeholder="User">
        </div>
        <div class="box-input">
            <i class="fa-solid fa-envelope"></i>
            <input type="text" placeholder="Email">
        </div>
        <div class="box-input">
            <i class="fa-solid fa-lock"></i>
            <input type="password" placeholder="Password">
        </div>
        <br>
        <button type="submit" name="login" class="btn-input">Register</button>
        <div class="bottom">
            <p>Sudah punya akun?
                <a href="login.php">Login disini</a>
            </p>
        </div>
    </div>
</body>
</html>