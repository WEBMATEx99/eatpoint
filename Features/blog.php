<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Meta Tags -->
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Blog || EatPoint</title>

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

    <!-- Main Content Section -->
    <section class="blog-news">
        <!-- Blog Banner -->
        <div class="blog-banner">
            <div class="banner-overlay"></div>
            <div class="banner-content">
                <div class="bread">
                    <a href="../../index.php" class="bread-link">Home</a>
                    <span class="bread-separator">/</span>
                    <span class="bread-current">Blog</span>
                </div>
                <h1>Our Culinary Blog</h1>
              
            </div>
        </div>

        <!-- Blog Content -->
        <div class="blog-container">
            <!-- Featured Posts -->
            <div class="featured-posts">
                <h2 class="section-title">Featured Stories</h2>
                <div class="featured-grid">
                    <article class="featured-post main">
                        <div class="post-image">
                            <img src="https://images.pexels.com/photos/3184291/pexels-photo-3184291.jpeg" alt="Chef Interview">
                            <div class="post-category">Chef's Corner</div>
                        </div>
                        <div class="post-content">
                            <h3>Meet Our Executive Chef: A Journey Through Culinary Excellence</h3>
                            <p>Discover the inspiring story of our executive chef and their passion for creating extraordinary dining experiences.</p>
                            <div class="post-meta">
                                <span><i class="far fa-calendar"></i> March 31, 2024</span>
                                <span><i class="far fa-clock"></i> 5 min read</span>
                            </div>
                            <a href="#" class="read-more">Read More <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </article>

                    <article class="featured-post">
                        <div class="post-image">
                            <img src="https://images.pexels.com/photos/1640774/pexels-photo-1640774.jpeg" alt="Seasonal Ingredients">
                            <div class="post-category">Seasonal</div>
                        </div>
                        <div class="post-content">
                            <h3>Spring's Finest: Seasonal Ingredients We're Loving</h3>
                            <p>Explore the fresh ingredients that are inspiring our spring menu and learn how to incorporate them at home.</p>
                            <div class="post-meta">
                                <span><i class="far fa-calendar"></i> March 28, 2024</span>
                                <span><i class="far fa-clock"></i> 4 min read</span>
                            </div>
                            <a href="#" class="read-more">Read More <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </article>

                    <article class="featured-post">
                        <div class="post-image">
                            <img src="https://images.pexels.com/photos/302347/pexels-photo-302347.jpeg" alt="Wine Pairing">
                            <div class="post-category">Wine & Dine</div>
                        </div>
                        <div class="post-content">
                            <h3>Perfect Wine Pairings for Your Favorite Dishes</h3>
                            <p>Master the art of wine pairing with our expert sommelier's guide to matching wines with different cuisines.</p>
                            <div class="post-meta">
                                <span><i class="far fa-calendar"></i> March 25, 2024</span>
                                <span><i class="far fa-clock"></i> 6 min read</span>
                            </div>
                            <a href="#" class="read-more">Read More <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </article>
                </div>
            </div>

            <!-- Blog Categories and Recent Posts -->
            <div class="blog-sidebar">
                <!-- Categories -->
                <div class="sidebar-widget categories">
                    <h3>Categories</h3>
                    <ul>
                        <li><a href="#">Chef's Corner <span>(12)</span></a></li>
                        <li><a href="#">Recipes <span>(8)</span></a></li>
                        <li><a href="#">Wine & Dine <span>(6)</span></a></li>
                        <li><a href="#">Seasonal <span>(10)</span></a></li>
                        <li><a href="#">Events <span>(4)</span></a></li>
                        <li><a href="#">Behind the Scenes <span>(7)</span></a></li>
                    </ul>
                </div>

                <!-- Recent Posts -->
                <div class="sidebar-widget recent-posts">
                    <h3>Recent Posts</h3>
                    <ul>
                        <li>
                            <div class="recent-post-image">
                                <img src="https://images.pexels.com/photos/1640777/pexels-photo-1640777.jpeg" alt="Cooking Tips">
                            </div>
                            <div class="recent-post-content">
                                <h4>Essential Cooking Tips from Our Kitchen</h4>
                                <span><i class="far fa-calendar"></i> March 30, 2024</span>
                            </div>
                        </li>
                        <li>
                            <div class="recent-post-image">
                                <img src="https://images.pexels.com/photos/1640772/pexels-photo-1640772.jpeg" alt="Sustainable Cooking">
                            </div>
                            <div class="recent-post-content">
                                <h4>Sustainable Cooking Practices</h4>
                                <span><i class="far fa-calendar"></i> March 27, 2024</span>
                            </div>
                        </li>
                        <li>
                            <div class="recent-post-image">
                                <img src="https://images.pexels.com/photos/1640775/pexels-photo-1640775.jpeg" alt="Dessert Masterclass">
                            </div>
                            <div class="recent-post-content">
                                <h4>Dessert Masterclass: Perfecting the Art</h4>
                                <span><i class="far fa-calendar"></i> March 24, 2024</span>
                            </div>
                        </li>
                    </ul>
                </div>

                <!-- Newsletter Widget -->
                <div class="sidebar-widget newsletter">
                    <h3>Stay Updated</h3>
                    <p>Subscribe to our newsletter for the latest culinary stories and recipes.</p>
                    <form class="newsletter-form">
                        <input type="email" placeholder="Enter your email" required>
                        <button type="submit">Subscribe</button>
                    </form>
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
