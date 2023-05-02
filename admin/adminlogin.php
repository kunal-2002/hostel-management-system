<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <link rel="stylesheet" href="../css/signin.css">
    <?php
        $errmsg = "";
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            session_start();
            $employeeid = $_POST['employeeid'];
            $password = $_POST['password'];
            require_once('../dbConnect.php');
            $sql = "SELECT * FROM admin WHERE employeeid = '$employeeid' AND password = '$password' ";
            $result = mysqli_query($conn, $sql);
            $check = mysqli_fetch_array($result);
            if(isset($check)){
                $_SESSION['employeeid'] = $employeeid;
                header('Location: admindashboard.php');
            }
            else{
                $errmsg="*Username or password is wrong";
            }
        }
    ?>
</head>
<body>
    <div class="center">
        <h1>Admin Login</h1>
        <form action="adminlogin.php" method="post">
            <div class="txt_field">
                <!-- pattern="[0-9]{5}" -->
                <input id="employeeid" name="employeeid" type="text" required >
                <span></span>
                <label>Employee ID</label>
            </div>
            <div class="txt_field">
                <input id="password" name="password" type="password" required>
                <span></span>
                <label>Password</label>
            </div>
            <div class="pass">Forgot Password?</div>
            <input type="submit" name="submit" id="submit" value="submit">
            <div class="signup_link">
                Forgot? <a href="../aboutme.php">Contact</a>
            </div>
        </form>
        <span style="color:red; margin-left: 15px;"><?php echo "$errmsg"; ?></span>
        
    </div>
</body>
</html>