<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title><?= $article['slug'] ?></title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous" />

  <!-- CSS -->
  <link rel="stylesheet" href="<?php echo base_url('assets/css/styles.css'); ?>" />
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

  <!-- ICONS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" />
</head>

<body>
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

  <script>
    AOS.init();
  </script>

  <!--NAVBAR-->
  <nav class="side-nav nav-container">
    <div class="container-fluid">
      <a class="navbar-brand" href="#homepage">
        <img src="assets/img/LOGO TRICOM-04 1.png" alt="Bootstrap" width="80" height="60" />
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    </div>
    <div class="nav-icon text-center" id="navbarIcon">
      <a href="/"><i class="bi bi-arrow-left" style="font-size: 30px; color: #000000"></i></a>
    </div>
  </nav>
  <!-- NAVBAR END-->

  <!-- ARTICLE PAGE -->
  <section class="container-fluid article-page" id="article-page">
    <p class="title"><?= $article['title'] ?></p>
    <p class="created"><?= $article['created_at'] ?></p>
    <div class="row">
      <img src="<?= base_url('assets/img/' . $article['image']) ?>" alt="">
    </div>
    <div class="row" data-aos="fade-down" data-aos-easing="linear" data-aos-duration="1500">
      <div class="col-10" style="font-size: 1rem;"><?= $article['body'] ?></div>
    </div>
  </section>

  <!-- <section class="container-fluid article-page" id="article-page">
      <p class="title">'.$row['title'].'</p>
      <div class="d-flex gap-5">
        <p class="status">'.$row['status'].'</p>
        <p class="created">'.$row['created_at'].'</p>
        <div class="row">
          <img src="'.base_url('assets/img/'.$row['image']).'" alt="">
        </div>
        <div class="row" data-aos="fade-down" data-aos-easing="linear" data-aos-duration="1500">
          <div class="col-10" style="font-size: 1rem;">'.$row['body'].'</div>
        </div>
      </section> -->
  <!-- ABOUT US PAGE END -->

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

        <div class="col">
          <ul class="social-icons ps-0">
            <a class="instagram text-white me-3" style="font-size: 1.2rem" href="https://www.instagram.com"><i class="bi bi-instagram"></i></a>
            <a class="youtube text-white" style="font-size: 1.3rem" href="https://www.youtube.com"><i class="bi bi-youtube"></i></a>
          </ul>
        </div>
      </div>
    </div>
  </footer>
  <!-- FOOTER END -->
</body>

</html>