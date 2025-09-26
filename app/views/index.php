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
/* Ban đầu ẩn và trượt */
.left {
  opacity: 0;
  transform: translateX(-100px);
  animation: slideInLeft 1s ease forwards;
}

.right {
  opacity: 0;
  transform: translateX(100px);
  animation: slideInRight 1s ease forwards;
  animation-delay: 0.5s; /* trễ một chút cho đẹp */
}

@keyframes slideInLeft {
  to {
    opacity: 1;
    transform: translateX(0);
  }
}

@keyframes slideInRight {
  to {
    opacity: 1;
    transform: translateX(0);
  }
}

  

  </style>
</head>
<body>


  <?php if (isset($_SESSION['login_success'])): ?>
    <div id="success-dialog" class="dialog-overlay">
      <div class="dialog-box">
        <div class="dialog-title">Thông báo</div>
        <div class="dialog-content" style="color:#27ae60;"><?php echo $_SESSION['login_success']; ?></div>
  <button class="dialog-close" onclick="closeSuccessDialog()">Đóng</button>
<script>
function closeSuccessDialog() {
  const dialog = document.getElementById('success-dialog');
  if (!dialog) return;
  // Tạo hiệu ứng tan ra từng miếng
  const box = dialog.querySelector('.dialog-box');
  const pieces = 16; // số miếng
  const boxRect = box.getBoundingClientRect();
  const w = boxRect.width, h = boxRect.height;
  box.style.visibility = 'hidden';
  // Tạo các miếng nhỏ
  for (let i = 0; i < pieces; i++) {
    const piece = document.createElement('div');
    piece.className = 'dialog-piece';
    piece.style.position = 'absolute';
    piece.style.left = (boxRect.left + (i/pieces)*w) + 'px';
    piece.style.top = boxRect.top + 'px';
    piece.style.width = (w/pieces) + 'px';
    piece.style.height = h + 'px';
    piece.style.background = window.getComputedStyle(box).background;
    piece.style.borderRadius = '18px';
    piece.style.zIndex = 10000;
    piece.style.transition = 'transform 0.7s cubic-bezier(.4,2,.6,1), opacity 0.7s';
    document.body.appendChild(piece);
    setTimeout(() => {
      piece.style.transform = `translateY(${80 + Math.random()*60}px) rotate(${(Math.random()-0.5)*60}deg) scale(0.7)`;
      piece.style.opacity = 0;
    }, 10);
    setTimeout(() => piece.remove(), 800);
  }
  setTimeout(() => dialog.remove(), 700);
}
</script>
<style>
.dialog-piece {
  box-shadow: 0 8px 32px rgba(39,174,96,0.18), 0 1.5px 8px rgba(0,0,0,0.08);
  pointer-events: none;
}
</style>
      </div>
    </div>
    <style>
    .dialog-overlay {
      position: fixed;
      top: 0; left: 0; right: 0; bottom: 0;
      background: rgba(255,255,255,0.2);
      backdrop-filter: blur(2px);
      display: flex;
      align-items: center;
      justify-content: center;
      z-index: 9999;
    }
    .dialog-box {
      background: linear-gradient(135deg, #fff 80%, #eaffea 100%);
      border-radius: 18px;
      box-shadow: 0 8px 32px rgba(39,174,96,0.18), 0 1.5px 8px rgba(0,0,0,0.08);
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
      color: #27ae60;
      letter-spacing: 1px;
    }
    .dialog-content {
      margin-bottom: 18px;
      color: #27ae60;
      font-size: 17px;
      font-weight: 500;
    }
    .dialog-close {
      background: linear-gradient(90deg, #27ae60 60%, #b2f7cc 100%);
      color: #fff;
      border: none;
      border-radius: 6px;
      padding: 10px 32px;
      font-size: 16px;
      font-weight: 600;
      cursor: pointer;
      box-shadow: 0 2px 8px rgba(39,174,96,0.08);
      transition: background 0.2s, transform 0.1s;
    }
    .dialog-close:hover {
      background: linear-gradient(90deg, #219150 60%, #b2f7cc 100%);
      transform: translateY(-2px) scale(1.04);
    }
    </style>
    <?php unset($_SESSION['login_success']); ?>
  <?php endif; ?>
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
