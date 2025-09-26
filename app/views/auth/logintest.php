<!DOCTYPE html>
<html lang="vi">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Đăng nhập - AI Cây Mít</title>
  <link rel="stylesheet" href="<?php echo _WEB_ROOT_ ?>/public/asset/css/registertest.css?v=1.2"> <!-- Link tới file CSS -->
</head>
<body>


  <!-- Main Login Section -->
  <main class="login-wrapper">
    <div class="login-container">
      <div class="login-section">
        <div class="login-logo">
          <div class="logo-icon">
            <img src="<?php echo _WEB_ROOT_ ?>/public/asset/images/bg_login.png" alt="Logo">
          </div>
        </div>

        <h1 class="title">Đăng Ký</h1>
      <form>
          <div class="form-group">
            <label class="form-label">Email</label>
            <div class="input-wrapper">
              <span class="input-icon">👤</span>
              <input type="email" class="form-input" placeholder="Nhập email của bạn" required>
            </div>
          </div>

          <div class="form-group">
            <label class="form-label">Mật khẩu</label>
            <div class="input-wrapper">
              <span class="input-icon">🔒</span>
              <input type="password" class="form-input" placeholder="••••••••" required>
              <button type="button" class="password-toggle">👁️</button>
            </div>
          </div>

          <div class="form-group">
            <label class="form-label">Nhập lại mật khẩu</label>
            <div class="input-wrapper">
              <span class="input-icon">🔒</span>
              <input type="password" class="form-input" placeholder="••••••••" required>
              <button type="button" class="password-toggle">👁️</button>
            </div>
          </div>

          <button type="submit" class="register-btn">
            Register <span>→</span>
          </button>
        </form>
        <p class="register-text">
          <a href="<?php echo _WEB_ROOT_ ?>/home/register">Đăng nhập</a> tại đây
        </p>

        <div class="social-login">
          <button class="social-btn">
            <img src="<?php echo _WEB_ROOT_ ?>/public/asset/images/logo_facebook.png" alt="Facebook">
          </button>
          <button class="social-btn">
            <img src="<?php echo _WEB_ROOT_ ?>/public/asset/images/logo_google.png" alt="Google">
          </button>
        </div>
      </div>

      <div class="illustration">
        <img src="<?php echo _WEB_ROOT_ ?>/public/asset/images/bgr_login.png" alt="Durian Illustration" class="durian-image">
      </div>
    </div>
  </main>
</body>
</html>
