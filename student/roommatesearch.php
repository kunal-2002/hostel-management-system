<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search Roommate</title>
    <?php
        session_start();
    ?>
    <?php
        $regno = $_SESSION['regno'];
        require_once('../dbConnect.php');
        $sql = "SELECT gender, block, roomno FROM users WHERE regno='$regno';";
        $query1= mysqli_query($conn, $sql);
        $row = mysqli_fetch_assoc($query1);
        $gender = $row['gender'];
        $block = $row['block'];
        $roomno = $row['roomno'];
        $sql = "SELECT regno, name, email, phoneno, block, roomno FROM users WHERE gender='$gender' AND block='$block' AND roomno = '$roomno' ORDER BY name ASC;";
        $query = mysqli_query($conn,$sql);
    ?>
    <link rel="stylesheet" href="../css/roommatesearch.css">
</head>
<body>
    <?php include './header.php'; ?>
    <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
    <div class="tablediv">
        <table>
            <tr>
                <th colspan="6"><h2>Student Record</h2></th>
            </tr>
            <tr>
                <th>Reg. No.</th>
                <th>Name</th>
                <th>Email ID</th>
                <th>Phone No.</th>
                <th>Hostel</th>
                <th>Room No.</th>
            </tr>

            <?php while($rows = mysqli_fetch_assoc($query)){ 
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
            ?>
        </table>
    </div>
</body>
</html>