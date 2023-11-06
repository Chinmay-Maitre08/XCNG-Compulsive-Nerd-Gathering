<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>XCNG</title>

    <link href="../css/main.css" rel="stylesheet">
    <link href="../css/signup.css" rel="stylesheet">
    <link href="../fonts/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet">
</head>

<body class="home">
    <header class="header">
        <h1><i class="fa fa-shopping-cart" style="color: orangered"></i> XCNG</h1>
        <ul class="link-navigation">
            <li><a href="../index.php"><i class="fa fa-home"></i> home</a></li>
            <li class="home-link"><a href="signin.php"><i class="fa fa-sign-in"></i> sign in</a></li>
            <li><a href="signup.php"><i class="fa fa-user-circle-o"></i> sign up</a></li>
            <li><a href="allitems.php"><i class="fa fa-book"></i> items</a></li>
            <li><a href="checkout.php"><i class="fa fa-cart-plus"></i> checkout</a></li>
        </ul>
    </header>
    <main>
        <nav>
        </nav>
        <article>
            <h3 class="signupTitle">Welcome, already registered, sign in</h3>
            <hr>
            <form method="post" action="signin.php" onsubmit="return validateForm();">
                <div>
                    <i class="fa fa-envelope-o fa-2x"></i>
                    <input type="email" id="email" name="email" placeholder="someone@gmail.com" autofocus>
                </div>
                <div>
                    <i class="fa fa-key fa-2x"></i>
                    <input type="password" id="password" name="password" placeholder="password">
                </div>

                <button type="submit" name="submit">Submit <i class="fa fa-database"></i></button>
            </form>

            <h3 class="signupTitle">or, sign in with</h3>
            <hr>
            <button class="fbSignIn" onclick="otherSignIn('facebook');"><i class="fa fa-facebook-f"></i> </button>
            <button class "gSignIn" onclick="otherSignIn('google');"><i class="fa fa-google"></i> </button>
            <button class="tSignIn" onclick="otherSignIn('twitter');"><i class="fa fa-twitter"></i> </button>
        </article>
    </main>

    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $email = $_POST["email"];
            $password = $_POST["password"];
            $db = new mysqli("localhost", "root", "", "register");
        
            if ($db->connect_error) {
                die("Connection failed: " . $db->connect_error);
            }
        
            // Check if the email exists in the database
            $sql = $db->prepare("SELECT * FROM users WHERE email = ?");
            $sql->bind_param("s", $email);
        
            if ($sql->execute()) {
                $result = $sql->get_result();
                if ($result->num_rows == 1) {
                    // Email exists in the database
                    $row = $result->fetch_assoc();
                    if (password_verify($password, $row["password"])) {
                       
                        header("Location: allitems.php");
                        exit(); 
                    } else {
                        echo "<script>alert('Invalid password');</script>";
                    }
                } else {
                    echo "<script>alert('Email not found in the database');</script>";
                }
            } else {
                echo "<script>alert('Error: " . $sql->error . "');</script>";
            }
        
            $sql->close();
            $db->close();
        }        
    ?>

    <script src="../js/signup.js" type="text/javascript"></script>

    <script type="text/javascript">
        function validateForm() {
            var email = document.getElementById("email").value;
            var password = document.getElementById("password").value;

            if (email === "" || password === "") {
                alert("Error: Please fill in all the required fields.");
                return false;
            }

            return true;
        }
    </script>
</body>

</html>