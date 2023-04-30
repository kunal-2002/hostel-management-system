<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="../css/studentdashboard.css">

    <script type="text/javascript" src="../js/studentdashboard.js"></script>
</head>
<body>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <?php
        include 'header.php';
    ?>

    <div class="wrapper">

        <div class="content">
            <div class="card" onclick="searchroommates()" >
                <div class="icon"><i class="material-icons md-36" >search</i></div>
                <p class="title">Find Roommates</p>
                <p class="text">Know your roommates.</p>
            </div>
            <div class="card" onclick="roomdetails()" >
                <div class="icon"><i class="material-icons md-36" >description</i></div>
                <p class="title">My Room Details</p>
                <p class="text">Check your room details.</p>
            </div>
            <div class="card" onclick="applyleave()" >
                <div class="icon"><i class="material-icons md-36" >add</i></div>
                <p class="title">Apply Leave</p>
                <p class="text">Apply for leave.</p>
            </div>
        </div>

    </div>
</body>
</html>