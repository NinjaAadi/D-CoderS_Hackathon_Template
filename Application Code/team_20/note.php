<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="index.css" rel="stylesheet" type="text/css">
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.5.3/jspdf.debug.js"
        integrity="sha384-NaWTHo/8YCBYJ59830LTz/P4aQZK1sS0SneOgAvhsIl3zBu8r9RevNg5lHCHAuQ/"
        crossorigin="anonymous"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <link href="https://fonts.googleapis.com/css?family=Russo+One&display=swap" rel="stylesheet">
<style>
    body{
        background-image:url(images/Sketch.jpeg);
        background-repeat:repeat;
        background-size:cover;
    }
    #canvas{
    border:2px solid black;
    background:white;
}
#canvasdiv{
    width:100%;
    overflow: auto;
    white-space: nowrap;
}
#btn,#cmd{
    padding:10px;
    background:lightseagreen;
    color:white;
    font-family: 'Russo One', sans-serif;
    outline:none;
    border-radius:10px;
}
#red{
    color:white;
    font-family: 'Russo One', sans-serif;
}
    </style>
</head>
<body class="container pt-3"id="target">
    <div id="red"><h1>CANVAS
</h1>
    </div>
<canvas id="canvas" width="1000px"height="600px"></canvas>
<script src="canvas2.js"> </script>
<script src="canvas.js"> </script>
<br/>
<input id="btn"type="button" onclick="myFunction()"value="Increase stroke width"/>
<input id="btn"type="button" onclick="myFunction2()"value="Decrease stroke width"/>
<input id="btn"type="button" onclick="clearCanvas()"value="Clear All"/>
 <button id="cmd">Download</button>
</div>
</body>
</html>