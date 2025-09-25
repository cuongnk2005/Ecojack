<!DOCTYPE html>
<html lang="vi">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Ứng dụng AI cây mít</title>
  <style>
    body {
      margin: 0;
      font-family: Arial, sans-serif;
      background: linear-gradient(to right, #e6ffe6, #ccffcc);
    }
    header {
      background-color: #2e7d32;
      color: white;
      padding: 10px 20px;
      display: flex;
      justify-content: space-between;
      align-items: center;
    }
    nav a {
      color: white;
      margin: 0 10px;
      text-decoration: none;
      font-weight: bold;
    }
    .auth-buttons button {
      margin-left: 10px;
      padding: 5px 10px;
      background-color: white;
      color: #2e7d32;
      border: none;
      border-radius: 5px;
      cursor: pointer;
    }
    .main {
      display: flex;
      padding: 40px;
      align-items: center;
      justify-content: space-around;
    }
    .left {
      max-width: 50%;
    }
    .left h1 {
      color: #2e7d32;
      font-size: 28px;
    }
    .left p {
      font-size: 18px;
      margin-bottom: 20px;
    }
    .left button {
      background-color: #2e7d32;
      color: white;
      padding: 10px 20px;
      border: none;
      border-radius: 8px;
      font-size: 16px;
      cursor: pointer;
    }
    .right img {
      max-width: 400px;
      border-radius: 10px;
    }
    footer {
      text-align: center;
      padding: 20px;
      background-color: #f1f1f1;
      font-size: 14px;
    }
  </style>
</head>
<body>

  <header>
    <nav>
      <a href="#">Trang chủ</a>
      <a href="#">Chat AI</a>
      <a href="#">Thư viện ảnh</a>
      <a href="#">Giới thiệu</a>
      <a href="#">Liên hệ</a>
    </nav>
    <div class="auth-buttons">
      <button>Đăng ký</button>
      <button>Đăng nhập</button>
    </div>
  </header>

  <div class="main">
    <div class="left">
      <h1>ỨNG DỤNG AI TRONG PHÁT HIỆN SÂU BỆNH VÀ ĐƯA RA GIẢI PHÁP CHO CÂY MÍT</h1>
      <p>Giải pháp nông nghiệp thông minh</p>
      <button onclick="alert('Bạn đang dùng thử ứng dụng AI!')">Dùng thử</button>
    </div>
    <div class="right">
      <img src="<?php echo _WEB_ROOT_ . '/public/asset/images/anhHome.png' ?>" alt="Cây mít">
      <p><strong>🕷️ Spider mite (Tetranychus urticae)</strong></p>
      <p><strong>🍂 Anthracnose (Colletotrichum gloeosporioides)</strong></p>
    </div>
  </div>

  <footer>
    © 2025 Ứng dụng AI cây mít. Mọi quyền được bảo lưu.
  </footer>

</body>
</html>
