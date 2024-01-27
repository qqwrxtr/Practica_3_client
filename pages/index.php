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


<section id="home" class="home container-fluid p-0">

<div class="row hero" style='background: url(../img/poza_principala.png) no-repeat;min-height: 70vh; background-size: cover; background-position: center; display: flex; align-items: center;'>
  <div class="col pl-3 ml-sm-5 p-0">
    <h1 class="text1">Magazinul</h1>
    <h3 class="text2">ElectroMini</h3>
  </div>
</div>

<div class="counting">

<div class="box">
  <h1 class="count" data-count="1200">1200+</h1>
  <h3>ore lucrate</h3>
</div>

<div class="box">
  <h1 class="count" data-count="15">15+</h1>
  <h3>premii</h3>
</div>

<div class="box">
  <h1 class="count" data-count="1000">1000+</h1>
  <h3>Clienți</h3>
</div>

<div class="box">
  <h1 class="count" data-count="840">840+</h1>
  <h3>produse</h3>
</div>

</div>

</section>


<section id="about" class="about container">

<h1 class="heading">Despre noi</h1>

<div class="row align-items-center">

  <div class="col-md-6 image">
    <img src="/revenco/img/poza.png" width="90%" alt="">
  </div>

  <div class="col-md-6 info">
    <h2>cei mai buni din întreaga țară</h2>
    <p>Bine ați venit la ElectroMini, destinația ta principală pentru cele mai noi și inovatoare electrocasnice mici. Suntem pasionați de tehnologie și aducem în fața ta o gamă largă de produse inteligente și eficiente, perfecte pentru a-ți facilita viața de zi cu zi.</p>
    <p>La ElectroMini, vei descoperi o selecție atent selecționată de electrocasnice mici de înaltă calitate, adaptate nevoilor tale individuale. Indiferent dacă cauți un blenderr puternic pentru a-ți pregăti smoothie-uri sănătoase, un aspirator robot care să-ți ofere un mediu curat și fără efort, sau o mașină de cafea compactă pentru a-ți începe diminețile într-un mod aromat, suntem aici pentru tine.</p>
    <div class="icons">
      <a href="#" class="fab fa-facebook-f"></a>
      <a href="#" class="fab fa-twitter"></a>
      <a href="#" class="fab fa-instagram"></a>
      <a href="#" class="fab fa-pinterest "></a>
    </div>
  </div>

</div>

</section>

<section id="service" class="service">

<h1 class="heading">serviciile noastre</h1>

<div class="box-container mx-auto">

  <div class="box">
    <div class="fas fa-tools"></div>
    <p>Reparații și service profesionist: Oferim servicii de reparații și service profesionist pentru electrocasnicele mici achiziționate din magazinul nostru. Echipa noastră de tehnicieni calificați se ocupă de diagnosticarea și remedierea problemelor într-un mod eficient și prompt.</p>
  </div>

  <div class="box">
    <div class="fas fa-tools"></div>
    <p>Consultanță specializată: Suntem aici pentru a oferi consultanță specializată în alegerea electrocasnicelor potrivite nevoilor tale. Echipa noastră de experți te va ghida în procesul de selecție, oferindu-ți informații detaliate și sfaturi personalizate pentru a face cea mai bună alegere.</p>
  </div>

  <div class="box">
    <div class="fas fa-tools"></div>
    <p>Livrare la domiciliu: Pentru confortul tău, oferim servicii de livrare la domiciliu pentru produsele achiziționate. Indiferent dacă locuiești în oraș sau în afara lui, ne asigurăm că electrocasnicele tale vor ajunge în siguranță și la timp la ușa ta.</p>
  </div>

  <div class="box">
    <div class="fas fa-tools"></div>
    <p>Instalare și configurare: Pentru a-ți facilita experiența, oferim servicii de instalare și configurare a electrocasnicelor achiziționate. Echipa noastră se va asigura că produsele sunt corect montate și configurate, astfel încât să te poți bucura de ele în cel mai scurt timp.</p>
  </div>

  <div class="box">
    <div class="fas fa-tools"></div>
    <p>Înlocuire rapidă: Dacă produsul achiziționat prezintă defecte în primele zile de utilizare, oferim opțiunea de înlocuire rapidă. Ne dorim să fii mulțumit de achiziția ta, așadar, vom rezolva înlocuirea cât mai eficient și fără costuri suplimentare.</p>
  </div>

  <div class="box">
    <div class="fas fa-tools"></div>
    <p>Program de fidelitate: Apreciem clienții fideli, motiv pentru care oferim un program de fidelitate avantajos. Prin intermediul acestuia, vei beneficia de reduceri speciale, oferte exclusive și alte beneficii pe măsură ce continui să alegi ElectroMini drept destinația ta principală pentru electrocasnicele mici.</p>
  </div>

</div>

</section>



<?php
  // Include the database connection file
  include 'conexiune.php';

  // Check the connection
  if (!$conexiune) {
      die("Connection failed: " . mysqli_connect_error());
  }

  // Query to retrieve data from the 'products' table
  $sql = "SELECT id, name, img FROM products";  // Include the 'name' field in the query
  $result = mysqli_query($conexiune, $sql);

  // Check if there are results
  if (mysqli_num_rows($result) > 0) {
      // Start the HTML section
      echo '<section id="project" class="dororo" style="min-height: 100vh; background: #333;">';
      echo '<div class="heading" style="color: #fff;">Produsele noastre</div>';
      echo '<div style="text-align:center;font-size:16px;color:white;">Adauga in cos intr-un click</div>';
      
      echo '<div class="box-container mx-auto" style="display: flex; justify-content: center; flex-wrap: wrap;">';

      // Loop through the results and display each image with a link to product.php
      while ($row = mysqli_fetch_assoc($result)) {
          echo '<div class="box" style="height: 200px; width: 30rem; border-radius: .5rem; margin: 2rem; overflow: hidden; box-shadow: 0 .3rem .5rem #000;">';
          echo '<p style="text-align: center; color: #fff; font-size:16px; ">' . $row['name'] . '</p>';  // Display the product name below the image
          echo '<a href="product.php?id=' . $row['id'] . '" title="Product ' . $row['id'] . '">';
          echo '<img src="/revenco/img/' . $row['img'] . '" alt="" style="height: 100%; width: 100%; object-fit: cover;">';
          echo '<div style="position: absolute; top: 0; left: 0; width: 100%; text-align: center; padding: 10px; background: rgba(0, 0, 0, 0.7); color: #fff;">';
          
          echo '</div>';
          echo '</a>';
          echo '</div>';
      }

      // End the HTML section
      echo '</div>';
      echo '</section>';

      // Free the result set
      mysqli_free_result($result);
  } else {
      // If there are no results
      echo 'No products found.';
  }

  // Close the database connection
  mysqli_close($conexiune);
?>



<h1 class="heading">Contacte</h1>

<div class="contact-box-container mx-auto">

<div class="contact-box">
  <i class="fas fa-map-marker-alt"></i>
  <h3>Chișinău</h3>
</div>

<div class="contact-box">
  <i class="fas fa-envelope"></i>
  <h3>ElectroMini@gmail.com</h3>
</div>

<div class="contact-box">
  <i class="fas fa-phone"></i>
  <h3>+373689489</h3>
</div>

</div>

<div class="form-container mx-auto">

</div>


</section>

<section class="container-fluid footer">

<div class="row">

<div class="col-md-3">
  <h2><img src="images/logo.png" alt=""></h2>
  <p>Aici aveți toate datele unde ne puteți contacta și lua legatura.</p>
</div>

<div class="col-md-3">
  <h2>Locațiile noastre</h2>
  <div class="list">
    <a href="#">Moldova</a>
    <a href="#">france</a>
    <a href="#">usa</a>
    <a href="#">japan</a>
    <a href="#">rusia</a>
  </div>
</div>

<div class="col-md-3">
  <h2>Urmărește-ne</h2>
  <div class="list">
    <a href="#">facebook</a>
    <a href="#">twitter</a>
    <a href="#">instagram</a>
    <a href="#">pinterest</a>
  </div>
</div>

<div class="col-md-3 text-center text-md-left letter">
  <h2>buletin informativ</h2>
  <p>abonați-vă pentru cele mai recente actualizări</p>
  <input type="email" placeholder="introduce-ți mail-ul dumneavoastră">
  <input type="submit" placeholder="subscribe">
</div>

</div>

<h1 class="credit">Creat de <span>Revenco Daniel</span> | toate drepturile rezervate. </h1>

</section>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>
<script src="script.js"></script>
<script>
    document.addEventListener("DOMContentLoaded", function() {
      var form = document.querySelector("form");
      var submitButton = document.querySelector("input[type='submit']");
      
      form.addEventListener("submit", function(event) {
        event.preventDefault();
        
        // Salvează datele în local storage
        var nume = document.querySelector("input[name='numele']").value;
        var prenume = document.querySelector("input[name='prenumele']").value;
        var email = document.querySelector("input[type='email']").value;
        var mesaj = document.querySelector("textarea").value;
        
        localStorage.setItem("nume", nume);
        localStorage.setItem("prenume", prenume);
        localStorage.setItem("email", email);
        localStorage.setItem("mesaj", mesaj);
        
        // Afisează mesajul de succes
        var successMessage = document.createElement("p");
        successMessage.textContent = "Datele au fost salvate cu succes!";
        successMessage.style.color = "green";
        
        var formContainer = document.querySelector(".form-container");
        formContainer.appendChild(successMessage);
      });
    });
    </script>

<script>
document.addEventListener("DOMContentLoaded", function() {
    // Get all product boxes on the page
    const productBoxes = document.querySelectorAll('.box');

    // Attach click event listener to each product box
    productBoxes.forEach(function(productBox) {
        productBox.addEventListener('click', function() {
            // Get product details from the clicked box
            const productId = productBox.querySelector('a').getAttribute('href').split('=')[1];
            const productName = productBox.querySelector('p').textContent.trim();
            const productImg = productBox.querySelector('img').src;

            // Get the existing cart data from localStorage
            let cart = JSON.parse(localStorage.getItem('cart')) || [];

            // Check if the product is already in the cart
            const existingProduct = cart.find(item => item.id === productId);

            if (existingProduct) {
                // If the product is in the cart, update the quantity
                existingProduct.quantity++;
            } else {
                // If the product is not in the cart, add it with an initial quantity of 1
                const newProduct = { id: productId, name: productName, img: productImg, quantity: 1 };
                cart.push(newProduct);
            }

            // Save the updated cart data to localStorage
            localStorage.setItem('cart', JSON.stringify(cart));

            // Redirect to the home page or perform other actions as needed
            window.location.href = 'index.php';
        });
    });
});
</script>
    
</body>
</html>