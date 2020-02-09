<?php
$username = "root";
$password = "root";
$servername = "localhost";
$dbname = "tanya";
$connc = new mysqli($servername, $username, $password, $dbname);
$x = $_POST['top1'];
$sql = "DELETE FROM notemake WHERE subtopic like '%$x%'";
$result = $connc->query($sql);
header('location:topic.php');
?>