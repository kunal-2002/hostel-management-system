<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="../css/admindashboard.css">
    <script type="text/javascript" src="../js/dashboard.js"></script>
</head>
<body>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <?php
        include 'header.php';
    ?>
    <div class="wrapper">
        <div class="content">
            <div class="card" onclick="roomdetails()" >
                <div class="icon"><i class="material-icons md-36" >search</i></div>
                <p class="title">Room details</p>
                <p class="text">Check room details of all students.</p>
            </div>
            <div class="card" onclick="studentsearch()" >
                <div class="icon"><i class="material-icons md-36" >add</i></div>
                <p class="title">Student Search</p>
                <p class="text">Search for a student.</p>
            </div>
            <div class="card" onclick="requests()" >
                <div class="icon"><i class="material-icons md-36" >description</i></div>
                <p class="title">Leave Requests</p>
                <p class="text">Approve or reject leave requests.</p>
            </div>
        </div>
    </div>
</body>
</html>