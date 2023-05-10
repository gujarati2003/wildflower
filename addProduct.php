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
    </div>

    <center>
        <p>ADD PRODUCT</p>
        <div class="login">
            <form action="addProductPHP.php" method="post" id="form1" style="width:100%;">
                <label for="product_name">
                    <b>PRODUCT NAME:</b>
                </label>
                <input type="text" name="product_name" id="product_name" placeholder="ENTER PRODUCT NAME">
                <br><br>
                <label for="product_img">
                    <b>PRODUCT IMG:</b>
                </label>
                <input type="text" name="product_img" id="product_img" placeholder="ENTER IMG RELATIVE PATH">
                <br><br>
                <label for="category_id">
                    <b>CATEGORY ID:</b>
                </label>
                <input type="text" name="category_id" id="category_id" placeholder="ENTER CATEGORY ID">
                <br><br>
                <label for="product_price">
                    <b>PRICE:</b>
                </label>
                <input type="text" name="product_price" id="product_price" placeholder="ENTER PRODUCT PRICE">
                <br><br>

                <button type="submit" id="log" form="form1" value="Submit">ADD PRODUCT</button>
                <p> </p>
            </form>
        </div>
    </center>

    <br><br>

    <footer>
        <center>
            <p>&copy;2023 ADS Management Co. All Rights Reserved</p>
        </center>
    </footer>
</body>

</html>