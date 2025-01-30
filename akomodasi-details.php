<?php
include "koneksi.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <?php
              $id = $_GET['id'];
              $result = mysqli_query($conn, "SELECT b.*, k.nama_kategori FROM wisata b join kategori k on (b.id_kategori=k.id_kategori) WHERE b.id_wisata = $id ORDER BY b.id_wisata DESC");
              while($row = mysqli_fetch_array($result, MYSQLI_ASSOC))
              {
              ?>

  <title>Detail Akomodasi <?php echo $row['judul']; ?></title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Inter:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">

</head>

<body>

<!-- ======= Header ======= -->
<header id="header" class="header d-flex align-items-center fixed-top">
  <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

    <a href="index.php" class="logo d-flex align-items-center">
  <!-- <img src="assets/img/apple-touch-icon.png" alt="">-->
      <h1>De Prambanan Tour</h1>
    </a>

    <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
    <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>
    <nav id="navbar" class="navbar">
      <ul>
        <li><a href="index.php" class="active">Home</a></li>
        <li><a href="index.php">Tentang</a></li>
      </ul>
    </nav><!-- .navbar -->

  </div>
</header><!-- End Header -->
<!-- End Header -->

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs">
      <div class="page-header d-flex align-items-center">
        <div class="container position-relative">
          <div class="row d-flex justify-content-center">
            <div class="col-lg-6 text-center">
              <h2>Akomodasi</h2>
              <p>Nikmati Akomodasi Di Prambanan dan Sekitarnya, Rilekskan Dirimu</p>
            </div>
          </div>
        </div>
      </div>
      <nav>
        <div class="container">
          <ol>
            <li><a href="index.php">Home</a></li>
            <li>Detail Akomodasi</li>
          </ol>
        </div>
      </nav>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Service Details Section ======= -->
    <section id="service-details" class="service-details">
      <div class="container" data-aos="fade-up">

        <div class="row gy-4">

          <div class="col-lg-8 ">
            <img src="assets/images/blog/<?php echo $row['gambar'];?>" alt="" class="img-fluid services-img">
            <h3><?php echo $row['judul']; ?></h3>
            <h5>
              <p>
              <?php echo $row['isi']; ?>
              </p>
            </h5>
          </div>

          <div class="col-lg-4">
            <h4><?php echo $row['judul']; ?></h4>
            <p><?php echo $row['singkat']; ?></p>
            <div class="services-list">
              <a href="#"><?php echo $row['harga']; ?></a>
              <a href="<?php echo $row['link']; ?>">Referensi</a>
            </div>
          </div>
          <?php
          }
          ?>

      </div>
    </section><!-- End Service Details Section -->

  </main><!-- End #main -->

<!-- ======= Footer ======= -->
<footer id="footer" class="footer">

  <div class="container">
    <div class="row gy-4">
      <div class="col-lg-5 col-md-12 footer-info">
        <a href="index.html" class="logo d-flex align-items-center">
          <span>Serundeng</span>
        </a>
        <p>Website ini dibuat untuk memenuhi tugas akhir Semester 3 Universitas Islam Indonesia, dalam rangka memperkenalkan hiburan dan parawisata di Indonesia dengan membangun website</p>
        <div class="social-links d-flex mt-4">
          <a href="https://github.com/elnoersan" class="github"><i class="bi bi-github"></i></a>
          <a href="#" class="github"><i class="bi bi-github"></i></a>
          <a href="#" class="github"><i class="bi bi-github"></i></a>
          <a href="#" class="github"><i class="bi bi-github"></i></a>
        </div>
      </div>

      <div class="col-lg-2 col-6 footer-links">
        <h4>Useful Links(Not Actived Yet)</h4>
        <ul>
          <li><a href="#">Home</a></li>
          <li><a href="#">About us</a></li>
          <li><a href="#">Services</a></li>
          <li><a href="#">Terms of service</a></li>
          <li><a href="#">Privacy policy</a></li>
        </ul>
      </div>

      <div class="col-lg-2 col-6 footer-links">
        <h4>Members</h4>
        <ul>
          <li>Rian AKA elnoersan | 297</></li>
          <li>Hasan</a></li>
          <li>Fauzan</a></li>
          <li>Rizki</a></li>
        </ul>
      </div>

      <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
        <h4>Contact Us</h4>
        <p>
          Universitas Islam Indonesia
          Jalan Kaliurang KM 14.5 <br>
          Sleman, Yogyakarta<br>
          Indonesia <br><br>
          <strong>Phone:</strong> +62 822 6060 751<br>
          <strong>Email:</strong> 22523297@students.uii.ac.id<br>
        </p>

      </div>

    </div>
  </div>

  <div class="container mt-4">
    <div class="copyright">
      &copy; Copyright <strong><span>Logis</span></strong>. All Rights Reserved
    </div>
    <div class="credits">
      Designed by <a href="https://bootstrapmade.com/">BootstrapMade | Modified by Serundeng </a>
    </div>
  </div>

</footer><!-- End Footer -->
<!-- End Footer -->

  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>

<?php
mysqli_close($conn);
?>