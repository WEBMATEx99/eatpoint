<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EatPoint - Sign Up</title>
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
                <h1>Sign Up</h1>
                <form class="form" id="signupForm">
                    <div class="form-group">
                        <input type="text" id="fullName" required>
                        <label for="fullName">Full Name</label>
                    </div>
                    <div class="form-group">
                        <input type="email" id="email" required>
                        <label for="email">Email</label>
                    </div>
                    <div class="form-group">
                        <input type="tel" id="phone" required>
                        <label for="phone">Phone Number</label>
                    </div>
                    <div class="form-group">
                        <input type="password" id="password" required>
                        <label for="password">Password</label>
                        <button type="button" class="password-toggle" id="togglePassword">
                            <i class="fas fa-eye"></i>
                        </button>
                    </div>
                    <div class="form-group">
                        <input type="password" id="confirmPassword" required>
                        <label for="confirmPassword">Confirm Password</label>
                        <button type="button" class="password-toggle" id="toggleConfirmPassword">
                            <i class="fas fa-eye"></i>
                        </button>
                    </div>
                    <button type="submit" class="btn">Sign Up</button>
                </form>

                <div class="form-footer">
                    <p>Already have an account? <a href="login.php">Sign in now</a></p>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const signupForm = document.getElementById('signupForm');
            const togglePassword = document.getElementById('togglePassword');
            const toggleConfirmPassword = document.getElementById('toggleConfirmPassword');
            const password = document.getElementById('password');
            const confirmPassword = document.getElementById('confirmPassword');

            // Toggle password visibility
            function togglePasswordVisibility(input, button) {
                const type = input.getAttribute('type') === 'password' ? 'text' : 'password';
                input.setAttribute('type', type);
                
                // Toggle eye icon
                const icon = button.querySelector('i');
                icon.classList.toggle('fa-eye');
                icon.classList.toggle('fa-eye-slash');
            }

            togglePassword.addEventListener('click', function() {
                togglePasswordVisibility(password, this);
            });

            toggleConfirmPassword.addEventListener('click', function() {
                togglePasswordVisibility(confirmPassword, this);
            });

            // Form validation
            signupForm.addEventListener('submit', function(e) {
                e.preventDefault();
                
                const fullName = document.getElementById('fullName').value;
                const email = document.getElementById('email').value;
                const phone = document.getElementById('phone').value;
                const password = document.getElementById('password').value;
                const confirmPassword = document.getElementById('confirmPassword').value;
                
                if (!fullName || !email || !phone || !password || !confirmPassword) {
                    showError('Please fill in all fields');
                    return;
                }
                
                if (!isValidEmail(email)) {
                    showError('Please enter a valid email address');
                    return;
                }
                
                if (!isValidPhone(phone)) {
                    showError('Please enter a valid phone number');
                    return;
                }
                
                if (password !== confirmPassword) {
                    showError('Passwords do not match');
                    return;
                }
                
                if (password.length < 8) {
                    showError('Password must be at least 8 characters long');
                    return;
                }
                
                // Here you would typically send the data to your server
                console.log('Signup attempt:', { fullName, email, phone, password });
            });

            // Email validation
            function isValidEmail(email) {
                const re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
                return re.test(String(email).toLowerCase());
            }

            // Phone validation
            function isValidPhone(phone) {
                const re = /^[0-9]{10,}$/;
                return re.test(phone);
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
                
                signupForm.insertBefore(errorDiv, signupForm.firstChild);
                
                setTimeout(() => {
                    errorDiv.remove();
                }, 3000);
            }
        });
    </script>
</body>
</html> 