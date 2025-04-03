<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UpSide Eatery - Admin Dashboard</title>
    <link rel="stylesheet" href="../assets/css/admin.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
</head>
<body>
    <div class="admin-container">
        <!-- Sidebar -->
        <nav class="admin-sidebar" style="overflow-x: hidden;">
            <div class="sidebar-header">
                <img src="../assets/images/eatpoint-logo.svg" alt="EatPoint Logo" class="logo">
            </div>
            <ul class="sidebar-menu">
                <li class="active">
                    <a href="#dashboard"><i class="fas fa-home"></i><span>Dashboard</span></a>
                </li>
                <li>
                    <a href="#orders"><i class="fas fa-shopping-cart"></i><span>Orders</span></a>
                </li>
                <li>
                    <a href="#reservations"><i class="fas fa-calendar-alt"></i><span>Reservations</span></a>
                </li>
                <li>
                    <a href="#menu"><i class="fas fa-utensils"></i><span>Menu Items</span></a>
                </li>
                <li>
                    <a href="#cuisines"><i class="fas fa-globe"></i><span>Cuisines</span></a>
                </li>
                <li>
                    <a href="#gallery"><i class="fas fa-images"></i><span>Gallery</span></a>
                </li>
                <li>
                    <a href="#customers"><i class="fas fa-users"></i><span>Customers</span></a>
                </li>
                <li>
                    <a href="#staff"><i class="fas fa-user-tie"></i><span>Staff</span></a>
                </li>
                <li>
                    <a href="#analytics"><i class="fas fa-chart-bar"></i><span>Analytics</span></a>
                </li>
                <li>
                    <a href="../admin/admin_settings.php"><i class="fas fa-cog"></i><span>Settings</span></a>
                </li>
            </ul>
        </nav>

        <!-- Main Content -->
        <main class="admin-content">
            <!-- Header -->
            <header class="admin-header">
                <div class="header-left">
                    <button id="sidebar-toggle"><i class="fas fa-bars"></i></button>
                    <h1>Dashboard Overview</h1>
                </div>
                <div class="header-right">
                    <div class="notifications">
                        <i class="fas fa-bell"></i>
                        <span class="notification-badge">3</span>
                    </div>
                    <div class="admin-profile">
                        <img src="https://images.pexels.com/photos/220453/pexels-photo-220453.jpeg" alt="Admin">
                        <span>Admin Name</span>
                        <div class="profile-dropdown">
                            <a href="../admin/admin_profile.php"><i class="fas fa-user"></i> Profile</a>
                            <a href="../admin/admin_settings.php"><i class="fas fa-cog"></i> Settings</a>
                            <a href="../admin_logout.php"><i class="fas fa-sign-out-alt"></i> Logout</a>
                        </div>
                    </div>
                </div>
            </header>

            <!-- Dashboard Tab -->
            <div id="dashboard" class="content-tabs active">
                <!-- Dashboard Stats -->
                <div class="dashboard-stats">
                    <div class="stat-card">
                        <i class="fas fa-shopping-cart"></i>
                        <div class="stat-info">
                            <h3>Total Orders</h3>
                            <p>1,234</p>
                            <span class="trend positive">+12.5% <i class="fas fa-arrow-up"></i></span>
                        </div>
                    </div>
                    <div class="stat-card">
                        <i class="fas fa-calendar-alt"></i>
                        <div class="stat-info">
                            <h3>Reservations</h3>
                            <p>56</p>
                            <span class="trend positive">+8.2% <i class="fas fa-arrow-up"></i></span>
                        </div>
                    </div>
                    <div class="stat-card">
                        <i class="fas fa-dollar-sign"></i>
                        <div class="stat-info">
                            <h3>Revenue</h3>
                            <p>GHS 45,678</p>
                            <span class="trend positive">+5.3% <i class="fas fa-arrow-up"></i></span>
                        </div>
                    </div>
                    <div class="stat-card">
                        <i class="fas fa-users"></i>
                        <div class="stat-info">
                            <h3>Customers</h3>
                            <p>856</p>
                            <span class="trend positive">+4.1% <i class="fas fa-arrow-up"></i></span>
                        </div>
                    </div>
                </div>

                <!-- Recent Orders -->
                <section class="recent-orders">
                    <div class="section-header">
                        <h2>Recent Orders</h2>
                        <button class="btn btn-primary">View All</button>
                    </div>
                    <div class="table-responsive">
                        <table>
                            <thead>
                                <tr>
                                    <th>Order ID</th>
                                    <th>Customer</th>
                                    <th>Items</th>
                                    <th>Total</th>
                                    <th>Status</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>#12345</td>
                                    <td>John Doe</td>
                                    <td>3 items</td>
                                    <td>GHS 45.99</td>
                                    <td><span class="status-badge pending">Pending</span></td>
                                    <td>
                                        <button class="btn btn-sm btn-edit"><i class="fas fa-edit"></i></button>
                                        <button class="btn btn-sm btn-delete"><i class="fas fa-trash"></i></button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </section>

                <!-- Quick Actions -->
                <section class="quick-actions">
                    <h2>Quick Actions</h2>
                    <div class="action-buttons">
                        <button class="action-btn">
                            <i class="fas fa-plus"></i>
                            <span>Add Menu Item</span>
                        </button>
                        <button class="action-btn">
                            <i class="fas fa-calendar-plus"></i>
                            <span>Add Reservation</span>
                        </button>
                        <button class="action-btn">
                            <i class="fas fa-image"></i>
                            <span>Add to Gallery</span>
                        </button>
                        <button class="action-btn">
                            <i class="fas fa-user-plus"></i>
                            <span>Add Staff</span>
                        </button>
                        <button class="action-btn">
                            <i class="fas fa-file-alt"></i>
                            <span>Generate Report</span>
                        </button>
                    </div>
                </section>
            </div>

            <!-- Other Tabs -->
            <div id="orders" class="content-tabs">
                <h2>Orders Management</h2>
                <!-- Orders content -->
            </div>

            <div id="reservations" class="content-tabs">
                <h2>Reservations Management</h2>
                <!-- Reservations content -->
            </div>

            <div id="menu" class="content-tabs">
                <h2>Menu Management</h2>
                <!-- Menu content -->
            </div>

            <div id="cuisines" class="content-tabs">
                <h2>Cuisines Management</h2>
                <!-- Cuisines content -->
            </div>

            <div id="gallery" class="content-tabs">
                <h2>Gallery Management</h2>
                <!-- Gallery content -->
            </div>

            <div id="customers" class="content-tabs">
                <h2>Customers Management</h2>
                <!-- Customers content -->
            </div>

            <div id="staff" class="content-tabs">
                <h2>Staff Management</h2>
                <!-- Staff content -->
            </div>

            <div id="analytics" class="content-tabs">
                <h2>Analytics</h2>
                <!-- Analytics content -->
            </div>

            <div id="settings" class="content-tabs">
                <h2>Settings</h2>
                <!-- Settings content -->
            </div>
        </main>
    </div>

    <!-- Modals -->
    <div id="notificationModal" class="modal">
        <div class="modal-content">
            <span class="close">&times;</span>
            <h2>Notifications</h2>
            <div class="notification-list">
                <!-- Notification items will be added here -->
            </div>
        </div>
    </div>

    <script src="../assets/js/admin.js"></script>
</body>
</html>
