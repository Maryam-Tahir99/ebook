<?php 
require "./template/header.php";  ?>

    <section >
        <div id="intro" class="container intro">
            <div class="row">
                <div class="col-md-6 intro-heading">
                    <h1 class="brand-heading">Welcome</h1>
                    <p class="intro-text">Explore the world, and find out what you don't know by reading.</p>
                    <a href="register.php">
                    <button href="register.php">Sign Up</button></a>
                </div>
                <div class="col-md-6 intro-image">
                    <img src="images/banner.png" alt="">
                </div>
            </div>
        </div>
    </section>

    <section class="big-service-container">
        <div id="about" class="container services-container">
            <h1>What You Can Do</h1>
            <div class="row">
                <div class="col-md-6 row1-col1">
                    <div class="service-card">
                        <img class="service-img" src="images/upload.png" alt="upload icon">
                    </div>
                </div>
                <div class="col-md-6 service-text row1-col2">
                    <h5>Upload Your Book</h5>
                    <p>Upload one or several books from your personal device and start reading right away!</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 row2-col1">
                    <div class="service-card img-right">
                        <img class="service-img" src="images/collection.png" alt="create collection icon">
                    </div>
                </div>
                <div class="col-md-6 service-text row2-col2">
                    <h5>Build Collections</h5>
                    <p>Build collections of your choice, and sort through them using filters based on genre, author and more! Coming Soon.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 row3-col1">
                    <div class="service-card">
                <img class="service-img" src="images/offline.png" alt="view offline icon">
                    </div>
                </div>
                <div class="col-md-6 service-text row3-col2">
                    <h5>Read Offline</h5>
                    <p>Read your books and maintain your progress even if you go offline!</p>
                </div>
            </div>
        </div>
    </section>

    <div id="contact" class="container contact-us">
        <div class="contact-heading">
            <h1>How Can We Help You?</h1>
            <h6>Have a question or a suggestion? Drop us an email!</h6>
        </div>

        <form action="mailto:xyz@example.com">
            <div>
                <input type="text" class="input name-input inpt" size="27" required placeholder="Name">
                <input type="email" class="input inpt" size="27" required placeholder="E-mail">
            </div>
            <div>
                <textarea name="name" class=" input textarea" id="" required placeholder="Your Message"></textarea>
            </div>
            <div>
                <input type="submit" class="input submit-btn" value="Send">
            </div>
        </form>
    </div>
<?php
  require "./template/footer.php";
?>
    
