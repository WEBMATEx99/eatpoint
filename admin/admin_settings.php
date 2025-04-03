<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Settings - UpSide Eatery</title>
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

        .page-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 2rem;
        }

        .page-title {
            font-size: 1.8rem;
            color: var(--primary-color);
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

        .btn i {
            margin-right: 0.5rem;
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
                <a href="admin_dashboard.php" class="nav-link">
                    <i class="fas fa-tachometer-alt"></i>
                    Dashboard
                </a>
            </li>
            <li class="nav-item">
                <a href="admin_profile.php" class="nav-link">
                    <i class="fas fa-user"></i>
                    Profile
                </a>
            </li>
            <li class="nav-item">
                <a href="admin_settings.php" class="nav-link active">
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
        <div class="page-header">
            <h1 class="page-title">Settings</h1>
            <button class="btn btn-primary">
                <i class="fas fa-save"></i>
                Save Changes
            </button>
        </div>

        <div class="row">
            <!-- General Settings -->
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">General Settings</h3>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label class="form-label">Restaurant Name</label>
                            <input type="text" class="form-control" value="UpSide Eatery">
                        </div>
                        <div class="form-group">
                            <label class="form-label">Contact Email</label>
                            <input type="email" class="form-control" value="info@upsideeatery.com">
                        </div>
                        <div class="form-group">
                            <label class="form-label">Phone Number</label>
                            <input type="tel" class="form-control" value="+1 (555) 987-6543">
                        </div>
                    </div>
                </div>
            </div>

            <!-- Business Hours -->
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Business Hours</h3>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label class="form-label">Opening Time</label>
                            <input type="time" class="form-control" value="11:00">
                        </div>
                        <div class="form-group">
                            <label class="form-label">Closing Time</label>
                            <input type="time" class="form-control" value="23:00">
                        </div>
                        <div class="form-group">
                            <label class="form-label">Days Open</label>
                            <select class="form-control" multiple>
                                <option >Monday</option>
                                <option >Tuesday</option>
                                <option >Wednesday</option>
                                <option >Thursday</option>
                                <option >Friday</option>
                                <option >Saturday</option>
                                <option >Sunday</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Notification Settings -->
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Notification Settings</h3>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label class="form-label">
                                Email Notifications
                                <label class="switch">
                                    <input type="checkbox" checked>
                                    <span class="slider"></span>
                                </label>
                            </label>
                        </div>
                        <div class="form-group">
                            <label class="form-label">
                                SMS Notifications
                                <label class="switch">
                                    <input type="checkbox">
                                    <span class="slider"></span>
                                </label>
                            </label>
                        </div>
                        <div class="form-group">
                            <label class="form-label">
                                New Order Alerts
                                <label class="switch">
                                    <input type="checkbox" checked>
                                    <span class="slider"></span>
                                </label>
                            </label>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Security Settings -->
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Security Settings</h3>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label class="form-label">Change Password</label>
                            <input type="password" class="form-control" placeholder="Current Password">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" placeholder="New Password">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" placeholder="Confirm New Password">
                        </div>
                        <button class="btn btn-primary">Update Password</button>
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>
</html>
