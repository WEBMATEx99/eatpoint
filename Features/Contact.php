<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Meta Tags -->
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>UpSide || EatPoint</title>

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

    <!-- Contact Section -->
    <section class="contact-us-section">
      <div class="contact-us-banner">
        <div class="contact-us-banner-overlay"></div>
        <div class="contact-us-banner-content">
          <h1>Contact Us</h1>
          <p>Get in touch with us for any inquiries or feedback</p>
          <div class="contact-us-breadcrumbs">
            <a href="../../index.php" class="contact-us-breadcrumb-link">Home</a>
            <span class="contact-us-breadcrumb-separator">/</span>
            <span class="contact-us-breadcrumb-current">Contact</span>
          </div>
        </div>
      </div>

      <div class="contact-us-content">
        <div class="container">
          <div class="contact-us-wrapper">
            <div class="contact-us-info">
              <h2>Get in Touch</h2>
              <p>We'd love to hear from you. Please fill out the form below or use our contact information to reach us.</p>
              
              <div class="contact-us-features">
                <div class="contact-us-feature">
                  <i class="fas fa-map-marker-alt"></i>
                  <div class="contact-us-feature-content">
                    <h3>Our Location</h3>
                    <p>07 EatPoint Street, Accra, Ghana</p>
                  </div>
                </div>
                <div class="contact-us-feature">
                  <i class="fas fa-phone"></i>
                  <div class="contact-us-feature-content">
                    <h3>Phone Number</h3>
                    <p>+233 55 654 2134</p>
                  </div>
                </div>
                <div class="contact-us-feature">
                  <i class="fas fa-envelope"></i>
                  <div class="contact-us-feature-content">
                    <h3>Email Address</h3>
                    <p>info@eatpoint.com</p>
                  </div>
                </div>
                <div class="contact-us-feature">
                  <i class="fas fa-clock"></i>
                  <div class="contact-us-feature-content">
                    <h3>Opening Hours</h3>
                    <p>Mon - Sat: 8:00 AM - 9:00 PM</p>
                  </div>
                </div>
              </div>

              <div class="contact-us-social-links">
                <h3>Follow Us</h3>
                <div class="contact-us-social-icons">
                  <a href="#" class="contact-us-social-icon"><i class="fab fa-facebook-f"></i></a>
                  <a href="#" class="contact-us-social-icon"><i class="fab fa-instagram"></i></a>
                  <a href="#" class="contact-us-social-icon"><i class="fab fa-whatsapp"></i></a>
                  <a href="#" class="contact-us-social-icon"><i class="fab fa-snapchat"></i></a>
                </div>
              </div>
            </div>

            <div class="contact-us-form">
              <h2>Send us a Message</h2>
              <form class="contact-us-form-container">
                <div class="contact-us-form-row">
                  <div class="contact-us-form-group">
                    <input type="text" id="name" required />
                    <label for="name">Your Name</label>
                  </div>
                  <div class="contact-us-form-group">
                    <input type="email" id="email" required />
                    <label for="email">Email Address</label>
                  </div>
                </div>
                <div class="contact-us-form-group">
                  <input type="text" id="subject" required />
                  <label for="subject">Subject</label>
                </div>
                <div class="contact-us-form-group">
                  <textarea id="message" required></textarea>
                  <label for="message">Your Message</label>
                </div>
                <button type="submit" class="contact-us-submit-btn">
                  <span>Send Message</span>
                  <i class="fas fa-paper-plane"></i>
                </button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>

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
