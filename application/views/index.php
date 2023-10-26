<!-- Music -->
<audio hidden autoplay id="audio" src="<?= base_url('assets/music/music.mp3') ?>"></audio>

<!-- Flash Data -->
<div class="flash-data" data-flashdata="<?= $this->session->flashdata('success'); ?>"></div>

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

<div id="wrapper">

  <!-- BEGIN HEADER -->
  <!-- <header id="header">
    <div class="nav-section">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <a href="#hero" class="nav-logo"><img src="images/logo.png" alt="Neela" /></a>

            <nav class="navbar">

              <ul class="nav navbar-nav">
                <li><a href="#hero">Home</a></li>

                <li class="dropdown">
                  <a href="#about-us" data-toggle="dropdown" data-hover="dropdown">About Us<b class="caret"></b></a>
                  <ul class="dropdown-menu">
                    <li><a href="#loveline">Loveline</a></li>
                  </ul>
                </li>

                <li class="dropdown">
                  <a href="#the-wedding" data-toggle="dropdown" data-hover="dropdown">The Wedding<b class="caret"></b></a>
                  <ul class="dropdown-menu">
                    <li><a href="#the-wedding">Invite</a></li>
                    <li><a href="#location">Location</a></li>
                    <li><a href="#bridesmaids">Bridesmaids</a></li>
                    <li><a href="#testimonials">Testimonials</a></li>
                    <li><a href="#groomsmen">Groomsmen</a></li>
                    <li><a href="#giftregistry">Gift Registry</a></li>
                    <li class="dropdown-submenu">
                      <a href="#">Another Menu</a>
                      <ul class="dropdown-menu">
                        <li><a href="#">Another Menu</a></li>
                        <li><a href="#">Another Menu</a></li>
                      </ul>
                    </li>
                  </ul>
                </li>

                <li><a href="#gallery">Gallery</a></li>

                <li><a href="#blog">Blog</a></li>

                <li><a href="#rsvp">RSVP</a></li>
              </ul>

              <button id="nav-mobile-btn"><i class="fas fa-bars"></i></button>
            </nav>

          </div>
        </div>
      </div>
    </div>
  </header> -->
  <!-- END HEADER -->


  <!-- BEGIN HERO SECTION -->
  <section id="hero" class="bg-slideshow section-divider-bottom-1">
    <div class="container">
      <div class="row">
        <div class="col-sm-12">

          <div class="hero-wrapper v-center">
            <h2 data-aos="fade" data-aos-delay="600">Save the Date</h2>

            <h1 class="hero-title light ">
              <span data-aos="fade-left" data-aos-delay="300" data-aos-duration="1500">Kartika</span>
              <small data-aos="fade-up" data-aos-delay="300" data-aos-duration="1500">&</small>
              <span data-aos="fade-right" data-aos-delay="300" data-aos-duration="1500">Yuris</span>
            </h1>

            <div class="hero-subtitle light" data-aos="flip-up" data-aos-delay="1500" data-aos-duration="1500">
              Nov <span>06</span> 2022
            </div>

            <!-- <div data-aos="fade" data-aos-delay="1000">
              <a href="#rsvp" class="btn btn-light scrollto">RSVP</a>
            </div> -->
          </div>

        </div>
      </div>
    </div>
  </section>
  <!-- END HERO SECTION -->


  <!-- BEGIN ABOUT US SECTION -->
  <section id="about-us">
    <div class="container">
      <div class="row about-elems-wrapper">
        <div class="element col-md-6 col-xl-4 offset-xl-2" data-aos="fade-left" data-aos-delay="300">
          <div class="image">
            <img src="<?= base_url('assets/images/') ?>yuris.jpg" alt="" width="600" height="714" />
            <div class="hover-info neela-style">
              <div class="content">
                <h3>Yuris Alkhalifi<small>Pengantin Pria</small></h3>
                <p>Putra Pertama dari Bapak Romli dan Ibu Rina Wati</p>
                <ul class="sn-icons">
                  <li><a href="#"><i class="fab fa-instagram-square"></i></a></li>
                  <li><a href="#"><i class="fab fa-twitter-square"></i></a></li>
                  <li><a href="#"><i class="fab fa-facebook-square"></i></a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>

        <div class="divider-about-us" data-aos="fade-up" data-aos-delay="500">
          <i class="icon-two-hearts"></i>
          <!-- <img src="<?= base_url('assets/images/two-of-hearts.png') ?>" alt="Love"> -->
        </div>

        <div class="element col-md-6 col-xl-4" data-aos="fade-right" data-aos-delay="400">
          <div class="image">
            <img src="<?= base_url('assets/images/') ?>kartika.jpg" alt="" width="600" height="714" />
            <div class="hover-info neela-style">
              <div class="content">
                <h3>Kartika Puspita<small>Pengantin Wanita</small></h3>
                <p>Putri Pertama dari Bapak Karsono dan Ibu Dasiroh</p>
                <ul class="sn-icons">
                  <li><a href="#"><i class="fab fa-instagram-square"></i></a></li>
                  <li><a href="#"><i class="fab fa-twitter-square"></i></a></li>
                  <li><a href="#"><i class="fab fa-facebook-square"></i></a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="about-us-desc col-lg-8 offset-lg-2" data-aos="fade-bottom" data-aos-delay="300">
          <h3><small>We are</small>Getting Married</h3>
          <p style="font-size: 18px;">Dan di antara tanda-tanda kekuasaan Allah,
            diciptakan-Nya pasangan hidup dari jenismu sendiri,
            supaya kamu cenderung dan merasa tenteram kepadanya,
            dan dijadikan-Nya diantaramu rasa kasih dan sayang.
            Sesungguhnya pada yang demikian itu benar-benar terdapat
            tanda-tanda bagi kaum yang berfikir.
            <br><br>
            <strong>Qs. Ar-Ruum : 21</strong>
          </p>
          <!-- <img src="images/signature-2.png" alt="Andrew and Isabella"> -->
        </div>
      </div>
    </div>
  </section>
  <!-- END ABOUT US SECTION -->

  <!-- BEGIN OUR STORY TITLE SECTION -->
  <section id="our-story-title" class="parallax-background bg-color-overlay section-divider-bottom-2 padding-divider-top">
    <div class="section-divider-top-1 off-section"></div><!-- The class "section-divider-top-1" can also be applied to the tag <section>. In this case, it was added on a new <div> because the tag <section> have all pseudo elements (::after and ::before) in use. -->
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <h1 class="section-title light">Our love story</h1>
        </div>
      </div>
    </div>
  </section>
  <!-- END OUR STORY TITLE SECTION -->

  <!-- BEGIN TIMELINE SECTION -->
  <section id="loveline">
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-lg-10 offset-lg-1 col-xl-8 offset-xl-2">
          <div class="timeline">
            <div class="year" data-aos="fade-top" data-aos-delay="250">
              <span class="neela-style">2016</span>
            </div>

            <div class="template-1">
              <div class="date" data-parallax="3" data-aos="fade" data-aos-delay="350">
                <span class="neela-style">13 Januari</span>
              </div>

              <div class="image-1" data-parallax="-4" data-aos="fade-left" data-aos-delay="250">
                <img src="<?= base_url('assets/') ?>images/timeline-first-date.jpg" alt="" width="600" height="600">
              </div>

              <div class="image-2" data-parallax="6" data-aos="fade-right" data-aos-delay="250">
                <img src="<?= base_url('assets/') ?>images/timeline-first-date2.jpg" alt="" width="600" height="818">
              </div>

              <div class="description-wrapper" data-parallax="-6" data-aos="fade-bottom" data-aos-delay="250">
                <div class="description" data-parallax="-6" data-aos="fade-bottom" data-aos-delay="250">
                  <div class="neela-style">
                    <h4>Pertemuan dikegiatan KANIRA RANTING</h4>
                    <p>Awalnya kami bertemu pada kegiatan KANIRA RANTING Tahun 2016 yang diselenggarakan oleh Dewan Kerja Gerakan Pramuka Kwartir Ranting Karawang Barat (DKR Karawang Barat). Dimana Kartika sebagai peserta dan Yuris sebagai Ketua DKR Karawang Barat.</p>
                  </div>
                </div>
              </div>
            </div>

            <div class="year" data-aos="fade-top" data-aos-delay="250">
              <span class="neela-style">2016-2022</span>
            </div>

            <div class="gallery-container">
              <div class="timeline-gallery-wrapper" data-aos="fade-left" data-aos-delay="250">
                <div class="timeline-gallery owl-carousel" id="timeline">
                  <div class="item">
                    <a class="hover-img" href="<?= base_url('assets/') ?>images/timeline-progress-1.jpg" data-lightbox="gallery-timeline" title="Dokumentasi Kami"><span class="btn btn-light btn-sm">+</span></a>
                    <img src="<?= base_url('assets/') ?>images/timeline-progress-1.jpg" width="100px" />
                  </div>

                  <div class="item">
                    <a class="hover-img" href="<?= base_url('assets/') ?>images/timeline-progress-2.jpg" data-lightbox="gallery-timeline" title="Dokumentasi Kami"><span class="btn btn-light btn-sm">+</span></a>
                    <img src="<?= base_url('assets/') ?>images/timeline-progress-2.jpg" width="100px" />
                  </div>

                  <div class="item">
                    <a class="hover-img" href="<?= base_url('assets/') ?>images/timeline-progress-3.jpg" data-lightbox="gallery-timeline" title="Dokumentasi Kami"><span class="btn btn-light btn-sm">+</span></a>
                    <img src="<?= base_url('assets/') ?>images/timeline-progress-3.jpg" width="100px" />
                  </div>
                  <div class="item">
                    <a class="hover-img" href="<?= base_url('assets/') ?>images/timeline-progress-4.jpg" data-lightbox="gallery-timeline" title="Dokumentasi Kami"><span class="btn btn-light btn-sm">+</span></a>
                    <img src="<?= base_url('assets/') ?>images/timeline-progress-4.jpg" width="100px" />
                  </div>
                  <div class="item">
                    <a class="hover-img" href="<?= base_url('assets/') ?>images/timeline-progress-5.jpg" data-lightbox="gallery-timeline" title="Dokumentasi Kami"><span class="btn btn-light btn-sm">+</span></a>
                    <img src="<?= base_url('assets/') ?>images/timeline-progress-5.jpg" width="100px" />
                  </div>
                  <div class="item">
                    <a class="hover-img" href="<?= base_url('assets/') ?>images/timeline-progress-6.jpg" data-lightbox="gallery-timeline" title="Dokumentasi Kami"><span class="btn btn-light btn-sm">+</span></a>
                    <img src="<?= base_url('assets/') ?>images/timeline-progress-6.jpg" width="100px" />
                  </div>
                </div>
              </div>

              <div class="description-wrapper" data-aos="fade-bottom" data-aos-delay="250">
                <div class="description">
                  <div class="neela-style">
                    <h4>Perjalanan Cinta Kami</h4>
                    <p>Cinta yang kami perjuangkan, tidaklah mudah. Karena untuk sampai jenjang lamaran & pernikahan, Kartika harus menunggu Yuris sampai lulus S2 pada tahun 2021 dan Yuris menunggu Kartika sampai lulus S1 pada tahun 2022.</p>
                  </div>
                </div>
              </div>
            </div>

            <div class="year" data-aos="fade-top" data-aos-delay="250">
              <span class="neela-style">2022</span>
            </div>

            <div class="template-2">
              <div class="date" data-parallax="3" data-aos="fade" data-aos-delay="250">
                <span class="neela-style">14 Agustus</span>
              </div>

              <!-- <div class="videoEmbed" data-parallax="6" data-aos="fade-top" data-aos-delay="250">
                <iframe src="https://player.vimeo.com/video/136240001" width="590" height="330" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen></iframe>
              </div> -->

              <div class="image-1" data-parallax="-2" data-aos="fade-left" data-aos-delay="250">
                <img src="<?= base_url('assets/') ?>images/timeline-proposal-img1.jpg" alt="" width="600" height="818">
              </div>

              <div class="image-2" data-parallax="4" data-aos="fade-right" data-aos-delay="250">
                <img src="<?= base_url('assets/') ?>images/timeline-proposal-img2.jpg" alt="" width="600" height="800">
              </div>

              <div class="description-wrapper" data-parallax="-5" data-aos="fade-bottom" data-aos-delay="250">
                <div class="description" data-parallax="-6" data-aos="fade-bottom" data-aos-delay="250">
                  <div class="neela-style">
                    <h4>Proses Lamaran</h4>
                    <p>Alhamdulillah setelah melewati hambatan & rintangan yang ada, pada akhirnya Yuris menepati janjinya untuk menjemput sang pujaan hati yang selama ini ia perjuangkan yakni Kartika. Pada momen ini, berjanji sehidup sesurga selalu berdua (Insya Allah)</p>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="timeline_footer">
            <div data-aos="fade-top" data-aos-delay="250" class="mb-3">
              <img src="<?= base_url('assets/images/wedding-ring.png') ?>" width="9%" alt="">
            </div>
            <div class="punchline" data-aos="fade-bottom" data-aos-delay="250"><small>This is where our</small>forever<br>begins!</div>
          </div>

        </div>
      </div>
    </div>
  </section>
  <!-- END TIMELINE SECTION -->


  <!-- BEGIN THE WEDDING SECTION -->
  <section id="the-wedding" class="parallax-background bg-color-overlay padding-divider-top section-divider-bottom-1">
    <div class="section-divider-top-1 off-section"></div><!-- The class "section-divider-top-1" can also be applied to the tag <section>. In this case, it was added on a new <div> because the tag <section> have all pseudo elements (::after and ::before) in use. -->
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <h1 class="section-title light">Invitation</h1>
        </div>
      </div>

      <div class="row">
        <div class="col-md-12 col-lg-10 offset-lg-1 col-xl-10 offset-xl-1 center">
          <div class="invite neela-style" data-aos="fade-left" data-aos-delay="100">
            <div class="invite_title">
              <div class="text">
                Save<small>the</small>Date
              </div>
            </div>

            <div class="invite_info">
              <h2>Yuris Alkhalifi, M.Kom., CPDSA</h2>
              <h2>&</h2>
              <h2>Kartika Puspita, S.Kom., CPDSA</h2>

              <div class="uppercase">Tanpa mengurangi hormat, kami bermaksud untuk mengundang Bapak/Ibu/Sdr/i pada acara pernikahan kami yang akan dilaksanakan pada :</div>
              <div class="date">6 November 2022<small>Akad pukul 09.00 WIB</small></div>
              <div class="uppercase">Kp. Nyangkokot, RT 008 RW 004, Desa Wanasari, Kec. Telukjambe Barat Kab. Karawang 41361</div>

              <h5>Reception to follow</h5>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- END THE WEDDING SECTION -->


  <!-- BEGIN WEDDING LOCATION SECTION -->
  <section id="location">
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <h2 class="section-title">Location</h2>
        </div>
      </div>
    </div>

    <div class="container">
      <div class="row">
        <div class="col-lg-12 col-xl-10 offset-xl-1">

          <div class="map-info-container">
            <div class="info-wrapper" data-aos="fade-bottom" data-aos-delay="100">
              <div class="location-info">
                <div class="neela-style">
                  <h4 class="has-icon">
                    <img src="<?= base_url('assets/images/star.png') ?>" width="30%" alt="">
                    Akad<small>09.00 WIB</small>
                  </h4>
                  <h5>Rumah Mempelai Wanita</h5>
                  <p>Kp. Nyangkokot, RT 008 RW 004, Desa Wanasari, Kec. Telukjambe Barat Kab. Karawang 41361</p>

                  <div class="info-map-divider"></div>

                  <h4 class="has-icon">
                    <img src="<?= base_url('assets/images/party.png') ?>" width="30%" alt="">
                    Resepsi<small>10.00 WIB</small>
                  </h4>
                  <h5>Rumah Mempelai Wanita</h5>
                  <p>Kp. Nyangkokot, RT 008 RW 004, Desa Wanasari, Kec. Telukjambe Barat Kab. Karawang 41361</p>
                </div>
              </div>
            </div>

            <div class="map-wrapper" data-aos="fade" data-aos-delay="100">
              <!-- <div id="map_canvas" class="gmap"></div> -->
              <div id="map_canvas" class="gmaps">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d366643.00196576485!2d106.85756664185215!3d-6.512857901959763!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e699d35d6a8b58b%3A0xabdf346163b05e8d!2sM62H%2B2PQ%20Warung%20Arfadhia%20(Atih)%2C%20Kp.Nyangkokot%2C%20Wanasari%2C%20Kec.%20Telukjambe%20Bar.%2C%20Karawang%2C%20Jawa%20Barat%2041361!5e0!3m2!1sid!2sid!4v1664947278329!5m2!1sid!2sid" width="100%" height="550" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
              </div>
              <!-- <div class="map_pins">
                <ul class="pins">
                  <li><i class="fas fa-bell"></i>Ceremony</li>
                  <li><i class="fas fa-glass-cheers"></i>Reception</li>
                  <li><i class="fas fa-bed"></i>Accomodations</li>
                  <li><i class="fas fa-plane"></i>Transportation</li>
                </ul>
              </div> -->
            </div>
          </div>

          <div class="center">
            <a href="https://goo.gl/maps/tB1X4yzSj6Z33Juv5" class="btn btn-primary scrollto" target="_blank">Klik Untuk Cek Maps</a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- END WEDDING LOCATION SECTION -->


  <!-- BEGIN TESTIMONIALS SECTION -->
  <!-- <section id="testimonials" class="bg-color side-flowers-light">
    <div class="container">

      <div class="row">
        <div class="col-lg-12 col-xl-10 offset-xl-1">
          <div id="testimonials-slider" class="owl-carousel testimonials light quotes" id="quotes" data-aos="fade-up" data-aos-delay="300">
            <div class="item">
              <blockquote>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In varius ante libero, a sollicitudin elit malesuada et. Nulla facilisi. Pellentesque magna diam, mattis a gravida eget, lobortis ut velit. Nam interdum hendrerit nisl et malesuada. Nulla facilisis velit neque, sed ultrices nibh facilisis non.</blockquote>

              <div class="author">
                <h3>John Doe<small>Best Man</small></h3>
              </div>
            </div>

            <div class="item">
              <blockquote>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In varius ante libero, a sollicitudin elit malesuada et. Nulla facilisi. Pellentesque magna diam, mattis a gravida eget, lobortis ut velit. Nam interdum hendrerit nisl et malesuada. Nulla facilisis velit neque, sed ultrices nibh facilisis non.</blockquote>

              <div class="author">
                <h3>John Doe<small>Best Man</small></h3>
              </div>
            </div>

            <div class="item">
              <blockquote>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In varius ante libero, a sollicitudin elit malesuada et. Nulla facilisi. Pellentesque magna diam, mattis a gravida eget, lobortis ut velit. Nam interdum hendrerit nisl et malesuada. Nulla facilisis velit neque, sed ultrices nibh facilisis non.</blockquote>

              <div class="author">
                <h3>John Doe<small>Best Man</small></h3>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section> -->
  <!-- END TESTIMONIALS SECTION -->

  <!-- BEGIN GALLERY SECTION -->
  <!-- <section id="gallery" class="section-bg-color">

    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <h1 class="section-title">Wedding Gallery</h1>
        </div>
      </div>
    </div>

    <div class="gallery-wrapper">
      <div class="gallery-left"><i class="fas fa-chevron-left"></i></div>
      <div class="gallery-right"><i class="fas fa-chevron-right"></i></div>

      <div class="gallery-scroller">
        <ul>
          <li>
            <div class="hover-info">
              <a class="btn btn-light btn-sm only-icon" href="<?= base_url('assets/images/gallery/') ?>gallery-thumb4.jpg" data-lightbox="WeddingPhotos" title="Wedding Photos">
                <i class="fa fa-link"></i>
              </a>
            </div>
            <img src="<?= base_url('assets/images/gallery/') ?>gallery-thumb4.jpg" alt="" width="380" height="380" />
          </li>

          <li>
            <div class="hover-info">
              <a class="btn btn-light btn-sm only-icon" href="<?= base_url('assets/images/gallery/') ?>gallery-thumb2.jpg" data-lightbox="WeddingPhotos" title="Wedding Photos">
                <i class="fa fa-link"></i>
              </a>
            </div>
            <img src="<?= base_url('assets/images/gallery/') ?>gallery-thumb2.jpg" alt="" width="380" height="380" />
          </li>

          <li>
            <div class="hover-info">
              <a class="btn btn-light btn-sm only-icon" href="<?= base_url('assets/images/gallery/') ?>gallery-thumb3.jpg" data-lightbox="WeddingPhotos" title="Wedding Photos">
                <i class="fa fa-link"></i>
              </a>
            </div>
            <img src="<?= base_url('assets/images/gallery/') ?>gallery-thumb3.jpg" alt="" width="380" height="380" />
          </li>

          <li>
            <div class="hover-info">
              <a class="btn btn-light btn-sm only-icon" href="<?= base_url('assets/images/gallery/') ?>gallery-thumb7.jpg" data-lightbox="WeddingPhotos" title="Wedding Photos">
                <i class="fa fa-link"></i>
              </a>
            </div>
            <img src="<?= base_url('assets/images/gallery/') ?>gallery-thumb7.jpg" alt="" width="380" height="380" />
          </li>

          <li>
            <div class="hover-info">
              <a class="btn btn-light btn-sm only-icon" href="<?= base_url('assets/images/gallery/') ?>gallery-thumb5.jpg" data-lightbox="WeddingPhotos" title="Wedding Photos">
                <i class="fa fa-link"></i>
              </a>
            </div>
            <img src="<?= base_url('assets/images/gallery/') ?>gallery-thumb5.jpg" alt="" width="380" height="380" />
          </li>

          <li>
            <div class="hover-info">
              <a class="btn btn-light btn-sm only-icon" href="<?= base_url('assets/images/gallery/') ?>gallery-thumb6.jpg" data-lightbox="WeddingPhotos" title="Wedding Photos">
                <i class="fa fa-link"></i>
              </a>
            </div>
            <img src="<?= base_url('assets/images/gallery/') ?>gallery-thumb6.jpg" alt="" width="380" height="380" />
          </li>

          <li>
            <div class="hover-info">
              <a class="btn btn-light btn-sm only-icon" href="<?= base_url('assets/images/gallery/') ?>gallery-thumb5.jpg" data-lightbox="WeddingPhotos" title="Wedding Photos">
                <i class="fa fa-link"></i>
              </a>
            </div>
            <img src="<?= base_url('assets/images/gallery/') ?>gallery-thumb5.jpg" alt="" width="380" height="380" />
          </li>

          <li>
            <div class="hover-info">
              <a class="btn btn-light btn-sm only-icon" href="<?= base_url('assets/images/gallery/') ?>gallery-thumb8.jpg" data-lightbox="WeddingPhotos" title="Wedding Photos">
                <i class="fa fa-link"></i>
              </a>
            </div>
            <img src="<?= base_url('assets/images/gallery/') ?>gallery-thumb8.jpg" alt="" width="380" height="380" />
          </li>

          <li>
            <div class="hover-info">
              <a class="btn btn-light btn-sm only-icon" href="<?= base_url('assets/images/gallery/') ?>gallery-thumb9.jpg" data-lightbox="WeddingPhotos" title="Wedding Photos">
                <i class="fa fa-link"></i>
              </a>
            </div>
            <img src="<?= base_url('assets/images/gallery/') ?>gallery-thumb9.jpg" alt="" width="380" height="380" />
          </li>

          <li>
            <div class="hover-info">
              <a class="btn btn-light btn-sm only-icon" href="<?= base_url('assets/images/gallery/') ?>gallery-thumb10.jpg" data-lightbox="WeddingPhotos" title="Wedding Photos">
                <i class="fa fa-link"></i>
              </a>
            </div>
            <img src="<?= base_url('assets/images/gallery/') ?>gallery-thumb10.jpg" alt="" width="380" height="380" />
          </li>
        </ul>
        <ul>
          <li>
            <div class="hover-info">
              <a class="btn btn-light btn-sm only-icon" href="<?= base_url('assets/images/gallery/') ?>gallery-thumb7.jpg" data-lightbox="WeddingPhotos" title="Wedding Photos">
                <i class="fa fa-link"></i>
              </a>
            </div>
            <img src="<?= base_url('assets/images/gallery/') ?>gallery-thumb7.jpg" alt="" width="380" height="380" />
          </li>

          <li>
            <div class="hover-info">
              <a class="btn btn-light btn-sm only-icon" href="<?= base_url('assets/images/gallery/') ?>gallery-thumb6.jpg" data-lightbox="WeddingPhotos" title="Wedding Photos">
                <i class="fa fa-link"></i>
              </a>
            </div>
            <img src="<?= base_url('assets/images/gallery/') ?>gallery-thumb6.jpg" alt="" width="380" height="380" />
          </li>

          <li>
            <div class="hover-info">
              <a class="btn btn-light btn-sm only-icon" href="<?= base_url('assets/images/gallery/') ?>gallery-thumb5.jpg" data-lightbox="WeddingPhotos" title="Wedding Photos">
                <i class="fa fa-link"></i>
              </a>
            </div>
            <img src="<?= base_url('assets/images/gallery/') ?>gallery-thumb5.jpg" alt="" width="380" height="380" />
          </li>

          <li>
            <div class="hover-info">
              <a class="btn btn-light btn-sm only-icon" href="<?= base_url('assets/images/gallery/') ?>gallery-thumb8.jpg" data-lightbox="WeddingPhotos" title="Wedding Photos">
                <i class="fa fa-link"></i>
              </a>
            </div>
            <img src="<?= base_url('assets/images/gallery/') ?>gallery-thumb8.jpg" alt="" width="380" height="380" />
          </li>

          <li>
            <div class="hover-info">
              <a class="btn btn-light btn-sm only-icon" href="<?= base_url('assets/images/gallery/') ?>gallery-thumb15.jpg" data-lightbox="WeddingPhotos" title="Wedding Photos">
                <i class="fa fa-link"></i>
              </a>
            </div>
            <img src="<?= base_url('assets/images/gallery/') ?>gallery-thumb15.jpg" alt="" width="380" height="380" />
          </li>

          <li>
            <div class="hover-info">
              <a class="btn btn-light btn-sm only-icon" href="<?= base_url('assets/images/gallery/') ?>gallery-thumb16.jpg" data-lightbox="WeddingPhotos" title="Wedding Photos">
                <i class="fa fa-link"></i>
              </a>
            </div>
            <img src="<?= base_url('assets/images/gallery/') ?>gallery-thumb16.jpg" alt="" width="380" height="380" />
          </li>

          <li>
            <div class="hover-info">
              <a class="btn btn-light btn-sm only-icon" href="<?= base_url('assets/images/gallery/') ?>gallery-thumb17.jpg" data-lightbox="WeddingPhotos" title="Wedding Photos">
                <i class="fa fa-link"></i>
              </a>
            </div>
            <img src="<?= base_url('assets/images/gallery/') ?>gallery-thumb17.jpg" alt="" width="380" height="380" />
          </li>

          <li>
            <div class="hover-info">
              <a class="btn btn-light btn-sm only-icon" href="<?= base_url('assets/images/gallery/') ?>gallery-thumb18.jpg" data-lightbox="WeddingPhotos" title="Wedding Photos">
                <i class="fa fa-link"></i>
              </a>
            </div>
            <img src="<?= base_url('assets/images/gallery/') ?>gallery-thumb18.jpg" alt="" width="380" height="380" />
          </li>

          <li>
            <div class="hover-info">
              <a class="btn btn-light btn-sm only-icon" href="<?= base_url('assets/images/gallery/') ?>gallery-thumb19.jpg" data-lightbox="WeddingPhotos" title="Wedding Photos">
                <i class="fa fa-link"></i>
              </a>
            </div>
            <img src="<?= base_url('assets/images/gallery/') ?>gallery-thumb19.jpg" alt="" width="380" height="380" />
          </li>

          <li>
            <div class="hover-info">
              <a class="btn btn-light btn-sm only-icon" href="<?= base_url('assets/images/gallery/') ?>gallery-thumb8.jpg" data-lightbox="WeddingPhotos" title="Wedding Photos">
                <i class="fa fa-link"></i>
              </a>
            </div>
            <img src="<?= base_url('assets/images/gallery/') ?>gallery-thumb8.jpg" alt="" width="380" height="380" />
          </li>
        </ul>
      </div>
    </div>
  </section> -->
  <section id="gallery" class="section-bg-color">
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <h1 class="section-title">Wedding Gallery</h1>
        </div>
      </div>
    </div>

    <div class="row mt-0">
      <div class="col-xl-3 col-6 p-0" data-aos="flip-left">
        <img src="<?= base_url('assets/images/gallery/gallery-thumb1.jpg') ?>" width="100%">
      </div>
      <div class="col-xl-3 col-6 p-0" data-aos="flip-left">
        <img src="<?= base_url('assets/images/gallery/gallery-thumb4.jpg') ?>" width="100%">
      </div>
      <div class="col-xl-3 col-6 p-0" data-aos="flip-left">
        <img src="<?= base_url('assets/images/gallery/gallery-thumb3.jpg') ?>" width="100%">
      </div>
      <div class="col-xl-3 col-6 p-0" data-aos="flip-left">
        <img src="<?= base_url('assets/images/gallery/gallery-thumb2.jpg') ?>" width="100%">
      </div>
    </div>
    <div class="row mt-0">
      <div class="col-xl-3 col-6 p-0" data-aos="flip-left">
        <img src="<?= base_url('assets/images/gallery/gallery-thumb5.jpg') ?>" width="100%">
      </div>
      <div class="col-xl-3 col-6 p-0" data-aos="flip-left">
        <img src="<?= base_url('assets/images/gallery/gallery-thumb6.jpg') ?>" width="100%">
      </div>
      <div class="col-xl-3 col-6 p-0" data-aos="flip-left">
        <img src="<?= base_url('assets/images/gallery/gallery-thumb7.jpg') ?>" width="100%">
      </div>
      <div class="col-xl-3 col-6 p-0" data-aos="flip-left">
        <img src="<?= base_url('assets/images/gallery/gallery-thumb8.jpg') ?>" width="100%">
      </div>
    </div>
  </section>
  <!-- END GALLERY SECTION -->

  <!-- BEGIN WEDDING GIFTS SECTION -->
  <section id="giftregistry" class="section-bg-color parallax-background">
    <div class="container">
      <div class="row">
        <div class="col-md-8 col-xl-6">
          <h2 class="section-title-lg uppercase desc"><small>Give a Gift</small><strong>to The Bride and Groom</strong></h2>
          <div class="section-desc text-center">Bagi tamu undangan yang tidak bisa hadir, siapa tahu ada yang ingin memberikan sedikit kenang-kenangan untuk kami, bisa melakukan transfer melalui rekening dibawah ini, Terimakasih atas kesediaannya.</div>
        </div>
      </div>

      <div class="row">
        <div class="col-md-8 col-xl-6" data-aos="flip-up">
          <div class="form-wrapper flowers neela-style text-center">
            <div class="mb-4">
              <img src="<?= base_url('assets/images/logo-bank-permata.png') ?>" width="70%" alt="">
              <h5 class="mt-2">Nomor Rekening : <strong id="norek">1227077472</strong></h5>
              <h5 class="mb-2">Atas Nama : <strong>Yuris Alkhalifi</strong></h5>

              <button class="btn btn-primary mt-4" onclick="CopyToClipboard('norek')">Salin Nomor Rekening</button>
            </div>

            <div class="mt-2">
              <img src="<?= base_url('assets/images/logo-dana.png') ?>" width="40%" alt="">
              <h5 class="mt-2">Nomor Rekening : <strong id="nodana">085889369328</strong></h5>
              <h5 class="mb-2">Atas Nama : <strong>Kartika Puspita</strong></h5>

              <button class="btn btn-primary mt-4" onclick="CopyToClipboard2('nodana')">Salin Nomor Dana</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- END WEDDING GIFTS SECTION -->


  <!-- BEGIN CONTACTS SECTION -->
  <section id="rsvp" class="section-bg-color extra-padding-section">
    <div class="container">

      <div class="row" data-aos="zoom-in">
        <!-- <div class="col-lg-10 offset-lg-1 col-xl-8 offset-xl-2  col-xxl-6 offset-xxl-3"> -->

        <div class="col-xl-6">
          <div class="form-wrapper flowers neela-style">
            <h1 class="section-title">Received Messages</h1>

            <?php foreach ($konfirmasi_undangan as $ku) : ?>
              <div class="row mb-2">
                <div class="col-3 text-end">
                  <img src="<?= base_url('assets/images/user.png') ?>" width="75px" class="rounded-circle" alt="">
                </div>
                <div class="col-9">
                  <h5 class="fw-bold uppercase"><?= $ku['nm_undangan'] ?></h5>
                  <!-- <h6><small><i class="fa-solid fa-clock"></i> <?= waktu_lalu($ku['tgl_komentar']) ?></small></h6> -->
                  <?php if ($ku['bersedia_hadir'] == "Ya") : ?>
                    <h6><small><span class="badge bg-success text-white">Akan Hadir</span></small></h6>
                  <?php else : ?>
                    <h6><small><span class="badge bg-danger text-white">Tidak Akan Hadir</span></small></h6>
                  <?php endif; ?>

                  <p class="mt-0"><?= $ku['komentar']; ?>.</p>
                </div>
              </div>
            <?php endforeach; ?>
            <div class="row">
              <div class="col">
                <?= $pagination; ?>

              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-6">

          <form action="<?= base_url('home/simpanUndangan/' . $nm_undangan) ?>" method="post" autocomplete="off">
            <div class="form-wrapper flowers neela-style">
              <h1 class="section-title">Will you Attend?</h1>

              <div class="form-floating">
                <input type="text" name="nm_undangan" id="nm_undangan" placeholder="<?= $nm_undangan ?>" value="" class="form-control required fromName" required>
                <label for="name">Nama Undangan</label>
              </div>

              <div class="form-check-wrapper">
                <label>Konfirmasi Kehadiran</label>
                <div class="form-check form-check-inline">
                  <input class="form-check-input required" type="radio" name="bersedia_hadir" value="Ya" checked>
                  <label for="attend_wedding_yes">Ya, Saya akan hadir memenuhi undangan.</label>
                </div>

                <div class="form-check form-check-inline">
                  <input class="form-check-input required" type="radio" name="bersedia_hadir" value="Tidak">
                  <label for="attend_wedding_no">Maaf, Saya belum bisa hadir.</label>
                </div>
              </div>

              <div class="form-floating">
                <textarea id="komentar" name="komentar" placeholder="komentar" class="form-control" rows="4" required></textarea>
                <label for="message">Berikan pesan</label>
              </div>

              <div class="center">
                <button type="submit" class="btn btn-primary submit_form">Kirim</button>
              </div>
            </div>
          </form>
        </div>
      </div>
      <!-- <div class="row">
        <div class="col-lg-10 offset-lg-1 col-xl-8 offset-xl-2  col-xxl-6 offset-xxl-3">

          <div class="form-wrapper flowers neela-style">
            <h1 class="section-title">Received Messages</h1>

            <?php foreach ($konfirmasi_undangan as $ku) : ?>
              <div class="row mb-2">
                <div class="col-3 text-end">
                  <img src="<?= base_url('assets/images/yuris.jpg') ?>" width="75px" class="rounded-circle" alt="">
                </div>
                <div class="col-9">
                  <h5 class="fw-bold uppercase"><?= $ku['nm_undangan'] ?></h5>
                  <h6><small><i class="fa-solid fa-clock"></i> 5 Menit yang lalu</small></h6>

                  <p class="mt-2"><?= $ku['komentar']; ?>.</p>
                </div>
              </div>
            <?php endforeach; ?>
            <div class="row">
              <div class="col">
                <?= $pagination; ?>
              </div>
            </div>
          </div>
        </div>
      </div> -->

    </div>
  </section>
  <!-- END CONTACTS SECTION -->


  <!-- BEGIN FOOTER -->
  <footer id="footer-onepage" class="bg-color">
    <div class="footer-widget-area">
      <div class="container">

        <div class="row">
          <div class="col-md-4">
            <div class="footer-info left">
              <img src="<?= base_url('assets/images/bapak_mamah_nyangkokot.png') ?>" alt="Foto Bapak Mamah" class="me-3" width="30%">
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
              <img src="<?= base_url('assets/images/bapak_mamah_johar.png') ?>" alt="Foto Bapak Mamah" class="ms-3" width="30%">
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

<script>
  // let hasPlayed = false;

  // function handleFirstPlay(event) {
  //   if (!hasPlayed) {
  //     hasPlayed = true;

  //     const vid = event.target;

  //     vid.onplay = null;

  //     // Start whatever you need to do after first playback has started
  //   }
  // }
  document.getElementById("audio").play();
</script>