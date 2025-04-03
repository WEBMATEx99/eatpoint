<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Profile - UpSide Eatery</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        :root {
            --primary-color: #f9004d;
            --secondary-color: #ff6b8b;
            --accent-color: #ffb6c1;
            --text-color: #333;
            --light-gray: #f5f5f5;
            --border-color: #e0e0e0;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        body {
            background-color: var(--light-gray);
            color: var(--text-color);
            display: flex;
            min-height: 100vh;
        }

        /* Sidebar Styles */
        .sidebar {
            width: 250px;
            background-color: var(--primary-color);
            color: white;
            padding: 2rem;
            position: fixed;
            height: 100vh;
        }

        .sidebar-header {
            margin-bottom: 2rem;
        }

        .sidebar-header h2 {
            font-size: 1.5rem;
            margin-bottom: 0.5rem;
        }

        .sidebar-header p {
            color: rgba(255, 255, 255, 0.7);
            font-size: 0.9rem;
        }

        .nav-menu {
            list-style: none;
        }

        .nav-item {
            margin-bottom: 0.5rem;
        }

        .nav-link {
            color: rgba(255, 255, 255, 0.8);
            text-decoration: none;
            padding: 0.8rem 1rem;
            display: flex;
            align-items: center;
            border-radius: 8px;
            transition: all 0.3s ease;
        }

        .nav-link:hover {
            background-color: var(--secondary-color);
            color: white;
        }

        .nav-link.active {
            background-color: var(--secondary-color);
            color: white;
        }

        .nav-link i {
            margin-right: 0.8rem;
            width: 20px;
            text-align: center;
        }

        /* Main Content Styles */
        .main-content {
            margin-left: 250px;
            padding: 2rem;
            flex: 1;
        }

        /* Profile Header Styles */
        .profile-header {
            background-color: white;
            border-radius: 12px;
            padding: 2rem;
            margin-bottom: 2rem;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        .profile-info {
            display: flex;
            align-items: center;
            margin-bottom: 2rem;
        }

        .profile-picture {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            object-fit: cover;
            border: 5px solid white;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            margin-right: 2rem;
        }

        .profile-details h2 {
            font-size: 1.8rem;
            margin-bottom: 0.5rem;
            color: var(--primary-color);
        }

        .profile-details p {
            color: #666;
            margin-bottom: 0.5rem;
        }

        .profile-details i {
            margin-right: 0.5rem;
            color: var(--secondary-color);
        }

        .profile-stats {
            display: flex;
            gap: 1rem;
            margin-top: 1.5rem;
        }

        .stat-item {
            flex: 1;
            background-color: var(--light-gray);
            padding: 1rem;
            border-radius: 8px;
            text-align: center;
        }

        .stat-value {
            font-size: 1.5rem;
            font-weight: bold;
            color: var(--primary-color);
            margin-bottom: 0.5rem;
        }

        .stat-label {
            color: #666;
            font-size: 0.9rem;
        }

        /* Card Styles */
        .card {
            background-color: white;
            border-radius: 12px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            margin-bottom: 1.5rem;
            overflow: hidden;
        }

        .card-header {
            padding: 1.5rem;
            border-bottom: 1px solid var(--border-color);
        }

        .card-title {
            font-size: 1.2rem;
            color: var(--primary-color);
            font-weight: 600;
        }

        .card-body {
            padding: 1.5rem;
        }

        /* Form Styles */
        .form-group {
            margin-bottom: 1.5rem;
        }

        .form-label {
            display: block;
            margin-bottom: 0.5rem;
            font-weight: 500;
            color: var(--text-color);
        }

        .form-control {
            width: 100%;
            padding: 0.8rem;
            border: 1px solid var(--border-color);
            border-radius: 8px;
            font-size: 1rem;
            transition: border-color 0.3s ease;
        }

        .form-control:focus {
            outline: none;
            border-color: var(--secondary-color);
        }

        .btn {
            padding: 0.8rem 1.5rem;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            font-weight: 500;
            transition: all 0.3s ease;
            display: inline-flex;
            align-items: center;
        }

        .btn-primary {
            background-color: var(--secondary-color);
            color: white;
        }

        .btn-primary:hover {
            background-color: #2980b9;
        }

        .btn-outline {
            background-color: transparent;
            border: 1px solid var(--secondary-color);
            color: var(--secondary-color);
        }

        .btn-outline:hover {
            background-color: var(--secondary-color);
            color: white;
        }

        .btn i {
            margin-right: 0.5rem;
        }

        /* Grid Layout */
        .row {
            display: flex;
            flex-wrap: wrap;
            margin: -0.75rem;
        }

        .col-md-6 {
            flex: 0 0 50%;
            max-width: 50%;
            padding: 0.75rem;
        }

        /* Switch Styles */
        .switch {
            position: relative;
            display: inline-block;
            width: 50px;
            height: 24px;
        }

        .switch input {
            opacity: 0;
            width: 0;
            height: 0;
        }

        .slider {
            position: absolute;
            cursor: pointer;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: #ccc;
            transition: .4s;
            border-radius: 24px;
        }

        .slider:before {
            position: absolute;
            content: "";
            height: 16px;
            width: 16px;
            left: 4px;
            bottom: 4px;
            background-color: white;
            transition: .4s;
            border-radius: 50%;
        }

        input:checked + .slider {
            background-color: var(--secondary-color);
        }

        input:checked + .slider:before {
            transform: translateX(26px);
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .sidebar {
                width: 100%;
                height: auto;
                position: relative;
            }

            .main-content {
                margin-left: 0;
            }

            .col-md-6 {
                flex: 0 0 100%;
                max-width: 100%;
            }

            .profile-info {
                flex-direction: column;
                text-align: center;
            }

            .profile-picture {
                margin-right: 0;
                margin-bottom: 1rem;
            }
        }
    </style>
</head>
<body>
    <!-- Sidebar -->
    <aside class="sidebar">
        <div class="sidebar-header">
            <h2>UpSide Eatery</h2>
            <p>Admin Dashboard</p>
        </div>
        <ul class="nav-menu">
            <li class="nav-item">
                <a href="admin_dashboard.html" class="nav-link">
                    <i class="fas fa-tachometer-alt"></i>
                    Dashboard
                </a>
            </li>
            <li class="nav-item">
                <a href="admin_profile.html" class="nav-link active">
                    <i class="fas fa-user"></i>
                    Profile
                </a>
            </li>
            <li class="nav-item">
                <a href="admin_settings.html" class="nav-link">
                    <i class="fas fa-cog"></i>
                    Settings
                </a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link">
                    <i class="fas fa-sign-out-alt"></i>
                    Logout
                </a>
            </li>
        </ul>
    </aside>

    <!-- Main Content -->
    <main class="main-content">
        <!-- Profile Header -->
        <div class="profile-header">
            <div class="profile-info">
                <img src="https://via.placeholder.com/150" alt="Profile Picture" class="profile-picture">
                <div class="profile-details">
                    <h2>Sarah Johnson</h2>
                    <p class="text-muted">Restaurant Manager</p>
                    <p><i class="fas fa-envelope"></i>sarah.johnson@upsideeatery.com</p>
                    <p><i class="fas fa-phone"></i>+1 (555) 987-6543</p>
                    <p><i class="fas fa-map-marker-alt"></i>123 Gourmet Street, Foodville, FV 12345</p>
                </div>
            </div>
            <div class="profile-stats">
                <div class="stat-item">
                    <div class="stat-value">2,567</div>
                    <div class="stat-label">Total Orders</div>
                </div>
                <div class="stat-item">
                    <div class="stat-value">4.8/5</div>
                    <div class="stat-label">Customer Rating</div>
                </div>
                <div class="stat-item">
                    <div class="stat-value">3y</div>
                    <div class="stat-label">Experience</div>
                </div>
            </div>
        </div>

        <div class="row">
            <!-- Personal Information -->
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Personal Information</h3>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label class="form-label">Full Name</label>
                            <input type="text" class="form-control" value="Sarah Johnson">
                        </div>
                        <div class="form-group">
                            <label class="form-label">Email Address</label>
                            <input type="email" class="form-control" value="sarah.johnson@upsideeatery.com">
                        </div>
                        <div class="form-group">
                            <label class="form-label">Phone Number</label>
                            <input type="tel" class="form-control" value="+1 (555) 987-6543">
                        </div>
                        <div class="form-group">
                            <label class="form-label">Address</label>
                            <textarea class="form-control" rows="3">123 Gourmet Street, Foodville, FV 12345</textarea>
                        </div>
                        <button class="btn btn-primary">
                            <i class="fas fa-save"></i>
                            Update Information
                        </button>
                    </div>
                </div>
            </div>

            <!-- Account Security -->
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Account Security</h3>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label class="form-label">Current Password</label>
                            <input type="password" class="form-control">
                        </div>
                        <div class="form-group">
                            <label class="form-label">New Password</label>
                            <input type="password" class="form-control">
                        </div>
                        <div class="form-group">
                            <label class="form-label">Confirm New Password</label>
                            <input type="password" class="form-control">
                        </div>
                        <button class="btn btn-primary">
                            <i class="fas fa-key"></i>
                            Change Password
                        </button>
                    </div>
                </div>

                <!-- Two-Factor Authentication -->
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Two-Factor Authentication</h3>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label class="form-label">
                                Enable Two-Factor Authentication
                                <label class="switch">
                                    <input type="checkbox">
                                    <span class="slider"></span>
                                </label>
                            </label>
                            <p class="text-muted" style="margin-top: 0.5rem; font-size: 0.9rem;">
                                Add an extra layer of security to your account by enabling two-factor authentication.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>
</html>
