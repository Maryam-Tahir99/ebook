<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Explore the world, and find out what you don't know by reading.
        A free online e-book reader.">
    <meta name="keywords" content="E-books, E-book Reader, Online Reading">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ebook</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
        integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <style>
        @import url('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css');
        @import url('https://fonts.googleapis.com/css2?family=Sansita&display=swap');

*{
    margin: 0px;
    padding: 0px;
    -moz-box-sizing: border-box; 
    -webkit-box-sizing: border-box; 
    box-sizing: border-box; 
}

body{
    font-size: 100%;
}

.container{
    margin-bottom: 70px;
    padding: 0%;
}

.logo, h1{
    font-family: 'Sansita', sans-serif;
}

.logo{
    font-size: 30px;
    color: #ff613a;
}

h1{
    color: #3b2b69;
}

.navbar{
    padding: 35px 90px 15px 90px !important; 
    background: transparent !important;
    transition: 0.5s ease-in-out;
}

.nav-link{
    margin-right: 8px;
    font-size: 18px;
    color: rgb(255, 97, 58, 0.5) !important;
}

.nav-link:hover, .active{
    color: rgb(255, 97, 58) !important;
}

.active{
    font-weight: 700  !important;
}

button{
    border-radius: 10px;
    background-color: transparent;
    transition: 0.3s ease;
}

.form-inline-btn{
    margin: 3px !important;
    padding: 5px 0px;
    width: 80px;
    color: #ff613a;
    border: 1.5px solid #ff613a;
}

.form-inline-btn:hover{
    color: #fff;
    background-color: #ff613a;
}

.navbar.scrolled{
    padding: 1px 90px!important;
    background: #ff613a !important;
    box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
}
.navbar.scrolled .logo{
    color: #fff;
}
.navbar.scrolled .nav-link{
    color: rgb(255, 255, 255, 1) !important;
}
.navbar.scrolled .form-inline-btn{
    color: #fff !important;
    border: 1px solid #fff !important;
}
.navbar.scrolled .form-inline-btn:hover{
    color: #ff613a !important;
    background-color: #fff;
}

/* Banner */

.intro{
    text-align: right;
    margin-bottom: 0px;
    padding-bottom: 60px;
}

.intro-heading{
    padding-top: 7%;
    text-align: justify;
}

.intro-heading button{
    width: 120px;
    padding: 8px 0px;
    border: none;
    background-color: #ff613a;
    color: #fff;
}

.intro-heading button:hover{
    background-color: #ee5b36;
    color: #fff;
}

.intro-image img{
    max-width: 90%;
    height: auto;
}

/* Services */
.big-service-container{
    width: 100%;
    background-color: rgb(59, 43, 105,0.03);
}

.services-container{
    width:100%;
    padding-top: 10px;
    padding-bottom: 10px;
}

.services-container .row{
    margin-left: 0px;
    height: 90%; 
    width:100%;
    display:flex;
    align-self: center;
    align-items: center;
    justify-content: center;
}

.services-container h1{
    width: 100%;
    margin-bottom: 30px;
    text-align: center;
}

.service-card{
    width: 150px;
    height: 150px;
    margin: 5px;
    padding-top: 35px;
    border-radius: 100%;
    background-color: #3b2b69;
    text-align: center;
    transition: 0.9s ease;
} 

.img-right{
    margin-left: 120px !important;
}

.service-card:hover{
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
    -webkit-transform: scale(1.2);
    -ms-transform: scale(1.2);
    transform: scale(1.1);
    transition: 1s ease;
    background-color: #ff613a;
}

.service-text{
    padding-top: 15px;
    border-radius: 10px;
    transition: 0.8s ease;
}

.service-text p{
    font-size: 0.9em;
}

.service-text:hover{
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.2);
    cursor: default;
}

.row1-col1:hover + .row1-col2 { box-shadow: 0 0 15px rgba(0, 0, 0, 0.1); }
.row2-col1:hover + .row2-col2 { box-shadow: 0 0 15px rgba(0, 0, 0, 0.1); }
.row3-col1:hover + .row3-col2 { box-shadow: 0 0 15px rgba(0, 0, 0, 0.1); }

.service-img{
    width: 70px;
}

/* Contact */

.contact-us{
    margin-bottom: 0px;
    padding: 0px 50px 60px 50px;
    text-align: center;
    display: grid;
    grid-template-rows: auto;
}

.contact-heading{
    margin-bottom: 50px;
}

textarea:focus, input:focus{
    outline: none;
}

input:focus::-webkit-input-placeholder { color:transparent; }
input:focus::-moz-placeholder { color:transparent; }
textarea:focus::-webkit-input-placeholder { color:transparent; }
textarea:focus::-moz-placeholder { color:transparent; }

.name-input{margin-right: 10px;}

.input{
    padding: 5px 10px;
    margin-top: 10px;
    border: 1px solid rgb(128, 128, 128, 0.6);
    text-decoration: none;
    border-radius: 10px;
}

.inpt{
    width:40%;
}

.textarea{ 
    resize: none; 
    overflow: auto;
    width: 82%;
    height: 120px;
}

.submit-btn{
    width: 150px;
    background:#fff;
    color: #000;
    transition: 0.3s ease;
}

.submit-btn:hover{
    background-color: #ff613a;
    color: #fff;
    border: 1px solid #ff613a;
}

footer{
    margin-bottom: 0px;
    font-size: 13px;
    background-color: #3b2b69;
    padding: 25px 90px 1px 90px;
    color: #fff;
}

footer .logo{
    color: #fff;
    font-size: 25px;
}

.footer-icons{
    text-align: right; 
    font-size: 28px;
}

footer .fa{
    margin-left: 20px;
    font-size: 15px;
    cursor: pointer;
}

.fa:hover{
    color: #ff613a;
}

.copy-link{
    text-align: left;
    padding-top: 15px;
}

.copy-link a:hover{
    color: #ff613a;
}

footer a{
    color: #fff;
    margin-left: 12px;
}

footer a:link, a:visited{
    text-decoration: none;
}

@media only screen and (max-width: 990px) {
    .navbar{
        padding: 35px 60px 15px 60px !important; 
    }
    .navbar.scrolled{
        padding: 1px 60px!important;
    }
    .contact-us{
        padding: 50px 5px;
    }
}

@media only screen and (max-width: 766px) {
    .intro-heading {
      order:1;
      text-align: center;
    }
    .intro-image{
        width:100%;
        text-align: center;
    }
    .intro-image img{
        width: 80%;
        height:auto;
    }
    .services-container .col-md-6{
        width: 90%;
        text-align: center;
        margin-bottom: 15px;
    }
    .service-card{
        display: inline-block;
        margin: 0 auto;
    }
    .img-right{
        margin-left: 0px !important;
    }
    .contact-us{
        width: 100vw;
    }
    .inpt, .textarea, .submit-btn{
        width:100%;
    }
}
@media only screen and (max-width: 576px) {
    .navbar{
        padding: 35px 20px 15px 20px !important; 
    }
    .navbar.scrolled{
        padding: 1px 20px!important;
    }
    .intro-heading{
        margin: 5px;
    }
    .footer-icons{
        order:1;
        text-align: left;
    }
    footer .fa{
        margin-left: 0px;
        margin-right: 20px;
    }
    footer{
        padding: 15px 25px 1px 25px;
    }
}
</style>
</head>

<body data-spy="scroll" data-offset="85" data-target="#myNavbar">

    <nav id="myNavbar" class="navbar navbar-expand-lg navbar-light sticky-top">
        <a class="navbar-brand" href="#"><span class="logo">Ebook Reader</span></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText"
            aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarText">
            <ul class="navbar-nav mr-auto"></ul>
            <span class="navbar-text">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="#intro">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#about">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">Contact</a>
                    </li>
                </ul>
            </span>
            <form class="form-inline">
                <button class="form-inline-btn" formaction="login.php">Sign In</button>
                <button class="form-inline-btn" formaction="register.php">Sign Up</button>
            </form>
        </div>

    </nav>