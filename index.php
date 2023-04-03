<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Welcome | HMS, CRSSIET, Jhajjar</title>
    <?php
        include "includes/head_links.php";
    ?>
    <link href="css/home.scss" rel="stylesheet" />
</head>

<body>

    <div class="width-100 top-header" >
        <div class="container">
            <div class="width-100">
                <b class="news-list">  NEWS : </b>
                <marquee class="headquote">It is advised that students will ensure their health conditions with regards to COVID-19 and will follow SOP. Before entering the University Campus, all the students will be screened. Any students with symptoms like fever, cold, etc. will NOT be allowed to enter the campus.</marquee>
            </div>
        </div>
    </div>

    <?php
        include "includes/header.php";
    ?>

    <div class="background"></div>

    <div class="page-container">
        <a class="top" href="index.php">
            <img class="container-logo" src="assets/logo.png" />
        </a>
    </div>

    <?php
        include "includes/signup_modal.php";
        include "includes/login_modal.php";
        include "includes/footer.php";
    ?>
    <script type="text/javascript" src="js/home.js"></script>
   
</body>

</html>
