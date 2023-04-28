<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In</title>
    <link rel="stylesheet" href="./css/signin.css">
    <script type="text/javascript" src="./js/signin.js"></script>

    <?php
        $errmsg = "";
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            session_start();
            $username = $_POST['username'];
            $password = $_POST['password'];
            require_once('dbConnect.php');
            $sql = "SELECT * FROM users WHERE regno = '$username' AND password = '$password' ";
            $result = mysqli_query($conn, $sql);
            $check = mysqli_fetch_array($result);
            if(isset($check)){
                $_SESSION['regno'] = $username;
                header('Location: student\studentdashboard.php');
            }
            else{
                $errmsg="*Username or password is wrong";
            }
        }
    ?>
</head>
<body>
    <div class="center">
        <h1>Login</h1>
        <form action="signin.php" method="post">
            <div class="txt_field">
                <!-- pattern="[0-9]{2}[A-Z]{3}[0-9]{4}" -->
                <input name="username" type="text" required >
                <span></span>
                <label>Registration Number</label>
            </div>
            <div class="txt_field">
                <input name="password" type="password" required>
                <span></span>
                <label>Password</label>
            </div>
            <div class="pass">Forgot Password?</div>
            <input type="submit" value="Go back" onclick="back()" style="margin-bottom:5px;">
            <input type="submit" value="Login">
            <div class="signup_link">
                Not a member? <a href="registration.php">Signup</a>
            </div>
            <span style="color:red;"><?php echo "$errmsg"; ?></span>
        </form>
    </div>
</body>
</html>