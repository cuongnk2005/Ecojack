<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng nhập</title>
    <link rel="stylesheet" href="<?php echo _WEB_ROOT_ ?>/public/asset/css/login.css?v=1.2">
</head>

<body>
    <div class="container">
        <div class="login-section">
            <div class="logo">
                <div class="logo-icon">
                    <img src="<?php echo _WEB_ROOT_ ?>/public/asset/images/bg_login.png" alt="Logo">
                </div>
            </div>

            <h1 class="title">Đăng nhập</h1>

            <form>
                <div class="form-group">
                    <label class="form-label">Email</label>
                    <div class="input-wrapper">
                        <span class="input-icon">👤</span>
                        <input type="email" class="form-input" placeholder="Nhập email của bạn">
                    </div>
                </div>

                <div class="form-group">
                    <label class="form-label">Mật khẩu</label>
                    <div class="input-wrapper">
                        <span class="input-icon">🔒</span>
                        <input type="password" class="form-input" placeholder="••••••••">
                        <button type="button" class="password-toggle">👁️</button>
                    </div>
                </div>

                <button type="submit" class="login-btn">
                    Login
                    <span>→</span>
                </button>
            </form>

            <p class="register-text"><a style="text-decoration: none;" href="./register.php">Đăng ký</a> tại đây</p>

            <div class="social-login">
                <button class="social-btn">
                    <img class="facebook-btn" src="<?php echo _WEB_ROOT_ ?>/public/asset/images/logo_facebook.png" alt="" style="width:36px;height:36px;object-fit:contain;">
                </button>
                <button class="social-btn">
                    <img class="google-btn" src="<?php echo _WEB_ROOT_ ?>/public/asset/images/logo_google.png" alt="" style="width:28px;height:28px;object-fit:contain;">
                </button>
            </div>
        </div>

        <div class="illustration">
            <img src="<?php echo _WEB_ROOT_ ?>/public/asset/images/bgr_login.png" alt="Durian Illustration" class="durian-image">
        </div>
    </div>

    <script>
        document.querySelector('.password-toggle').addEventListener('click', function() {
            const passwordInput = document.querySelector('.form-input[type="password"], .form-input[type="text"]');
            const toggleBtn = this;

            if (passwordInput.type === 'password') {
                passwordInput.type = 'text';
                toggleBtn.textContent = '🙈';
            } else {
                passwordInput.type = 'password';
                toggleBtn.textContent = '👁️';
            }
        });



        // Form submission
        document.querySelector('form').addEventListener('submit', function(e) {
            e.preventDefault();
            alert('Đăng nhập thành công!');
        });

        // Social login buttons
        document.querySelector('.facebook-btn').addEventListener('click', function() {
            alert('Đăng nhập bằng Facebook');
        });

        document.querySelector('.google-btn').addEventListener('click', function() {
            alert('Đăng nhập bằng Google');
        });
    </script>
</body>

</html>