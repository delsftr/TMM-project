<!--NAVBAR DESKTOP-->
<nav class="side-nav nav-container">
    <div class="container-fluid">
        <a class="navbar-brand" href="#homepage">
            <img src="<?php echo base_url('assets/img/tricom.png'); ?>" alt="Tricom" width="60" height="auto" />
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

<!--NAVBAR TABLET & MOBILE-->
<nav class="top-nav navbar bg-light sticky-top shadow-lg">
    <div class="container px-4">
        <a class="navbar-brand" href="#homepage"><img src="<?php echo base_url('assets/img/tricom.png'); ?>" alt="Tricom" width="60" height="auto" /></a>
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
            <!-- <div class="offcanvas-sosmed mx-5 m-5" style="margin-bottom: 5rem !important">
                <p class="text fw-semibold">Follow Us</p>
                <a class="instagram text-dark me-5" style="font-size: 1.2rem" href="https://www.instagram.com"><i class="bi bi-instagram"></i></a>
                <a class="youtube text-dark" style="font-size: 1.3rem" href="https://www.youtube.com"><i class="bi bi-youtube"></i></a>
            </div> -->
        </div>
    </div>
</nav>
<!-- NAVBAR END-->