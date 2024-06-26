<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sky Light Books | All Books</title>

    <!--Styles -->
    <link href="../../css/main.css" rel="stylesheet">
    <link href="../../css/items.css" rel="stylesheet">

    <link href="../../css/home.css" rel="stylesheet">
    <link  href="../../fonts/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet">
</head>
<body class="home">
<!--Header Navigation Bar -->
<header class="header">
    <h1><i class="fa fa-shopping-cart" style="color: orangered"></i> ????</h1>
    <ul class = "link-navigation">
        <li ><a href = "../../index.php"><i class="fa fa-home"></i> home</a></li>
        <li><a href = "../signin.php"><i class="fa fa-sign-in"></i> sign in</a></li>
        <li ><a href = "../signup.php"><i class="fa fa-user-circle-o"></i> sign up</a></li>
        <li class = "home-link"><a href = "../allitems.php"><i class="fa fa-book"></i> items</a></li>
        <li ><a href = "../checkout.php"><i class="fa fa-cart-plus"></i> checkout (<span class="items"></span>)</a></li>
    </ul>
</header>
<!--Main Content -->
<div class="searchDiv">
    <form>
        <i class="fa fa-search fa-2x"></i>
        <input type="text" placeholder="search for books by title or author...">
        <button type="submit">search <i class="fa fa-search-plus"></i> </button>
    </form>
</div>
<!--<hr>-->
<main>
    <div class="navList">
        <h3><i class="fa fa-filter"></i> filter section</h3>
        <nav>
            <form>
                <div>
                    <p>filter by year</p>
                    <input id="yeara" type="checkbox">
                    <label for="yeara">2018</label>
                    <br>
                    <input id="yearb" type="checkbox">
                    <label for="yearb">2017</label>
                    <br>
                    <input id="yearc" type="checkbox">
                    <label for="yearc">2016</label>
                    <br>
                    <input id="year" type="checkbox">
                    <label for="year">below 2016</label>
                    <br>
                </div>

                <div>
                    <p>filter by price</p>
                    <input id="pricea" type="checkbox">
                    <label for="pricea">above GHC 100</label>
                    <br>
                    <input id="priceb" type="checkbox">
                    <label for="priceb">GHC 100</label>
                    <br>
                    <input id="pricec" type="checkbox">
                    <label for="pricec">GHC 50</label>
                    <br>
                    <input id="price" type="checkbox">
                    <label for="price">below GHC 50</label>
                    <br>
                </div>

                <div class="categories">
                    <p>categories</p>
                    <span><i class="fa fa-heartbeat"></i> <a href="../pages/hp.php"> HealthPotion</a></span>
                        <br>
                        <span><i class="fa fa-user-md"></i> <a href="s.html"> Alchemy</a></span>
                        <br>
                        <span><i class="fa fa-laptop"></i> <a href="cs.html">Mechanical</a></span>
                        <br>
                        <span><i class="fa fa-cogs"></i> <a href="eng.html"> Engineer</a></span>
                        <br>
                        <span><i class="fa fa-child"></i> <a href="k.html"> Familiar</a></span>
                    <br>
                </div>
            </form>
        </nav>
    </div>
    <div class="bookList">
        <h3>Displaying Health potions</h3>
        <div class="singleBook">
            <a href="../single5.html"><img src="../../images/books/health/h1.jpg" height="150px" width="150px"></a>
            <p><i class="fa fa-cart-plus fa-2x" onclick="addToCart();"></i> GHC 14.00</p>

        </div>

        <div class="singleBook">
            <a href="../single5.html"><img src="../../images/books/health/h2.jpg" height="150px" width="150px"></a>
            <p><i class="fa fa-cart-plus fa-2x" onclick="addToCart();"></i> GHC 17.00</p>

        </div>

        <div class="singleBook">
            <a href="../single5.html"> <img src="../../images/books/health/h3.jpg" height="150px" width="150px"></a>
            <p><i class="fa fa-cart-plus fa-2x" onclick="addToCart();"></i> GHC 22.00</p>
        </div>

        <div class="singleBook">
            <a href="../single5.html"><img src="../../images/books/health/h4.jpg" height="150px" width="150px"></a>
            <p><i class="fa fa-cart-plus fa-2x" onclick="addToCart();"></i> GHC 17.00</p>
        </div>

        <div class="singleBook">
            <a href="../single5.html"> <img src="../../images/books/health/h5.jpg" height="150px" width="150px"></a>
            <p><i class="fa fa-cart-plus fa-2x" onclick="addToCart();"></i> GHC 27.00</p>
        </div>

        <div class="singleBook">
            <a href="../single5.html"><img src="../../images/books/health/h6.jpg" height="150px" width="150px"></a>
            <p><i class="fa fa-cart-plus fa-2x" onclick="addToCart();"></i> GHC 17.00</p>
        </div>

        <div class="singleBook">
            <a href="../single5.html"><img src="../../images/books/health/h7.jpg" height="150px" width="150px"></a>
            <p><i class="fa fa-cart-plus fa-2x" onclick="addToCart();"></i> GHC 28.00</p>
        </div>

        <div class="singleBook">
            <a href="../single5.html"><img src="../../images/books/health/h8.jpg" height="150px" width="150px"></a>
            <p><i class="fa fa-cart-plus fa-2x" onclick="addToCart();"></i> GHC 17.00</p>
        </div>

        <div class="singleBook">
            <a href="../single5.html"><img src="../../images/books/health/h9.jpg" height="150px" width="150px"></a>
            <p><i class="fa fa-cart-plus fa-2x" onclick="addToCart();"></i> GHC 14.00</p>
        </div>

        <div class="singleBook">
            <a href="../single5.html"><img src="../../images/books/health/h10.jpg" height="150px" width="150px"></a>
            <p><i class="fa fa-cart-plus fa-2x" onclick="addToCart();"></i> GHC 10.00</p>
        </div>

        <div class="pagination">
            <p><i class="fa fa-chevron-left fa-2x"></i> <span><a href="../allbooks.html"> Prev</a> | <a href="#"> Next</a></span> <i class="fa fa-chevron-right fa-2x"></i> </p>
        </div>
    </div>


</main>

<footer>
    <p> &copy; Copyright 2018</p>
</footer>

<script src="../../js/items.js" type="text/javascript"></script>
</body>
</html>
