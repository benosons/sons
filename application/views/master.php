<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <!-- Meta, title, CSS, favicons, etc. -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Language" content="pt-br">

        <!-- Favicons -->
        <link rel="shortcut icon" href="assets/img/photos/developer/favicon.png">
        <link rel="apple-touch-icon" href="assets/img/favicon_60x60.png">
        <link rel="apple-touch-icon" sizes="76x76" href="assets/img/favicon_76x76.png">
        <link rel="apple-touch-icon" sizes="120x120" href="assets/img/favicon_120x120.png">
        <link rel="apple-touch-icon" sizes="152x152" href="assets/img/favicon_152x152.png">
  
        <!-- TITLE -->
        <title><?PHP $template->print_title(); ?></title>

        <!-- DEFINE BASE PATH IN JS -->
        <script>
            var SiteUrl = "<?php echo site_url(); ?>";
            var BaseUrl = "<?php echo base_url(); ?>";
        </script>
        
        <!-- PRINT CSS - CONFIG IN config/assets.php -->
        <?PHP $template->print_css(); ?>

        <style>
            
            /* Create montserrat font */
            @font-face{
                font-family: 'montserrat';
                src: url('<?php echo site_url('assets/fonts/montserrat/Montserrat-Regular.otf') ?>') format("opentype");
            }
            
            @media (max-width: 767px) {
                .points-container{
                display: none;
                }
            }
        </style>

        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=G-5QVS08634C"></script>
        <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'G-5QVS08634C');
        </script>

        <script>
            (function (i, s, o, g, r, a, m) {
                window['GoogleAnalyticsObject'] = 'ga';
                window['ga'] = window['ga'] || function () {
                    (window['ga'].q = window['ga'].q || []).push(arguments)
                }, window['ga'].l = 1 * new Date();
                a = document.createElement('script'),
                m = document.getElementsByTagName('script')[0];
                a.async = 1;
                a.src = '//www.google-analytics.com/analytics.js';
                m.parentNode.insertBefore(a, m)
            })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');

            ga('create', 'G-5QVS08634C', 'auto');
            ga('send', 'pageview');
        </script>

    </head>
      <body class="navigation-panel page-scrolling dark-scheme">
        
        <!-- HEADER LOAD IN views/components/header.php -->
        <?= $template->print_component('header') ?>            

        <!-- CONTENT LOAD IN views/pages/[page].php -->
        <div id="content">
            <?php $template->print_page(); ?>
        </div>

        <!-- FOOTER LOAD IN views/components/footer.php -->
        <footer>
          <?= $template->print_component('footer'); ?>
        </footer>
        
        <!-- PRINT JS - CONFIG IN config/assets.php -->
        <!-- JS Plugins -->
        <script src="assets/plugins/jquery/dist/jquery.min.js"></script>
        <script src="assets/plugins/jquery.appear/jquery.appear.js"></script>
        <script src="assets/plugins/jquery.scrollto/jquery.scrollTo.min.js"></script>
        <script src="assets/plugins/jquery.localscroll/jquery.localScroll.min.js"></script>
        <script src="assets/plugins/jquery-validation/dist/jquery.validate.min.js"></script>
        <script defer src="assets/plugins/tether/dist/js/tether.min.js"></script>
        <script defer src="assets/plugins/bootstrap/dist/js/bootstrap.min.js"></script>

        <?php $template->print_js(); ?>
        

        <!-- ALERTS LOAD IN views/components/alerts.php -->  
        <!-- IF HAS FLASHDATA ON SESSION WITH NAMES: 'error', 'success', 'info' or 'loading' PRINT THE MSG IN ALERT CREATED USING PNotify.js -->
        <?php $template->print_component('alerts'); ?>

    </body>
</html>