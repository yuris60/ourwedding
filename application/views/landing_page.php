<!-- BEGIN PRELOADER -->
<div id="preloader">
  <div class="loading-heart">
    <svg viewBox="0 0 512 512" width="100">
      <path d="M462.3 62.6C407.5 15.9 326 24.3 275.7 76.2L256 96.5l-19.7-20.3C186.1 24.3 104.5 15.9 49.7 62.6c-62.8 53.6-66.1 149.8-9.9 207.9l193.5 199.8c12.5 12.9 32.8 12.9 45.3 0l193.5-199.8c56.3-58.1 53-154.3-9.8-207.9z" />
    </svg>
    <div class="preloader-title">
      Kartika<br>
      <small>&</small><br>
      Yuris
    </div>
  </div>
</div>
<!-- END PRELOADER -->


<!-- BEGIN WRAPPER -->
<div id="wrapper">

  <!-- BEGIN HEADER -->
  <!-- <header id="header">
    <div class="nav-section light no-menu">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <a href="index-invite.html" class="nav-logo"><img src="<?= base_url('assets/neela/') ?>images/logo-white.png" alt="Neela" /></a>

            <nav class="navbar">
              <a href="wedding-details.html" class="btn btn-light">More Details</a>
              <a href="rsvp.html" class="btn btn-light">RSVP</a>

              <button id="nav-mobile-btn"><i class="fas fa-bars"></i></button>
            </nav>

          </div>
        </div>
      </div>
    </div>
  </header> -->
  <!-- END HEADER -->


  <!-- BEGIN HERO SECTION -->
  <section id="hero" class="bg-slideshow">
    <div class="container">
      <div class="row">
        <div class="col-sm-12">

          <div class="hero-wrapper v-center x-pad">
            <h2 data-aos="zoom-in" data-aos-delay="1000" data-aos-duration="1500">Save the Date</h2>

            <h1 class="hero-title light ">
              <span data-aos="fade-left" data-aos-delay="300" data-aos-duration="1500">Kartika</span>
              <small data-aos="fade-up" data-aos-delay="300" data-aos-duration="1500">&</small>
              <span data-aos="fade-right" data-aos-delay="300" data-aos-duration="1500">Yuris</span>
            </h1>

            <div class="hero-subtitle light" data-aos="flip-up" data-aos-delay="1500" data-aos-duration="1500">
              Nov <span>06</span> 2022
            </div>

            <h2 class="mt-5 mb-0">Yth.</h2>
            <h2 class="nm_undangan mb-0"><?= $nm_undangan; ?></h2>
            <a href="<?= base_url('home/') . $this->uri->segment(2); ?>"><button class="mt-3 btn btn-light">Buka Undangan</button></a>
          </div>


        </div>
      </div>
    </div>
  </section>
  <!-- END HERO SECTION -->


  <!-- BEGIN FOOTER -->
  <footer id="footer-onepage" class="bg-color">
    <div class="footer-widget-area">
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <div class="footer-info left">
              KARTIKA PUSPITA<br>
              Putri Pertama dari Bpk. Karsono dan Ibu Dasiroh
            </div>
          </div>

          <div class="col-md-4">
            <div class="footer-logo">
              Kartika<br>
              <small>&</small><br>
              Yuris
            </div>
          </div>

          <div class="col-md-4">
            <div class="footer-info right">
              YURIS ALKHALIFI<br>
              Putra Pertama dari Bpk. Romli dan Ibu Rina Wati
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="copyright">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            &copy; 2022 Made with <i class="fa-solid fa-heart"></i> by <a href="https://www.instagram.com/yuris60/" target="_blank">Yuris Alkhalifi</a>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <!-- END FOOTER -->

</div>
<!-- END WRAPPER -->