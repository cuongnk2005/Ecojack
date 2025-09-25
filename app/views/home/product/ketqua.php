<!DOCTYPE html>
<html lang="vi">
<head>
  <meta charset="UTF-8">
  <title>Kết quả nhận diện</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #d4f8c2; /* nền xanh pastel */
      margin: 0;
      padding: 20px;
    }

    .result-container {
      display: flex;
      align-items: flex-start;
      gap: 20px;
      background: #C8F3B0;
      padding: 20px;
      border-radius: 10px;
    }

    .result-text {
      flex: 1;
      color: #004d00;
    }

    .result-text h3 {
      margin-top: 0;
      color: #006600;
      border-bottom: 3px solid #004d00;
      display: inline-block;
      padding-bottom: 5px;
    }

    .result-text p {
      font-size: 16px;
      line-height: 1.6;
    }

    .result-image {
      flex: 1;
      text-align: center;
    }

    .result-image img {
      max-width: 100%;
      border-radius: 8px;
      border: 2px solid #3e8e41;
    }

    .highlight-box {
      position: absolute;
      border: 3px solid #66bb6a;
      width: 200px;
      height: 150px;
      top: 60%;
      left: 50%;
    }
  </style>
</head>
<body>

  <div class="result-container">
    <div class="result-text">
      <h3>Kết quả</h3>
      <h4>Kết quả nhận diện:</h4>
      <p><b>Trái mít bị bệnh thối đen</b>, nguyên nhân thường do nấm mốc hoặc vi khuẩn gây hại.</p>
    </div>

    <div class="result-image">
      <img src="mit.png" alt="Trái mít bị bệnh">
    </div>
  </div>

</body>
</html>
