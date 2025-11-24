<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About - Wild Skincare</title>
    <!-- Link to CSS -->
    <link rel="stylesheet" href="./CSS/about.css">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&display=swap" rel="stylesheet">
    <!-- Icons -->
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
</head>
<body>
    <!-- Navigation Bar -->
    
    <!-- =================== HEADER / NAVBAR =================== -->
    <?php include 'navbar.php'; ?>
<!-- <header class="navbar">
  <div class="logo">
      <img src="./img/LOGO - Wild Natural Products and Events.PNG" alt="" style="width: 100px; height: auto;" />
    </div>

  <nav class="nav-links">
    <a href="./skinIndex.html" class="active"><strong>Home</strong></a>
    <div class="dropdown">
      <a href="./Products.html"><strong>Products</strong></a>
    </div>
    <a href="./about.html"><strong>About</strong></a>
    <a href="./events.html"><strong>Events</strong></a>
    <a href="./farmVisit.html"><strong>Farm Visit</strong></a>
    <a href="contact.html"><strong>Contact</strong></a>
  </nav>

  
  </div>
</header>-->

  

    <!-- 🔸 About Section -->
    <section class="about-section">
        <div class="about-content">
            <h1>About Wild Skincare</h1>
            <p>
                Founded by <strong>Sara Hashemi Nasab</strong>, Wild Skincare was born from a passion for natural beauty 
                and a commitment to creating products that truly work.
            </p>
        </div>
    </section>

    <!-- 🔸 Our Story Section -->
    <section class="story-section">
        <div class="story-container">
            <!-- Left Image -->
            <div class="story-image">
                <img src="./img/Product.png" alt="Wild Skincare Story">
            </div>

            <!-- Right Text -->
            <div class="story-text">
                <h2>Our Story</h2>
                <div class="underline"></div>
                <p>
                    Wild Skincare began with a simple belief: that nature provides everything we need for healthy, radiant skin. 
                    After years of research and development, we've created a line of products that harness the power of botanical ingredients 
                    without compromising on efficacy.
                </p>
            </div>
        </div>
    </section>

   <!-- =================== STATS SECTION =================== -->
<section class="stats-section">
  <div class="stats-container">

    <!-- Box 1 -->
    <div class="stat-box">
      <div class="stat-icon">
        <i class="fa-solid fa-user-group"></i>
      </div>
      <h2 class="stat-number">50K+</h2>
      <p class="stat-text">Happy Customers</p>
    </div>

    <!-- Box 2 -->
    <div class="stat-box">
      <div class="stat-icon">
        <i class="fa-solid fa-award"></i>
      </div>
      <h2 class="stat-number">15+</h2>
      <p class="stat-text">Industry Awards</p>
    </div>

    <!-- Box 3 -->
    <div class="stat-box">
      <div class="stat-icon">
        <i class="fa-solid fa-globe"></i>
      </div>
      <h2 class="stat-number">30+</h2>
      <p class="stat-text">Countries Served</p>
    </div>

    <!-- Box 4 -->
    <div class="stat-box">
      <div class="stat-icon">
        <i class="fa-solid fa-heart"></i>
      </div>
      <h2 class="stat-number">100%</h2>
      <p class="stat-text">Natural Ingredients</p>
    </div>

  </div>
</section>

<section class="values-section">
  <h2 class="values-title">Our Values</h2>

  <div class="values-container">
    <!-- Sustainability -->
    <div class="value-box">
      <h3>Sustainability</h3>
      <p>We are committed to protecting our planet through eco-friendly packaging and sustainable sourcing practices.</p>
    </div>

    <!-- Transparency -->
    <div class="value-box">
      <h3>Transparency</h3>
      <p>Every ingredient is clearly listed and ethically sourced. You deserve to know what goes on your skin.</p>
    </div>

    <!-- Innovation -->
    <div class="value-box">
      <h3>Innovation</h3>
      <p>Combining traditional wisdom with cutting-edge science to create effective, natural skincare solutions.</p>
    </div>

    <!-- Community -->
    <div class="value-box">
      <h3>Community</h3>
      <p>Building a supportive community that celebrates natural beauty and self-care at every age.</p>
    </div>
  </div>
</section>

<!-- ================= FOOTER SECTION ================= -->
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
