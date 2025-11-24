<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Events & Workshops - Wild Skincare</title>
  <link rel="stylesheet" href="./CSS/events.css">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&display=swap" rel="stylesheet">

  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
</head>
<script>
const popup = document.getElementById("popup");
const overlay = document.getElementById("popup-overlay");
const closeBtn = document.getElementById("close-popup");

// OPEN POPUP (you will call this function from your Register button)
function openPopup() {
    popup.style.display = "block";
    overlay.style.display = "block";
}

// CLOSE POPUP
closeBtn.addEventListener("click", () => {
    popup.style.display = "none";
    overlay.style.display = "none";
});

overlay.addEventListener("click", () => {
    popup.style.display = "none";
    overlay.style.display = "none";
});
</script>

<body>
  <!-- ================= NAVBAR ================= -->
  <?php include 'navbar.php'; ?>
 <!-- <header class="navbar">
    <div class="logo">
      <img src="./img/LOGO - Wild Natural Products and Events.PNG" alt="" style="width: 100px; height: auto;" />
    </div>

    <nav class="nav-links">
      <a href="skinIndex.html">Home</a>
      <div class="dropdown">
        <a href="./Products.html">Products</a>
      </div>
      <a href="./about.html">About</a>
      <a href="./events.html" class="active">Events</a>
      <a href="./farmVisit.html">Farm Visit</a>
      <a href="#">Contact</a>
    </nav>

    <div class="nav-icons">
      <a href="#"><i class="fa-regular fa-user"></i></a>
      <div class="cart">
        <i class="fa-solid fa-cart-shopping"></i>
        <span class="cart-count">0</span>
      </div>
    </div>
  </header>-->

  <!-- ================= HERO SECTION ================= -->
  <section class="hero">
    <h1>Events & Workshops</h1>
    <p>
      Join us for exclusive events, workshops, and community gatherings. Connect with <br>
      fellow natural beauty enthusiasts and learn from our experts.
    </p>
  </section>

  <!-- ================= FEATURED EVENTS ================= -->
  <section class="featured">
    <h2>Featured Events</h2>
  </section>

  <!-- ================= FEATURED EVENTS SECTION ================= -->
<section class="events-section">
  
  <!-- ===== Event Card 1 ===== -->
  <div class="event-card">
    <!-- Event Image + Category Badge -->
    <div class="event-image">
      <img src="./img/cream.png" alt="DIY Face Masks">
      <span class="event-badge workshop">Workshop</span>
    </div>

    <!-- Event Content Area -->
    <div class="event-content">
      <!-- Event Title -->
      <h3>Natural Skincare Workshop: DIY Face Masks</h3>

      <!-- Event Description -->
      <p>Learn to create your own natural face masks using organic ingredients. Perfect for beginners!</p>

      <!-- Event Details (Date, Time, Location) -->
      <div class="event-details">
        <p><i class="fa-regular fa-calendar"></i> November 15, 2025</p>
        <p><i class="fa-regular fa-clock"></i> 2:00 PM – 4:00 PM</p>
        <p><i class="fa-solid fa-location-dot"></i> Wild Skincare Studio, Portland</p>
      </div>

      <!-- Footer (Attendance + Register Button) -->
      <div class="event-footer">
        <p><i class="fa-solid fa-users"></i> 18/25 attending</p>
        <button class="register-btn" onclick="openPopup()">Register </button>
      </div>
    </div>
  </div>

  <!-- ===== Event Card 2 ===== -->
  <div class="event-card">
    <div class="event-image">
      <img src="./img/serum.png" alt="Winter Wellness">
      <span class="event-badge launch">Launch</span>
    </div>

    <div class="event-content">
      <h3>Product Launch: Winter Wellness Collection</h3>
      <p>Be the first to experience our new winter collection and enjoy exclusive launch discounts.</p>

      <div class="event-details">
        <p><i class="fa-regular fa-calendar"></i> November 28, 2025</p>
        <p><i class="fa-regular fa-clock"></i> 6:00 PM – 8:00 PM</p>
        <p><i class="fa-solid fa-laptop"></i> Virtual Event</p>
      </div>

      <div class="event-footer">
        <p><i class="fa-solid fa-users"></i> 142/200 attending</p>
        <button class="register-btn" onclick="openPopup()">Register </button>
      </div>
    </div>
  </div>

  <!-- ===== Event Card 3 ===== -->
  <div class="event-card">
    <div class="event-image">
      <img src="./img/clay.png" alt="New Year Event">
      <span class="event-badge community">Community</span>
    </div>

    <div class="event-content">
      <h3>New Year, New Skin: 2026 Kickoff Event</h3>
      <p>Start the new year with fresh skincare goals and connect with our community.</p>

      <div class="event-details">
        <p><i class="fa-regular fa-calendar"></i> January 10, 2026</p>
        <p><i class="fa-regular fa-clock"></i> 5:00 PM – 7:00 PM</p>
        <p><i class="fa-solid fa-laptop"></i> Virtual Event</p>
      </div>

      <div class="event-footer">
        <p><i class="fa-solid fa-users"></i> 45/150 attending</p>
        <button class="register-btn" onclick="openPopup()">Register </button>
      </div>
    </div>
  </div>
</section>

<!-- Font Awesome Script for Icons -->
<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>

<!-- ================= PAST EVENTS SECTION ================= -->
<section class="past-events-section">
  <!-- Section Title -->
  <h2>Past Events</h2>
  <div class="underline"></div>

  <!-- ====== Past Events Container ====== -->
  <div class="past-events-container">

    <!-- ===== Past Event Card 1 ===== -->
    <div class="past-card">
      <!-- Event Image + Overlay Label -->
      <div class="past-image">
        <img src="https://images.unsplash.com/photo-1501004318641-b39e6451bec6?auto=format&fit=crop&w=800&q=80" alt="Autumn Harvest Celebration">
        <div class="overlay">Completed</div>
      </div>

      <!-- Event Details -->
      <div class="past-content">
        <h3>Autumn Harvest Celebration</h3>
        <p class="date">October 14, 2025</p>
        <p class="attendees">85 attendees</p>
      </div>
    </div>

    <!-- ===== Past Event Card 2 ===== -->
    <div class="past-card">
      <div class="past-image">
        <img src="./img/oil.png" alt="Summer Skincare Workshop">
        <div class="overlay">Completed</div>
      </div>

      <div class="past-content">
        <h3>Summer Skincare Essentials Workshop</h3>
        <p class="date">August 20, 2025</p>
        <p class="attendees">62 attendees</p>
      </div>
    </div>

    <!-- ===== Past Event Card 3 ===== -->
    <div class="past-card">
      <div class="past-image">
        <img src="https://images.unsplash.com/photo-1526045478516-99145907023c?auto=format&fit=crop&w=800&q=80" alt="Spring Launch Bloom Collection">
        <div class="overlay">Completed</div>
      </div>

      <div class="past-content">
        <h3>Spring Launch: Bloom Collection</h3>
        <p class="date">April 5, 2025</p>
        <p class="attendees">234 attendees</p>
      </div>
    </div>

  </div> <!-- End of past-events-container -->
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

<!-- ===================== WORKSHOP REGISTRATION POPUP ===================== -->
<div class="popup-overlay" id="popup-overlay"></div>

<div class="popup" id="popup">
    <div class="popup-header">
        <h2>Workshop Registration</h2>
        <span class="close-btn" id="close-popup">&times;</span>
    </div>

    <form class="popup-form">
        <label>Full Name</label>
        <input type="text" required>

        <label>Email Address</label>
        <input type="email" required>

        <label>Phone Number</label>
        <input type="text" required>

        <label>Message (Optional)</label>
        <textarea rows="4"></textarea>

        <button type="submit" class="register-btn">Register Now</button>
    </form>
</div>

</body>
</html>
