<?php
    $connect = mysqli_connect('localhost', 'root', '', 'itmo_lab5');
    if ($connect){
        mysqli_query($connect, "SET NAMES 'UTF8'");
//        echo "connected";
    }else{
        echo 'fail';
    }

?>