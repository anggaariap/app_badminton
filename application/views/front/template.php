<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Hamdalah Sport</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600;700&family=Montserrat:wght@400;500;600;700&display=swap" rel="stylesheet">  

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="<?= base_url() ?>public/front/lib/animate/animate.min.css" rel="stylesheet">
    <link href="<?= base_url() ?>public/front/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="<?= base_url() ?>public/front/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="<?= base_url() ?>public/front/css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="<?= base_url() ?>public/front/css/style.css" rel="stylesheet">
</head>

<body>
    <div class="container-xxl bg-white p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->

        <!-- Header Start -->
        <div class="container-fluid bg-dark px-0">
            <div class="row gx-0">
                <div class="col-lg-3 bg-dark d-none d-lg-block">
                    <a href="<?= base_url() ?>" class="navbar-brand w-100 h-100 m-0 p-0 d-flex align-items-center justify-content-center">
                        <img src="<?= base_url() ?>public/image/logobadminton_polos.png" alt="logo.png" width="70px;" style="rounded: 20%;">
                        Hamdalah Sport
                    </a>
                </div>
                <div class="col-lg-9 text-center">
                    <nav class="navbar navbar-expand-lg bg-dark navbar-dark p-3 p-lg-0">
                        <a href="<?= base_url() ?>" class="navbar-brand d-block d-lg-none">
                            <h3 class="m-0 text-primary text-uppercase">Hamdalah Sport</h3>
                        </a>
                        <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                            <div class="navbar-nav mr-auto py-0">
                                <a href="<?= base_url() ?>" class="nav-item nav-link">Home</a>
                                <!-- <a href="<?= base_url() ?>booking" class="nav-item nav-link">Booking Lapangan</a> -->
                                <a href="<?= base_url() ?>alur" class="nav-item nav-link">Alur Pemesanan</a>
                                <a href="<?= base_url() ?>contact" class="nav-item nav-link">Contact Us</a>
                                <?php if($this->session->userdata('level') !== null){ ?>
                                    <a href="<?= base_url() ?>riwayat" class="nav-item nav-link">History Pemesanan</a>
                                <?php } ?>
                            </div>
                            <?php if($this->session->userdata('level') == null){ ?>
                                <a href="<?= base_url()?>login" class="btn btn-primary rounded-0 py-4 px-md-5 d-none d-lg-block">Login<i class="fa fa-arrow-right ms-3"></i></a>
                            <?php }else{ ?>
                                <a href="<?= base_url()?>login/logout" class="btn btn-primary rounded-0 py-4 px-md-5 d-none d-lg-block">Logout<i class="fa fa-plus-circle ms-3"></i></a>
                            <?php } ?>
                            
                        </div>
                    </nav>
                </div>
            </div>
        </div>
        <!-- Header End -->

        <?php echo $contents; ?>


        <!-- Team Start -->
        <div class="container-xxl py-5">
            <div class="container">
            </div>
        </div>
        <!-- Team End -->

        

        <!-- Footer Start -->
        <!-- <div class="container-fluid bg-dark text-light footer wow fadeIn" data-wow-delay="0.1s">
            <div class="container">
                <div class="footer">
                    <p>Hamdalah Sport</p>
                <div class="row">
                    <div class="col-md-6">
                        <h4>Alamat Kami</h4>
                        <p>Jl. Contoh No. 123<br>Kota Contoh<br>Negara Contoh</p>
                    </div>
                    <div class="col-md-6">
                        <h4>Nomor Telepon</h4>
                        <?php
                        // Nomor telepon Anda
                        $phone_number = "+1234567890"; // Ganti dengan nomor telepon Anda
                        ?>
                        <p><?php echo $phone_number; ?></p>
                    </div>
                </div>
                <div class="copyright">
                    &copy; Copyright 
                    <script>document.write(new Date().getFullYear())</script> 
                    <strong><span>Hamdalah Sport</span></strong>. All Rights Reserved
                </div>
                 </div>
            </div>
        </div> -->

          <footer id="footer">

    <div class="footer-top">
      <div class="container-fluid py-5 bg-dark text-light footer wow fadeIn" data-wow-delay="0.1s">
        <div class="row">
          <div class="justify-content-between text-center">
            <p><Strong>Hamdalah Sport</Strong></p>
            <i class="fas fa-map-marker-alt"></i> Jl. Jembatan Merah, Kecomberan, Kec. Talun <br> Kabupaten Cirebon, Jawa Barat 45171</li>
                <!-- <ul class="list-unstyled">
                    <li><i class="fas fa-envelope"></i> hamdalahsport@gmail.com </li>
                    <li><i class="fas fa-phone"></i> 085864376641 </li>
                </ul> -->
            <div class="social-links mt-1">
              <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
              <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
              <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
            </div>
          </div>
        </div>
        <div class="copyright text-center">
          &copy; Copyright 
          <script>document.write(new Date().getFullYear())</script> 
          <strong><span>Hamdalah Sport</span></strong>. All Rights Reserved
        </div>
      </div>
    </div>
  </footer><!-- End Footer -->




        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="<?= base_url() ?>public/front/lib/wow/wow.min.js"></script>
    <script src="<?= base_url() ?>public/front/lib/easing/easing.min.js"></script>
    <script src="<?= base_url() ?>public/front/lib/waypoints/waypoints.min.js"></script>
    <script src="<?= base_url() ?>public/front/lib/counterup/counterup.min.js"></script>
    <script src="<?= base_url() ?>public/front/lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="<?= base_url() ?>public/front/lib/tempusdominus/js/moment.min.js"></script>
    <script src="<?= base_url() ?>public/front/lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="<?= base_url() ?>public/front/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->
    <script src="<?= base_url() ?>public/front/js/main.js"></script>
    <script>
        $("#kd_package").change(function(){ 
            var id = $(this).val();
            $.ajax({
                type: "post",
                url: "<?= base_url() ?>riwayat/getroom/"+id,
                data: "id="+ id,
                success: function(data){
                    $("#getroom").html(data);
                }
            });
        });
    </script>
</body>

</html>