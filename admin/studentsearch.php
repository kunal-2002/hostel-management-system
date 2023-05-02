<!DOCTYPE html>
<html lang="en" dir="ltr" >
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search Student</title>
    <link rel="stylesheet" href="../css/studentsearch.css">
</head>
<body>
    <?php include 'header.php'; ?>
    <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>

    <form action="studentsearch.php" class="" method="post">
        <div class="wrapper">
            <div class="search_box">
                <!-- pattern = "[0-9]{2}[A_Z]{3}[0-9]{4}" -->
                <input type="text" name="regno" id="regno" class="input_search" placeholder="Enter student Registration No." pattern="[0-9]+">
                <div class="search_btn"><input type="submit" name="submit" value="find" class="btn"></div>
            </div>
        </div>
    </form>

    <table>
        <thead>
            <tr>
                <th>Reg. No.</th>
                <th>Name</th>
                <th>Phone No.</th>
                <th>Email ID</th>
                <th>Hostel</th>
                <th>Room No.</th>
            </tr>
        </thead>
        <tbody>
            <?php
                if($_SERVER['REQUEST_METHOD'] == 'POST'){
                    $regno = $_POST['regno'];
                    require_once('../dbConnect.php');
                    $sql = "SELECT name, regno, email, phoneno, block, roomno FROM users WHERE regno='$regno';";
                    $query = mysqli_query($conn, $sql);
                    while($rows = mysqli_fetch_assoc($query)){
                        $block = $rows['block'];
                        $block = strtoupper($block);
                        $block = str_replace('BLOCK', ' BLOCK', $block);
            ?>
                    <tr>
                        <td><?php echo $rows['regno']; ?></td>
                        <td><?php echo $rows['name']; ?></td>
                        <td><?php echo $rows['email']; ?></td>
                        <td><?php echo "+91 ".$rows['phoneno']; ?></td>
                        <td><?php echo $block; ?></td>
                        <td><?php echo "R".$rows['roomno']; ?></td>
                    </tr>
            <?php            
                    }
                }
            ?>
        </tbody>
    </table>
</body>
</html>