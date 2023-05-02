<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Room Details</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Encode+Sans+Expanded:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/allstudentdetails.css">
    <?php 
        require_once('../dbConnect.php');
        $sql = "SELECT name, regno, email, phoneno, block, roomno FROM users WHERE gender = 'male';";
        $query = mysqli_query($conn, $sql);
    ?>
</head>
<body>
    <?php include 'header.php'; ?>
    <?php if(mysqli_num_rows($query)>0){ ?>
        <table>
            <thead>
                <tr>
                    <th style="text-align: center;" colspan="6">Male</th>
                </tr>
                <tr>
                    <th>Reg. No.</th>
                    <th>Name</th>
                    <th>Phone no</th>
                    <th>Email ID</th>
                    <th>Hostel</th>
                    <th>Room No.</th>
                </tr>
            </thead>
            <tbody>
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
            </tbody>
        </table>
    <?php } else{
                echo "<h3 style='text-align: center;'>No Male Student Registered</h3>";
            }
    ?>
    <?php
        require_once('../dbConnect.php');
        $sql = "SELECT name, regno, email, phoneno, block, roomno FROM users WHERE gender='female';";
        $query = mysqli_query($conn,$sql);
        if(mysqli_num_rows($query)>0){
    ?>
        <table>
            <thead>
                <tr>
                    <th style="text-align: center;" colspan="6">Female</th>
                </tr>
                <tr>
                    <th>Reg. No.</th>
                    <th>Name</th>
                    <th>Phone no</th>
                    <th>Email ID</th>
                    <th>Hostel</th>
                    <th>Room No.</th>
                </tr>
            </thead>
            <tbody>
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
            </tbody>
        </table>
    <?php } else{
                echo "<h3 style='text-align: center;'>No Female Student Registered</h3>";
            }
    ?>

</body>
</html>