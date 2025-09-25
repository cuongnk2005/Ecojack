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
</head>
<body>


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


</body>
</html>
