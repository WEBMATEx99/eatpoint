<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UpSide Eatery - Admin Login</title>
    <link rel="stylesheet" href="../assets/css/admin.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
</head>
<body class="login-page">
    <div class="login-container">
        <div class="login-left">
            <div class="login-logo">
                <img src="../assets/images/eatpoint-logo.svg" alt="EatPoint Logo">
                <h1>EatPoint</h1>
            </div>
            <div class="login-slogan">
                <h2>Welcome to Admin Panel</h2>
                <p>Manage your restaurant with ease and efficiency</p>
            </div>
        </div>
        <div class="login-right">
            <div class="login-box">
                <h2>Admin Login</h2>
                <form id="loginForm">
                    <div class="form-group">
                        <i class="fas fa-envelope"></i>
                        <input type="email" id="email" placeholder="Email address" required>
                    </div>
                    <div class="form-group">
                        <i class="fas fa-lock"></i>
                        <input type="password" id="password" placeholder="Password" required>
                        <button type="button" class="show-password" onclick="togglePassword()">
                            <i class="fas fa-eye"></i>
                        </button>
                    </div>
                    <div class="form-group remember-me">
                        <input type="checkbox" id="remember">
                        <label for="remember">Remember me</label>
                    </div>
                    <button type="submit" class="login-btn">Log In</button>
                </form>
            </div>
        </div>
    </div>

    <script src="../assets/js/admin.js"></script>
    <script>
        function togglePassword() {
            const passwordInput = document.getElementById('password');
            const icon = document.querySelector('.show-password i');
            
            if (passwordInput.type === 'password') {
                passwordInput.type = 'text';
                icon.classList.remove('fa-eye');
                icon.classList.add('fa-eye-slash');
            } else {
                passwordInput.type = 'password';
                icon.classList.remove('fa-eye-slash');
                icon.classList.add('fa-eye');
            }
        }
    </script>
</body>
</html>
