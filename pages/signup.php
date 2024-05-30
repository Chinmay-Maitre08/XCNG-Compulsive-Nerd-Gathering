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
            <li><a href="signin.php"><i class="fa fa-sign-in"></i> sign in</a></li>
            <li class="home-link"><a href="signup.php"><i class="fa fa-user-circle-o"></i> sign up</a></li>
            <li><a href="allitems.php"><i class="fa fa-book"></i> items</a></li>
            <li><a href="checkout.php"><i class="fa fa-cart-plus"></i> checkout</a></li>
        </ul>
    </header>

    <main>
        <nav>
        </nav>
        <article>
            <h3 class="signupTitle">Welcome, please register with us</h3>
            <hr>
            <!-- Form for user registration -->
            <form method="post" action="signup.php" onsubmit="return validateForm();">
                <div>
                    <i class="fa fa-envelope-o fa-2x"></i>
                    <input type="text" id="username" name="username" placeholder="username" autofocus>
                </div>
                <div>
                    <i class="fa fa-envelope-o fa-2x"></i>
                    <input type="email" id="email" name="email" placeholder="someone@gmail.com" autofocus>
                </div>
                <div>
                    <i class="fa fa-key fa-2x"></i>
                    <input type="password" id="password" name="password" placeholder="password">
                </div>
                <div>
                    <i class="fa fa-key fa-2x"></i>
                    <input type="password" id="confirmPassword" name="confirmPassword" placeholder="confirm password">
                </div>
                <button type="submit" name="submit">Submit <i class="fa fa-database"></i></button>
            </form>

            <h3 class="signupTitle">or, sign up with</h3>
            <hr>
            <button class="fbSignIn" onclick="otherSignIn('facebook');"><i class="fa fa-facebook-f"></i> </button>
            <button class="gSignIn" onclick="otherSignIn('google');"><i class="fa fa-google"></i> </button>
            <button class="tSignIn" onclick="otherSignIn('twitter');"><i class="fa fa-twitter"></i> </button>
        </article>
    </main>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $username = $_POST["username"];
        $email = $_POST["email"];
        $password = $_POST["password"];

        // Check if any of the fields are empty
        if (empty($username) || empty($email) || empty($password)) {
            echo "<script>alert('Error: Please fill in all the required fields.');</script>";
        } else {
            $db = new mysqli("localhost", "root", "", "register");

            if ($db->connect_error) {
                die("Connection failed: " . $db->connect_error);
            }

            // Hash the password before storing it
            $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

            $sql = $db->prepare("INSERT INTO users (name, password, email) VALUES (?,?,?)");
            $sql->bind_param("sss", $username, $hashedPassword, $email);

            if ($sql->execute()) {
                echo "Success";
                header("Location: signin.php");
            } else {
                echo "<script>alert('Error: Unable to register. Please try again later.');</script>";
            }

            $sql->close();
            $db->close();
        }
    }
    ?>

    <script src="../js/signup.js" type="text/javascript"></script>
    <script src="../js/home.js" type="text/javascript"></script>

    <script type="text/javascript">
        function validateForm() {
            var username = document.getElementById("username").value;
            var email = document.getElementById("email").value;
            var password = document.getElementById("password").value;
            var confirmPassword = document.getElementById("confirmPassword").value;

            if (username === "" || email === "" || password === "" || confirmPassword === "") {
                alert("Error: Please fill in all the required fields.");
                return false;
            }

            if (password !== confirmPassword) {
                alert("Error: Passwords do not match.");
                return false;
            }

            return true;
        }
    </script>
</body>

</html>