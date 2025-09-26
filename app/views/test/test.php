<!DOCTYPE html>
<html lang="vi">
<head>
  <meta charset="UTF-8">
  <title>Thư viện ảnh</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background: #C8F3B0;
      margin: 0;
      padding: 0;
    }

    .upload-section {
      max-width: 1000px;
      margin: 40px auto;
      padding: 20px;
      background-color: #E3FDED;
      border-radius: 10px;
      box-shadow: 0 0 10px rgba(0,0,0,0.1);
    }

    .upload-section h2 {
      color: #2e7d32;
      margin-bottom: 20px;
    }

    input[type="file"] {
      padding: 10px;
      font-size: 16px;
    }

    .gallery {
      margin-top: 30px;
      display: flex;
      flex-wrap: wrap;
      gap: 20px;
      justify-content: center;
    }

    .gallery img {
      max-width: 200px;
      border-radius: 8px;
      cursor: pointer;
      transition: transform 0.3s ease;
    }

    .gallery img:hover {
      transform: scale(1.05);
    }

    .overlay {
      position: fixed;
      top: 0; left: 0;
      width: 100%; height: 100%;
      background: rgba(0,0,0,0.8);
      display: none;
      justify-content: center;
      align-items: center;
      z-index: 999;
    }

    .overlay img {
      max-width: 90%;
      max-height: 90%;
      border-radius: 10px;
    }

    .overlay:active {
      display: none;
    }
    .custom-button,
.auth-buttons button,
.left button {
  padding: 10px 20px;
  background: linear-gradient(135deg, #4CAF50, #2e7d32);
  color: white;
  border: none;
  border-radius: 10px;
  font-size: 16px;
  font-weight: bold;
  cursor: pointer;
  box-shadow: 0 4px 6px rgba(0,0,0,0.2);
  transition: all 0.3s ease;
}

.custom-button:hover,
.auth-buttons button:hover,
.left button:hover {
  background: linear-gradient(135deg, #388E3C, #1b5e20);
  transform: translateY(-2px);
  box-shadow: 0 6px 10px rgba(0,0,0,0.3);
}


input[type="file"]::file-selector-button {
  padding: 10px 20px;
  background: linear-gradient(135deg, #4CAF50, #2e7d32);
  color: white;
  border: none;
  border-radius: 10px;
  font-size: 16px;
  font-weight: bold;
  cursor: pointer;
  box-shadow: 0 4px 6px rgba(0,0,0,0.2);
  transition: all 0.3s ease;
}

input[type="file"]::file-selector-button:hover {
  background: linear-gradient(135deg, #388E3C, #1b5e20);
  transform: translateY(-2px);
  box-shadow: 0 6px 10px rgba(0,0,0,0.3);
}

  </style>
</head>
<body>

  <!-- Header đã có sẵn ở trên -->

  <div class="upload-section">
    <h2>📤 Tải ảnh lên từ máy</h2>
    <input type="file" id="imageUpload" multiple accept="image/*">
    <div class="gallery" id="gallery"></div>
    <div style="text-align: center; margin-top: 30px;">
 <a href="<?php echo _WEB_ROOT_ ?>/thuvienanh/result"><button class="custom-button">🔍 Nghiên cứu</button></a> 
</div>

  </div>

  <div class="overlay" id="overlay">
    <img id="overlayImage" src="" alt="Phóng to ảnh">
  </div>

  <script>
    const imageUpload = document.getElementById('imageUpload');
    const gallery = document.getElementById('gallery');
    const overlay = document.getElementById('overlay');
    const overlayImage = document.getElementById('overlayImage');

    imageUpload.addEventListener('change', (event) => {
      const files = event.target.files;
      gallery.innerHTML = ''; // Xóa ảnh cũ

      Array.from(files).forEach(file => {
        const reader = new FileReader();
        reader.onload = function(e) {
          const img = document.createElement('img');
          img.src = e.target.result;
          img.alt = file.name;
          img.addEventListener('click', () => {
            overlayImage.src = e.target.result;
            overlay.style.display = 'flex';
          });
          gallery.appendChild(img);
        };
        reader.readAsDataURL(file);
      });
    });

    overlay.addEventListener('click', () => {
      overlay.style.display = 'none';
    });
  </script>

</body>
</html>
