<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Meta Tags -->
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>EatPoint || Fine Dining Experience</title>

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
    <link rel="stylesheet" href="assets/css/modal.css" />
  </head>
  <body>
    <!-------- HEADER || SECTION ------->
    <nav class="navbar">
      <a href="#" class="brand">EatPoint</a>
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
          <a href="user_account/login.php" class="user-btn">
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

    <!-- Hero Section -->
    <section class="hero-section">
      <div class="hero-carousel owl-carousel">
        <div
          class="hero-slide"
          style="background-image: url('assets/images/min.jpg')">
          <div class="hero-content">
            <h1>Authentic African & Continental Cuisine</h1>
            <p>Experience the perfect blend of local flavors and international dishes</p>
            <div class="hero-buttons">
              <a href="menu.php" class="btn primary">View Menu</a>
              <a href="Features/Reservation.php" class="btn secondary">Book a Table</a>
            </div>
          </div>
        </div>
        <div
          class="hero-slide"
          style="
            background-image: url('https://images.pexels.com/photos/1640774/pexels-photo-1640774.jpeg');
          ">
          <div class="hero-content">
            <h1>Fresh Local Ingredients</h1>
            <p>Farm-to-table dining with the finest seasonal produce</p>
            <div class="hero-buttons">
              <a href="cuisines_all.php" class="btn primary">Our Specials</a>
              <a href="Features/About.php" class="btn secondary">Learn More</a>
            </div>
          </div>
        </div>
        <div
          class="hero-slide"
          style="
            background-image: url('https://images.pexels.com/photos/1640772/pexels-photo-1640772.jpeg');
          ">
          <div class="hero-content">
            <h1>Private Dining & Events</h1>
            <p>Perfect venue for your special occasions and corporate events</p>
            <div class="hero-buttons">
              <a href="Features/Reservation.php" class="btn primary">Book Event</a>
              <a href="gallery.php" class="btn secondary">View Gallery</a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!------- CLOSED ------->

    <!-- Banner Section -->
    <section class="banner-section">
      <div class="banner-container">
        <!-- Left Banner -->
        <div class="banner-left">
          <div class="banner-content">
            <div class="discount-badge">
              <span class="badge-text">Weekend Special</span>
              <span class="discount">30%</span>
              <span class="badge-text">Off</span>
            </div>
            <div class="banner-image">
              <img
                src="https://www.pngmart.com/files/5/Hamburger-PNG-Free-Download.png"
                alt="Signature Dishes" />
            </div>
            <div class="banner-text">
              <h2>Discover Our Signature</h2>
              <h2>Local & Continental</h2>
              <h3 class="highlight">Culinary Delights!</h3>
              <p>
                Experience the perfect fusion of traditional African flavors and international cuisine. From our famous Jollof Rice to succulent Grilled Tilapia, each dish tells a story of culinary excellence and cultural heritage.
              </p>
              <ul class="features">
                <li>
                  <i class="fas fa-check"></i> Fresh Local Ingredients
                </li>
                <li>
                  <i class="fas fa-check"></i> Elegant Dining Atmosphere
                </li>
                <li><i class="fas fa-check"></i> Live Cultural Performances</li>
                <li><i class="fas fa-check"></i> Fast Delivery Service</li>
              </ul>
              <a href="#" class="order-now">Make Reservation</a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!------ CLOSED ------>

    <!-- Recipe Section -->
    <section class="recipe-section">
      <div class="container">
        <!-- Tab Headers -->
        <div class="recipe-tabs">
          <button class="tab-btn active" data-tab="latest">
            Chef's Specials
          </button>
          <button class="tab-btn" data-tab="popular">
            Local Favorites
          </button>
          <button class="tab-btn" data-tab="fastest">Continental Dishes</button>
          <button class="tab-btn" data-tab="editors">Signature Dishes</button>
        </div>

        <!-- Latest Recipes Tab -->
        <div class="tab-content active" id="latest">
          <div class="recipe-slider">
            <div class="recipe-cards">
              <!-- Page 01 -->
              <div class="recipe-cards-page">
                <div class="recipe-card">
                  <div class="recipe-image">
                    <img
                      src="https://images.pexels.com/photos/1279330/pexels-photo-1279330.jpeg"
                      alt="Jollof Rice" />
                    <div class="recipe-rating">
                      <span class="star">★</span>
                      <span>4.9</span>
                    </div>
                    <button class="add-to-cart">
                      <i class="fas fa-shopping-cart"></i>
                    </button>
                  </div>
                  <div class="recipe-info">
                    <span class="category">Local</span>
                    <span class="price">GHS 50.00</span>
                    <h3>Jollof Rice</h3>
                  </div>
                </div>

                <div class="recipe-card">
                  <div class="recipe-image">
                    <img
                      src="https://images.pexels.com/photos/410648/pexels-photo-410648.jpeg"
                      alt="Beef Suya" />
                    <div class="recipe-rating">
                      <span class="star">★</span>
                      <span>4.9</span>
                    </div>
                    <button class="add-to-cart">
                      <i class="fas fa-shopping-cart"></i>
                    </button>
                  </div>
                  <div class="recipe-info">
                    <span class="category">Local</span>
                    <span class="price">GHS 75.00</span>
                    <h3>Beef Suya</h3>
                  </div>
                </div>

                <div class="recipe-card">
                  <div class="recipe-image">
                    <img
                      src="https://images.pexels.com/photos/46239/salmon-dish-food-meal-46239.jpeg"
                      alt="Grilled Lobster" />
                    <div class="recipe-rating">
                      <span class="star">★</span>
                      <span>4.9</span>
                    </div>
                    <button class="add-to-cart">
                      <i class="fas fa-shopping-cart"></i>
                    </button>
                  </div>
                  <div class="recipe-info">
                    <span class="category">Continental</span>
                    <span class="price">GHS 120.00</span>
                    <h3>Grilled Lobster</h3>
                  </div>
                </div>

                <div class="recipe-card">
                  <div class="recipe-image">
                    <img
                      src="https://images.pexels.com/photos/1279330/pexels-photo-1279330.jpeg"
                      alt="Waakye Special" />
                    <div class="recipe-rating">
                      <span class="star">★</span>
                      <span>4.6</span>
                    </div>
                    <button class="add-to-cart">
                      <i class="fas fa-shopping-cart"></i>
                    </button>
                  </div>
                  <div class="recipe-info">
                    <span class="category">Local</span>
                    <span class="price">GHS 45.00</span>
                    <h3>Waakye Special</h3>
                  </div>
                </div>

                <div class="recipe-card">
                  <div class="recipe-image">
                    <img
                      src="https://images.pexels.com/photos/1028704/pexels-photo-1028704.jpeg"
                      alt="Bofrot" />
                    <div class="recipe-rating">
                      <span class="star">★</span>
                      <span>4.9</span>
                    </div>
                    <button class="add-to-cart">
                      <i class="fas fa-shopping-cart"></i>
                    </button>
                  </div>
                  <div class="recipe-info">
                    <span class="category">Local</span>
                    <span class="price">GHS 15.00</span>
                    <h3>Bofrot</h3>
                  </div>
                </div>

                <div class="recipe-card">
                  <div class="recipe-image">
                    <img
                      src="https://images.pexels.com/photos/46239/salmon-dish-food-meal-46239.jpeg"
                      alt="Grilled Salmon" />
                    <div class="recipe-rating">
                      <span class="star">★</span>
                      <span>4.8</span>
                    </div>
                    <button class="add-to-cart">
                      <i class="fas fa-shopping-cart"></i>
                    </button>
                  </div>
                  <div class="recipe-info">
                    <span class="category">Continental</span>
                    <span class="price">GHS 85.00</span>
                    <h3>Grilled Salmon</h3>
                  </div>
                </div>

                <div class="recipe-card">
                  <div class="recipe-image">
                    <img
                      src="https://images.pexels.com/photos/1279330/pexels-photo-1279330.jpeg"
                      alt="Palm Nut Soup" />
                    <div class="recipe-rating">
                      <span class="star">★</span>
                      <span>4.7</span>
                    </div>
                    <button class="add-to-cart">
                      <i class="fas fa-shopping-cart"></i>
                    </button>
                  </div>
                  <div class="recipe-info">
                    <span class="category">Local</span>
                    <span class="price">GHS 45.00</span>
                    <h3>Palm Nut Soup</h3>
                  </div>
                </div>

                <div class="recipe-card">
                  <div class="recipe-image">
                    <img
                      src="https://images.pexels.com/photos/1028704/pexels-photo-1028704.jpeg"
                      alt="Fresh Coconut Juice" />
                    <div class="recipe-rating">
                      <span class="star">★</span>
                      <span>4.6</span>
                    </div>
                    <button class="add-to-cart">
                      <i class="fas fa-shopping-cart"></i>
                    </button>
                  </div>
                  <div class="recipe-info">
                    <span class="category">Local</span>
                    <span class="price">GHS 20.00</span>
                    <h3>Fresh Coconut Juice</h3>
                  </div>
                </div>
              </div>

              <!-- Page 02 -->
              <div class="recipe-cards-page">
                <div class="recipe-card">
                  <div class="recipe-image">
                    <img
                      src="assets/images/japanese-ramen.jpg"
                      alt="Japanese Ramen" />
                    <div class="recipe-rating">
                      <span class="star">★</span>
                      <span>4.8</span>
                    </div>
                    <button class="add-to-cart">
                      <i class="fas fa-shopping-cart"></i>
                    </button>
                  </div>
                  <div class="recipe-info">
                    <span class="category">Noodles</span>
                    <span class="price">GHS 55.00</span>
                    <h3>Japanese Ramen</h3>
                  </div>
                </div>

                <div class="recipe-card">
                  <div class="recipe-image">
                    <img
                      src="assets/images/chicken-biryani.jpg"
                      alt="Chicken Biryani" />
                    <div class="recipe-rating">
                      <span class="star">★</span>
                      <span>4.9</span>
                    </div>
                    <button class="add-to-cart">
                      <i class="fas fa-shopping-cart"></i>
                    </button>
                  </div>
                  <div class="recipe-info">
                    <span class="category">Rice</span>
                    <span class="price">GHS 65.00</span>
                    <h3>Chicken Biryani</h3>
                  </div>
                </div>

                <div class="recipe-card">
                  <div class="recipe-image">
                    <img src="assets/images/fish-tacos.jpg" alt="Fish Tacos" />
                    <div class="recipe-rating">
                      <span class="star">★</span>
                      <span>4.7</span>
                    </div>
                    <button class="add-to-cart">
                      <i class="fas fa-shopping-cart"></i>
                    </button>
                  </div>
                  <div class="recipe-info">
                    <span class="category">Mexican</span>
                    <span class="price">GHS 45.00</span>
                    <h3>Fish Tacos</h3>
                  </div>
                </div>

                <div class="recipe-card">
                  <div class="recipe-image">
                    <img
                      src="assets/images/falafel-wrap.jpg"
                      alt="Falafel Wrap" />
                    <div class="recipe-rating">
                      <span class="star">★</span>
                      <span>4.6</span>
                    </div>
                    <button class="add-to-cart">
                      <i class="fas fa-shopping-cart"></i>
                    </button>
                  </div>
                  <div class="recipe-info">
                    <span class="category">Wraps</span>
                    <span class="price">GHS 35.00</span>
                    <h3>Falafel Wrap</h3>
                  </div>
                </div>

                <div class="recipe-card">
                  <div class="recipe-image">
                    <img
                      src="assets/images/spring-rolls.jpg"
                      alt="Spring Rolls" />
                    <div class="recipe-rating">
                      <span class="star">★</span>
                      <span>4.8</span>
                    </div>
                    <button class="add-to-cart">
                      <i class="fas fa-shopping-cart"></i>
                    </button>
                  </div>
                  <div class="recipe-info">
                    <span class="category">Appetizers</span>
                    <span class="price">GHS 30.00</span>
                    <h3>Spring Rolls</h3>
                  </div>
                </div>

                <!-- Additional 3 recipe cards -->
                <div class="recipe-card">
                  <div class="recipe-image">
                    <img
                      src="https://images.pexels.com/photos/1640774/pexels-photo-1640774.jpeg"
                      alt="Beef Burger" />
                    <div class="recipe-rating">
                      <span class="star">★</span>
                      <span>4.7</span>
                    </div>
                    <button class="add-to-cart">
                      <i class="fas fa-shopping-cart"></i>
                    </button>
                  </div>
                  <div class="recipe-info">
                    <span class="category">Burgers</span>
                    <span class="price">GHS 45.00</span>
                    <h3>Classic Beef Burger</h3>
                  </div>
                </div>

                <div class="recipe-card">
                  <div class="recipe-image">
                    <img
                      src="https://images.pexels.com/photos/1640772/pexels-photo-1640772.jpeg"
                      alt="Caesar Salad" />
                    <div class="recipe-rating">
                      <span class="star">★</span>
                      <span>4.6</span>
                    </div>
                    <button class="add-to-cart">
                      <i class="fas fa-shopping-cart"></i>
                    </button>
                  </div>
                  <div class="recipe-info">
                    <span class="category">Salads</span>
                    <span class="price">GHS 35.00</span>
                    <h3>Caesar Salad</h3>
                  </div>
                </div>

                <div class="recipe-card">
                  <div class="recipe-image">
                    <img
                      src="https://images.pexels.com/photos/1640774/pexels-photo-1640774.jpeg"
                      alt="Ice Cream Sundae" />
                    <div class="recipe-rating">
                      <span class="star">★</span>
                      <span>4.8</span>
                    </div>
                    <button class="add-to-cart">
                      <i class="fas fa-shopping-cart"></i>
                    </button>
                  </div>
                  <div class="recipe-info">
                    <span class="category">Desserts</span>
                    <span class="price">GHS 30.00</span>
                    <h3>Ice Cream Sundae</h3>
                  </div>
                </div>
              </div>

              <!-- Page 03 -->
              <div class="recipe-cards-page">
                <div class="recipe-card">
                  <div class="recipe-image">
                    <img
                      src="assets/images/seafood-pasta.jpg"
                      alt="Seafood Pasta" />
                    <div class="recipe-rating">
                      <span class="star">★</span>
                      <span>4.9</span>
                    </div>
                    <button class="add-to-cart">
                      <i class="fas fa-shopping-cart"></i>
                    </button>
                  </div>
                  <div class="recipe-info">
                    <span class="category">Pasta</span>
                    <span class="price">GHS 75.00</span>
                    <h3>Seafood Pasta</h3>
                  </div>
                </div>

                <div class="recipe-card">
                  <div class="recipe-image">
                    <img src="assets/images/thai-curry.jpg" alt="Thai Curry" />
                    <div class="recipe-rating">
                      <span class="star">★</span>
                      <span>4.7</span>
                    </div>
                    <button class="add-to-cart">
                      <i class="fas fa-shopping-cart"></i>
                    </button>
                  </div>
                  <div class="recipe-info">
                    <span class="category">Curry</span>
                    <span class="price">GHS 60.00</span>
                    <h3>Thai Green Curry</h3>
                  </div>
                </div>

                <div class="recipe-card">
                  <div class="recipe-image">
                    <img
                      src="assets/images/grilled-octopus.jpg"
                      alt="Grilled Octopus" />
                    <div class="recipe-rating">
                      <span class="star">★</span>
                      <span>4.8</span>
                    </div>
                    <button class="add-to-cart">
                      <i class="fas fa-shopping-cart"></i>
                    </button>
                  </div>
                  <div class="recipe-info">
                    <span class="category">Seafood</span>
                    <span class="price">GHS 95.00</span>
                    <h3>Grilled Octopus</h3>
                  </div>
                </div>

                <div class="recipe-card">
                  <div class="recipe-image">
                    <img
                      src="assets/images/supreme-pizza.jpg"
                      alt="Supreme Pizza" />
                    <div class="recipe-rating">
                      <span class="star">★</span>
                      <span>4.6</span>
                    </div>
                    <button class="add-to-cart">
                      <i class="fas fa-shopping-cart"></i>
                    </button>
                  </div>
                  <div class="recipe-info">
                    <span class="category">Pizza</span>
                    <span class="price">GHS 85.00</span>
                    <h3>Supreme Pizza</h3>
                  </div>
                </div>

                <div class="recipe-card">
                  <div class="recipe-image">
                    <img src="assets/images/tiramisu.jpg" alt="Tiramisu" />
                    <div class="recipe-rating">
                      <span class="star">★</span>
                      <span>4.9</span>
                    </div>
                    <button class="add-to-cart">
                      <i class="fas fa-shopping-cart"></i>
                    </button>
                  </div>
                  <div class="recipe-info">
                    <span class="category">Dessert</span>
                    <span class="price">GHS 40.00</span>
                    <h3>Tiramisu</h3>
                  </div>
                </div>

                <!-- Additional 3 recipe cards -->
                <div class="recipe-card">
                  <div class="recipe-image">
                    <img
                      src="https://images.pexels.com/photos/1640772/pexels-photo-1640772.jpeg"
                      alt="Shrimp Scampi" />
                    <div class="recipe-rating">
                      <span class="star">★</span>
                      <span>4.8</span>
                    </div>
                    <button class="add-to-cart">
                      <i class="fas fa-shopping-cart"></i>
                    </button>
                  </div>
                  <div class="recipe-info">
                    <span class="category">Seafood</span>
                    <span class="price">GHS 90.00</span>
                    <h3>Shrimp Scampi</h3>
                  </div>
                </div>

                <div class="recipe-card">
                  <div class="recipe-image">
                    <img
                      src="https://images.pexels.com/photos/1640774/pexels-photo-1640774.jpeg"
                      alt="Vegetable Soup" />
                    <div class="recipe-rating">
                      <span class="star">★</span>
                      <span>4.7</span>
                    </div>
                    <button class="add-to-cart">
                      <i class="fas fa-shopping-cart"></i>
                    </button>
                  </div>
                  <div class="recipe-info">
                    <span class="category">As</span>
                    <span class="price">GHS 35.00</span>
                    <h3>Vegetable Soup</h3>
                  </div>
                </div>

                <div class="recipe-card">
                  <div class="recipe-image">
                    <img
                      src="https://images.pexels.com/photos/1640772/pexels-photo-1640772.jpeg"
                      alt="Fruit Tart" />
                    <div class="recipe-rating">
                      <span class="star">★</span>
                      <span>4.7</span>
                    </div>
                    <button class="add-to-cart">
                      <i class="fas fa-shopping-cart"></i>
                    </button>
                  </div>
                  <div class="recipe-info">
                    <span class="category">Desserts</span>
                    <span class="price">GHS 45.00</span>
                    <h3>Fresh Fruit Tart</h3>
                  </div>
                </div>
              </div>
            </div>

            <!-- Navigation -->
            <div class="recipe-navigation">
              <button class="nav-btn prev" disabled>
                <i class="fas fa-chevron-left"></i> Prev
              </button>
              <div class="nav-dots">
                <button class="dot active">01</button>
                <button class="dot">02</button>
                <button class="dot">03</button>
              </div>
              <button class="nav-btn next">
                Next <i class="fas fa-chevron-right"></i>
              </button>
            </div>
          </div>
        </div>

        <!-- Popular Recipes Tab -->
        <div class="tab-content" id="popular">
          <div class="recipe-slider">
            <div class="recipe-cards">
              <!-- Page 01 -->
              <div class="recipe-cards-page">
                <div class="recipe-card">
                  <div class="recipe-image">
                    <img
                      src="assets/images/chicken-biryani.jpg"
                      alt="Jollof Rice" />
                    <div class="recipe-rating">
                      <span class="star">★</span>
                      <span>4.9</span>
                    </div>
                    <button class="add-to-cart">
                      <i class="fas fa-shopping-cart"></i>
                    </button>
                  </div>
                  <div class="recipe-info">
                    <span class="category">Local</span>
                    <span class="price">GHS 50.00</span>
                    <h3>Jollof Rice</h3>
                  </div>
                </div>

                <div class="recipe-card">
                  <div class="recipe-image">
                    <img
                      src="assets/images/grilled-steak.jpg"
                      alt="Beef Suya" />
                    <div class="recipe-rating">
                      <span class="star">★</span>
                      <span>4.9</span>
                    </div>
                    <button class="add-to-cart">
                      <i class="fas fa-shopping-cart"></i>
                    </button>
                  </div>
                  <div class="recipe-info">
                    <span class="category">Local</span>
                    <span class="price">GHS 75.00</span>
                    <h3>Beef Suya</h3>
                  </div>
                </div>

                <div class="recipe-card">
                  <div class="recipe-image">
                    <img
                      src="assets/images/seafood-pasta.jpg"
                      alt="Grilled Lobster" />
                    <div class="recipe-rating">
                      <span class="star">★</span>
                      <span>4.9</span>
                    </div>
                    <button class="add-to-cart">
                      <i class="fas fa-shopping-cart"></i>
                    </button>
                  </div>
                  <div class="recipe-info">
                    <span class="category">Continental</span>
                    <span class="price">GHS 120.00</span>
                    <h3>Grilled Lobster</h3>
                  </div>
                </div>

                <div class="recipe-card">
                  <div class="recipe-image">
                    <img
                      src="assets/images/supreme-pizza.jpg"
                      alt="Waakye Special" />
                    <div class="recipe-rating">
                      <span class="star">★</span>
                      <span>4.6</span>
                    </div>
                    <button class="add-to-cart">
                      <i class="fas fa-shopping-cart"></i>
                    </button>
                  </div>
                  <div class="recipe-info">
                    <span class="category">Local</span>
                    <span class="price">GHS 45.00</span>
                    <h3>Waakye Special</h3>
                  </div>
                </div>

                <div class="recipe-card">
                  <div class="recipe-image">
                    <img src="assets/images/tiramisu.jpg" alt="Bofrot" />
                    <div class="recipe-rating">
                      <span class="star">★</span>
                      <span>4.9</span>
                    </div>
                    <button class="add-to-cart">
                      <i class="fas fa-shopping-cart"></i>
                    </button>
                  </div>
                  <div class="recipe-info">
                    <span class="category">Local</span>
                    <span class="price">GHS 15.00</span>
                    <h3>Bofrot</h3>
                  </div>
                </div>

                <!-- Additional 3 recipe cards -->
                <div class="recipe-card">
                  <div class="recipe-image">
                    <img
                      src="https://images.pexels.com/photos/1640772/pexels-photo-1640772.jpeg"
                      alt="Grilled Salmon" />
                    <div class="recipe-rating">
                      <span class="star">★</span>
                      <span>4.8</span>
                    </div>
                    <button class="add-to-cart">
                      <i class="fas fa-shopping-cart"></i>
                    </button>
                  </div>
                  <div class="recipe-info">
                    <span class="category">Continental</span>
                    <span class="price">GHS 85.00</span>
                    <h3>Grilled Salmon</h3>
                  </div>
                </div>

                <div class="recipe-card">
                  <div class="recipe-image">
                    <img
                      src="https://images.pexels.com/photos/1640774/pexels-photo-1640774.jpeg"
                      alt="Palm Nut Soup" />
                    <div class="recipe-rating">
                      <span class="star">★</span>
                      <span>4.7</span>
                    </div>
                    <button class="add-to-cart">
                      <i class="fas fa-shopping-cart"></i>
                    </button>
                  </div>
                  <div class="recipe-info">
                    <span class="category">Local</span>
                    <span class="price">GHS 45.00</span>
                    <h3>Palm Nut Soup</h3>
                  </div>
                </div>

                <div class="recipe-card">
                  <div class="recipe-image">
                    <img
                      src="https://images.pexels.com/photos/1640772/pexels-photo-1640772.jpeg"
                      alt="Fresh Coconut Juice" />
                    <div class="recipe-rating">
                      <span class="star">★</span>
                      <span>4.6</span>
                    </div>
                    <button class="add-to-cart">
                      <i class="fas fa-shopping-cart"></i>
                    </button>
                  </div>
                  <div class="recipe-info">
                    <span class="category">Local</span>
                    <span class="price">GHS 20.00</span>
                    <h3>Fresh Coconut Juice</h3>
                  </div>
                </div>
              </div>

              <!-- Page 02 -->
              <div class="recipe-cards-page">
                <div class="recipe-card">
                  <div class="recipe-image">
                    <img
                      src="assets/images/japanese-ramen.jpg"
                      alt="Fufu & Light Soup" />
                    <div class="recipe-rating">
                      <span class="star">★</span>
                      <span>4.8</span>
                    </div>
                    <button class="add-to-cart">
                      <i class="fas fa-shopping-cart"></i>
                    </button>
                  </div>
                  <div class="recipe-info">
                    <span class="category">Local</span>
                    <span class="price">GHS 55.00</span>
                    <h3>Fufu & Light Soup</h3>
                  </div>
                </div>

                <div class="recipe-card">
                  <div class="recipe-image">
                    <img
                      src="assets/images/chicken-biryani.jpg"
                      alt="Grilled Chicken" />
                    <div class="recipe-rating">
                      <span class="star">★</span>
                      <span>4.9</span>
                    </div>
                    <button class="add-to-cart">
                      <i class="fas fa-shopping-cart"></i>
                    </button>
                  </div>
                  <div class="recipe-info">
                    <span class="category">Continental</span>
                    <span class="price">GHS 65.00</span>
                    <h3>Grilled Chicken</h3>
                  </div>
                </div>

                <div class="recipe-card">
                  <div class="recipe-image">
                    <img src="assets/images/fish-tacos.jpg" alt="Kelewele" />
                    <div class="recipe-rating">
                      <span class="star">★</span>
                      <span>4.7</span>
                    </div>
                    <button class="add-to-cart">
                      <i class="fas fa-shopping-cart"></i>
                    </button>
                  </div>
                  <div class="recipe-info">
                    <span class="category">Local</span>
                    <span class="price">GHS 25.00</span>
                    <h3>Kelewele</h3>
                  </div>
                </div>

                <div class="recipe-card">
                  <div class="recipe-image">
                    <img
                      src="assets/images/falafel-wrap.jpg"
                      alt="Beef Steak" />
                    <div class="recipe-rating">
                      <span class="star">★</span>
                      <span>4.6</span>
                    </div>
                    <button class="add-to-cart">
                      <i class="fas fa-shopping-cart"></i>
                    </button>
                  </div>
                  <div class="recipe-info">
                    <span class="category">Wraps</span>
                    <span class="price">GHS 35.00</span>
                    <h3>Falafel Wrap</h3>
                  </div>
                </div>

                <!-- Additional 3 recipe cards -->
                <div class="recipe-card">
                  <div class="recipe-image">
                    <img
                      src="https://images.pexels.com/photos/1640774/pexels-photo-1640774.jpeg"
                      alt="Beef Burger" />
                    <div class="recipe-rating">
                      <span class="star">★</span>
                      <span>4.7</span>
                    </div>
                    <button class="add-to-cart">
                      <i class="fas fa-shopping-cart"></i>
                    </button>
                  </div>
                  <div class="recipe-info">
                    <span class="category">Burgers</span>
                    <span class="price">GHS 45.00</span>
                    <h3>Classic Beef Burger</h3>
                  </div>
                </div>

                <div class="recipe-card">
                  <div class="recipe-image">
                    <img
                      src="https://images.pexels.com/photos/1640772/pexels-photo-1640772.jpeg"
                      alt="Caesar Salad" />
                    <div class="recipe-rating">
                      <span class="star">★</span>
                      <span>4.6</span>
                    </div>
                    <button class="add-to-cart">
                      <i class="fas fa-shopping-cart"></i>
                    </button>
                  </div>
                  <div class="recipe-info">
                    <span class="category">Salads</span>
                    <span class="price">GHS 35.00</span>
                    <h3>Caesar Salad</h3>
                  </div>
                </div>

                <div class="recipe-card">
                  <div class="recipe-image">
                    <img
                      src="https://images.pexels.com/photos/1640774/pexels-photo-1640774.jpeg"
                      alt="Ice Cream Sundae" />
                    <div class="recipe-rating">
                      <span class="star">★</span>
                      <span>4.8</span>
                    </div>
                    <button class="add-to-cart">
                      <i class="fas fa-shopping-cart"></i>
                    </button>
                  </div>
                  <div class="recipe-info">
                    <span class="category">Desserts</span>
                    <span class="price">GHS 30.00</span>
                    <h3>Ice Cream Sundae</h3>
                  </div>
                </div>
              </div>

              <!-- Page 03 -->
              <div class="recipe-cards-page">
                <div class="recipe-card">
                  <div class="recipe-image">
                    <img
                      src="assets/images/creamy-pasta.jpg"
                      alt="Creamy Pasta" />
                    <div class="recipe-rating">
                      <span class="star">★</span>
                      <span>4.8</span>
                    </div>
                    <button class="add-to-cart">
                      <i class="fas fa-shopping-cart"></i>
                    </button>
                  </div>
                  <div class="recipe-info">
                    <span class="category">Pasta</span>
                    <span class="price">GHS 45.00</span>
                    <h3>Creamy Garlic Pasta</h3>
                  </div>
                </div>

                <div class="recipe-card">
                  <div class="recipe-image">
                    <img
                      src="assets/images/quinoa-bowl.jpg"
                      alt="Quinoa Bowl" />
                    <div class="recipe-rating">
                      <span class="star">★</span>
                      <span>4.7</span>
                    </div>
                    <button class="add-to-cart">
                      <i class="fas fa-shopping-cart"></i>
                    </button>
                  </div>
                  <div class="recipe-info">
                    <span class="category">Healthy</span>
                    <span class="price">GHS 35.00</span>
                    <h3>Quinoa Buddha Bowl</h3>
                  </div>
                </div>

                <div class="recipe-card">
                  <div class="recipe-image">
                    <img src="assets/images/pancakes.jpg" alt="Pancakes" />
                    <div class="recipe-rating">
                      <span class="star">★</span>
                      <span>4.6</span>
                    </div>
                    <button class="add-to-cart">
                      <i class="fas fa-shopping-cart"></i>
                    </button>
                  </div>
                  <div class="recipe-info">
                    <span class="category">Breakfast</span>
                    <span class="price">GHS 25.00</span>
                    <h3>Fluffy Pancakes</h3>
                  </div>
                </div>

                <div class="recipe-card">
                  <div class="recipe-image">
                    <img
                      src="assets/images/chocolate-cake.jpg"
                      alt="Chocolate Cake" />
                    <div class="recipe-rating">
                      <span class="star">★</span>
                      <span>4.8</span>
                    </div>
                    <button class="add-to-cart">
                      <i class="fas fa-shopping-cart"></i>
                    </button>
                  </div>
                  <div class="recipe-info">
                    <span class="category">Desserts</span>
                    <span class="price">GHS 40.00</span>
                    <h3>Chocolate Lava Cake</h3>
                  </div>
                </div>

                <div class="recipe-card">
                  <div class="recipe-image">
                    <img
                      src="assets/images/spring-rolls.jpg"
                      alt="Spring Rolls" />
                    <div class="recipe-rating">
                      <span class="star">★</span>
                      <span>4.8</span>
                    </div>
                    <button class="add-to-cart">
                      <i class="fas fa-shopping-cart"></i>
                    </button>
                  </div>
                  <div class="recipe-info">
                    <span class="category">Appetizers</span>
                    <span class="price">GHS 30.00</span>
                    <h3>Spring Rolls</h3>
                  </div>
                </div>
              </div>
            </div>

            <!-- Navigation -->
            <div class="recipe-navigation">
              <button class="nav-btn prev" disabled>
                <i class="fas fa-chevron-left"></i> Prev
              </button>
              <div class="nav-dots">
                <button class="dot active">01</button>
                <button class="dot">02</button>
                <button class="dot">03</button>
              </div>
              <button class="nav-btn next">
                Next <i class="fas fa-chevron-right"></i>
              </button>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--- CLOSED --->

    <!-- Inner Banner Section -->
    <section class="inner-banner">
      <div class="inner-banner-container">
        <div class="inner-banner-content">
          <div class="inner-text-content">
            <h2>Taste the</h2>
            <h2>Magic at</h2>
            <h2 class="highlight">EatPoint!</h2>
            <p>
              Experience the perfect fusion of traditional African flavors and international cuisine. From our famous Jollof Rice to succulent Grilled Tilapia, each dish tells a story of culinary excellence and cultural heritage.
            </p>
            <a href="#" class="order-btn">ORDER NOW</a>
          </div>
          <div class="inner-image-content">
            <div class="inner-discount-badge">
              <span class="discount">30%</span>
              <span class="badge-text">Off</span>
            </div>
            <img
              src="https://www.pngmart.com/files/5/Hamburger-PNG-Free-Download.png"
              alt="Signature Dishes"
              class="inner-img" />
          </div>
        </div>
      </div>
    </section>
    <!---- CLOSED ----->

    <!-- WebMateX Recipe Section -->
    <section class="WebMateX-recipes">
      <div class="WebMateX-container">
        <div class="WebMateX-header">
          <h2>Our Signature Dishes</h2>
          <p>Discover our collection of local and continental delicacies</p>
        </div>

        <!-- Tab Headers -->
        <div class="WebMateX-tabs">
          <button class="WebMateX-tab-btn active" data-tab="pro">
            Local Specialties
          </button>
          <button class="WebMateX-tab-btn" data-tab="site">Continental Dishes</button>
          <button class="WebMateX-tab-btn" data-tab="mob">Quick Bites</button>
          <button class="WebMateX-tab-btn" data-tab="in">
            Chef's Recommendations
          </button>
        </div>

        <!-- Latest Recipes Tab -->
        <div class="WebMateX-tab-content active" id="pro">
          <div class="WebMateX-recipe-grid">
            <!-- 8 recipe cards with consistent styling -->
            <div class="WebMateX-recipe-card">
              <div class="WebMateX-recipe-image">
                <img src="https://images.pexels.com/photos/1279330/pexels-photo-1279330.jpeg" alt="Waakye Special" />
                <div class="WebMateX-rating">
                  <span class="star">★</span>
                  <span>4.8</span>
                </div>
                <button class="WebMateX-cart-btn">
                  <i class="fas fa-shopping-basket"></i>
                </button>
              </div>
              <div class="WebMateX-recipe-info">
                <span class="WebMateX-category-tag">Local</span>
                <h3>Waakye Special</h3>
                <span class="WebMateX-price">GHS 45.00</span>
              </div>
            </div>

            <div class="WebMateX-recipe-card">
              <div class="WebMateX-recipe-image">
                <img src="https://images.pexels.com/photos/46239/salmon-dish-food-meal-46239.jpeg" alt="Grilled Tilapia" />
                <div class="WebMateX-rating">
                  <span class="star">★</span>
                  <span>4.9</span>
                </div>
                <button class="WebMateX-cart-btn">
                  <i class="fas fa-shopping-basket"></i>
                </button>
              </div>
              <div class="WebMateX-recipe-info">
                <span class="WebMateX-category-tag">Local</span>
                <h3>Grilled Tilapia</h3>
                <span class="WebMateX-price">GHS 75.00</span>
              </div>
            </div>

            <div class="WebMateX-recipe-card">
              <div class="WebMateX-recipe-image">
                <img src="https://images.pexels.com/photos/410648/pexels-photo-410648.jpeg" alt="Beef Suya" />
                <div class="WebMateX-rating">
                  <span class="star">★</span>
                  <span>4.7</span>
                </div>
                <button class="WebMateX-cart-btn">
                  <i class="fas fa-shopping-basket"></i>
                </button>
              </div>
              <div class="WebMateX-recipe-info">
                <span class="WebMateX-category-tag">Local</span>
                <h3>Beef Suya</h3>
                <span class="WebMateX-price">GHS 65.00</span>
              </div>
            </div>

            <div class="WebMateX-recipe-card">
              <div class="WebMateX-recipe-image">
                <img src="https://images.pexels.com/photos/46239/salmon-dish-food-meal-46239.jpeg" alt="Banku & Tilapia" />
                <div class="WebMateX-rating">
                  <span class="star">★</span>
                  <span>4.6</span>
                </div>
                <button class="WebMateX-cart-btn">
                  <i class="fas fa-shopping-basket"></i>
                </button>
              </div>
              <div class="WebMateX-recipe-info">
                <span class="WebMateX-category-tag">Local</span>
                <h3>Banku & Tilapia</h3>
                <span class="WebMateX-price">GHS 70.00</span>
              </div>
            </div>

            <div class="WebMateX-recipe-card">
              <div class="WebMateX-recipe-image">
                <img src="https://images.pexels.com/photos/1279330/pexels-photo-1279330.jpeg" alt="Plantain Fufu" />
                <div class="WebMateX-rating">
                  <span class="star">★</span>
                  <span>4.8</span>
                </div>
                <button class="WebMateX-cart-btn">
                  <i class="fas fa-shopping-basket"></i>
                </button>
              </div>
              <div class="WebMateX-recipe-info">
                <span class="WebMateX-category-tag">Local</span>
                <h3>Plantain Fufu</h3>
                <span class="WebMateX-price">GHS 55.00</span>
              </div>
            </div>

            <div class="WebMateX-recipe-card">
              <div class="WebMateX-recipe-image">
                <img src="https://images.pexels.com/photos/1279330/pexels-photo-1279330.jpeg" alt="Jollof Rice" />
                <div class="WebMateX-rating">
                  <span class="star">★</span>
                  <span>4.9</span>
                </div>
                <button class="WebMateX-cart-btn">
                  <i class="fas fa-shopping-basket"></i>
                </button>
              </div>
              <div class="WebMateX-recipe-info">
                <span class="WebMateX-category-tag">Local</span>
                <h3>Jollof Rice</h3>
                <span class="WebMateX-price">GHS 50.00</span>
              </div>
            </div>

            <div class="WebMateX-recipe-card">
              <div class="WebMateX-recipe-image">
                <img src="https://images.pexels.com/photos/46239/salmon-dish-food-meal-46239.jpeg" alt="Grilled Lobster" />
                <div class="WebMateX-rating">
                  <span class="star">★</span>
                  <span>4.9</span>
                </div>
                <button class="WebMateX-cart-btn">
                  <i class="fas fa-shopping-basket"></i>
                </button>
              </div>
              <div class="WebMateX-recipe-info">
                <span class="WebMateX-category-tag">Continental</span>
                <h3>Grilled Lobster</h3>
                <span class="WebMateX-price">GHS 120.00</span>
              </div>
            </div>

            <div class="WebMateX-recipe-card">
              <div class="WebMateX-recipe-image">
                <img src="https://images.pexels.com/photos/1279330/pexels-photo-1279330.jpeg" alt="Palm Nut Soup" />
                <div class="WebMateX-rating">
                  <span class="star">★</span>
                  <span>4.7</span>
                </div>
                <button class="WebMateX-cart-btn">
                  <i class="fas fa-shopping-basket"></i>
                </button>
              </div>
              <div class="WebMateX-recipe-info">
                <span class="WebMateX-category-tag">Local</span>
                <h3>Palm Nut Soup</h3>
                <span class="WebMateX-price">GHS 45.00</span>
              </div>
            </div>
          </div>
        </div>

        <!-- Popular Recipes Tab -->
        <div class="WebMateX-tab-content" id="site">
          <div class="WebMateX-recipe-grid">
            <div class="WebMateX-recipe-card">
              <div class="WebMateX-recipe-image">
                <img src="assets/images/chicken-biryani.jpg" alt="Fufu & Light Soup" />
                <div class="WebMateX-rating">
                  <span class="star">★</span>
                  <span>4.9</span>
                </div>
                <button class="WebMateX-cart-btn">
                  <i class="fas fa-shopping-basket"></i>
                </button>
              </div>
              <div class="WebMateX-recipe-info">
                <span class="WebMateX-category-tag">Local</span>
                <h3>Fufu & Light Soup</h3>
                <span class="WebMateX-price">GHS 55.00</span>
              </div>
            </div>

            <div class="WebMateX-recipe-card">
              <div class="WebMateX-recipe-image">
                <img src="https://images.pexels.com/photos/410648/pexels-photo-410648.jpeg" alt="Grilled Chicken" />
                <div class="WebMateX-rating">
                  <span class="star">★</span>
                  <span>4.9</span>
                </div>
                <button class="WebMateX-cart-btn">
                  <i class="fas fa-shopping-basket"></i>
                </button>
              </div>
              <div class="WebMateX-recipe-info">
                <span class="WebMateX-category-tag">Continental</span>
                <h3>Grilled Chicken</h3>
                <span class="WebMateX-price">GHS 65.00</span>
              </div>
            </div>

            <div class="WebMateX-recipe-card">
              <div class="WebMateX-recipe-image">
                <img src="https://images.pexels.com/photos/46239/salmon-dish-food-meal-46239.jpeg" alt="Kenkey & Fish" />
                <div class="WebMateX-rating">
                  <span class="star">★</span>
                  <span>4.8</span>
                </div>
                <button class="WebMateX-cart-btn">
                  <i class="fas fa-shopping-basket"></i>
                </button>
              </div>
              <div class="WebMateX-recipe-info">
                <span class="WebMateX-category-tag">Local</span>
                <h3>Kenkey & Fish</h3>
                <span class="WebMateX-price">GHS 45.00</span>
              </div>
            </div>

            <div class="WebMateX-recipe-card">
              <div class="WebMateX-recipe-image">
                <img src="https://images.pexels.com/photos/1279330/pexels-photo-1279330.jpeg" alt="Ampesi" />
                <div class="WebMateX-rating">
                  <span class="star">★</span>
                  <span>4.7</span>
                </div>
                <button class="WebMateX-cart-btn">
                  <i class="fas fa-shopping-basket"></i>
                </button>
              </div>
              <div class="WebMateX-recipe-info">
                <span class="WebMateX-category-tag">Local</span>
                <h3>Ampesi</h3>
                <span class="WebMateX-price">GHS 50.00</span>
              </div>
            </div>

            <div class="WebMateX-recipe-card">
              <div class="WebMateX-recipe-image">
                <img src="https://images.pexels.com/photos/410648/pexels-photo-410648.jpeg" alt="Chicken Curry" />
                <div class="WebMateX-rating">
                  <span class="star">★</span>
                  <span>4.8</span>
                </div>
                <button class="WebMateX-cart-btn">
                  <i class="fas fa-shopping-basket"></i>
                </button>
              </div>
              <div class="WebMateX-recipe-info">
                <span class="WebMateX-category-tag">Continental</span>
                <h3>Chicken Curry</h3>
                <span class="WebMateX-price">GHS 60.00</span>
              </div>
            </div>

            <div class="WebMateX-recipe-card">
              <div class="WebMateX-recipe-image">
                <img src="https://images.pexels.com/photos/1279330/pexels-photo-1279330.jpeg" alt="Yam & Garden Egg Stew" />
                <div class="WebMateX-rating">
                  <span class="star">★</span>
                  <span>4.8</span>
                </div>
                <button class="WebMateX-cart-btn">
                  <i class="fas fa-shopping-basket"></i>
                </button>
              </div>
              <div class="WebMateX-recipe-info">
                <span class="WebMateX-category-tag">Local</span>
                <h3>Yam & Garden Egg Stew</h3>
                <span class="WebMateX-price">GHS 45.00</span>
              </div>
            </div>

            <div class="WebMateX-recipe-card">
              <div class="WebMateX-recipe-image">
                <img src="https://images.pexels.com/photos/1028704/pexels-photo-1028704.jpeg" alt="Kelewele" />
                <div class="WebMateX-rating">
                  <span class="star">★</span>
                  <span>4.8</span>
                </div>
                <button class="WebMateX-cart-btn">
                  <i class="fas fa-shopping-basket"></i>
                </button>
              </div>
              <div class="WebMateX-recipe-info">
                <span class="WebMateX-category-tag">Local</span>
                <h3>Kelewele</h3>
                <span class="WebMateX-price">GHS 25.00</span>
              </div>
            </div>

            <div class="WebMateX-recipe-card">
              <div class="WebMateX-recipe-image">
                <img src="https://images.pexels.com/photos/1028704/pexels-photo-1028704.jpeg" alt="Bofrot" />
                <div class="WebMateX-rating">
                  <span class="star">★</span>
                  <span>4.9</span>
                </div>
                <button class="WebMateX-cart-btn">
                  <i class="fas fa-shopping-basket"></i>
                </button>
              </div>
              <div class="WebMateX-recipe-info">
                <span class="WebMateX-category-tag">Local</span>
                <h3>Bofrot</h3>
                <span class="WebMateX-price">GHS 15.00</span>
              </div>
            </div>
          </div>
        </div>

        <!-- Quick & Easy Tab -->
        <div class="WebMateX-tab-content" id="mob">
          <div class="WebMateX-recipe-grid">
            <div class="WebMateX-recipe-card">
              <div class="WebMateX-recipe-image">
                <img src="assets/images/creamy-pasta.jpg" alt="Kelewele" />
                <div class="WebMateX-rating">
                  <span class="star">★</span>
                  <span>4.8</span>
                </div>
                <button class="WebMateX-cart-btn">
                  <i class="fas fa-shopping-basket"></i>
                </button>
              </div>
              <div class="WebMateX-recipe-info">
                <span class="WebMateX-category-tag">Local</span>
                <h3>Kelewele</h3>
                <span class="WebMateX-price">GHS 25.00</span>
              </div>
            </div>

            <div class="WebMateX-recipe-card">
              <div class="WebMateX-recipe-image">
                <img src="assets/images/grilled-steak.jpg" alt="Bofrot" />
                <div class="WebMateX-rating">
                  <span class="star">★</span>
                  <span>4.9</span>
                </div>
                <button class="WebMateX-cart-btn">
                  <i class="fas fa-shopping-basket"></i>
                </button>
              </div>
              <div class="WebMateX-recipe-info">
                <span class="WebMateX-category-tag">Local</span>
                <h3>Bofrot</h3>
                <span class="WebMateX-price">GHS 15.00</span>
              </div>
            </div>

            <div class="WebMateX-recipe-card">
              <div class="WebMateX-recipe-image">
                <img src="assets/images/grilled-salmon.jpg" alt="Spring Rolls" />
                <div class="WebMateX-rating">
                  <span class="star">★</span>
                  <span>4.7</span>
                </div>
                <button class="WebMateX-cart-btn">
                  <i class="fas fa-shopping-basket"></i>
                </button>
              </div>
              <div class="WebMateX-recipe-info">
                <span class="WebMateX-category-tag">Continental</span>
                <h3>Spring Rolls</h3>
                <span class="WebMateX-price">GHS 30.00</span>
              </div>
            </div>

            <div class="WebMateX-recipe-card">
              <div class="WebMateX-recipe-image">
                <img src="assets/images/supreme-pizza.jpg" alt="Chicken Wings" />
                <div class="WebMateX-rating">
                  <span class="star">★</span>
                  <span>4.6</span>
                </div>
                <button class="WebMateX-cart-btn">
                  <i class="fas fa-shopping-basket"></i>
                </button>
              </div>
              <div class="WebMateX-recipe-info">
                <span class="WebMateX-category-tag">Continental</span>
                <h3>Chicken Wings</h3>
                <span class="WebMateX-price">GHS 45.00</span>
              </div>
            </div>

            <div class="WebMateX-recipe-card">
              <div class="WebMateX-recipe-image">
          </div>
        </div>
      </div>
    </section>

    <!-- Explore Button with enhanced styling -->
    <div class="WebMateX-explore">
      <div class="WebMateX-explore-line"></div>
      <a href="#" class="WebMateX-explore-btn">Explore All Recipes</a>
      <div class="WebMateX-explore-line"></div>
    </div>
    <!------ CLOSED ----->

    <!-- Reservation Section with Parallax -->
    <section class="WebMateX-reservation">
      <div class="WebMateX-parallax-container">
        <div class="WebMateX-parallax-bg"></div>
        <div class="WebMateX-reservation-content">
          <div class="WebMateX-container">
            <div class="WebMateX-reservation-wrapper">
              <div class="WebMateX-reservation-text">
                <h2 class="WebMateX-section-title">Book Your Table</h2>
                <p class="WebMateX-section-subtitle">
                  Experience the perfect blend of local and continental cuisine in our elegant dining space
                </p>
                <div class="WebMateX-reservation-features">
                  <div class="WebMateX-feature-item">
                    <i class="fas fa-clock"></i>
                    <span>Open Daily: 10AM - 10PM</span>
                  </div>
                  <div class="WebMateX-feature-item">
                    <i class="fas fa-users"></i>
                    <span>Private Dining Available</span>
                  </div>
                  <div class="WebMateX-feature-item">
                    <i class="fas fa-utensils"></i>
                    <span>Special Events & Catering</span>
                  </div>
                </div>
              </div>
              <div class="WebMateX-reservation-form">
                <form id="reservationForm" class="WebMateX-form">
                  <div class="WebMateX-form-group">
                    <input type="text" id="name" required />
                    <label for="name">Your Name</label>
                  </div>
                  <div class="WebMateX-form-group">
                    <input type="email" id="email" required />
                    <label for="email">Email Address</label>
                  </div>
                  <div class="WebMateX-form-row">
                    <div class="WebMateX-form-group">
                      <input type="date" id="date" required />
            
                    </div>
                    <div class="WebMateX-form-group">
                      <input type="time" id="time" required />
                      
                    </div>
                  </div>
                  <div class="WebMateX-form-group">
                    <select id="guests" required>
                      <option value="" disabled selected></option>
                      <option value="1">1 Person</option>
                      <option value="2">2 People</option>
                      <option value="3">3 People</option>
                      <option value="4">4 People</option>
                    </select>
                    <label for="guests">Select Guests</label>
                  </div>
                  <div class="WebMateX-form-group">
                    <textarea id="message" required></textarea>
                    <label for="message">Send Your Message</label>
                  </div>
                  <button type="submit" class="WebMateX-btn">
                    <span>Book Now</span>
                    <i class="fas fa-arrow-right"></i>
                  </button>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!------ CLOSED ----->

    <!-- Newsletter Section -->
    <section class="WebMateX-newsletter">
      <div class="WebMateX-parallax-container">
        <div class="WebMateX-parallax-bg"></div>
        <div class="WebMateX-newsletter-content">
          <div class="WebMateX-newsletter-wrapper">
            <div class="WebMateX-newsletter-text">
              <h2>Stay Updated with Our Newsletter</h2>
              <p>
                Subscribe to receive updates, access to exclusive deals, and
                more.
              </p>
              <div class="WebMateX-newsletter-features">
                <div class="WebMateX-newsletter-feature">
                  <i class="fas fa-check-circle"></i>
                  <span>Weekly Recipe Updates</span>
                </div>
                <div class="WebMateX-newsletter-feature">
                  <i class="fas fa-check-circle"></i>
                  <span>Exclusive Discounts</span>
                </div>
                <div class="WebMateX-newsletter-feature">
                  <i class="fas fa-check-circle"></i>
                  <span>Special Events</span>
                </div>
              </div>
            </div>
            <div class="WebMateX-newsletter-form">
              <form class="WebMateX-subscribe-form">
                <div class="WebMateX-form-group">
                  <input
                    type="email"
                    placeholder="Enter your email address"
                    required />
                  <div class="WebMateX-input-icon">
                    <i class="fas fa-envelope"></i>
                  </div>
                </div>
                <button type="submit" class="WebMateX-subscribe-btn">
                  <span>Subscribe Now</span>
                  <div class="WebMateX-btn-effect"></div>
                </button>
              </form>
              <div class="WebMateX-newsletter-stats">
                <div class="WebMateX-stat-item">
                  <span class="WebMateX-stat-number">10K+</span>
                  <span class="WebMateX-stat-label">Subscribers</span>
                </div>
                <div class="WebMateX-stat-item">
                  <span class="WebMateX-stat-number">98%</span>
                  <span class="WebMateX-stat-label">Satisfaction</span>
                </div>
                <div class="WebMateX-stat-item">
                  <span class="WebMateX-stat-number">24/7</span>
                  <span class="WebMateX-stat-label">Support</span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!---

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
            <p style="color: #ffffff;">&copy; 2025 EatPoint. All rights reserved.</p>
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

    <!-- Custom Scripts -->
    <script src="assets/js/user.js"></script>
    <script src="assets/js/popup.js"></script>
  </body>
</html>
