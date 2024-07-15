<?php 

$user = $_POST["username"];
$pass = $_POST["password"];


if($user == "123" && $pass == "123") {
    echo " <script>alert("ถูกต้อง")</script>" ;
}else{ 
    echo " <script>alert("ไม่ถูกต้อง")</script>" ;
    ?>
    <meta http-equiv="refresh" content="0; url=./index.html\">

    <?php
       }
     ?>

