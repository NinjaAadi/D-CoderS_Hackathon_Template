<?php
$username = "root";
$password = "root";
$servername = "localhost";
$dbname = "tanya";
date_default_timezone_set("Asia/Kolkata");
$date = date("h:i:sa");
$date = date("Y-d-m");
$connc = new mysqli($servername, $username, $password, $dbname);
$stmt=$connc->prepare("INSERT INTO note (username,password)  VALUES(?,?)");
$stmt->bind_param("ss",$usr,$pass);
$usr = $_POST['username'];
$pass = $_POST['password'];
$stmt->execute();
header('location:index.html');
?>