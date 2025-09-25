<!DOCTYPE html>
<html lang="vi">
<head>
  <meta charset="UTF-8">
  <title>Kết quả nhận diện</title>
  <style>
 .result-wrapper {
  max-width: 1200px;   /* cùng độ rộng với header */
  margin: 0 auto;      /* căn giữa */

  box-sizing: border-box;
}

.result-container {
  display: flex;
  align-items: flex-start;
  gap: 40px;
  background: #C8F3B0;
  padding: 30px;
  border-radius: 10px;
}

.result-text {
  flex: 1;
  color: #004d00;
}

.result-text h3 {
  margin-top: 0;
  color: #006600;
  border-bottom: 2px solid #004d00;
  display: inline-block;
  padding-bottom: 5px;
  font-size: 25px;
}

.result-text h4 {
  margin-top: 30px;
  font-size: 20px;
}

.result-text p {
  font-size: 18px;
  line-height: 1.6;
  color: #000;
  font-weight: 300;
}

.result-image {
  flex: 1;
  text-align: center;
  margin-left: 100px;
}

.result-image img {
  max-width: 100%;
  border-radius: 8px;
  border: 2px solid #3e8e41;
}

  </style>
</head>
<body>
<div class="result-wrapper">
  <div class="result-container">
    <div class="result-text">
      <h3>Kết quả</h3>
      <h4>Kết quả nhận diện:</h4>
      <p>Trái mít bị bệnh thối đen, nguyên nhân thường do nấm mốc hoặc vi khuẩn gây hại.</p>
    </div>

    <div class="result-image">
      <img src="<?php echo _WEB_ROOT_ . '/public/asset/images/mitbenh2.jpg' ?>" alt="Trái mít bị bệnh">
    </div>
  </div>
</div>


</body>
</html>
