<?php
    $connect = mysqli_connect("localhost", "root", "", "side_hustle");
    if($connect){
        echo "connected <br>";
    }else{
        echo "not connected";
    }
?>