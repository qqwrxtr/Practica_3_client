<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.3/css/bootstrap.min.css">
  <link rel="stylesheet" href="style.css">

  <title>Electrocasnice mici</title>
</head>
<body>

<?php include_once("particles/header.php") ?>

<section id="products" class="container">
    <h1 class="heading">Produse</h1>
    <div class="product-container mx-auto" id="productContainer">
        <!-- Product boxes will be dynamically added here -->
    </div>
</section>

<section class="container-fluid footer fixed-bottom">
    <div class="row">
    </div>
    <h1 class="credit">Creat de <span>Revenco Daniel</span> | toate drepturile rezervate. </h1>
</section>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>
<script src="script.js"></script>
<script>
    document.addEventListener("DOMContentLoaded", function() {

        var cart = JSON.parse(localStorage.getItem('cart')) || [];

        var productContainer = document.getElementById('productContainer');

        cart.forEach(function(product) {

            var productRow = document.createElement('div');
            productRow.className = 'row product-row align-items-center'; // Center items vertically
            productRow.style.marginBottom = '20px';
            productRow.style.boxShadow = '0 4px 8px rgba(0, 0, 0, 0.1)';
            productRow.style.padding = '10px'; // Add padding for spacing

            var imgCol = document.createElement('div');
            imgCol.className = 'col-md-2';

            var img = document.createElement('img');
            img.src = product.img;
            img.alt = product.name;
            img.className = 'img-fluid rounded'; // Add rounded class for a circular appearance
            img.style.width = '100px'; // Set the desired width
            img.style.height = '100px'; // Set the desired height
            imgCol.appendChild(img);

            var detailsCol = document.createElement('div');
            detailsCol.className = 'col-md-7';

            var name = document.createElement('p');
            name.className = 'card-text';
            name.textContent = product.name;
            name.style.fontSize = '16px'; // Set font size to 16px
            detailsCol.appendChild(name);

            var deleteCol = document.createElement('div');
            deleteCol.className = 'col-md-3 text-center';

            var deleteBtn = document.createElement('button');
            deleteBtn.className = 'btn btn-danger btn-lg'; // Larger delete button
            deleteBtn.textContent = 'Delete';
            deleteBtn.addEventListener('click', function() {
                // Handle delete functionality (remove the product from localStorage and update the UI)
                cart = cart.filter(item => item.name !== product.name);
                localStorage.setItem('cart', JSON.stringify(cart));
                productRow.remove(); // Remove the product row from the UI
            });

            deleteCol.appendChild(deleteBtn);

            productRow.appendChild(imgCol);
            productRow.appendChild(detailsCol);
            productRow.appendChild(deleteCol);

            productContainer.appendChild(productRow);
        });
    });
</script>
</body>
</html>
