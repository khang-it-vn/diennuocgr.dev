<!DOCTYPE html>
<html lang="vn">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <!-- Favicons -->
    <link href="../assets/img/favicon.png" rel="icon">
    <link href="../assets/img/apple-touch-icon.png rel="apple-touch-icon">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
    
    <!-- jquery -->
    <script src="https://code.jquery.com/jquery-3.6.3.js" integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM=" crossorigin="anonymous"></script>
    
    <!-- Vendor CSS Files -->
    <link href="../assets/vendor/aos/aos.css" rel="stylesheet" type="text/css">
    <link href="../assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet" type="text/css">
    <link href="../assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet" type="text/css">
    <link href="../assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet" type="text/css">
    <link href="../assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet" type="text/css">
    <!-- Template Main CSS File -->
    <link href="../assets/css/style.css" rel="stylesheet" type="text/css">


    <!-- Not working css -->
     <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">

    <title>ĐIỆN NƯỚC TIẾN NGUYỄN</title>
</head>
<body>

     <!-- ======= Top Bar ======= -->
    <section id="topbar" class="d-flex align-items-center">
        <div class="container d-flex justify-content-center justify-content-md-between">
          <div class="contact-info d-flex align-items-center">
            <i class="bi bi-envelope d-flex align-items-center"><a href="mailto:chutien@tiennguyen.com">chutien@tiennguyen.com</a></i>
            <i class="bi bi-phone d-flex align-items-center ms-4"><span>+84 0987 546 775</span></i>
          </div>
          <div class="social-links d-none d-md-flex align-items-center">
            <a href="https://www.facebook.com/it.nhk.hutech/" class="twitter"><i class="bi bi-twitter"></i></a>
            <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
            <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
            <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></i></a>
          </div>
        </div>
      </section>
    <!-- ======= Header ======= -->
  <header id="header" class="d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

      <h1 class="logo"><a href="<?php echo ROOT_URL?>">ĐIỆN NƯỚC TIẾN NGUYỄN<span>.</span></a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt=""></a>-->

      <nav id="navbar" class="navbar">
        <ul>
          <li><a id="home" class="nav-link scrollto " href="<?php echo ROOT_URL?>">Trang chủ</a></li>
          <li><a id="product" class="nav-link scrollto" href="<?php echo ROOT_URL."Product/Index"?>">Sản phẩm</a></li>
          <li><a id="service-provide" class="nav-link scrollto" href="<?php echo ROOT_URL."ServiceProvide/Index"?>">Dịch vụ</a></li>
          <li><a id="post" class="nav-link scrollto " href="#portfolio">Dự án</a></li>
          <li><a id="about" class="nav-link scrollto" href="#team">Giới thiệu</a></li>
          
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->
    </div>
  </header><!-- End Header -->
  
      <div>
        <?php require($view) ?>
      </div>
    
  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact">
            <h3>ĐIỆN NƯỚC TIẾN NGUYỄN<span>.</span></h3>
            <p>
              Đường kênh Thầy giáo <br>
              Huyện Giồng Riềng<br>
              Tỉnh Kiên Giang <br><br>
              <strong>Phone:</strong> +84 0987 546 775<br>
              <strong>Email:</strong> chutien@diennuoctiennguyen.com<br>
            </p>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Truy cập nhanh tiện ích</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Trang chủ</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Sản phẩm</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Dịch vụ</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Dự án gần đây</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Thông tin về chúng tôi</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Dịch vụ cung cấp</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Sửa moto</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Lắp máy lọc nước</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Hệ thống tưới tiêu</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Hệ thống đèn điện trong nhà</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Thiết kế đường dây điện</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Thông tin liên hệ</h4>
            <p>Khách hàng có thể liên hệ với chúng tôi qua các hình thức sau</p>
            <div class="social-links mt-3"> 
              <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
              <a href="tel:+84987546775" class="linkedin"><i class="">Zalo</i></a>
            </div>
          </div>

        </div>
      </div>
    </div>

    <div class="container py-4">
      <div class="copyright">
        &copy; Copyright <strong><span>Điện nước Tiến Nguyễn</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        Designed by <a href="https://github.com/nguyenhoangkhangithutech">nguyenhoangkhangnsc19@gmail.com</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="../assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="../assets/vendor/aos/aos.js"></script>
  <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="../assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="../assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="../assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="../assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="../assets/js/main.js"></script>

  <!-- Not working js -->
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

  <!-- script for active page -->
  <script type="text/javascript">
    var url = window.location.href;
    var element = document.getElementById('home');
    if(url.includes("Product"))
    {
       element = document.getElementById("product");
    }
    else if(url.includes("ServiceProvide"))
    {
       element = document.getElementById("service-provide");
    }
    else if(url.includes("post"))
    {
      element = document.getElementById("post"); 
    }
    else if(url.includes('about'))
    {
      element = document.getElementById('about');
    }
    element.classList.add('active');
    
  </script>
</body>
</html>