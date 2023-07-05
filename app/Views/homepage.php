<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Tricom Mitra Mandiri</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous" />

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.css" />

  <!-- CSS -->
  <link rel="stylesheet" href="<?php

                                use App\Controllers\Home;

                                echo base_url('assets/css/styles.css'); ?>" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />

  <!-- ICONS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" />

</head>

<body>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.js"></script>
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

  <script>
    AOS.init();
  </script>

  <!--NAVBAR DESKTOP-->
  <nav class="side-nav nav-container">
    <div class="container-fluid">
      <a class="navbar-brand" href="#homepage">
        <img src="<?php echo base_url('assets/img/LOGO TRICOM-04 1.png'); ?>" alt="Tricom" width="80" height="60" />
      </a>
    </div>
    <div class="side-nav">
      <ul class="nav-menu p-0">
        <li class="nav-item">
          <a href="#about-us" class="text-decoration-none"><i class="about-us"></i><span class="menu-text text-dark">About Us</span></a>
        </li>
        <li class="nav-item">
          <a href="#services" class="text-decoration-none"><i class="services"></i><span class="menu-text text-dark">Services</span></a>
        </li>
        <li class="nav-item">
          <a href="#contact" class="text-decoration-none"><i class="contact"></i><span class="menu-text text-dark">Contact</span></a>
        </li>
      </ul>
    </div>
  </nav>
  <!-- NAVBAR END-->

  <!--NAVBAR TABLET & MOBILE-->
  <nav class="top-nav navbar bg-light sticky-top shadow-lg">
    <div class="container px-4">
      <a class="navbar-brand" href="#homepage"><img src="<?php echo base_url('assets/img/LOGO TRICOM-04 1.png'); ?>" alt="Tricom" width="60" height="50" /></a>
      <button class="navbar-toggler border-0" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
        <i class="bi bi-list" style="color: #0659a7; font-size: 2rem; margin-right: -1rem"></i>
      </button>
      <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
        <div class="offcanvas-header">
          <p class="offcanvas-title text" id="offcanvasNavbarLabel">Welcome,</p>
          <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="navbar-nav offcanvas-body text">
          <a class="nav-link my-3" style="padding-top: 1.5rem; border-top-width: 1px; border-top-style: solid; border-top-color: #0659a7" href="#about-us">About Us</a>
          <a class="nav-link dropdown-toggle my-3" role="button" data-bs-toggle="dropdown" aria-expanded="false"> Services </a>
          <ul class="dropdown-menu text">
            <a class="dropdown-item" href="/social-media">Social Media</a>
            <a class="dropdown-item" href="/photography">Photography</a>
            <a class="dropdown-item" href="/video-production">Video Production</a>
            <a class="dropdown-item" href="/web-design">Web Design</a>
          </ul>
          <a class="nav-link my-3" href="#contact">Contact</a>
        </div>
        <div class="offcanvas-sosmed mx-5 m-5" style="margin-bottom: 5rem !important">
          <p class="text fw-semibold">Follow Us</p>
          <a class="instagram text-dark me-5" style="font-size: 1.2rem" href="https://www.instagram.com"><i class="bi bi-instagram"></i></a>
          <a class="youtube text-dark" style="font-size: 1.3rem" href="https://www.youtube.com"><i class="bi bi-youtube"></i></a>
        </div>
      </div>
    </div>
  </nav>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  <!-- NAVBAR END-->

  <!--HOMEPAGE-->
  <div class="container-fluid homepage d-flex" id="homepage">
    <div class="homepage-body" data-aos="fade-up" data-aos-anchor-placement="top-center" data-aos-duration="2000">
      <p class="title-hp lh-sm text-white">
        Connecting <br />
        Your Brand.
      </p>
      <p class="sub-title text lh-base fw-light text-white">
        <span class="fw-bold">TRICOM</span> is committed to helping you connect with customers through branding solutions, strategic and innovative approaches, as well as creative and effective marketing.
      </p>
    </div>
  </div>
  <!--HOMEPAGE END-->

  <!-- ABOUT US-->
  <section class="container-fluid about-us" id="about-us">
    <div class="row">
      <div class="col">
        <div class="card-body text d-grid gap-3" data-aos="fade-up" data-aos-duration="2000">
          <p class="card-title fs-3 lh-base fw-semibold">TRICOM Agency is prepared to serve as your company's digital solution.</p>
          <p class="card-text lh-base fw-light">
            Tricom Agency is a full-service digital marketing agency based in Jakarta, Indonesia. We are powered by a team of experts in website, social media, SEO, digital ads, analytics, and marketing who work with a growth mindset to
            deliver success for your business.
          </p>
          <a href="/about-us" class="btn btn-primary btn-text text-white rounded-5 border-0 fw-light">Learn More</a>
        </div>
      </div>
      <div class="col align-self-center" data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="2000">
        <img src="<?php echo base_url('assets/img/about-us.jpg'); ?>" class="img-fluid rounded-1" alt="..." />
      </div>
    </div>
  </section>
  <!--ABOUT US END -->

  <!-- OUR SERVICES -->
  <section class="container-fluid services bg-grey" id="services">
    <p class="title fs-1 fw-bold">Our Services</p>
    <div class="row" id="categories">
      <div class="col-md-3" data-aos="fade-right" data-aos-easing="ease-out-cubic" data-aos-duration="2000">
        <div class="card text-center" id="btncard">
          <ul class="list-group list-group-flush">
            <!-- <li type="button" class="list-group-item">Social media</li>
              <li class="list-group-item">Photography</li>
              <li class="list-group-item">Video production</li>
              <li class="list-group-item">Web design</li> -->
          </ul>
        </div>
      </div>

      <div class="col" id="details" data-aos="fade-left" data-aos-easing="ease-out-cubic" data-aos-duration="2000">
        <div class="card" id="itm" style="height: 100%">
          <div class="row r-services" id="products">
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- OUR SERVICES END -->

  <!--SERVICES MOBILE VERSION -->
  <section class="container-fluid mobile-services bg-grey">
    <p class="title fs-1 fw-bold">Our Services</p>
    <div class="services-content owl-carousel">
      <div class="card">
        <img src="<?php echo base_url('assets/img/photography.jpg'); ?>" style="height: 25rem" alt="" />
        <div class="card-body text-center d-grid gap-2 my-auto">
          <div class="c-title fw-semibold">Social Media</div>
          <div class="text lh-base fw-light">
            Social media has become a crucial component of modern business. With the help of TRICOM, you can effectively and economically engage with customers, create brand recognition, and boost sales.
          </div>
          <a href="/social-media" class="btn btn-primary text text-white text-center rounded-5 border-0 fw-light">Learn More</a>
        </div>
      </div>
      <div class="card">
        <img src="<?php echo base_url('assets/img/photography.jpg'); ?>" style="height: 25rem" alt="" />
        <div class="card-body text-center d-grid gap-2">
          <div class="c-title fw-semibold">Photography</div>
          <div class="text lh-base fw-light">
            Photography has become a crucial component of modern business. With the help of TRICOM, you can effectively and economically engage with customers, create brand recognition, and boost sales.
          </div>
          <a href="/photography" class="btn btn-primary btn-text text-white text-center rounded-5 border-0 fw-light">Learn More</a>
        </div>
      </div>
      <div class="card">
        <img src="<?php echo base_url('assets/img/video-production.jpg'); ?>" style="height: 25rem" alt="" />
        <div class="card-body text-center d-grid gap-2">
          <div class="c-title fw-semibold">Video Production</div>
          <div class="text lh-base fw-light">
            Video production has become a crucial component of modern business. With the help of TRICOM, you can effectively and economically engage with customers, create brand recognition, and boost sales.
          </div>
          <a href="/video-production" class="btn btn-primary btn-text text-center text-white rounded-5 border-0 fw-light">Learn More</a>
        </div>
      </div>
      <div class="card">
        <img src="assets/img/video-production.jpg" style="height: 25rem" alt="" />
        <div class="card-body text-center d-grid gap-2">
          <div class="c-title fw-semibold">Web Design</div>
          <div class="text lh-base fw-light">
            Web design has become a crucial component of modern business. With the help of TRICOM, you can effectively and economically engage with customers, create brand recognition, and boost sales.
          </div>
          <a href="/web-design" class="btn btn-primary btn-text text-white text-center rounded-5 border-0 fw-light">Learn More</a>
        </div>
      </div>
    </div>

    <script type="text/javascript">
      $(document).ready(function() {
        $(".services-content").owlCarousel({
          loop: true,
          margin: 10,
          autoplay: true,
          autoplayTimeout: 5000,
          smartSpeed: 1500,
          responsiveClass: true,
          responsive: {
            0: {
              items: 1,
              // nav:true,
              dots: true,
            },
            600: {
              items: 1,
              // nav:false,
              dots: true,
            },
            1000: {
              items: 1,
              // nav:true,
              loop: false,
              dots: true,
            },
          },
        });
      });
    </script>
  </section>
  <!-- END -->

  <!-- OUR CLIENTS -->
  <section class="container-fluid our-clients" id="our-clients" data-aos="zoom-in" data-aos-duration="2000">
    <p class="title fs-1 fw-bold text-center">Our Satisfied Clients</p>
    <p class="sub-clients text fw-light text-center text-dark">Let's start realizing your dream brand with Tricom Agency!.</p>
    <div class="brand d-grid">
      <div class="col my-1">
        <img src="<?php echo base_url('assets/img/logobrand/logo-jn.png'); ?>" class="img-fluid rounded-2 border-5" alt="..." />
      </div>
      <div class="col my-1">
        <img src="<?php echo base_url('assets/img/logobrand/logo-yescare.png'); ?>" class="img-fluid rounded-2" alt="..." />
      </div>
      <div class="col my-1">
        <img src="<?php echo base_url('assets/img/logobrand/logo-chitose.png'); ?>" class="img-fluid rounded-2" alt="..." />
      </div>
      <div class="col my-1">
        <img src="<?php echo base_url('assets/img/logobrand/logo-cpro.png'); ?>" class="img-fluid rounded-2" alt="..." />
      </div>
      <div class="col my-1">
        <img src="<?php echo base_url('assets/img/logobrand/logo-incozy3.png'); ?>" class="img-fluid rounded-2" alt="..." />
      </div>
      <div class="col my-1">
        <img src="<?php echo base_url('assets/img/logobrand/logo-bellini.png'); ?>" class="img-fluid rounded-2" alt="..." />
      </div>
      <div class="col my-1">
        <img src="<?php echo base_url('assets/img/logobrand/logo-yukshopping3.png'); ?>" class="img-fluid rounded-2" alt="..." />
      </div>
      <div class="col my-1">
        <img src="<?php echo base_url('assets/img/logobrand/logo-jobb.png'); ?>" class="img-fluid rounded-2" alt="..." />
      </div>
      <div class="col my-1">
        <img src="<?php echo base_url('assets/img/logobrand/logo-medico.png'); ?>" class="img-fluid rounded-2" alt="..." />
      </div>
      <div class="col my-1">
        <img src="<?php echo base_url('assets/img/logobrand/logo-fiore3.png'); ?>" class="img-fluid rounded-2" alt="..." />
      </div>
      <div class="col my-1">
        <img src="<?php echo base_url('assets/img/logobrand/logo-spoon.png'); ?>" class="img-fluid rounded-2" alt="..." />
      </div>
      <div class="col my-1">
        <img src="<?php echo base_url('assets/img/logobrand/logo-swoosh.png'); ?>" class="img-fluid rounded-2" alt="..." />
      </div>
      <div class="col my-1">
        <img src="<?php echo base_url('assets/img/logobrand/logo-monster2.png'); ?>" class="img-fluid rounded-2" alt="..." />
      </div>
      <div class="col my-1">
        <img src="<?php echo base_url('assets/img/logobrand/logo-zao.png'); ?>" class="img-fluid rounded-2" alt="..." />
      </div>
      <div class="col my-1">
        <img src="<?php echo base_url('assets/img/logobrand/logo-embun2.png'); ?>" class="img-fluid rounded-2" alt="..." />
      </div>
    </div>
    <!-- <p class="sub-clients text fw-light text-center text-dark">Let's start realizing your dream brand with Tricom Agency!</p> -->
  </section>
  <!-- OUR CLIENTS END -->

  <!-- CUSTOMER TESTIMONY -->
  <section class="container-fluid customer-testimony">
    <p class="title fs-1 mb-3 fw-bold text-center">What They Say?</p>
    <div class="testimony-content owl-carousel">
      <div class="single-testimony text-center text-white lh-lg">
        <p class="text-testi">
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat, modi facere? Officiis quos alias delectus laborum modi! Hic iusto commodi totam quaerat distinctio vel labore! Quisquam inventore temporibus laboriosam labore.
        </p>
        <br />
        <div class="client-info">
          <h5 class="name text fw-semibold">Aiman Mansyur</h5>
          <p class="text-testi fst-italic">Manager PT Indomie Indonesia</p>
        </div>
      </div>
      <div class="single-testimony text-center text-white lh-lg">
        <p class="text-testi">
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat, modi facere? Officiis quos alias delectus laborum modi! Hic iusto commodi totam quaerat distinctio vel labore! Quisquam inventore temporibus laboriosam labore.
        </p>
        <br />
        <div class="client-info">
          <h5 class="name text fw-semibold ">Aiman Mansyur</h5>
          <p class="text-testi fst-italic">Manager PT Indomie Indonesia</p>
        </div>
      </div>
      <div class="single-testimony text-center text-white lh-lg">
        <p class="text-testi">
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat, modi facere? Officiis quos alias delectus laborum modi! Hic iusto commodi totam quaerat distinctio vel labore! Quisquam inventore temporibus laboriosam labore.
        </p>
        <br />
        <div class="client-info">
          <h5 class="name text fw-semibold">Aiman Mansyur</h5>
          <p class="text-testi fst-italic">Manager PT Indomie Indonesia</p>
        </div>
      </div>
      <div class="single-testimony text-center text-white lh-lg">
        <p class="text-testi">
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat, modi facere? Officiis quos alias delectus laborum modi! Hic iusto commodi totam quaerat distinctio vel labore! Quisquam inventore temporibus laboriosam labore.
        </p>
        <br />
        <div class="client-info">
          <h5 class="name text fw-semibold">Aiman Mansyur</h5>
          <p class="text-testi fst-italic">Manager PT Indomie Indonesia</p>
        </div>
      </div>
    </div>

    <script type="text/javascript">
      $(document).ready(function() {
        $(".testimony-content").owlCarousel({
          loop: true,
          margin: 10,
          autoplay: true,
          autoplayTimeout: 5000,
          smartSpeed: 1500,
          responsiveClass: true,
          responsive: {
            0: {
              items: 1,
              // nav:true,
              dots: true,
            },
            600: {
              items: 2,
              // nav:false,
              dots: true,
            },
            900: {
              items: 2,
              // nav:false,
              dots: true,
            },
            1200: {
              items: 3,
              // nav:true,
              loop: false,
              dots: true,
            },
          },
        });
      });
    </script>
  </section>
  <!-- CUSTOMER TESTIMONY END -->

  <!-- ARTICLE -->
  <section class="container-fluid" id="article">
    <p class="title fs-1 fw-bold">Latest Article</p>
    <div class="article owl-carousel" style="gap: 2%">
      <?php
      if (!empty($article)) :
        foreach ($article as $row) :
      ?>
          <div class="card">
            <img src="<?= getenv("ASSETS_URL") . $row['image'] ?>" alt="article-1" />
            <div class="card-body text-center text">
              <div class="c-title fw-semibold mb-2"><?= $row['title'] ?></div>
              <div class="text lh-base fw-light"><?= $row['excerpt'] ?></div>
              <br />
              <a href="/article/<?= $row['slug'] ?>" class="btn btn-primary btn-text text-white rounded-5 border-0 fw-light">Learn More</a>
              <!-- <button><a href="/article/<?= $row['slug'] ?>" class="card-link text-decoration-none fw-light">READ MORE</a></button> -->

            </div>
          </div>
        <?php
        endforeach;
      else :
        ?>

      <?php
      endif;
      ?>

      <script type="text/javascript">
        $(document).ready(function() {
          $(".article").owlCarousel({
            loop: true,
            margin: 10,
            responsiveClass: true,
            responsive: {
              0: {
                items: 1,
                nav: true,
              },
              600: {
                items: 2,
                nav: false,
              },
              900: {
                items: 2,
                nav: false,
              },
              1200: {
                items: 3,
                nav: true,
                loop: false,
              },
            },
          });
        });
      </script>
  </section>
  <!-- ARTICLE END -->

  <!-- CONTACT -->
  <section class="container-fluid contact bg-grey" id="contact">
    <p class="title fs-1 fw-bold">Let’s discuss your project!</p>
    <div class="d-grid flex-sm-column r-maps">
      <div class="col c-text text-decoration-none text">
        <div class="row r-info">
          <div class="col icon">
            <i class="fa-brands fa-whatsapp" style="color: #0659a7; font-size: 25px"></i>
          </div>
          <div class="col text-decoration-none">
            <p class="text-decoration-none">021-56920213</p>
          </div>
        </div>
        <div class="row r-info">
          <div class="col icon">
            <i class="fa-regular fa-envelope" style="color: #0659a7; font-size: 25px"></i>
          </div>
          <div class="col">
            <p>tricomagency@trisula.com</p>
          </div>
        </div>
        <div class="row r-info">
          <div class="col icon">
            <i class="bi bi-geo-alt fw-bold" style="color: #0659a7; font-size: 25px"></i>
          </div>
          <div class="col">
            <p>
              Trisula Center<br />
              Jalan Lingkar Luar Barat Blok A - B 1, RT.14/RW.14, Rw. Buaya, Kecamatan Cengkareng, Kota Jakarta Barat, Daerah Khusus Ibukota Jakarta 11740
            </p>
          </div>
        </div>
      </div>
      <!-- overflow-scroll -->
      <div class="col overflow-scroll">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.666879455042!2d106.72665651476889!3d-6.175331995529216!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f78167bb60d5%3A0x390ec47a1212cbca!2sTrisula%20Center!5e0!3m2!1sid!2sid!4v1683168836580!5m2!1sid!2sid" class="location" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div>
    </div>
  </section>
  <!-- CONTACT END -->

  <!-- FOOTER -->
  <footer class="footer">
    <div class="row">
      <div class="col-4 col-sm-0 mb-2 ms-4">
        <!-- <p class="text text-white mb-3" style="font-size: 0.8rem;">Powered by</p> -->
        <img src="<?php echo base_url('assets/img/trisula-corp.png'); ?>" alt="trisula" />
      </div>

      <div class="col-3 page">
        <h5 class="c-title text-white mb-3 fw-bold">Services</h5>
        <ul class="list-group">
          <li class="list-group-item bg-transparent border-0 p-0 mb-2"><a class="text text-decoration-none text-white" href="/social-media">Social Media</a></li>
          <li class="list-group-item bg-transparent border-0 p-0 mb-2"><a class="text text-decoration-none text-white" href="/photography">Photography</a></li>
          <li class="list-group-item bg-transparent border-0 p-0 mb-2"><a class="text text-decoration-none text-white" href="/video-production">Video Production</a></li>
          <li class="list-group-item bg-transparent border-0 p-0 mb-2"><a class="text text-decoration-none text-white" href="/web-design">Web Design</a></li>
        </ul>
      </div>

      <div class="col-3 page">
        <h5 class="c-title text-white mb-3 fw-bold">Company</h5>
        <ul class="list-group">
          <li class="list-group-item bg-transparent border-0 p-0 mb-2"><a class="text text-decoration-none text-white" href="/about-us">About Us</a></li>
          <li class="list-group-item bg-transparent border-0 p-0 mb-2"><a class="text text-decoration-none text-white" href="/article">Blog</a></li>
        </ul>
      </div>

      <div class="col page">
        <h5 class="c-title text-white mb-3 fw-bold">Contact</h5>
        <ul class="list-group">
          <li class="list-group-item bg-transparent border-0 p-0 mb-2"><a class="text text-decoration-none text-white" href="#contact">Get in Touch</a></li>
        </ul>
      </div>

      <hr class="text-success text-white" />

      <div class="row r-copyright">
        <div class="col-10 me-5 my-auto">
          <p class="copyright text-white">
            &copy;
            <script>
              document.write(new Date().getFullYear());
            </script>
            Tricom. All Rights Reserved
          </p>
        </div>

        <!-- <div class="col">
          <ul class="social-icons ps-0">
            <a class="instagram text-white me-3" style="font-size: 1.2rem" href="https://www.instagram.com"><i class="bi bi-instagram"></i></a>
            <a class="youtube text-white" style="font-size: 1.3rem" href="https://www.youtube.com"><i class="bi bi-youtube"></i></a>
          </ul>
        </div> -->
      </div>
    </div>
  </footer>
  <!-- FOOTER END -->

  <?php

  include "services.php";

  ?>
</body>

</html>