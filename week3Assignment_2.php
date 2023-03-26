<?php
include 'week3Assignment.php';
    $mysql =  "INSERT INTO sidehustle (name,age) VALUES('JOSEPH','21')";
    $db = mysqli_query($connect,$mysql);
    if($db){
        echo "Data saved successfully";
    }else{
        echo "Data not saved";
    }


?>