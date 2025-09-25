<!DOCTYPE html>
<html lang="vi">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Ứng dụng AI cây mít</title>
  <style>
    * {
    box-sizing: border-box;
    margin: 0;
    padding: 0;
}

    body {
      margin: 0;
      font-family: Arial, sans-serif;
      background: #C8F3B0;
    }

    header {
      background-color: #E3FDED78;
      color: white;
    }

.header-container {
  display: flex;
  align-items: center;
  justify-content: space-between; /* 3 khối: logo - nav - auth */
  max-width: 1200px;
  margin: 0 auto;
  padding: 10px 20px;
  height: 70px;
  box-sizing: border-box;
}

.logo {
  flex: 1;              /* chiếm 1 phần */
  display: flex;
  align-items: center;
}

.logo img {
  height: 80%;
  width: 55%;
  display: block;
}
   nav {
  flex: 2;              /* chiếm 2 phần để nằm giữa */
  display: flex;
  justify-content: center;  /* căn giữa menu */
  gap: 30px;
  align-items: center;
    padding-right: 35px;  
}
    nav a {
      color: #000;    
      text-decoration: none;
      font-weight: 200;
      transition: all 0.2s ease;
       font-size: 20px
    
    }

    nav a:hover {
      font-weight: bold;
     color: #2e7d32;     
    }

   .auth-buttons {
  flex: 1;              /* chiếm 1 phần */
  display: flex;
  justify-content: flex-end; /* đẩy nút sang phải */
  gap: 10px;
  align-items: center;

}
    .auth-buttons button {
      padding: 8px 16px;
      background-color: #2e7d32;
      color: white;
      border: 2px solid white;
      border-radius: 8px;
      cursor: pointer;
      font-weight: bold;
      transition: background-color 0.3s ease;
      font-size: 14px;

    }

    .auth-buttons button:hover {
      background-color: #1b5e20;
    }

    .main {
      display: flex;
      justify-content: center;
      align-items: center;
      padding: 60px 20px;
    }

    .main-container {
      display: flex;
      justify-content: space-between;
      align-items: center;
      max-width: 1200px;
      width: 100%;
      flex-wrap: wrap;
      gap: 40px;
    }

    .left {
      flex: 1;
      min-width: 300px;
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
      font-weight: bold;
      transition: background-color 0.3s ease;
    }

    .left button:hover {
      background-color: #1b5e20;
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
    footer {
 background: linear-gradient(to bottom, #c1faa2ff, #94d296ff);
  color: #1b5e20;
  padding: 40px 20px 20px;
  font-family: Arial, sans-serif;
  font-size: 15px;

}

.footer-container {
  display: flex;
  justify-content: space-between;
  flex-wrap: wrap;
  max-width: 1200px;
  margin: 0 auto;
  gap: 30px;
}

.footer-left h3 {
  margin-bottom: 10px;
  font-size: 20px;
  color: #2e7d32;
}

.footer-center h4,
.footer-right h4 {
  margin-bottom: 10px;
  font-size: 16px;
  color: #2e7d32;
}

.footer-center ul {
  list-style: none;
  padding: 0;
  margin: 0;
}

.footer-center ul li {
  margin: 6px 0;
}

.footer-center ul li a {
  color: #1b5e20;
  text-decoration: none;
  transition: color 0.2s ease;
}

.footer-center ul li a:hover {
  color: #0d3c15;
  text-decoration: underline;
}

.footer-right p {
  margin: 6px 0;
}

.footer-bottom {
  text-align: center;
  padding-top: 15px;
  margin-top: 20px;
  border-top: 1px solid #a5d6a7;
  font-size: 14px;
  color: #2e7d32;
}

  </style>
</head>
<body>

  <header>
    <div class="header-container">
      <div class="logo">
        <img src="<?php echo _WEB_ROOT_ . '/public/asset/images/logo 1.png' ?>" alt="Logo ứng dụng AI">
      </div>
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
    </div>
  </header>

  <div class="main">
    <div class="main-container">
      <div class="left">
        <h1>ỨNG DỤNG AI TRONG PHÁT HIỆN SÂU BỆNH VÀ ĐƯA RA GIẢI PHÁP CHO CÂY MÍT</h1>
        <p>Giải pháp nông nghiệp thông minh</p>
        <button onclick="alert('Bạn đang dùng thử ứng dụng AI!')">Dùng thử</button>
      </div>
      <div class="right">
        <img src="<?php echo _WEB_ROOT_ . '/public/asset/images/anhHome.png' ?>" alt="Cây mít">
      </div>
    </div>
  </div>
<footer>
  <div class="footer-container">
    <div class="footer-left">
      <h3>AI cho Cây Mít</h3>
      <p>Ứng dụng AI phát hiện sâu bệnh sớm và đưa ra giải pháp nông nghiệp thông minh.</p>
    </div>

    <div class="footer-center">
      <h4>Liên kết nhanh</h4>
      <ul>
        <li><a href="#">Trang chủ</a></li>
        <li><a href="#">Giới thiệu</a></li>
        <li><a href="#">Liên hệ</a></li>
      </ul>
    </div>

    <div class="footer-right">
      <h4>Liên hệ</h4>
      <p>Email: support@aimit.vn</p>
      <p>Hotline: 0123 456 789</p>
    </div>
  </div>

  <div class="footer-bottom">
    © 2025 Ứng dụng AI cây mít. Mọi quyền được bảo lưu.
  </div>
</footer>


</body>
</html>
