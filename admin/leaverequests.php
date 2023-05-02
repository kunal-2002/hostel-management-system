<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Leave Requests</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Encode+Sans+Expanded:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/studentsearch.css">
</head>
<body>
    <?php include 'header.php'; ?>
    <?php
        require_once('../dbConnect.php');
        $sql = "SELECT * FROM leaverequests;";
        $query = mysqli_query($conn,$sql);
        if(array_key_exists('approve', $_POST)){
            approve();
        }
        else if(array_key_exists('reject', $_POST)){
            reject();
        }

        function approve(){
            $conn= mysqli_connect('localhost','root','','hmsys') or die("Connection failed:" .mysqli_connect_error());
            $regno1 = $_POST['id'];
            $sql1 = "UPDATE `leaverequests` SET `status`='approved' where regno='$regno1'";
            $query1 = mysqli_query($conn, $sql1);
            if($query1){
                echo 'Successful';
            }
            else{
                echo "Error occured";
            }
        }

        function reject(){
            $conn= mysqli_connect('localhost','root','','hmsys') or die("Connection failed:" .mysqli_connect_error());
            $regno1 = $_POST['id'];
            echo $regno1;
            $sql1 = "UPDATE `leaverequests` SET `status`='rejected' WHERE regno='$regno1'";
            $query1 = mysqli_query($conn, $sql1);
            if($query1){
                echo "Successful";
            }
            else{
                echo "Error occured";
            }
        }
    ?>

    <form action="leaverequests.php" class="" method="post">
        <table>
            <thead>
                <tr>
                    <th>Reg. No.</th>
                    <th>Name</th>
                    <th>Hostel</th>
                    <th>Room No.</th>
                    <th>From</th>
                    <th>To</th>
                    <th>Reason</th>
                    <th>Action</th>
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
                        <td><?php echo $block; ?></td>
                        <td><?php echo "R".$rows['roomno']; ?></td>
                        <td><?php echo $rows['fromdate']; ?></td>
                        <td><?php echo $rows['todate']; ?></td>
                        <td><?php echo $rows['reason']; ?></td>

                        <?php if($rows['status'] == "Pending"){ ?>
                            <td>
                                <input type="submit" name="approve" class="approvebtn" value="Approve">
                                <input type="submit" name="reject" class="rejectbtn" value="Reject">
                                <input type="hidden" name="id" value="<?php echo $rows['regno']; ?>" />
                            </td>
                        <?php
                            }else{
                        ?>
                            <td><?php echo $rows['status']; ?></td>
                        <?php        
                            } 
                        ?>
                    </tr>
                <?php
                    }
                ?>
            </tbody>
        </table>
    </form>
</body>
</html>