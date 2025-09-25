<style>
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
    gap: 80px;
  }

  /* Mỗi cột chiếm đều nhau và căn trái */
  .footer-container > div {
    flex: 1;
    min-width: 250px;
    text-align: left;
    
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
.footer-right{
    margin left: 50px;
    padding-left: 50px;
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

<footer>
  <div class="footer-container">
    <div class="footer-left">
      <h3>AI cho Cây Mít</h3>
      <p>Ứng dụng AI phát hiện sâu bệnh sớm và đưa ra giải pháp nông nghiệp thông minh.</p>
    </div>

    <div class="footer-right">
      <h4>Văn phòng</h4>
      <p><strong>CÔNG TY CP VINAMIT</strong></p>
      <p>Địa chỉ: 84 Nguyễn Du, phường Sài Gòn, TP. HCM</p>
      <p>Điện thoại: (028) 3990 1922</p>
      <p>Fax: (028) 3990 1921</p>
      
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
