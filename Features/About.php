<!DOCTYPE html>
<html lang="en">  
  <head>
    <!-- Meta Tags -->
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>About Us || EatPoint</title>

    <!-- Google Fonts (poppins) -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap"
      rel="stylesheet" />

    <!-- Google material fonts -->
    <link
      href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined"
      rel="stylesheet" />

    <!-- Font Awesome CSS -->
      <link rel="stylesheet" href="../assets/fontawesome/css/all.min.css" />

    <!-- Owl Carousel CSS -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" />

    <!-- Custom CSS -->
    <link rel="stylesheet" href="../assets/css/style.css" />
      <link rel="stylesheet" href="../assets/css/responsive.css" />
  </head>
  <body>
      <!-------- HEADER || SECTION ------->
      <nav class="navbar">
        <a href="../index.php" class="brand">EatPoint</a>
        <div class="menu-container">
          <ul class="mega-menu">
            <li class="dropdown">
              <div>
                <a href="../index.php">Home</a>
              </div>
            </li>
  
            <!-- CUISINES -->
            <li class="dropdown">
              <div>
                <a href="../cuisines_all.php">Cuisines</a>
              </div>
            </li>
            <!---- CLOSED ---->
  
            <!-- CATEGORIES -->
            <li class="dropdown">
              <div>
                <a href="../menu.php">Menu</a>
              </div>
            </li>
            <!----- CLOSED ----->
  
            <!-- GALLERY -->
            <li class="dropdown">
              <div>
                <a href="../gallery.php">Gallery</a>
              </div>
            </li>
            <!----- CLOSED ----->
  
            <!-- FEATURES -->
            <li class="dropdown">
              <div>
                <span>Features</span>
                <span class="material-symbols-outlined"> chevron_right </span>
              </div>
              <ul class="menu">
                <li class="sub-dropdown">
                  <ul class="sub-menu">
                    <li>
                      <a href="../Features/Reservation.php"
                        >Reservation</a
                      >
                    </li>
                    <li>
                      <a href="../Features/About.php">About</a>
                    </li>
                    <li>
                      <a href="../Features/Contact.php">Contact</a>
                    </li>  
  
                    <li>
                      <a href="../Features/blog.php"
                        >Blog</a
                      >
                    </li>
                  </ul>
                </li>
              </ul>
            </li>
            <!---- CLOSED ----->
              </ul>
            </li>
          </ul>
        </div>
        <div class="buttons">
          <div class="icon-buttons">
            <button class="search-btn" id="searchBtn">
              <span class="material-symbols-outlined">search</span>
            </button>
            <button class="cart-btn">
              <span class="material-symbols-outlined">shopping_cart</span>
              <span class="cart-count">0</span>
            </button>
            <a href="#" class="user-btn">
              <span class="material-symbols-outlined">person</span>
            </a>
          </div>
          <button class="menu-btn">
            <span class="material-symbols-outlined">menu</span>
          </button>
        </div>
      </nav>
      <!------ CLOSED ----->

    <!-- Search Overlay -->
    <div class="search-overlay" id="searchOverlay">
      <div class="search-container">
        <input
          type="text"
          placeholder="Search for recipes..."
          class="search-input" />
        <button class="close-search" id="closeSearch">
          <span class="material-symbols-outlined">close</span>
        </button>
      </div>
    </div>
    <!----- CLOSED ----->

    
    <!-- Main Content Section -->
    <main>
      <!-- Hero Section -->
      <section class="about-hero">
        <div class="about-hero-content">
          <div class="breadcrumb">
            <a href="../index.php" class="breadcrumb-link">Home</a>
            <span class="breadcrumb-separator">/</span>
            <span class="breadcrumb-current">About</span>
          </div>
          <h1>Our Story</h1>
          <p>Crafting Culinary Excellence Since 2015</p>
        </div>
      </section>

      <!-- Story Section -->
      <section class="about-story">
        <div class="decorative-circle"></div>
        <div class="decorative-dots"></div>
        <div class="container">
          <div class="story-content">
            <div class="story-text">
              <h2>Our Journey</h2>
              <p class="subtitle">A Legacy of Excellence</p>
              <p class="description">Founded in 2015, EatPoint emerged from a passion for exceptional dining experiences. What started as a small family restaurant has grown into a culinary destination that celebrates the art of cooking and the joy of sharing meals.</p>
              <p class="description">Our journey is marked by continuous innovation, unwavering commitment to quality, and a deep respect for culinary traditions. We believe in creating not just meals, but memorable experiences that bring people together.</p>
            </div>
            <div class="story-image">
              <img src="https://images.pexels.com/photos/67468/pexels-photo-67468.jpeg" alt="EatPoint Restaurant Interior">
            </div>
          </div>
        </div>
      </section>

      <!-- Values Section -->
      <section class="about-values">
        <div class="container">
          <h2>Our Core Values</h2>
          <div class="values-grid">
            <div class="value-card">
              <i class="fas fa-heart"></i>
              <h3>Passion</h3>
              <p>We pour our heart into every dish, ensuring each creation reflects our love for cooking.</p>
            </div>
            <div class="value-card">
              <i class="fas fa-leaf"></i>
              <h3>Quality</h3>
              <p>We source only the finest ingredients, maintaining the highest standards in every aspect.</p>
            </div>
            <div class="value-card">
              <i class="fas fa-users"></i>
              <h3>Community</h3>
              <p>We believe in building lasting relationships with our guests and local community.</p>
            </div>
            <div class="value-card">
              <i class="fas fa-lightbulb"></i>
              <h3>Innovation</h3>
              <p>We constantly evolve our menu while respecting traditional culinary heritage.</p>
            </div>
          </div>
        </div>
      </section>

      <!-- Team Section -->
      <section class="about-team">
        <div class="container">
          <h2>Meet Our Team</h2>
          <div class="team-grid">
            <div class="team-member">
              <div class="member-image">
                <img src="https://images.pexels.com/photos/887827/pexels-photo-887827.jpeg" alt="Executive Chef">
              </div>
              <div class="member-info">
                <h3>Isaac Alexander</h3>
                <p class="position">Executive Chef</p>
                <p class="bio">With over 15 years of experience in fine dining, Chef Isaac brings innovation and expertise to every dish.</p>
              </div>
            </div>
            <div class="team-member">
              <div class="member-image">
                <img src="https://images.pexels.com/photos/887827/pexels-photo-887827.jpeg" alt="Head of Operations">
              </div>
              <div class="member-info">
                <h3>Isaac Alexander</h3>
                <p class="position">Head of Operations</p>
                <p class="bio">Specializing in restaurant management and customer service excellence.</p>
              </div>
            </div>
            <div class="team-member">
              <div class="member-image">
                <img src="https://images.pexels.com/photos/887827/pexels-photo-887827.jpeg" alt="Pastry Chef">
              </div>
              <div class="member-info">
                <h3>Sarah Mitchell</h3>
                <p class="position">Pastry Chef</p>
                <p class="bio">Creating sweet masterpieces with precision and creativity.</p>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- Achievements Section -->
      <section class="about-achievements">
        <div class="container">
          <h2>Our Achievements</h2>
          <div class="achievements-grid">
            <div class="achievement-card">
              <div class="achievement-icon">
                <i class="fas fa-award"></i>
              </div>
              <div class="achievement-content">
                <h3>Best Restaurant 2024</h3>
                <p>Awarded by Ghana Food Critics Association</p>
              </div>
            </div>
            <div class="achievement-card">
              <div class="achievement-icon">
                <i class="fas fa-star"></i>
              </div>
              <div class="achievement-content">
                <h3>5-Star Rating</h3>
                <p>Consistently rated 5 stars by our valued customers</p>
              </div>
            </div>
            <div class="achievement-card">
              <div class="achievement-icon">
                <i class="fas fa-utensils"></i>
              </div>
              <div class="achievement-content">
                <h3>Innovation Award</h3>
                <p>Recognized for culinary innovation and creativity</p>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- CTA Section -->
      <section class="about-cta">
        <div class="container">
          <div class="cta-content">
            <h2>Experience the Difference</h2>
            <p>Join us for an unforgettable dining experience</p>
            <a href="Reservation.php" class="cta-button">Make a Reservation</a>
          </div>
        </div>
      </section>
    </main>

    <!-- Footer Section -->
    <footer class="footer-x">
      <div class="footer-x-top">
        <div class="footer-x-content">
          <div class="footer-x-main">
            <div class="footer-x-brand">
              <a href="#" class="footer-x-logo-link">
                  <img src="../assets/images/eatpoint-logo.svg" alt="EatPoint Logo" class="footer-x-logo">
              </a>
              <p class="footer-x-description">Your Ultimate Food Destination. Discover delicious recipes, order your favorite meals, and experience culinary excellence.</p>
              <div class="footer-x-social">
                <a href="#" class="footer-x-social-link">
                  <i class="fab fa-facebook-f"></i>
                  <span class="footer-x-social-tooltip">Facebook</span>
                </a>
                <a href="#" class="footer-x-social-link">
                  <i class="fab fa-instagram"></i>
                  <span class="footer-x-social-tooltip">Instagram</span>
                </a>
                <a href="#" class="footer-x-social-link">
                  <i class="fab fa-whatsapp"></i>
                  <span class="footer-x-social-tooltip">WhatsApp</span>
                </a>
                <a href="#" class="footer-x-social-link">
                  <i class="fab fa-snapchat"></i>
                  <span class="footer-x-social-tooltip">Snapchat</span>
                </a>
              </div>
            </div>
            <div class="footer-x-links">
              <div class="footer-x-column">
                <h3 class="footer-x-title">Quick Links</h3>
                <ul class="footer-x-list">
                  <li><a href="#" class="footer-x-link">Home</a></li>
                  <li><a href="#" class="footer-x-link">About Us</a></li>
                  <li><a href="#" class="footer-x-link">Menu</a></li>
                  <li><a href="#" class="footer-x-link">Reservations</a></li>
                </ul>
              </div>
              <div class="footer-x-column">
                <h3 class="footer-x-title">Our Services</h3>
                <ul class="footer-x-list">
                  <li><a href="#" class="footer-x-link">Dine In</a></li>
                  <li><a href="#" class="footer-x-link">Takeaway</a></li>
                  <li><a href="#" class="footer-x-link">Delivery</a></li>
                  <li><a href="#" class="footer-x-link">Catering</a></li>
                </ul>
              </div>
              <div class="footer-x-column">
                <h3 class="footer-x-title">Contact Info</h3>
                <ul class="footer-x-list footer-x-contact">
                  <li>
                    <i class="fas fa-map-marker-alt"></i>
                    <span>07 EatPoint Street, Accra, Ghana</span>
                  </li>
                  <li>
                    <i class="fas fa-phone"></i>
                    <span>+233 55 654 2134</span>
                  </li>
                  <li>
                    <i class="fas fa-envelope"></i>
                    <span>info@eatpoint.com</span>
                  </li>
                  <li>
                    <i class="fas fa-clock"></i>
                    <span>Mon - Sat: 8:00 AM - 9:00 PM</span>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <div class="footer-x-column">
            <h3 class="footer-x-title">Newsletter</h3>
            <p class="footer-x-subtitle">
              Subscribe to our newsletter for updates and exclusive offers.
            </p>
            <form class="footer-x-form">
              <div class="footer-x-input-group">
                <input type="email" placeholder="Enter your email" required />
                <button type="submit" class="footer-x-submit">
                  <i class="fas fa-paper-plane"></i>
                </button>
              </div>
            </form>
          </div>
        </div>
      </div>
      <div class="footer-x-bottom">
        <div class="footer-x-content">
          <div class="footer-x-copyright">
            <p style="color: #ffffff;">&copy; 2025 UpSide EatPoint. All rights reserved.</p>
          </div>
          <div class="footer-x-legal">
            <a href="#" class="footer-x-legal-link">Privacy Policy</a>
            <a href="#" class="footer-x-legal-link">Terms of Service</a>
            <a href="#" class="footer-x-legal-link">Cookie Policy</a>
          </div>
        </div>
      </div>
    </footer>

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- Owl Carousel JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

    <!-- Font Awesome JS -->
    <script src="../assets/fontawesome/js/all.min.js"></script>

    <!-- Custom JS -->
    <script src="../assets/js/eatpoint.js"></script>
  </body>
</html>
