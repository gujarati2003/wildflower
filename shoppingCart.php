<?php
session_start();
?>
<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta charset="utf-8" />
    <link href="style2.css" rel="stylesheet">
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
    </div>

    <center>
        <p>YOUR CART</p>

        <table id="table">
            <thread>
                <tr id="tr">
                    <th>
                        PRODUCT ID
                    </th>
                    <th>
                        PRODUCT NAME
                    </th>
                    <th>
                        PRODUCT PRICE
                    </th>
                    <th>
                        DELETE
                    </th>
                </tr>
            </thread>
            <tbody>
                <?php
                $total_cost = 0;

                if (isset($_SESSION['cart'])) {
                    foreach ($_SESSION['cart'] as $product) {
                        echo "<center><tr>";
                        echo "<form action='deleteCart.php' method='post'>";
                        foreach ($product as $key => $value) {
                            if ($key == 0) {
                                echo "<input type='hidden' name='name$key' value='" . $value . "'>";
                                echo "<td id='td'>" . $value . "</td>";
                            }
                            if ($key === 1) {
                                echo "<input type='hidden' name='name$key' value='" . $value . "'>";
                                echo "<td id='td'>" . $value . "</td>";
                            }
                            if ($key === 2) {
                                echo "<input type='hidden' name='name$key' value='" . $value . "'>";
                                echo "<td id='td'>" . $value . "</td>";
                                $total_cost += intval($value);
                            }
                            if ($key === 2) {
                                echo "<td id='td'><input class='btn-danger' type='submit' name='event' value='Delete'></td>";
                            }
                        }
                        echo "</form>";
                        echo "</tr></center>";
                    }
                    echo "<p>SUBTOTAL: $" . $total_cost . "</p>";
                }
                ?>
            </tbody>
        </table>
        <form action="checkout.php" method="post">
            <input type="submit" value="Checkout">
        </form>
        <style>
            #table {
                width: 100%;
                border: #ef00e3;
                position: relative;
            }

            #tr {
                font-size: 20px;
                font-weight: 200;
                background: #8AFF8A;

            }

            #td {
                font-size: 13px;
                text-align: center;
                vertical-align: middle;
                position: relative;
            }
        </style>

    </center>

</body>

</html>