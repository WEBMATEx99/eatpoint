<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Meta Tags -->
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Cuisines || EatPoint</title>

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

    <!-- Reservation Banner Section -->
    <section class="reservation-banner">
      <div class="banner-overlay"></div>
      <div class="banner-content">
        <h1>Make a Reservation</h1>
      </div>
    </section>

    <!-- Reservation Section -->
    <section class="reservation-section">
      <div class="container">
        <div class="reservation-wrapper">
          <!-- Reservation Info -->
          <div class="reservation-info">
            <h2>Why Choose Us?</h2>
            <div class="info-features">
              <div class="info-feature">
                <i class="fas fa-clock"></i>
                <h3>Flexible Timing</h3>
                <p>Book your preferred time slot with our 24/7 reservation system</p>
              </div>
              <div class="info-feature">
                <i class="fas fa-utensils"></i>
                <h3>Special Menu</h3>
                <p>Access to exclusive dishes and seasonal specials</p>
              </div>
              <div class="info-feature">
                <i class="fas fa-star"></i>
                <h3>Premium Service</h3>
                <p>Experience luxury dining with our attentive staff</p>
              </div>
            </div>
          </div>

          <!-- Reservation Form -->
          <div class="reservation-form">
            <h2>Book Your Table</h2>
            <form id="bookingForm">
              <div class="form-group">
                <input type="text" id="name" required>
                <label for="name">Full Name</label>
              </div>
              <div class="form-group">
                <input type="email" id="email" required>
                <label for="email">Email Address</label>
              </div>
              <div class="form-row">
                <div class="form-group">
                  <input type="tel" id="phone" required>
                  <label for="phone">Phone Number</label>
                </div>
                <div class="form-group">
                  <input type="number" id="guests" min="1" max="10" required>
                  <label for="guests">Number of Guests</label>
                </div>
              </div>
              <div class="form-row">
                <div class="form-group">
                  <input type="date" id="date" required>
                  <label for="date">Date</label>
                </div>
                <div class="form-group">
                  <input type="time" id="time" required>
                 <label for="time">Time</label>
                </div>
              </div>
              <div class="form-group">
                <select id="tableType" required>
                  <option value="">Select Table Type</option>
                  <option value="indoor">Indoor</option>
                  <option value="outdoor">Outdoor</option>
                  <option value="private">Private Room</option>
                </select>
              </div>
              <div class="form-group">
                <textarea id="specialRequests" rows="3"></textarea>
                <label for="specialRequests">Special Requests</label>
              </div>
              <button type="submit" class="submit-btn">
                <span>Confirm Reservation</span>
                <i class="fas fa-arrow-right"></i>
              </button>
            </form>
          </div>
        </div>
      </div>
    </section>

    <!-- Menu Selection Section -->
    <section class="menu-selection">
      <div class="container">
        <h2>Pre-Order Your Favorite Dishes</h2>
        <div class="menu-grid">
          <div class="menu-category">
            <h3>Starters</h3>
            <div class="menu-items">
              <div class="menu-item">
                <img src="https://images.pexels.com/photos/1640774/pexels-photo-1640774.jpeg" alt="Bruschetta">
                <div class="item-info">
                  <h4>Bruschetta</h4>
                  <p>Fresh tomatoes, garlic, and basil on toasted bread</p>
                  <span class="price">₵45.00</span>
                  <button class="add-to-order">Add to Order</button>
                </div>
              </div>
              <div class="menu-item">
                <img src="https://images.pexels.com/photos/1640772/pexels-photo-1640772.jpeg" alt="Calamari">
                <div class="item-info">
                  <h4>Calamari</h4>
                  <p>Crispy fried squid with garlic aioli sauce</p>
                  <span class="price">₵65.00</span>
                  <button class="add-to-order">Add to Order</button>
                </div>
              </div>
              <div class="menu-item">
                <img src="https://images.pexels.com/photos/1640777/pexels-photo-1640777.jpeg" alt="Spring Rolls">
                <div class="item-info">
                  <h4>Spring Rolls</h4>
                  <p>Fresh vegetables wrapped in crispy pastry</p>
                  <span class="price">₵55.00</span>
                  <button class="add-to-order">Add to Order</button>
                </div>
              </div>
            </div>
          </div>
          <div class="menu-category">
            <h3>Main Course</h3>
            <div class="menu-items">
              <div class="menu-item">
                <img src="https://images.pexels.com/photos/1640775/pexels-photo-1640775.jpeg" alt="Grilled Salmon">
                <div class="item-info">
                  <h4>Grilled Salmon</h4>
                  <p>Fresh salmon with seasonal vegetables</p>
                  <span class="price">₵120.00</span>
                  <button class="add-to-order">Add to Order</button>
                </div>
              </div>
              <div class="menu-item">
                <img src="https://images.pexels.com/photos/1640776/pexels-photo-1640776.jpeg" alt="Beef Tenderloin">
                <div class="item-info">
                  <h4>Beef Tenderloin</h4>
                  <p>Premium cut with red wine reduction sauce</p>
                  <span class="price">₵150.00</span>
                  <button class="add-to-order">Add to Order</button>
                </div>
              </div>
              <div class="menu-item">
               <img src="https://images.pexels.com/photos/1640774/pexels-photo-1640774.jpeg" alt="Bruschetta">
                <div class="item-info">
                  <h4>Chicken Marsala</h4>
                  <p>Pan-seared chicken in Marsala wine sauce</p>
                  <span class="price">₵95.00</span>
                  <button class="add-to-order">Add to Order</button>
                </div>
              </div>
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

    <!-- Add before closing body tag -->
    <script src="../assets/js/category.js"></script>
  </body>
</html>
