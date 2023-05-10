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
                if (product.product_id == 34) {
                    table += "<tr>";
                }
                if (product.product_id == 60 || product.product_id == 57 || product.product_id == 49 || product.product_id == 37 || product.product_id == 35) {
                    table += "<td>";
                    table += "<div class='favs'><img src=" + product.product_img + " width='225' height='305' class='favs'></div>";
                    table += "</td>";
                }
                if (product.product_id == 61) {
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
        if (xhr.readyState === 4 && xhr.status === 200) {
            const products = JSON.parse(xhr.responseText);

            // Output the products in a table
            let count = 0;
            let table = "<table>";
            for (const product of products) {
                if (product.product_id == 25) {
                    table += "<tr>";
                }
                if (product.product_id == 42 || product.product_id == 26 || product.product_id == 99 || product.product_id == 62 || product.product_id == 51) {
                    table += "<td>";
                    table += "<div class='favs'><img src='" + product.product_img + "' alt='" + product.product_name + "' width='225' height='305' '></div><h3><center>" + product.product_name + "</center></h3><p class='price'><center> $" + product.product_price + "</center></p><p><center><form action='shoppingCartPHP.php' method ='post'><input type='hidden' name='name' value='" + product.product_name + "'><input type ='hidden' name='img' value='" + product.product_img + "'><input type='hidden' name='id' value='" + product.product_id + "'> <input type='hidden' name='price' value='" + product.product_price + "'><button type='submit' class='button button2' name='cartButton' value ='" + product.product_id + "'>Add to Cart</button></form></center></p>";
                    table += "</td>";
                }
                if (product.product_id == 100) {
                    table += "</tr>";
                }
                count++;
            }

            if (count % 4 !== 0) {
                table += "</tr>";
            }

            table += "</table>";

            // Output the table to the page
            document.getElementById("products-container2").innerHTML = table;
        }
        if (xhr.readyState === 4 && xhr.status === 200) {
            const products = JSON.parse(xhr.responseText);

            // Output the products in a table
            let count = 0;
            let table = "<table>";
            for (const product of products) {
                if (product.product_id == 9 || product.product_id == 52 || product.product_id == 89) {
                    table += "<tr>";
                }
                if (product.product_id == 10) {
                    table += "<td>";
                    table += "<div class='container'><a href='bottoms.php'><img src='" + product.product_img + "' width='450' height='610' style='width:100%; filter: brightness(80%);'></a><div class='centered'>SHOP BOTTOMS</div></div>";
                    table += "</td>";
                }
                if (product.product_id == 26) {
                    table += "<td>";
                    table += "<div class='container'><a href='tops.php'><img src='" + product.product_img + "' width='450' height='610' style='width:100%; filter: brightness(80%);'></a><div class='centered'>SHOP TOPS</div></div>";
                    table += "</td>";
                }
                if (product.product_id == 53) {
                    table += "<td>";
                    table += "<div class='container'><a href='dresses.php'><img src='" + product.product_img + "' width='450' height='610' style='width:100%; filter: brightness(80%);'></a><div class='centered'>SHOP DRESSES</div></div>";
                    table += "</td>";
                }
                if (product.product_id == 75) {
                    table += "<td>";
                    table += "<div class='container'><a href='jackets.php'><img src='" + product.product_img + "' width='450' height='610' style='width:100%; filter: brightness(80%);'></a><div class='centered'>SHOP JACKETS</div></div>";
                    table += "</td>";
                }
                if (product.product_id == 90) {
                    table += "<td>";
                    table += "<div class='container'><a href='shoes.php'><img src='" + product.product_img + "' width='450' height='610' style='width:100%; filter: brightness(80%);'></a><div class='centered'>SHOP SHOES</div></div>";
                    table += "</td>";
                }
                if (product.product_id == 120) {
                    table += "<td>";
                    table += "<div class='container'><img src='" + product.product_img + "' width='450' height='610'></div>";
                    table += "</td>";
                }
                if (product.product_id == 27 || product.product_id == 76 || product.product_id == 121) {
                    table += "</tr>";
                }
                count++;
            }

            table += "</table>";

            // Output the table to the page
            document.getElementById("products-container3").innerHTML = table;
        }
    };

    var url = "products.php";
    xhr.open("GET", url, true);
    xhr.send();
}

// Call the function to load the products when the page is loaded
document.addEventListener("DOMContentLoaded", function () {
    loadProducts();
});
