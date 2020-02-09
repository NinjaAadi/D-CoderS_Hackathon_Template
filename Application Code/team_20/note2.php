<html lang="en">
<head>
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <meta charset="UTF-8">
    <link href="https://fonts.googleapis.com/css?family=Caveat&display=swap" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
  
<style>
        body{
            background-image:url(images/note4.jpg);
            background-size:cover;
            background-repeat:no-repeat;
        }
        #topic{
            display:block;
            width:100%;
            height:50px;
            margin-bottom:1%;
            padding:10px;
            border:1px solid black;
            background:#FFFDD0;
            outline:none;
        }
        #sub-topic{
            display:block;
            width:100%;
             height:50px;
              margin-bottom:3%;
              padding:10px;
               border:1px solid black;
               background: #FFFDD0;
               outline:none;


        }
        #notice{
            display:block;
            width:100%;
            height:500px;
            padding:10px;
             border:1px solid black;
             background: #FFFDD0;
             outline:none;


        }
        #form{
            width:100%;
            height:600px;
        }
        #btn{
            background: #FFFDD0;
            color:black;
            width:100px;
            height:50px;
                         border:1px solid black;
                margin-top:2%;
                border-radius:15px;
        }
        @media only screen and (max-width: 1250px) {
            #notice{
            height:400px;
            }
        }
        </style>
</head>
<body>
        <div class="container d-flex"style="justify-content:center;">
        <h1 style="font-family: 'Caveat', cursive;">WRITE YOUR NOTES HERE</h1>
    </div>
    <div class="container">
    <form action="notemaking.php" method="POST"id="form">
        <input id = "topic" type="text" placeholder="TOPIC" name="topic">
        <input id = "sub-topic" type="text" placeholder="SUB-TOPIC"name="subtopic">
        <textarea type="text" placeholder="NOTIFY YOUR THOUGHTS"id="notice"name="note"></textarea>
        <input id="btn"type="Submit"value="Save">
    </form>
    </div>
</body>
</html>