<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">

<head>
  <meta charset="utf-8" />
  <!-- CSS Link -->
  <link href="styles.css" rel="stylesheet">
  <title>Wildflower Boutique</title>
  <link rel="icon" href="login/XbOADFTkafjCCII.png">
  <script src="shoes.js"></script>
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
  <div style="text-align:center">
    <h2 style="font-size: 15px;">SHOPPING ALL SHOES</h2>
    <h2 style="font-size: 10px; color:lightgray;">20 styles</h2>

  </div>
  <center>
    <div id="products-container"></div>
  </center>
  <!-- Sign Up Discount -->
  <center>
    <h2><b>SIGN UP FOR 15% OFF</b></h2>
    <form>
      <input type="tel" id="phoneNumber" name="phoneNumber" placeholder="Enter Phone Number"><br><br>
      <input type="submit" value="Submit">
      <p style="font-size: 10px">BY SIGNING UP VIA TEXT YOU AGREE TO RECEIVE RECURRING AUTOMATED MARKETING MESSAGES
        AND SHOPPING CART REMINDERS AT THE PHONE NUMBER PROVIDED.</p>

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