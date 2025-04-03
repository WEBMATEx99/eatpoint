<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Meta Tags -->
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Gallery || EatPoint</title>

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
    <link rel="stylesheet" href="assets/fontawesome/css/all.min.css" />

    <!-- Owl Carousel CSS -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" />

    <!-- Custom CSS -->
    <link rel="stylesheet" href="assets/css/style.css" />
    <link rel="stylesheet" href="assets/css/responsive.css" />
  </head>
  <bod>
      <!-------- HEADER || SECTION ------->
      <nav class="navbar">
        <a href="index.php" class="brand">EatPoint</a>
        <div class="menu-container">
          <ul class="mega-menu">
            <li class="dropdown">
              <div>
                <a href="index.php">Home</a>
              </div>
            </li>
  
            <!-- CUISINES -->
            <li class="dropdown">
              <div>
                <a href="cuisines_all.php">Cuisines</a>
              </div>
            </li>
            <!---- CLOSED ---->
  
            <!-- CATEGORIES -->
            <li class="dropdown">
              <div>
                <a href="menu.php">Menu</a>
              </div>
            </li>
            <!----- CLOSED ----->
  
            <!-- GALLERY -->
            <li class="dropdown">
              <div>
                <a href="gallery.php">Gallery</a>
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
                      <a href="Features/Reservation.php"
                        >Reservation</a
                      >
                    </li>
                    <li>
                      <a href="Features/About.php">About</a>
                    </li>
                    <li>
                      <a href="Features/Contact.php">Contact</a>
                    </li>  
  
                    <li>
                      <a href="Features/blog.php"
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
            <a href="user_account/signup.php" class="user-btn">
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

    <!-- Gallery Hero Section with Parallax Video -->
    <section class="gallery-hero">
      <div class="gallery-video-container">
        <video class="gallery-video" autoplay muted loop playsinline>
          <source src="assets/videos/Rooftop Lounge Restaurant - Interior Design.mp4" type="video/mp4">
        </video>
        <div class="gallery-video-overlay"></div>
      </div>
      <div class="gallery-hero-content">
        <h1 class="gallery-title">Our Restaurant Gallery</h1>
        <p class="gallery-subtitle">Experience the ambiance and elegance of EatPoint</p>
      </div>
    </section>

    <!-- Restaurant Rooms Gallery -->
    <section class="restaurant-gallery">
      <div class="gallery-container">
        <div class="gallery-section-title">
          <h2>Our Dining Spaces</h2>
          <p>Discover our beautifully designed rooms and dining areas</p>
        </div>
        
        <div class="gallery-grid">
          <!-- Main Dining Room -->
          <div class="gallery-item main-dining">
            <div class="gallery-image">
              <img src="https://images.unsplash.com/photo-1552566626-52f8b828add9?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80" alt="Main Dining Room">
              <div class="gallery-overlay">
                <h3>Main Dining Room</h3>
                <p>Our elegant main dining area with panoramic views</p>
                <button class="gallery-view-btn">View Details</button>
              </div>
            </div>
          </div>
          
          <!-- Private Dining -->
          <div class="gallery-item private-dining">
            <div class="gallery-image">
              <img src="https://images.unsplash.com/photo-1559339352-11d035aa65de?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1974&q=80" alt="Private Dining Room">
              <div class="gallery-overlay">
                <h3>Private Dining</h3>
                <p>Exclusive space for intimate gatherings</p>
                <button class="gallery-view-btn">View Details</button>
              </div>
            </div>
          </div>
          
          <!-- Outdoor Terrace -->
          <div class="gallery-item terrace">
            <div class="gallery-image">
              <img src="https://images.unsplash.com/photo-1555396273-367ea4eb4db5?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1974&q=80" alt="Outdoor Terrace">
              <div class="gallery-overlay">
                <h3>Outdoor Terrace</h3>
                <p>Al fresco dining with city skyline views</p>
                <button class="gallery-view-btn">View Details</button>
              </div>
            </div>
          </div>
          
          <!-- Bar Area -->
          <div class="gallery-item bar">
            <div class="gallery-image">
              <img src="https://images.unsplash.com/photo-1525268323446-0505b6fe7778?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80" alt="Bar Area">
              <div class="gallery-overlay">
                <h3>Bar & Lounge</h3>
                <p>Stylish bar with craft cocktails and small plates</p>
                <button class="gallery-view-btn">View Details</button>
              </div>
            </div>
          </div>
          
          <!-- Chef's Table -->
          <div class="gallery-item chefs-table">
            <div class="gallery-image">
              <img src="https://images.unsplash.com/photo-1414235077428-338989a2e8c0?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80" alt="Chef's Table">
              <div class="gallery-overlay">
                <h3>Chef's Table</h3>
                <p>Interactive dining experience with our executive chef</p>
                <button class="gallery-view-btn">View Details</button>
              </div>
            </div>
          </div>
          
          <!-- Wine Cellar -->
          <div class="gallery-item wine-cellar">
            <div class="gallery-image">
              <img src="https://images.unsplash.com/photo-1510812431401-41d2bd2722f3?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80" alt="Wine Cellar">
              <div class="gallery-overlay">
                <h3>Wine Cellar</h3>
                <p>Private dining in our exclusive wine cellar</p>
                <button class="gallery-view-btn">View Details</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Restaurant Experience Section -->
    <section class="restaurant-experience">
      <div class="experience-container">
        <div class="experience-content">
          <h2>The EatPoint Experience</h2>
          <p>Immerse yourself in our carefully curated dining environments, each designed to enhance your culinary journey.</p>
          
          <div class="experience-features">
            <div class="experience-feature">
              <i class="fas fa-utensils"></i>
              <h3>Fine Dining</h3>
              <p>Elegant atmosphere with impeccable service</p>
            </div>
            <div class="experience-feature">
              <i class="fas fa-glass-cheers"></i>
              <h3>Private Events</h3>
              <p>Spaces for celebrations and corporate gatherings</p>
            </div>
            <div class="experience-feature">
              <i class="fas fa-wine-glass-alt"></i>
              <h3>Wine Experience</h3>
              <p>Curated wine selection with expert pairing</p>
            </div>
            <div class="experience-feature">
              <i class="fas fa-concierge-bell"></i>
              <h3>Concierge Service</h3>
              <p>Personalized attention for every guest</p>
            </div>
          </div>
          
          <a href="#" class="experience-btn">Book a Table</a>
        </div>
      </div>
    </section>
  

    <!-- Gallery Modal -->
    <div class="gallery-modal" id="galleryModal">
      <div class="modal-content">
        <button class="modal-close">
          <span class="material-symbols-outlined">close</span>
        </button>
        <div class="modal-body">
          <div class="modal-image">
            <img src="" alt="Gallery Image" id="modalImage">
          </div>
          <div class="modal-info">
            <h2 id="modalTitle"></h2>
            <p id="modalDescription"></p>
            <div class="modal-features">
              <div class="modal-feature">
                <i class="fas fa-users"></i>
                <span>Capacity: <span id="modalCapacity"></span></span>
              </div>
              <div class="modal-feature">
                <i class="fas fa-clock"></i>
                <span>Available: <span id="modalAvailability"></span></span>
              </div>
              <div class="modal-feature">
                <i class="fas fa-star"></i>
                <span>Special: <span id="modalSpecial"></span></span>
              </div>
            </div>
            <a href="#" class="modal-reserve-btn">Reserve This Space</a>
          </div>
        </div>
      </div>
    </div>
    
    <!-- Footer Section -->
    <footer class="footer-x">
      <div class="footer-x-top">
        <div class="footer-x-content">
          <div class="footer-x-main">
            <div class="footer-x-brand">
              <a href="#" class="footer-x-logo-link">
                  <img src="assets/images/eatpoint-logo.svg" alt="EatPoint Logo" class="footer-x-logo">
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
    <script src="assets/fontawesome/js/all.min.js"></script>

    <!-- Custom JS -->
    <script src="assets/js/eatpoint.js"></script>
    <script src="assets/js/gallery.js"></script>
  </body>
</html>
