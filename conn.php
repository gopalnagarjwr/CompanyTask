<?php
try {
    $con = mysqli_connect("localhost:3307", "root", "", "antidatabase");

    if (!$con) {
        throw new Exception("Failed to connect to MySQL: " . mysqli_connect_error());
    }

    //echo "Successful connection";
} catch (Exception $e) {
    echo $e->getMessage();
}
?>