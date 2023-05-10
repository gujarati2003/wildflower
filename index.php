<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta charset="utf-8" />
    <!-- CSS Link -->
    <link href="styles.css" rel="stylesheet">
    <!--JS Link-->
    <script src="wildflower.js"></script>
    <script src="index.js"></script>
    <title>Wildflower Boutique</title>
    <link rel="icon" href="login/XbOADFTkafjCCII.png">
</head>

<body>

    <div class="clearfix header">
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
        <div class="freeShipping" style="background-color:#0FFF50; width: fit-content; text-align:left;">
            <p style="font-family:Impact, fantasy; font-size:20px;">FREE SHIPPING ON ALL DOMESTIC ORDERS!!</p>
        </div>
        <div class="freeShipping" style="background-color:#0FFF50; width: fit-content; text-align:center;">
            <p style="font-family:Impact, fantasy; font-size:15px;">%20 OFF FOR STUDENTS</p>
        </div>
    </center>

    <div class="popup" onclick="myFunction()"
        style="font-weight: bold; font-family: monaco, monospace; border-radius: 25px; background-color:#FD5DA8;">CLICK
        ME TO LEARN ABOUT OUR MISSION
        <span class="popuptext" id="myPopup">
            <p>
                OUR MISSION AT WILDFLOWER BOUTIQUE IS TO EMPOWER WOMEN TO FEEL CONFIDENT AND BEAUTIFUL
                IN THEIR OWN SKIN BY PROVIDING HIGH-QUALITY, STYLISH AND AFFORDABLE CLOTHING THAT SUITS THEIR
                UNIQUE PERSONALITIES AND LIFESTYLES. WE BELIEVE THAT EVERY WOMAN DESERVES TO LOOK AND FEEL HER BEST.
            </p>
        </span>
    </div>
    <h2>
        <center>SOME OF OUR FAVS</center>
    </h2>
    <!-- Image -->
    <center>
        <div id="products-container"></div>
    </center>

    <div id="popup">
        SHOP UP TO %50 OFF ON SELECT ITEMS
    </div>

    <center>
        <h2>NEW FOR YOU</h2>
        <div id="products-container2"></div>
    </center>
    <center>
        <div id="products-container3"></div>
    </center>

    <center>
        <h2><b>SIGN UP FOR 15% OFF</b></h2>
        <form>
            <input type="tel" id="phoneNumber" name="phoneNumber" placeholder="Enter Phone Number"><br><br>
            <input type="submit" value="Submit" id="submitPhoneNumber">
            <p style="font-size: 10px">BY SIGNING UP VIA TEXT YOU AGREE TO RECEIVE RECURRING AUTOMATED MARKETING
                MESSAGES AND SHOPPING CART REMINDERS AT THE PHONE NUMBER PROVIDED.</p>
        </form>
    </center>

    <!-- Footer -->
    <br><br>
    <footer>
        <center>
            <p>&copy;2023 ADS Management Co. All Rights Reserved</p>
        </center>
    </footer>

</body>

</html>