<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Room Details</title>
    <link rel="stylesheet" href="../css/roomdetails.css">
    <script type="text/javascript" >
        function edit(){
            window.location.href = "#";
        }
    </script>
</head>
<body>
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <?php 
        session_start();
    ?>
    <?php 
        $regno = $_SESSION['regno'];
        require_once('../dbConnect.php');
        $sql = "SELECT name, email, phoneno, gender, block, roomno FROM users WHERE regno='$regno';";
        $query = mysqli_query($conn, $sql);
        $row = mysqli_fetch_assoc($query);
        $name=$row['name'];
        $email=$row['email'];
        $phoneno=$row['phoneno'];
        $block=$row['block'];
        $roomno=$row['roomno'];
        $gender=$row['gender'];

        $block = strtoupper($block);
        $block = str_replace('BLOCK', ' BLOCK', $block);
    ?>
    <?php
        include './header.php';
    ?>

    <div class="room">
        <br><br>
        <h2>Room Details</h2>
        <br>
    </div>
    <div class="card">
        <?php  if($gender == "male") { ?>
                    <img class="avatar" src="../assets/boy.png" alt="Avatar">
        <?php } else { ?>
                    <img class="avatar" src="../assets/girl.png" alt="Avatar">
        <?php } ?>
        <!-- <br> --><hr>
        <!-- <br> --><hr>
        <div class="container">
            <h4><b><?php echo "Name: ".$name; ?></b></h4>
            <hr>
            <p><b><?php echo "Registration No: ".$regno; ?></b></p>
            <hr>
            <p><b><?php echo "Phone No: +91 ".$phoneno; ?></b></p>
            <hr>
            <p><b><?php echo "Email ID: ".$email; ?></b></p>
            <hr>
            <p><b><?php echo "Hostel: ".$block; ?></b></p>
            <hr>
            <p><b><?php echo "Room No: R".$roomno; ?></b></p>
            <hr>
            <div class="edit" onclick="edit()">
                <div class="icon"><i class="material-icons md-36" >edit</i></div>
            </div>
        </div>
    </div>
    
</body>
</html>