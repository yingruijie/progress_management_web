<?php
    header("content-type:text;charset=utf8");

    $servername = "localhost";

    $db_username = "user_progress";

    $db_password = "192837465.Aa";

    $db_name = "mysql";

    $conn = new mysqli($servername, $db_username, $db_password, $db_name);

    if($conn->connect_error){
        die("连接失败：".$conn->connect_error);
    }

    $conn->query("set names utf8");
?>