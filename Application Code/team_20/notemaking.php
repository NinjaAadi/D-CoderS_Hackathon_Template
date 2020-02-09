<?php
$username = "root";
$password = "root";
$servername = "localhost";
$dbname = "tanya";
date_default_timezone_set("Asia/Kolkata");
$date = date("h:i:sa");
$date1 = date("Y-d-m");
$connc = new mysqli($servername, $username, $password, $dbname);
if($connc){
    echo "success";
}
$stmt = $connc->prepare("INSERT INTO notemake (topic,subtopic,note,date,time) VALUES (?,?,?,?,?)");
$stmt->bind_param("sssss", $a,$b,$c,$d,$e);
$a = $_POST['topic'];
$b = $_POST['subtopic'];
$c = $_POST['note'];
$d = $date1;
$e = $date;
$stmt->execute();
header('location:note2.php');
?>
