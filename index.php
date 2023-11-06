<!DOCTYPE html>
<html lang="en">
<?php
    session_start();
?>

<head>
    <meta charset="UTF-8">
    <title>XCNG</title>
    <link href="css/main.css" rel="stylesheet">
    <link href="css/home.css" rel="stylesheet">
    <link href="fonts/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body class="home">
    <header class="header">
        <h1><i class="fa fa-shopping-cart" style="color: rgb(166, 0, 255)"></i> XCNG</h1>
        <div id="background-slideshow">
        <img src="images/background1.jpg" alt="Background Image 1">
         <img src="images/background2.jpg" alt="Background Image 2">
        <img src="images/background3.jpg" alt="Background Image 3">
        </div>

        <div>
            <h3>Welcome to XCNG</h3>
            
            <p>The best AUCTION site to buy and sell all the rarest gaming items</p>
            <nav>
                <a href="pages/signup.php"><i class="fa fa-user"></i> sign up</a>
                <a href="pages/signin.php"><i class="fa fa-sign-in"></i> sign in</a>
                <a href="pages/allitems.php"><i class="fa fa-arrow-circle-o-right"></i> gaming items</a>
            </nav>
        </div>
    </header>
    <main>
        <h3>Featured gaming items</h3>
        <hr>
        <div class="featuredBooks">
            <img src="images/assets/item1.jpg" height="150px" width="150px">
            <img src="images/assets/item2.jpg" height="150px" width="150px">
            <img src="images/assets/item3.jpg" height="150px" width="150px">
            <img src="images/assets/item4.jpg" height="150px" width="150px">
            <img src="images/assets/item7.jpg" height="150px" width="150px">
            <img src="images/assets/item9.jpg" height="150px" width="150px">
        </div>

        <h3>About Us</h3>
        <hr>
        <div class="aboutUs">
            <div class="aboutUsText">
                <p> </p>
                <ol>
                    <li>Sale of best selling items</li>
                    <li>Sale of the most sought after gaming items</li>
                    <li>Sale of current  gaming items</li>
                    <li>We deliver gaming items in links and downloadable packages</li>
                    <li>and many more services...</li>
                </ol>
            </div>
            <div class="aboutUsLogo">
                <h1 style="color: rgb(166, 0, 255);"><i class="fa fa-shopping-cart" style="color: rgb(166, 0, 255)"></i> XCNG</h1>
            </div>
        </div>

        <script src="../js/home.js" type="text/javascript"></script>

        <h3>Contact Us</h3>
        <hr>
        <div class="contactUs">
            <div class="contactUsForm">
                <p>We will be glad to here from you...</p>
                <form onsubmit="event.preventDefault(); validateContactUsForm();">
                    <div>
                        <i class="fa fa-envelope-o "></i>
                        <input type="email" id="email" placeholder="someone@gmail.com">
                    </div>
                    <div>
                        <i class="fa fa-user-circle "></i>
                        <input type="text" id="name" placeholder="name">
                    </div>
                    <div>
                        <i class="fa fa-comment-o"></i>
                        <textarea id="messageArea">Your message here</textarea>
                    </div>
                    <button>send <i class="fa fa-send-o"></i> </button>
                </form>
                <br>
                <br>
            </div>
            <div class="contactUsImage">
                <a href="#"><i class="fa fa-facebook-f fa-2x" style="color: blue;"></i> </a>
                <a href="#"><i class="fa fa-twitter fa-2x" style="color: deepskyblue;"></i> </a>
                <a href="#"><i class="fa fa-whatsapp fa-2x" style="color: forestgreen;"></i> </a>
            </div>
        </div>

    </main>


    <footer>
        <p> &copy; Copyright 2018</p>
    </footer>

    <script src="js/index.js" type="text/javascript"></script>

</body>

</html>