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
    </style>
<header>
    <div class="header-container">
      <div class="logo">
        <img src="<?php echo _WEB_ROOT_ . '/public/asset/images/logo 1.png' ?>" alt="Logo ứng dụng AI">
      </div>
      <nav>
        <a  href="<?php echo _WEB_ROOT_ ?>">Trang chủ</a>
        <a href="#">Chat AI</a>
        <a href="<?php echo _WEB_ROOT_ ?>/thuvienanh">Thư viện ảnh</a>
        <a href="<?php echo _WEB_ROOT_ ?>/home/about">Giới thiệu</a>
        <a href="<?php echo _WEB_ROOT_ ?>/home/contact">Liên hệ</a>
      </nav>
      <div class="auth-buttons">
        <button>Đăng ký</button>
        <button>Đăng nhập</button>
      </div>
    </div>
  </header>