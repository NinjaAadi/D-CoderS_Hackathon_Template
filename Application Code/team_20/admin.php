<?php
session_start();
if(!isset($_SESSION['username'])){
    header('location:index.html');
}
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
      <link href=style2.css type="text/css" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>
<body>
       <div class="container d-flex" style="justify-content:center">
             <div id="box"><h1 id="heading1">DIGITAL NOTEPAD</h1></div>
        </div>
        <div class="container d-flex pt-3" style="justify-content:center">
              <form action="logout.php"><button id="btn1">Log Out</button></form>
        </div>



             <div class="container d-flex"style="justify-content:center">
            <form action="topic.php" method="POST">
            <input type="text" id="search" name="top"placeholder="Search your topic">
            <button type="submit"id="search1">Search</button>
            </form>
</div>


        <div class="container-fluid">
            <div class="row">
                    <div class="col-lg-6 d-flex"style="justify-content:center">
                            <div id="blank1"class="d-flex">
                                <h2>Add a Note</h2>
                              <a href="note2.php "style="outline:none;"><h2 id="plus">+</h2></a>
                            </div>
                    </div>
                    <div class="col-lg-6 d-flex"style="justify-content:center">
                                <div id="blank2"class="d-flex">
                                    <h2>Draw a Sketch</h2>
                                <a href="note.php "style="outline:none;"><h2 id="plus">+</h2></a>
                            </div>
                    </div>
            </div>
        </div>
       
</body>
</html>