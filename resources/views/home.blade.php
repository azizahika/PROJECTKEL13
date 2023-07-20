@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Konsultasi Psikolog</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Poppins:300,400,500,700" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center header-transparent">


    <div id="logo">
      <a href="/"><img src="assets/img/logo.png" alt=""></a>
      <!-- Uncomment below if you prefer to use a text logo -->
      <!--<h1><a href="index.html">Regna</a></h1>-->
    </div>

    <nav id="navbar" class="navbar">
      <ul>
        <li><a class="nav-link scrollto active" href="#hero">Mulai</a></li>
        <li><a class="nav-link scrollto" href="#call-to-action">Chat</a></li>
        <li><a class="nav-link scrollto" href="#services">Konsultasi</a></li>
        <li><a class="nav-link scrollto" href="#portfolio">Bertahan</a></li>
        <li><a class="nav-link scrollto" href="#TentangKami">Tentang Kami</a></li>
        <li><a class="nav-link scrollto" href="#team">FaQ</a></li>
        <li><a class="nav-link scrollto" href="#contact">Kontak</a></li>
        <li><a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
            {{ __('Logout') }}
          </a>

          <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
            @csrf
          </form>
        </li>


    </nav><!-- .navbar -->
    </div>
  </header><!-- End Header -->

  <!-- ======= HERO Section ======= -->
  <section id="hero">
    <div class="hero-container" data-aos="zoom-in" data-aos-delay="100">
      <h1>SILAHKAN MEMULAI</h1>
      <a href="/kuisioner" class="btn-get-started" target="_blank">Mulai</a>
      <a href="/thr" class="btn-get-started" target="_blank">Tulis keluh kesah mu</a>
    </div>
  </section><!-- End hero Section -->


  <main id="main">

    <!-- ======= Tentang kami Section ======= -->
    <section id="TentangKami">
      <div class="container" data-aos="fade-up">
        <div class="row TentangKami-container">

          <div class="col-lg-6 content order-lg-1 order-2">
            <br>
            <h2 class="title">Sedikit Mengenal kami</h2><br>
            <p> Kami adalah platform yang didedikasikan untuk menyediakan dukungan dan bantuan bagi mereka
              yang membutuhkan perhatian kesehatan mental. Kami percaya bahwa kesehatan mental adalah aspek
              penting dalam kehidupan setiap individu, dan kami berkomitmen untuk membantu mengurangi stigma seputar isu ini. <br><br>
              Dalam komunitas kami, seribu teman hadir bersama-sama, menyediakan dukungan dan kekuatan bagi satu sama lain.
              Kami mengakui bahwa banyak orang di sekitar kita menghadapi tantangan kesehatan mental yang serius dan membutuhkan
              bantuan. Oleh karena itu, tujuan utama kami adalah memberikan sumber daya, informasi, dan jaringan yang diperlukan
              agar orang-orang dapat memulihkan dan menjaga kesehatan mental mereka.</p>
          </div>

          <div class="col-lg-6 image order-lg-2 order-1" data-aos="fade-left" data-aos-delay="100">
            <img src="assets/img/TentangKami.jpg" alt="Tentang Kami">
          </div>

        </div>
      </div>
    </section><!-- End TentangKami Section -->


    <!-- ======= Services Section ======= -->
    <section id="services">
      <div class="container" data-aos="fade-up">
        <div class="section-header">
          <h3 class="section-title">KONSULTASI</h3>
          <p class="section-description"></p>
        </div>
        <div class="row">
          <div class="col-lg-4 col-md-6" data-aos="zoom-in">
            <div class="box">
              <div class="icon"><a href=""><i class="bi bi-briefcase"></i></a></div>
              <h4 class="title"><a href="">INTEGRITAS</a></h4>
              <p class="description">Program kami bekerja sama dengan para ahli psikologis terpilih untuk menemani sesi konsultasi pengguna.</p>
            </div>
          </div>
          <div class="col-lg-4 col-md-6" data-aos="zoom-in">
            <div class="box">
              <div class="icon"><a href=""><i class="bi bi-card-checklist"></i></a></div>
              <h4 class="title"><a href="">KEAMANAN</a></h4>
              <p class="description">Segala aktivitas yang terlaksana dalam program kami senantiasa terekam dan tercatat melalui sistem yang kami buat demi menjaga stabilitas dan keamanan pengguna.</p>
            </div>
          </div>
          <div class="col-lg-4 col-md-6" data-aos="zoom-in">
            <div class="box">
              <div class="icon"><a href=""><i class="bi bi-bar-chart"></i></a></div>
              <h4 class="title"><a href="">AKREDITAS</a></h4>
              <p class="description">Berbagai macam inovasi dan evaluasi terus kami kembangkan demi menjaga mutu dan kualitas guna meningkatkan kenyamanan pengguna.</p>
            </div>
          </div>


    </section><!-- End Services Section -->

    <!-- ======= Call To Action Section ======= -->
    <section id="call-to-action">
      <div class="container">
        <div class="row" data-aos="zoom-in">
          <div class="col-lg-9 text-center text-lg-start">
            <h3 class="cta-title">CHAT</h3>
            <p class="cta-text"> Klik tombol disamping ini untuk melanjutkan konsultasi </p>
          </div>
          <div class="col-lg-3 cta-btn-container text-center">
            <a class="cta-btn align-middle" href="https://api.whatsapp.com/send?phone=6281334313047" target="_blank">Chat di WhatsApp</a>
          </div>
        </div>

      </div>
    </section><!-- End Call To Action Section -->


    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">
      <div class="container" data-aos="fade-up">
        <div class="section-header">
          <h3 class="section-title">INGAT INI TEMANKU</h3>
          <p class="section-description">"GALLERY QUOTES"</p>
        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="100">
          <div class="col-lg-12 d-flex justify-content-center">
          </div>
        </div>

        <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <img src="assets/img/portfolio/quotes1.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <img src="assets/img/portfolio/portfolio-2.jpeg" class="img-fluid" alt="">
            <div class="portfolio-info">
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <img src="assets/img/portfolio/quotes2.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <img src="assets/img/portfolio/portfolio-4.jpeg" class="img-fluid" alt="">
            <div class="portfolio-info">
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <img src="assets/img/portfolio/quotes3.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <img src="assets/img/portfolio/portfolio-6.jpeg" class="img-fluid" alt="">
            <div class="portfolio-info">
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <img src="assets/img/portfolio/portfolio-7.jpeg" class="img-fluid" alt="">
            <div class="portfolio-info">
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <img src="assets/img/portfolio/portfolio-8.jpeg" class="img-fluid" alt="">
            <div class="portfolio-info">
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <img src="assets/img/portfolio/portfolio-9.jpeg" class="img-fluid" alt="">
            <div class="portfolio-info">
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Portfolio Section -->

    <!-- ======= Team Section ======= -->
    <section id="team">
      <div class="container" data-aos="fade-up">
        <div class="section-header">
          <h3 class="section-title">FaQ</h3>
          <p class="section-description"></p>
        </div>

        <div class="faq-question">
          <h3>1. Apa itu web konsultasi psikolog?</h3>
        </div>
        <div class="faq-answer">
          <p>Web konsultasi psikolog adalah platform online yang memungkinkan pengguna untuk melakukan sesi konsultasi psikolog secara daring melalui internet. Pengguna dapat berkomunikasi dengan psikolog profesional dan mendapatkan bantuan serta dukungan dalam mengatasi masalah psikologis.</p>
        </div>

        <div class="faq-question">
          <h3>2. Bagaimana cara menggunakan web konsultasi psikolog?</h3>
        </div>
        <div class="faq-answer">
          <p>Untuk menggunakan web konsultasi psikolog, Anda perlu melakukan langkah-langkah berikut:</p>
          <ul>
            <li>Mendaftar akun pengguna di platform web.</li>
            <li>Melakukan login ke akun pengguna Anda.</li>
            <li>Mengisi kuisioner dan menunggu hasil jawaban dari sistem.</li>
            <li>Mengatur jadwal sesi konsultasi dengan psikolog.</li>
            <li>Mengikuti sesi konsultasi melalui chat.</li>
          </ul>
        </div>

        <div class="faq-question">
          <h3>3. Apakah konsultasi psikolog melalui web aman dan terjamin kerahasiannya?</h3>
        </div>
        <div class="faq-answer">
          <p>Ya, konsultasi psikolog melalui web dilakukan dengan menjaga keamanan dan kerahasiaan informasi pengguna. Platform web konsultasi psikolog biasanya menerapkan kebijakan privasi dan standar keamanan yang ketat untuk melindungi data pribadi pengguna.</p>
        </div>

        <!--div class="row"> 
          <div class="col-lg-3 col-md-6">
            <div class="member" data-aos="fade-up" data-aos-delay="100">
              <div class="pic"><img src="assets/img/team-1.jpg" alt=""></div>
              <h4>Walter White</h4>
              <span>Chief Executive Officer</span>
              <div class="social">
                <a href=""><i class="bi bi-twitter"></i></a>
                <a href=""><i class="bi bi-facebook"></i></a>
                <a href=""><i class="bi bi-instagram"></i></a>
                <a href=""><i class="bi bi-linkedin"></i></a>
              </div>
            </div>
          </div> 

          <div class="col-lg-3 col-md-6">
            <div class="member" data-aos="fade-up" data-aos-delay="200">
              <div class="pic"><img src="assets/img/team-2.jpg" alt=""></div>
              <h4>Sarah Jhinson</h4>
              <span>Product Manager</span>
              <div class="social">
                <a href=""><i class="bi bi-twitter"></i></a>
                <a href=""><i class="bi bi-facebook"></i></a>
                <a href=""><i class="bi bi-instagram"></i></a>
                <a href=""><i class="bi bi-linkedin"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="member" data-aos="fade-up" data-aos-delay="300">
              <div class="pic"><img src="assets/img/team-3.jpg" alt=""></div>
              <h4>William Anderson</h4>
              <span>CTO</span>
              <div class="social">
                <a href=""><i class="bi bi-twitter"></i></a>
                <a href=""><i class="bi bi-facebook"></i></a>
                <a href=""><i class="bi bi-instagram"></i></a>
                <a href=""><i class="bi bi-linkedin"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="member" data-aos="fade-up" data-aos-delay="400">
              <div class="pic"><img src="assets/img/team-4.jpg" alt=""></div>
              <h4>Amanda Jepson</h4>
              <span>Accountant</span>
              <div class="social">
                <a href=""><i class="bi bi-twitter"></i></a>
                <a href=""><i class="bi bi-facebook"></i></a>
                <a href=""><i class="bi bi-instagram"></i></a>
                <a href=""><i class="bi bi-linkedin"></i></a>
              </div>
            </div>
          </div>
        </div>

      </div>
    </section--><!-- End Team Section -->

        <!-- ======= Contact Section ======= -->
        <section id="contact">
          <div class="container">
            <div class="section-header">
              <h3 class="section-title">Kontak</h3>
              </p>
            </div>
          </div>

          <!-- Uncomment below if you wan to use dynamic maps -->
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d494.72226696019374!2d112.79221143488937!3d-7.266070999999991!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7fa1e787a4ec3%3A0x8668d9cd4a2ab5b0!2sJl.%20Sutorejo%20Tengah%20VI%20Blok%20GG%20No.14%2C%20RT.012%2FRW.08%2C%20Dukuh%20Sutorejo%2C%20Kec.%20Mulyorejo%2C%20Surabaya%2C%20Jawa%20Timur%2060113!5e0!3m2!1sid!2sid!4v1689196656358!5m2!1sid!2sid" width="100%" height="380" frameborder="0" style="border:0" allowfullscreen></iframe>

          <div class="container mt-5">
            <div class="row justify-content-center">

              <div class="col-lg-3 col-md-4">

                <div class="info">
                  <div>
                    <i class="bi bi-geo-alt"></i>
                    <p>Jalan Sutorejo Tengah VI 12<br>SURABAYA, NID 535022</p>
                  </div>

                  <div>
                    <i class="bi bi-envelope"></i>
                    <p>info@example.com</p>
                  </div>

                  <div>
                    <i class="bi bi-phone"></i>
                    <p>+1 5589 55488 55s</p>
                  </div>
                </div>

                <!--div class="social-links">
              <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
              <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
              <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
              <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
              <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
            </div>

          </div>

          <div class="col-lg-5 col-md-8">
            <div class="form">
              <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                <div class="form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                </div>
                <div class="form-group mt-3">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                </div>
                <div class="form-group mt-3">
                  <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
                </div>
                <div class="form-group mt-3">
                  <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
                </div>
                <div class="my-3">
                  <div class="loading">Loading</div>
                  <div class="error-message"></div>
                  <div class="sent-message">Your message has been sent. Thank you!</div>
                </div>
                <div class="text-center"><button type="submit">Send Message</button></div>
              </form>
            </div>
          </div>

        </div>

      </div>
    </section>< End Contact Section -->

                <!--/main>< End #main -->

                <!-- ======= Footer ======= -->
                <!--footer id="footer">
    <div class="footer-top">
      <div class="container">

      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong>Regna</strong>. All Rights Reserved
      </div>
      <div class="credits"-->
                <!--
        All the links in the footer should remain intact.
        You can delete the links only if you purchased the pro version.
        Licensing information: https://bootstrapmade.com/license/
        Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Regna
      -->
                Modified by KELOMPOK 13 <!--a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>
  </footer>< End Footer -->

                <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

                <!-- Vendor JS Files -->
                <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
                <script src="assets/vendor/aos/aos.js"></script>
                <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
                <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
                <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
                <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
                <script src="assets/vendor/php-email-form/validate.js"></script>

                <!-- Template Main JS File -->
                <script src="assets/js/main.js"></script>

</body>

</html>
@endsection
