<!DOCTYPE html>
<html lang="vi">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Đăng nhập - AI Cây Mít</title>
  <link rel="stylesheet" href="<?php echo _WEB_ROOT_ ?>/public/asset/css/login.css?v=1.2"> <!-- Link tới file CSS -->
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

        <h1 class="title">Đăng nhập</h1>

  <form method="POST" action="<?php echo _WEB_ROOT_; ?>/auth/login">
          <div class="form-group">
            <label class="form-label">Tên đăng nhập</label>
            <div class="input-wrapper">
              <span class="input-icon">👤</span>
              <input type="text" name="username" class="form-input" placeholder="Nhập tên đăng nhập" required value="<?php echo isset($_COOKIE['username']) ? htmlspecialchars($_COOKIE['username']) : '' ?>">
            </div>
          </div>

          <div class="form-group">
            <label class="form-label">Mật khẩu</label>
            <div class="input-wrapper">
              <span class="input-icon">🔒</span>
              <input type="password" name="password" class="form-input" placeholder="••••••••" required value="<?php echo isset($_COOKIE['password']) ? htmlspecialchars($_COOKIE['password']) : '' ?>">
              <button type="button" class="password-toggle">👁️</button>
            </div>
          </div>

          <div class="form-group">
            <label><input type="checkbox" name="remember" <?php echo isset($_COOKIE['username']) ? 'checked' : '' ?>> Ghi nhớ đăng nhập</label>
          </div>
          <button type="submit" class="login-btn">
            Đăng nhập <span>→</span>
          </button>
        <?php if (isset($error)) : ?>
          <div id="error-dialog" class="dialog-overlay">
            <div class="dialog-box">
              <div class="dialog-title">Thông báo</div>
              <div class="dialog-content"><?php echo htmlspecialchars($error); ?></div>
              <button class="dialog-close" onclick="document.getElementById('error-dialog').style.display='none'">Đóng</button>
            </div>
          </div>
        <?php endif; ?>

<style>
.dialog-overlay {
  position: fixed;
  top: 0; left: 0; right: 0; bottom: 0;
  background: rgba(255,255,255,0.2); /* làm mờ nhẹ, không tối toàn trang */
  backdrop-filter: blur(2px); /* hiệu ứng mờ nền */
  display: flex;
  align-items: center;
  justify-content: center;
  z-index: 9999;
}
.dialog-box {
  background: linear-gradient(135deg, #fff 80%, #ffeaea 100%);
  border-radius: 18px;
  box-shadow: 0 8px 32px rgba(231,76,60,0.18), 0 1.5px 8px rgba(0,0,0,0.08);
  padding: 32px 36px 24px 36px;
  min-width: 320px;
  max-width: 90vw;
  text-align: center;
  animation: dialog-pop 0.25s cubic-bezier(.4,2,.6,1) both;
}
@keyframes dialog-pop {
  0% { transform: scale(0.7); opacity: 0; }
  100% { transform: scale(1); opacity: 1; }
}
.dialog-title {
  font-size: 22px;
  font-weight: bold;
  margin-bottom: 14px;
  color: #e74c3c;
  letter-spacing: 1px;
}
.dialog-content {
  margin-bottom: 18px;
  color: #c0392b;
  font-size: 17px;
  font-weight: 500;
}
.dialog-close {
  background: linear-gradient(90deg, #e74c3c 60%, #ff7675 100%);
  color: #fff;
  border: none;
  border-radius: 6px;
  padding: 10px 32px;
  font-size: 16px;
  font-weight: 600;
  cursor: pointer;
  box-shadow: 0 2px 8px rgba(231,76,60,0.08);
  transition: background 0.2s, transform 0.1s;
}
.dialog-close:hover {
  background: linear-gradient(90deg, #c0392b 60%, #ff7675 100%);
  transform: translateY(-2px) scale(1.04);
}
</style>
        </form>

        <p class="register-text">
          <a href="<?php echo _WEB_ROOT_ ?>/home/register">Đăng ký</a> tại đây
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

  <!-- Footer -->
  <footer>
    <div class="footer-container">
      <p>© 2025 AI Cây Mít. All rights reserved.</p>
    </div>
  </footer>
<script>
  document.addEventListener('DOMContentLoaded', function() {
    const toggleBtn = document.querySelector('.password-toggle');
    const passwordInput = document.querySelector('input[name="password"]');
    if (toggleBtn && passwordInput) {
      toggleBtn.addEventListener('click', function() {
        if (passwordInput.type === 'password') {
          passwordInput.type = 'text';
          toggleBtn.textContent = '🙈';
        } else {
          passwordInput.type = 'password';
          toggleBtn.textContent = '👁️';
        }
      });
    }
  });
</script>
</body>
</html>
