<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>XCNG</title>

    <link href="../css/main.css" rel="stylesheet">
    <link href="../css/checkout.css" rel="stylesheet">
    <link href="../fonts/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <style>
        body {
            display: flex;
            flex-direction: column;
            align-items: center;
            text-align: center;
        }

        .header {
            text-align: center;
        }

        .link-navigation {
            display: flex;
            justify-content: center;
        }

        .main {
            display: flex;
            align-items: center;
        }

        .checkout-container {
            text-align: left;
        }

        .shipping-info,
        .payment-info {
            margin: 10px;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            text-align: left;
        }

        .checkout-items {
            text-align: left;
            margin: 10px;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .descriptionDiv {
            display: flex;
            align-items: center;
        }

        .total {
            margin-top: 10px;
        }
    </style>
</head>

<body class="checkout">

    <header class="header">
        <h1><i class="fa fa-shopping-cart" style="color: rgb(166, 0, 255)"></i> XCNG</h1>
        <ul class="link-navigation">
            <li><a href="../index.php"><i class="fa fa-home"></i> home</a></li>
            <li><a href="signin.php"><i class="fa fa-sign-in"></i> sign in</a></li>
            <li><a href="signup.php"><i class="fa fa-user-circle-o"></i> sign up</a></li>
            <li><a href="allitems.php"><i class="fa fa-book"></i> items</a></li>
            <li class="home-link"><a href="checkout.php"><i class="fa fa-cart-plus"></i> checkout</a></li>
        </ul>
    </header>

    <main class="main">
        <div class="checkout-container">
            <div class="payment-info">
                <h3><i class="fa fa-ship" style="color: rgb(166, 0, 255)"></i> Shipping Information</h3>
                <hr>
                <form method='post'>
                    <div>
                        <i class="fa fa-user-circle"></i>
                        <input type="text" name="name" autofocus placeholder="Full Name">
                    </div>
                    <div>
                        <i class="fa fa-map-marker"></i>
                        <input type="text" name="country" placeholder="Country">
                    </div>

                <h3><i class="fa fa-credit-card-alt" style="color: rgb(166, 0, 255); margin-right: 5px;"></i> Card Information</h3>
                <hr>

                    <div>
                        <p><i class="fa fa-sticky-note-o"></i> Card Number</p>
                        <i class="fa fa-credit-card-alt"></i>
                        <input type="text" name="cardNumber" placeholder="XXXX-XXXX-XXXX-XXXX">
                    </div>
                    <div style="margin-top: 10px;">
                        <p><i class="fa fa-sticky-note-o"></i> Card Type</p>
                        <i class="fa fa-credit-card-alt"></i>
                        <input type="radio" name="cardType" id="visaATM" onclick="cardSelected(); value='VisaATM'"> <label for="visaATM"> Visa ATM Card</label>
                        <input type="radio" name="cardType" id="masterCard" onclick="cardSelected(); value='MasterCard'"> <label for="masterCard"> Master Card</label>
                    </div>
                    <div style="margin-top: 10px;">
                        <p><i class="fa fa-sticky-note-o"></i> Card Expiry Date</p>
                        <i class="fa fa-calendar-minus-o"></i>
                        <input type="date" name="expiryDate">
                    </div>
                    <br><button type="submit" name="submit">Submit <i class="fa fa-database"></i></button>
                </form>
            </div>
        </div>

        <div class="checkout-items">
            <h3><i class="fa fa-shopping-basket" style="color: rgb(166, 0, 255)"></i> Checkout Items</h3>
            <hr>
            <div class="descriptionDiv">
                <!-- Display your checkout items here -->
            </div>
            <p class="total"><i class="fa fa-money"></i> </p>
        </div>
    </main>

    <footer>
        <p>&copy; Copyright 2023</p>
    </footer>
    <script src="../js/checkout.js" type="text/javascript"></script>

    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST")
        {
            $name = $_POST["name"];
            $country = $_POST["country"];
            $cardNumber = $_POST["cardNumber"];
            $cardType = $_POST["cardType"];
            $expiryDate = $_POST["expiryDate"];
    
            $db = new mysqli("localhost", "root", "", "register");
    
            if ($db->connect_error) {
                die("Connection failed: " . $db->connect_error);
            }
    
            $sql = $db->prepare("INSERT INTO checkout_info (name, country, cardNumber, cardType, expiryDate) VALUES (?,?,?,?,?)");
            $sql->bind_param("sssss", $name, $country, $cardNumber, $cardType, $expiryDate);
    
            if ($sql->execute()) {
                // echo "Success";
                // header("Location: signin.php");
            } else {
                echo "Error: " . $sql->error;
            }
    
            $sql->close();
            $db->close();
        }
    ?>

</body>

</html>