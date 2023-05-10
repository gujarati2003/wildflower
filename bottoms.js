// Define a function to load the products
function loadProducts() {
  // Make an AJAX request to the server to retrieve the products
  const xhr = new XMLHttpRequest();
  xhr.onreadystatechange = function () {
    if (xhr.readyState === 4 && xhr.status === 200) {
      // Parse the JSON response
      const products = JSON.parse(xhr.responseText);

      // Output the products in a table
      let count = 0;
      let table = "<table>";
      for (const product of products) {
        if (count % 4 === 0) {
          table += "<tr>";
        }

        table += "<td>";
        table += "<div class='tooltip'><img src='" + product.product_img + "' alt='" + product.product_name + "' width='225' height='305'/><span class='tooltiptext'><p style='font-size:10px;'>sizes available:</p> <p style='font-size:10px;'>5 5.5 6 6.6 7 7.5 8 9.5 10</p></span></div><h3><center>" + product.product_name + "</center></h3><p class='price'><center> $" + product.product_price + "</center></p><p><center><form action='shoppingCartPHP.php' method ='post'><input type='hidden' name='name' value='" + product.product_name + "'><input type ='hidden' name='img' value='" + product.product_img + "'><input type='hidden' name='id' value='" + product.product_id + "'> <input type='hidden' name='price' value='" + product.product_price + "'><button type='submit' class='button button2' name='cartButton' value ='" + product.product_id + "'>Add to Cart</button></form></center></p>";
        table += "</td>";

        if ((count + 1) % 4 === 0) {
          table += "</tr>";
        }
        count++;
      }

      if (count % 4 !== 0) {
        table += "</tr>";
      }

      table += "</table>";

      // Output the table to the page
      document.getElementById("products-container").innerHTML = table;
    }
  };

  var url = "BottomsProducts.php";
  xhr.open("GET", url, true);
  xhr.send();
}

// Call the function to load the products when the page is loaded
document.addEventListener("DOMContentLoaded", function () {
  loadProducts();
});
