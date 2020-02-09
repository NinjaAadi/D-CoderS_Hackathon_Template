<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
          <link href=style2.css type="text/css" rel="stylesheet">
</head>
<style>
    body{background-image:url(images/back6.jpg);
        background-size:cover;
        background-repeat:no-repeat;
    }
    #note{
        margin-top:5%;
        background:white;
        height:100%;
        width:100%;
    }
    #box{
color: white;
padding:15px;
border-radius:30px;;
margin-top:2%;
font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
}
    
    </style>
<body>


    <div class="container d-flex" style="justify-content:center">
             <div id="box"><h1 id="heading1">YOUR NOTES</h1></div>
        </div>
                    <div class="container d-flex"style="justify-content:center">
            <form action="delete.php" method="POST">
            <input type="text" id="search" name="top1"placeholder="Enter the sub-topic of note to be deleted">
            <button type="submit"id="search1">Delete</button>
            </form>
</div>
  <center>  <div class="container"id="note">
        <?php
session_start();
$username = "root";
$password = "root";
$servername = "localhost";
$dbname = "tanya";
$connc = new mysqli($servername, $username, $password, $dbname);
$x = $_POST['top'];
$sql = "SELECT subtopic,note,date,time FROM notemake WHERE topic like '%$x%'";
$result = $connc->query($sql);
echo $connc->error;
while($row = $result->fetch_assoc()){
    echo '<h2>'.$row['subtopic'].'</h2>';
    echo '<h3>'.$row['note'].'</h3>';
    echo $row['date'];
    echo "<br/>";
    echo $row['time'];
    }
?>
</div></center>
    
</body>
</html>