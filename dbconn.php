<?php
    $con =new mysqli("localhost","root","","mrgeo");
    if (!$con){
        die(mysqli_error($con));
    }
?>