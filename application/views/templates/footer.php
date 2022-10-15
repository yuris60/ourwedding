<!-- Modernizr JS -->
<script src="<?= base_url('assets/') ?>js/modernizr-3.6.0.min.js"></script>

<!-- Libs -->
<script src="<?= base_url('assets/') ?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script> -->

<!-- <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script> -->
<script src="<?= base_url('assets/') ?>js/jquery-ui.min.js"></script>
<script src="<?= base_url('assets/') ?>js/jquery-migrate-3.3.2.min.js"></script>
<script src="<?= base_url('assets/') ?>js/jquery-3.6.0.min.js"></script>
<script src="<?= base_url('assets/') ?>js/jquery.placeholder.min.js"></script>
<script src="<?= base_url('assets/') ?>js/ismobile.js"></script>
<script src="<?= base_url('assets/') ?>js/retina.min.js"></script>
<script src="<?= base_url('assets/') ?>js/waypoints.min.js"></script>
<script src="<?= base_url('assets/') ?>js/waypoints-sticky.min.js"></script>
<script src="<?= base_url('assets/') ?>js/owl.carousel.min.js"></script>
<script src="<?= base_url('assets/') ?>js/lightbox.min.js"></script>


<script>
  $('.owl-carousel').owlCarousel({
    loop: true,
    margin: 10,
    nav: true,
    responsive: {
      0: {
        items: 1
      },
      600: {
        items: 1
      },
      1000: {
        items: 1
      }
    }
  })
</script>

<!-- Vendor -->
<script src="<?= base_url('assets/') ?>vendor/aos/aos.js"></script>
<script src="<?= base_url('assets/') ?>vendor/sweetalert2/sweetalert2.all.min.js"></script>
<script src="<?= base_url('assets/') ?>vendor/fontawesome/all.min.js"></script>

<!-- Nicescroll script to handle gallery section touch slide -->
<script src="<?= base_url('assets/') ?>js/jquery.nicescroll.js"></script>

<!-- Hero Background Slideshow Script -->
<script src="<?= base_url('assets/') ?>js/jquery.zoomslider.js"></script>

<!-- Template Scripts -->
<script src="<?= base_url('assets/') ?>js/variables.js"></script>
<script src="<?= base_url('assets/') ?>js/scripts.js"></script>

<!-- <script src="<?= base_url('assets/') ?>js/template.settings.js"></script> -->

<!-- Global site tag (gtag.js) - Google Analytics -->
<!-- <script async src="https://www.googletagmanager.com/gtag/js?id=G-7JZLG63NQZ"></script>
<script>
  window.dataLayer = window.dataLayer || [];

  function gtag() {
    dataLayer.push(arguments);
  }
  gtag('js', new Date());

  gtag('config', 'G-7JZLG63NQZ');
</script> -->

<script type="text/javascript">
  function CopyToClipboard(containerid) {
    if (document.selection) {
      var range = document.body.createTextRange();
      range.moveToElementText(document.getElementById(containerid));
      range.select().createTextRange();
      document.execCommand("copy");
    } else if (window.getSelection) {
      var range = document.createRange();
      range.selectNode(document.getElementById(containerid));
      window.getSelection().addRange(range);
      document.execCommand("copy");
      // alert("text copied, copy in the text-area")
      Swal.fire({
        icon: 'success',
        title: 'Selamat!',
        text: 'Nomor Rekening Berhasil Disalin!',
        showConfirmButton: false,
        timer: 1500,
        showClass: {
          popup: 'animate__animated animate__fadeInDown'
        },
        hideClass: {
          popup: 'animate__animated animate__fadeOutUp'
        }
      })
    }
  }
</script>

<script>
  AOS.init();
</script>
</body>

</html>