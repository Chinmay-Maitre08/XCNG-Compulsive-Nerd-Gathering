<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>XCNG</title>
    <link href="../css/main.css" rel="stylesheet">
    <link href="../css/items.css" rel="stylesheet">
    <link href="../fonts/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet">
</head>

<body class="home">

    <header class="header">
        <h1><i class="fa fa-shopping-cart" style="color: rgb(166, 0, 255)"></i> XCNG</h1>
        <ul class="link-navigation">
            <li><a href="../index.php"><i class="fa fa-home"></i> home</a></li>
            <li><a href="signin.php"><i class="fa fa-sign-in"></i> sign in</a></li>
            <li><a href="signup.php"><i class="fa fa-user-circle-o"></i> sign up</a></li>
            <li class="home-link"><a href="allitems.php"><i class="fa fa-items"></i> items</a></li>
            <li><a href="checkout.php"><i class="fa fa-cart-plus"></i> checkout <span class="items"></span></a></li>
        </ul>
    </header>
    <!--Main Content -->
    <div class="searchDiv">
        <form>
            <i class="fa fa-search fa-2x"></i>
            <input type="text" placeholder="search for items by title or author...">
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
                        <label for="yeara">2023</label>
                        <br>
                        <input id="yearb" type="checkbox">
                        <label for="yearb">2022</label>
                        <br>
                        <input id="yearc" type="checkbox">
                        <label for="yearc">2021</label>
                        <br>
                        <input id="year" type="checkbox">
                        <label for="year">below 2020</label>
                        <br>
                    </div>
                    <div>
                        <p>filter by price</p>
                        <input id="pricea" type="checkbox">
                        <label for="pricea">above 1000</label>
                        <br>
                        <input id="priceb" type="checkbox">
                        <label for="priceb"> Rs. 500</label>
                        <br>
                        <input id="pricec" type="checkbox">
                        <label for="pricec">Rs 250</label>
                        <br>
                        <input id="price" type="checkbox">
                        <label for="price">Rs 100</label>
                        <br>
                    </div>
                    <div class="categories">
                        <p>categories</p>
                        <span><i class="fa fa-heartbeat"></i> <a href="../pages/health/hp.php"> HealthPotion</a></span>
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
        <div class="itemsList">
            <h3>Displaying all items</h3>
            <div class="singleitems">
                <a href="single4.php"><img src="../images/assets/item13.jpg" height="150px" width="150px"></a>
                <p><i class="fa fa-cart-plus fa-2x" onclick="addToCart();"></i> Rs. 1000.00</p>
            </div>

            <div class="singleitems">
                <a href="single2.php"><img src="../images/assets/item2.jpg" height="150px" width="150px"></a>
                <p><i class="fa fa-cart-plus fa-2x" onclick="addToCart();"></i> Rs. 200.00</p>

            </div>

            <div class="singleitems">
                <a href="single.php"> <img src="../images/assets/item3.jpg" height="150px" width="150px"></a>
                <p><i class="fa fa-cart-plus fa-2x" onclick="addToCart();"></i> Rs. 600.00</p>
            </div>

            <div class="singleitems">
                <a href="single.php"><img src="../images/assets/item4.jpg" height="150px" width="150px"></a>
                <p><i class="fa fa-cart-plus fa-2x" onclick="addToCart();"></i> Rs. 400.00</p>
            </div>

            <div class="singleitems">
                <a href="single.php"> <img src="../images/assets/item5.jpg" height="150px" width="150px"></a>
                <p><i class="fa fa-cart-plus fa-2x" onclick="addToCart();"></i> Rs. 400.00</p>
            </div>

            <div class="singleitems">
                <a href="single.php"><img src="../images/assets/item6.jpg" height="150px" width="150px"></a>
                <p><i class="fa fa-cart-plus fa-2x" onclick="addToCart();"></i> Rs. 500.00</p>
            </div>

            <div class="singleitems">
                <a href="single.php"><img src="../images/assets/item7.jpg" height="150px" width="150px"></a>
                <p><i class="fa fa-cart-plus fa-2x" onclick="addToCart();"></i> Rs. 700.00</p>
            </div>

            <div class="singleitems">
                <a href="single.php"><img src="../images/assets/item8.jpg" height="150px" width="150px"></a>
                <p><i class="fa fa-cart-plus fa-2x" onclick="addToCart();"></i> Rs. 1200.00</p>
            </div>

            <div class="singleitems">
                <a href="single.php"><img src="../images/assets/item9.jpg" height="150px" width="150px"></a>
                <p><i class="fa fa-cart-plus fa-2x" onclick="addToCart();"></i> Rs. 450.00</p>
            </div>

            <!-- <div class="singleitems">
                <a href="single.php"><img src="../images/item11.jpg" height="150px" width="150px"></a>
                <p><i class="fa fa-cart-plus fa-2x" onclick="addToCart();"></i> Rs. 230.00</p>
            </div> -->
            <div class="singleitems">
                <a href="single.php"><img src="../images/assets/item10.jpg" height="150px" width="150px"></a>
                <p><i class="fa fa-cart-plus fa-2x" onclick="addToCart();"></i> Rs. 400.00</p>
            </div>
            <div class="singleitems">
                <a href="single.php"><img src="../images/assets/item11.jpg" height="150px" width="150px"></a>
                <p><i class="fa fa-cart-plus fa-2x" onclick="addToCart();"></i> Rs. 450.00</p>
            </div>
            <div class="singleitems">
                <a href="single.php"><img src="../images/assets/item12.jpg" height="150px" width="150px"></a>
                <p><i class="fa fa-cart-plus fa-2x" onclick="addToCart();"></i> Rs. 700.00</p>
            </div>
            <div class="singleitems">
                <a href="single.php"><img src="../images/assets/item13.jpg" height="150px" width="150px"></a>
                <p><i class="fa fa-cart-plus fa-2x" onclick="addToCart();"></i> Rs. 450.00</p>
            </div>
            <div class="singleitems">
                <a href="single.php"><img src="../images/assets/item9.jpg" height="150px" width="150px"></a>
                <p><i class="fa fa-cart-plus fa-2x" onclick="addToCart();"></i> Rs. 900.00</p>
            </div>
            <div class="pagination">
                <p><i class="fa fa-chevron-left fa-2x"></i> <span><a href="#"> Prev</a> | <a href="#"> Next</a></span> <i class="fa fa-chevron-right fa-2x"></i> </p>
            </div>
        </div>

    </main>

    <footer>
        <p> &copy; Copyright 2023</p>
    </footer>

    <script src="../js/allitems.js" type="text/javascript"></script>
</body>

</html>