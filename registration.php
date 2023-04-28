<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script type="text/javascript" src="./js/registration.js"></script>
    <?php
        $errmsg = "";
        $name = "";
        $email = "";
        $regno = "";
        $phoneno = "";

        if($_SERVER["REQUEST_METHOD"]=="POST" && isset($_POST["submit"])){
            $conn = mysqli_connect('localhost','root','','hmsys') or die("Connection failed: " .mysqli_connect_error());
            if(isset($_POST['name']) && isset($_POST['regno']) && isset($_POST['email']) && isset($_POST['phoneno']) && isset($_POST['password']) && isset($_POST['confirmpassword']) && isset($_POST['gender']) ){
                $name = $_POST['name'];
                $email=$_POST['email'];
                $regno=$_POST['regno'];
                $phoneno=$_POST['phoneno'];
                $password=$_POST['password'];
                $confirmpassword=$_POST['confirmpassword'];
                $gender=$_POST['gender'];
                $passwordregex = "/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,16}$/";
                $nameregex = "/^[a-z A-Z]*$/";

                if(!preg_match($nameregex, $name)){
                    $errmsg="*Password should be in correct format";
                }
                else if($password!=$confirmpassword){
                    $errmsg="*Password and confirm password must be same";
                }
                elseif (!preg_match($passwordregex, $password)) {
                    $errmsg="*Password must contain Minimum eight and Maximum 16 characters, at least one Uppercase letter, one Lowercase letter, one Number and one Special character";
                }
                else{
                    session_start();
                    $sql = "INSERT INTO `users` (`name`,`regno`,`email`,`phoneno`,`password`,`gender`,`block`)VALUES ('$name','$regno','$email','$phoneno','$password','$gender','NULL')";
                    $query = mysqli_query($conn, $sql);
                    if($query){
                        $errmsg = '*Entry successful';
                        $_SESSION['regno'] = $regno;
                        if($gender == "male"){
                            header('Location: student\bhregistration.php');
                        }
                        else if($gender == "female"){
                            header('Location: student\ghregistration.php');
                        }
                    }
                    else{
                        $errmsg = "*Error occured";
                    }
                }
            }
            else{
                $errmsg = "*All fields are required";
            }
        }
    ?>
    <title>Registration Page</title>
    <link rel="stylesheet" href="./css/registration.css">
</head>
<body>
    <?php
        session_start();
    ?>

    <div class="container">
        <div class="title">Registration</div>
        <div class="content">
            <form action="registration.php" method="post">
                <div class="user-details">
                    <div class="input-box">
                        <span class="details">Full Name</span>
                        <input name="name" type="text" placeholder="Enter your name" value="<?php echo "$name"; ?>" required pattern="[a-z A-Z]*">
                    </div>
                    <div class="input-box">
                        <span class="details">Reg No</span>
                        <!-- pattern="[0-9]{2}[A-Z]{3}[0-9]{4}" -->
                        <input type="text" placeholder="Enter your regno" name="regno" value="<?php echo "$regno"; ?>"  required>
                    </div>
                    <div class="input-box">
                        <span class="details">Email</span>
                        <input type="text" placeholder="Enter your email" name="email" value="<?php echo "$email"; ?>" required>
                    </div>
                    <div class="input-box">
                        <span class="details">Phone Number</span>
                        <input type="text" placeholder="Enter your number" name="phoneno" value="<?php echo "$phoneno"; ?>" pattern="[0-9]{10}" required>
                    </div>
                    <div class="input-box">
                        <span class="details">Password</span>
                        <input type="password" placeholder="Enter your password" name="password" required>
                    </div>
                    <div class="input-box">
                        <span class="details">Confirm Password</span>
                        <input type="password" placeholder="Confirm your password" name="confirmpassword" required>
                    </div>
                </div>
                <div class="gender-details">
                    <input type="radio" name="gender" id="dot-1" value="male">
                    <input type="radio" name="gender" id="dot-2" value="female">
                    <span class="gender-title">Gender</span>
                    <div class="category">
                        <label for="dot-1">
                            <span class="dot one"></span>
                            <span class="gender">Male</span>
                        </label>
                        <label for="dot-2">
                            <span class="dot two"></span>
                            <span class="gender">Female</span>
                        </label>
                    </div>
                </div>
                <div class="button">
                    <input type="submit" value="Go Back" onclick="back()">
                    <input type="submit" value="Register" name="submit" style="margin-left:85px;">
                </div>
                <span style="color:red"><?php echo $errmsg; ?></span>
            </form>
        </div>
    </div>
    
</body>
</html>