<?php

$is_invalid = false;

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $mysqli = require __DIR__ . "/database.php";

    $sql = sprintf("SELECT * FROM user
                    WHERE email = '%s'",
        $mysqli->real_escape_string($_POST["email"])
    );

    $result = $mysqli->query($sql);

    $user = $result->fetch_assoc();

    if ($user) {

        if (password_verify($_POST["Pass"], $user["password_hash"])) {

            session_start();

            session_regenerate_id();

            $_SESSION["user_id"] = $user["id"];

            header("Location: loginSuccess.php");
            exit;
        }
    }

    $is_invalid = true;
}


?>
<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta charset="utf-8" />
    <link href="styles.css" rel="stylesheet">
    <title>Wildflower Boutique</title>
    <link rel="icon" href="login/XbOADFTkafjCCII.png">
</head>

<body>
    <div class="clearfix header">
        <div>
            <div>
                <div style="text-align:right;">
                    <span>
                        <a href="login.html"><button class="register">
                                <p>LOGIN</p>
                            </button></a>
                    </span>
                    <span>
                        <a href="shoppingCart.php"><button class="register">
                                <p>CART</p>
                            </button></a>
                    </span>
                    <span>
                        <a href="register.html"><button class="register">
                                <p>REGISTER</p>
                            </button></a>
                    </span>
                </div>
            </div>
        </div>

        <div style="text-align: center;">
            <span>
                <h1>Wildflower Boutique</h1>
            </span>
        </div>

    </div>

    <!-- Navigation -->
    <br>
    <div class="topnav">
        <center>
            <table class="nav">
                <tr>
                    <td>
                        <a class="active" href="index.php">HOME</a>
                    </td>
                    <td>
                        <a href="bottoms.php">BOTTOMS</a>
                    </td>
                    <td>
                        <a href="tops.php">TOPS</a>
                    </td>
                    <td>
                        <a href="dresses.php">DRESSES</a>
                    </td>
                    <td>
                        <a href="jackets.php">JACKETS</a>
                    </td>
                    <td>
                        <a href="shoes.php">SHOES</a>
                    </td>
                </tr>
            </table>
        </center>
        <hr>

        <center>
            <p>LOGIN TO EARN POINTS AND TRACK ORDERS</p>
        </center>

        <center>
            <div class="login">
                <br>
                <?php if ($is_invalid): ?>
                    <p>Invalid login</p>
                <?php endif; ?>
                <div>
                    <form id="form2" method="post">

                        <label for="email">
                            <b>EMAIL</b>
                        </label>
                        <input type="email" name="email" id="email" placeholder="ENTER YOUR EMAIL"
                            value="<?= htmlspecialchars($_POST["email"] ?? "") ?>">
                        <br><br>

                        <label for="Pass">
                            <b>PASSWORD</b>
                        </label>
                        <input type="password" name="Pass" id="Pass" placeholder="ENTER YOUR PASSWORD">
                        <br><br>

                        <button type="submit" id="log" form="form2" value="Submit">LOG IN</button>
                        <br><br>

                        <label for="check">
                            <b>REMEMBER ME?</b>
                        </label>
                        <input type="checkbox" id="check">
                    </form>
                </div>
            </div>
        </center>




        <center>
            <h2><b>SIGN UP FOR 15% OFF</b></h2>
            <form>
                <input type="tel" id="phoneNumber" name="phoneNumber" placeholder="Enter Phone Number"><br><br>
                <input type="submit" value="Submit">
                <p style="font-size: 10px">BY SIGNING UP VIA TEXT YOU AGREE TO RECEIVE RECURRING AUTOMATED MARKETING
                    MESSAGES AND SHOPPING CART REMINDERS AT THE PHONE NUMBER PROVIDED.</p>
            </form>
        </center>

        <footer>
            <footer>
                <center>
                    <p>&copy;2023 ADS Management Co. All Rights Reserved</p>
                </center>
            </footer>
</body>

</html>