<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>Ebook</title>

    <link href="./bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="./bootstrap/css/bootstrap-theme.min.css" rel="stylesheet">
    <link href="./bootstrap/css/jumbotron.css" rel="stylesheet">
    <link href="../bootstrap/css/style.css" type="text/css" rel="stylesheet">
    <link href="style2.css" type="text/css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="script.js" type="text/javascript"></script>
    <style>
    .list-inline {
            text-align: center !important;
            padding: 25px;
        }

        .list-inline li a:link {

            text-decoration: none;
            text-align: center;
            padding: 35px;
            color: rgb(255, 69, 0);
        }

        .list-inline li a:visited {
            color: rgba(255, 69, 0, 0.3);
            background-color: transparent;
            text-decoration: none;
        }

        .list-inline li a:hover {
            color: coral !important;
            background-color: transparent;
            text-decoration: underline;
        }

        .list-inline li a:active {
            color: yellow;
            background-color: transparent;
            text-decoration: underline;
        }
        .navbar {
            background-color: rgba(255, 69, 0, 0.8) !important;
        }

        .text {
            color: azure;
        }

        li :hover {
            background-color: rgba(255, 255, 255, 0.4) !important;
            color: whitesmoke !important;
        }

        a :hover {
            background-color: rgba(255, 255, 255, 0.4) !important;
            color: whitesmoke !important;
        }

        .search-container {
            float: right;
        }

        input[type=text] {
            padding: 6px;
            margin-top: 8px;
            font-size: 17px;
            border: none;
        }

        .search-container button {
            float: right;
            padding: 6px 10px;
            margin-top: 8px;
            margin-right: 16px;
            background: #ddd;
            font-size: 17px;
            border: none;
            cursor: pointer;
        }

        .search-container button:hover {
            background: #ccc;
        }
       .img-responsive {
           margin:20px;
            height:40%;
        }
        .btn-responsive{
            margin:20px;
            margin-top:0px;
            width:40%;
        }
        @media screen and (max-width: 600px) {
            .search-container {
                float: none;
            }

            .navbar a,
            .navbar input[type=text],
            .navbar .search-container button {
                float: none;
                display: block;
                text-align: left;
                width: 100%;
                margin: 0;
                padding: 14px;
            }

            .navbar input[type=text] {
                border: 1px solid #ccc;
            }
        }
        .btn-resp{
            margin-left:20px;
            
        }
        .btn-resp-read{
            float:right;
            padding-left:25px;
            padding-right:25px;

        }
        .logo{
            font-size:25px;
        }
        .icon-bar{
            background-color:white;
        }
        .btn-logout{
            font-size:20px;
            color:white;
        }
        
    </style>

</head>


<body>
<div class="navbar-wrapper">
    <div class="container">
    <nav class="navbar navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand text" href="#"><span class="logo text" style:"font-family: 'Sansita', sans-serif;">Ebook Reader</span></a>
                
            </div>

            <!--/.navbar-collapse -->
            <div id="navbar" class="navbar-collapse collapse">
                <ul class="nav navbar-nav navbar-right">
                   <li><a href="index.php?logout='1'" class="btn-logout">Logout</a></li>
                   <li><?php  if (isset($_SESSION['username'])) : ?>
			             <h4 style="color:white; margin-top:15px" >Sign in as <strong><?php echo $_SESSION['username']; ?></strong></h4></li>
                                <?php endif ?>
                </ul>
            </div>
        </div>
    </nav>
</div>
</div>  
    <?php
      if(isset($title) && $title == "Index") {
    ?>
    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron">
        <div class="container">
            <h1>Welcome to online CSE bookstore</h1>
            <p class="lead">This site has been made using PHP with MYSQL (procedure functions)!</p>
            <p>The layout use Bootstrap to make it more responsive. It's just a simple web!</p>
        </div>
    </div>
    <?php } ?>
    
    <div class="container" id="main">
    




