<?php

session_start();

if (isset($_SESSION["user_id"])) {

    $mysqli = require __DIR__ . "/database.php";

    $sql = "SELECT * FROM user
            WHERE id = {$_SESSION["user_id"]}";

    $result = $mysqli->query($sql);

    $user = $result->fetch_assoc();
}

?>

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
            echo $user["id"];

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
                        <a href="login.php"><button class="register">
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

            <?php if ($user["id"] == 13): ?>

                <p style="font-size: 60px; color: #0074B7; font-weight: bold;">WELCOME BACK
                    <?= strtoupper(htmlspecialchars($user["name"])) ?>
                </p>

                <p><a href="addProduct.php" style="font-size: 40px; color: #77DD77;">ADD A PRODUCT</a></p>
                <center>
                    <p style="font-size: 20px; font-weight: bold; color:hotpink;">YOUR PROFILE</p>
                    <p>NAME:
                        <?= strtoupper(htmlspecialchars($user["name"])) ?>
                    </p>
                    <p>EMAIL:
                        <?= strtoupper(htmlspecialchars($user["email"])) ?>
                    </p>
                    <p style="color:#9169c1; font-weight: bold;"><a href='yourOrders.php'>VIEW YOUR ORDERS</a></p>
                    <p style="color:#9169c1; font-weight: bold;"><a href="logout.php">Log out</a></p>
                </center>

            <?php elseif (isset($user)): ?>
                <p style="font-size: 60px; color: #0074B7; font-weight: bold;">WELCOME BACK
                    <?= strtoupper(htmlspecialchars($user["name"])) ?>
                </p>
                <p style="font-size: 30px;">WE MISSED YOU</p>
                <center>
                    <p style="font-size: 20px; font-weight: bold; color:hotpink;">YOUR PROFILE</p>
                    <p>NAME:
                        <?= strtoupper(htmlspecialchars($user["name"])) ?>
                    </p>
                    <p>EMAIL:
                        <?= strtoupper(htmlspecialchars($user["email"])) ?>
                    </p>
                    <p style="color:#9169c1; font-weight: bold;"><a href='yourOrders.php'>VIEW YOUR ORDERS</a></p>
                    <p style="color:#9169c1; font-weight: bold;"><a href="logout.php">Log out</a></p>
                 </center>
            <?php else: ?>

                <p><a href="login.php">LOG IN</a> or <a href="signup.html">SIGN UP</a></p>

            <?php endif; ?>
        </center>
        <footer>
            <center>
                <p>&copy;2023 ADS Management Co. All Rights Reserved</p>
            </center>
        </footer>
</body>

</html>