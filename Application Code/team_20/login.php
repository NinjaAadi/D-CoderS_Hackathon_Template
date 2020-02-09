<?php
session_start();
$_SESSION['username']=$_POST['username'];
$username = "root";
$password = "root";
$servername = "localhost";
$dbname = "tanya";
$connc = new mysqli($servername, $username, $password, $dbname);
$sql = "SELECT username,password FROM note";
$result = $connc->query($sql);
while($row = $result->fetch_assoc()){
if($_POST['username']==$row['username']&&$_POST['password']==$row['password']){
    header("location:admin.php");
}
}
?>