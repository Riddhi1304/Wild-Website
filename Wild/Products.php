<?php
$category = isset($_GET['category']) ? $_GET['category'] : 'all';
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Wild Skincare - Our Products</title>

  <!-- Link to CSS -->
  <link rel="stylesheet" href="./CSS/Products.css" />

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&display=swap" rel="stylesheet" />

  <!-- Font Awesome (for icons) -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />
</head>

<body>
  <!-- =================== HEADER / NAVBAR =================== -->
  <?php include 'navbar.php'; ?>

  <!-- =================== HERO SECTION =================== -->
  <section class="hero">
    <h1>Our Products</h1>
    <p>Premium skincare solutions for every need</p>
  </section>

  <!-- =================== CATEGORY FILTER BUTTONS =================== -->
  <section class="category-filter">

  <section class="categories">
  <a href="products.php?category=all" class="btn <?php echo ($category=='all'?'active':''); ?>" style="text-decoration: none;">All</a>
  <a href="products.php?category=cleanser" class="btn <?php echo ($category=='cleanser'?'active':''); ?>" style="text-decoration: none;">Cleansers</a>
  <a href="products.php?category=serum" class="btn <?php echo ($category=='serum'?'active':''); ?>" style="text-decoration: none;">Serums</a>
  <a href="products.php?category=moisturizer" class="btn <?php echo ($category=='moisturizer'?'active':''); ?>" style="text-decoration: none;">Moisturizers</a>
  <a href="products.php?category=mask" class="btn <?php echo ($category=='mask'?'active':''); ?>" style="text-decoration: none;">Masks</a>
</section>


  <!-- =================== PRODUCT CARDS SECTION =================== -->
  <section class="product-section">

    <!-- Product Card 1 -->
     <?php if ($category == 'all' || $category == 'serum') { ?>
        <div class="product-card">
          <div class="product-img">
            <img src="./img/serum.png" alt="Radiance Boost Serum" />
          </div>
          <div class="product-info">
            <p class="category">Serums</p>
            <h3 class="product-name">Radiance Boost Serum</h3>
            <p class="desc">Intensive vitamin C serum for bright, glowing skin</p>
            <div class="price-cart">
              <p class="price">$59.99</p>
              <form action="cart.php" method="POST">
                <input type="hidden" name="name" value="Radiance Boost Serum">
                <input type="hidden" name="price" value="59.99">
                <button type="submit" class="cart-btn">
                    <i class="fa-solid fa-cart-shopping"></i> Add to Cart
                </button>
              </form>
            </div>
          </div>
        </div>
     <?php } ?>

    <!-- Product Card 2 -->
     <?php if ($category == 'all' || $category == 'moisturizer') { ?>
        <div class="product-card">
          <div class="product-img">
            <img src="./img/cream.png" alt="Hydrating Day Cream" />
          </div>
          <div class="product-info">
            <p class="category">Moisturizers</p>
            <h3 class="product-name">Hydrating Day Cream</h3>
            <p class="desc">Rich moisturizer with hyaluronic acid and ceramides</p>
            
            <div class="price-cart">
              <p class="price">$45</p>
              <form action="cart.php" method="POST">
                <input type="hidden" name="name" value="Hydrating Day Cream">
                <input type="hidden" name="price" value="45">
                <button type="submit" class="cart-btn">
                    <i class="fa-solid fa-cart-shopping"></i> Add to Cart
                </button>
              </form>
            </div>
          </div>
        </div>
     <?php } ?>


    <!-- Product Card 3 -->
     <?php if ($category == 'all' || $category == 'cleanser') { ?>
        <div class="product-card">
          <div class="product-img">
            <img src="./img/Skin.png" alt="Gentle Cleansing Gel" />
          </div>
          <div class="product-info">
            <p class="category">Cleansers</p>
            <h3 class="product-name">Gentle Cleansing Gel</h3>
            <p class="desc">Mild gel cleanser for all skin types. Which can clean your skin.</p>
            <div class="price-cart">
              <p class="price">$32</p>
              <form action="cart.php" method="POST">
                <input type="hidden" name="name" value="Gentle Cleansing Gel">
                <input type="hidden" name="price" value="32">
                <button type="submit" class="cart-btn">
                    <i class="fa-solid fa-cart-shopping"></i> Add to Cart
                </button>
              </form>
            </div>
          </div>
        </div>
     <?php } ?>


    <!-- Product Card 4 -->
    <?php if ($category == 'all' || $category == 'moisturizer') { ?>
      <div class="product-card">
        <div class="product-img">
          <img src="./img/Product.png" alt="retinol and peptides" />
        </div>
        <div class="product-info">
          <p class="category">Moisturizers</p>
          <h3 class="product-name">Youth Renewal Night Cream</h3>
          <p class="desc">Anti-aging night treatment with retinol and peptides</p>
          <div class="price-cart">
            <p class="price">$68</p>
            <form action="cart.php" method="POST">
              <input type="hidden" name="name" value="retinol and peptides">
              <input type="hidden" name="price" value="68">
              <button type="submit" class="cart-btn">
                  <i class="fa-solid fa-cart-shopping"></i> Add to Cart
              </button>
            </form>
          </div>
        </div>
      </div>
    <?php } ?>


    <!-- Product Card 5 -->
     <?php if ($category == 'all' || $category == 'mask') { ?>
        <div class="product-card">
          <div class="product-img">
            <img src="./img/clay.png" alt="Purifying mask" />
          </div>
          <div class="product-info">
            <p class="category">Masks</p>
            <h3 class="product-name">Detox Clay Mask</h3>
            <p class="desc">Purifying mask with kaolin clay and charcoal</p>
            <div class="price-cart">
              <p class="price">$38</p>
              <form action="cart.php" method="POST">
                <input type="hidden" name="name" value="Purifying mask">
                <input type="hidden" name="price" value="38">
                <button type="submit" class="cart-btn">
                    <i class="fa-solid fa-cart-shopping"></i> Add to Cart
                </button>
              </form>
            </div>
          </div>
        </div>
     <?php } ?>

    <!-- Product Card 6 -->
    <?php if ($category == 'all' || $category == 'serum') { ?>
        <div class="product-card">
          <div class="product-img">
            <img src="./img/oil.png" alt="botanical oils " />
          </div>
          <div class="product-info">
            <p class="category">Serums</p>
            <h3 class="product-name">Botanical Face Oil</h3>
            <p class="desc">Nourishing blend of botanical oils for radiant skin</p>
            <div class="price-cart">
              <p class="price">$54</p>
              <form action="cart.php" method="POST">
                <input type="hidden" name="name" value="botanical oils ">
                <input type="hidden" name="price" value="54">
                <button type="submit" class="cart-btn">
                    <i class="fa-solid fa-cart-shopping"></i> Add to Cart
                </button>
              </form>
            </div>
          </div>
        </div>
      <?php } ?>


  </section>
</section>

 <footer class="footer">
  <div class="footer-container">

    <!-- Brand Info -->
    <div class="footer-column brand">
      <h3 class="footer-logo">Wild Skincare</h3>
      <p>Premium natural skincare for radiant, healthy skin. Founded by Sara Hashemi Nasab.</p>

      <div class="social-icons">
        <a href="#"><i class="fa-regular fa-envelope"></i></a>
        <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
        <a href="#"><i class="fa-brands fa-instagram"></i></a>
        <a href="#"><i class="fa-brands fa-twitter"></i></a>
        <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
      </div>
    </div>

    <!-- Shop -->
    <div class="footer-column">
      <h4>Shop</h4>
      <ul>
        <li><a href="#">All Products</a></li>
        <li><a href="#">Cleansers</a></li>
        <li><a href="#">Serums</a></li>
        <li><a href="#">Moisturizers</a></li>
        <li><a href="#">Masks</a></li>
        <li><a href="#">Gift Sets</a></li>
      </ul>
    </div>

    <!-- About -->
    <div class="footer-column">
      <h4>About</h4>
      <ul>
        <li><a href="#">Our Story</a></li>
        <li><a href="#">Our Values</a></li>
        <li><a href="#">Ingredients</a></li>
        <li><a href="#">Sustainability</a></li>
        <li><a href="#">Press</a></li>
      </ul>
    </div>

    <!-- Support -->
    <div class="footer-column">
      <h4>Support</h4>
      <ul>
        <li><a href="#">Contact Us</a></li>
        <li><a href="#">FAQs</a></li>
        <li><a href="#">Shipping Info</a></li>
        <li><a href="#">Returns</a></li>
        <li><a href="#">Track Order</a></li>
      </ul>
    </div>

  </div>
</footer>

<!-- ================= COPYRIGHT BAR ================= -->
<div class="footer-bottom">
  <p>© 2025 Wild Skincare. All rights reserved. Founded by Sara Hashemi Nasab.</p>

  <div class="footer-links">
    <a href="#">www.wnpe.com</a>
    <a href="#">Privacy Policy</a>
    <a href="#">Terms of Service</a>
  </div>
</div>

 

</body>
</html>
