<?php
    $conn= mysqli_connect('localhost','root','','hmsys') or die("Connection failed:" .mysqli_connect_error());
    return $conn;
?>