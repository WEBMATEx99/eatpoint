<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EatPoint - Sign In</title>
    <link rel="stylesheet" href="../assets/css/user.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<body>
    <div class="container">
        <div class="header">
            <div class="logo">
                <a href="../index.php"> <h1>EatPoint</h1>
                </a>
            </div>
        </div>

        <div class="form-container">
            <div class="form-wrapper">
                <h1>Sign In</h1>
                <form class="form" id="loginForm">
                    <div class="form-group">
                        <input type="email" id="email" required>
                        <label for="email">Email or phone number</label>
                    </div>
                    <div class="form-group">
                        <input type="password" id="password" required>
                        <label for="password">Password</label>
                        <button type="button" class="password-toggle" id="togglePassword">
                            <i class="fas fa-eye"></i>
                        </button>
                    </div>
                    <button type="submit" class="btn">Sign In</button>
                    <div class="form-help">
                        <div class="remember-me">
                            <input type="checkbox" id="remember">
                            <label for="remember">Remember me</label>
                        </div>
                    </div>
                </form>
                <div class="form-footer">
                    <p>Don't have an account? <a href="signup.php">Sign up</a></p>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const loginForm = document.getElementById('loginForm');
            const togglePassword = document.getElementById('togglePassword');
            const password = document.getElementById('password');

            // Toggle password visibility
            togglePassword.addEventListener('click', function() {
                const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
                password.setAttribute('type', type);
                
                // Toggle eye icon
                const icon = this.querySelector('i');
                icon.classList.toggle('fa-eye');
                icon.classList.toggle('fa-eye-slash');
            });

            // Form validation
            loginForm.addEventListener('submit', function(e) {
                e.preventDefault();
                
                const email = document.getElementById('email').value;
                const password = document.getElementById('password').value;
                
                if (!email || !password) {
                    showError('Please fill in all fields');
                    return;
                }
                
                if (!isValidEmail(email)) {
                    showError('Please enter a valid email address');
                    return;
                }
                
                // Here you would typically send the data to your server
                console.log('Login attempt:', { email, password });
            });

            // Email validation
            function isValidEmail(email) {
                const re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
                return re.test(String(email).toLowerCase());
            }

            // Error message display
            function showError(message) {
                const errorDiv = document.createElement('div');
                errorDiv.className = 'error-message';
                errorDiv.textContent = message;
                
                const existingError = document.querySelector('.error-message');
                if (existingError) {
                    existingError.remove();
                }
                
                loginForm.insertBefore(errorDiv, loginForm.firstChild);
                
                setTimeout(() => {
                    errorDiv.remove();
                }, 3000);
            }
        });
    </script>
</body>
</html>
