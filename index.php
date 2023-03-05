<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Welcome | HMS, CRSSIET, Jhajjar</title>
    <link href="css/common.scss" rel="stylesheet" />
    <link href="css/bootstrap.min.css" rel="stylesheet" />
    <link href="css/home.scss" rel="stylesheet" />
</head>

<body>
    <div class="page-container">
        <div class="header">
            <nav>
                <div class="logo">
                    <a href="#" ><img src="assets/header_logo.png" /></a>
                </div>
            </nav>
        </div>
        <div class="background"></div>
        <div class="login-card">
            <div class="login-card-content">
                <form>
                    <label for="userid">User ID:</label>
                    <input type="text" id="userid" name="userid" required>

                    <label for="password">Password:</label>
                    <input type="password" id="password" name="password" required>

                    <div class="checkbox">
                        <input type="checkbox" id="remember" name="remember">
                        <label for="remember">Remeber me</label>
                    </div>

                    <div class="forgot-passowrd">
                        <a href="#" style="color: red;">Forgot password</a>
                    </div>

                    <button type="submit">Login</button>
                </form>

                <div class="register-link">
                    Don't have an account? <a href="#">Register</a>
                </div>
                </div>
        </div>
    </div>


    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/home.js"></script>
</body>

</html>
