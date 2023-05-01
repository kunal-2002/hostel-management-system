<!DOCTYPE html>
<html lang="en" dir="ltr" >
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Girls Hostel Allotment</title>
    <link rel="stylesheet" href="../css/bhreg.css">
    <style>
        .card--1 .card__img, .card--1 .card__img--hover{
            background-image: url("../assets/girls_hostel.jpg");
        }
    </style>
</head>
<body>
    <?php session_start(); ?>

    <?php  
        if($_SERVER["REQUEST_METHOD"] == "POST"){
            $regno = $_SESSION['regno'];
            require_once('../dbConnect.php');
            if(isset($_POST["bblock"])){
                $blockname="bblock";
                $rowSQL = mysqli_query($conn, "SELECT MAX(roomno) AS max FROM `users` WHERE block='$blockname' AND gender='female';");
                $row = mysqli_fetch_array( $rowSQL );
                $largestNumber = $row['max'];
                if($largestNumber==0){
                  $largestNumber=1;
                }
                $result=mysqli_query($conn,"SELECT count($largestNumber) as total from users where block='$blockname' AND gender='female';");
                $data=mysqli_fetch_assoc($result);
                $count= $data['total'];
                if($count<4){
                    $roomno=$largestNumber;
                }
                else{
                    $roomno=$largestNumber+1;
                }
            }
            $sql = "UPDATE `users` SET `block`='$blockname' where regno = '$regno';";
            $query = mysqli_query($conn,$sql);
            $sql = "UPDATE `users` SET `roomno`='$roomno' where regno = '$regno';";
            $query1 = mysqli_query($conn, $sql);

            if($query && $query1){
                echo 'Entry successful';
                header('Location: studentdashboard.php');
            }
            else{
                echo 'Error occured';
            }
        }
    ?>
    <?php
        include './header.php';
    ?>

    <form class="" action="ghregistration.php" method="post">
        <section class="cards">
            <article class="card card--1">
                <div class="card__img"></div>
                <a href="#" class="card_link">
                    <div class="card__img--hover"></div>
                </a>
                <div class="card__info">
                    <span class="card__category">Girls Hostel</span>
                    <h3 class="card__title">B block</h3>
                    <input type="submit" name="bblock" id="bblock" class="card__by" value="submit">
                </div>
            </article>
        </section>
    </form>
</body>
</html>