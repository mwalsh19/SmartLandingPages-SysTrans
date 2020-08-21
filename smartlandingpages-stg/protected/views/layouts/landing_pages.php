<?php
$baseUrl = Yii::app()->getBaseUrl(true);
?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title><?php echo $this->getPageTitle() ?></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

        <?php
        $ClientScript = Yii::app()->clientScript;
        $ClientScript->registerPackage('template');
        $ClientScript->registerCssFile(Yii::app()->getBaseUrl(true) . '/css/site.css');
        ?>

        <?php
        if (!empty($this->slug_path) && $this->slug_path == 'experienced/facebook' && $this->formHasSend) {
            ?>
            <!-- Facebook Conversion Code for Leads - Swift - Pilot run -->
            <script>(function () {
                    var _fbq = window._fbq || (window._fbq = []);
                    if (!_fbq.loaded) {
                        var fbds = document.createElement('script');
                        fbds.async = true;
                        fbds.src = '//connect.facebook.net/en_US/fbds.js';
                        var s = document.getElementsByTagName('script')[0];
                        s.parentNode.insertBefore(fbds, s);
                        _fbq.loaded = true;
                    }
                })();
                window._fbq = window._fbq || [];
                window._fbq.push(['track', '6036336292753', {'value': '0.00', 'currency': 'USD'}]);
            </script>
        <noscript><img height="1" width="1" alt="" style="display:none" src="https://www.facebook.com/tr?ev=6036336292753&amp;cd[value]=0.00&amp;cd[currency]=USD&amp;noscript=1" /></noscript>
        <?php
    }
    ?>
</head>
<body>
    <!--[if lt IE 7]>
        <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->


    <?php
    if (!empty($this->publisher) && $this->publisher == 'americandrivernetwork') {
        ?>
        <!-- Google Tag Manager -->
        <noscript>
        <iframe src="//www.googletagmanager.com/ns.html?id=GTM-T25L83"
                height="0" width="0" style="display:none;visibility:hidden">
        </iframe></noscript>
        <script>
            (function (w, d, s, l, i) {
                w[l] = w[l] || [];
                w[l].push({'gtm.start':
                            new Date().getTime(), event: 'gtm.js'});
                var f = d.getElementsByTagName(s)[0],
                        j = d.createElement(s), dl = l != 'dataLayer' ? '&l=' + l : '';
                j.async = true;
                j.src =
                        '//www.googletagmanager.com/gtm.js?id=' + i + dl;
                f.parentNode.insertBefore(j, f);
            })(window, document, 'script', 'dataLayer', 'GTM-T25L83');
        </script>
        <!-- End Google Tag Manager -->
        <?php
    }
    ?>

    <!--Show content-->

    <?php
    //$user = Yii::app()->user;
    $somevar = false;
    //if ($user->hasFlash('status') && $user->getFlash('status') == 'rejected') {
    if ($somevar) {
        $ClientScript->registerScript('closeAlert', "
            $('.alertDialog .close').on('click', function(event){
                event.preventDefault();
                    $(this).parent().fadeOut();
                });
            ");
        ?>
        <div class="alertDialog">
            <button type="button" class="close"><span>×</span></button>
            <h4>Oh snap! You got an error!</h4>
            <p>Your application has rejected.</p>
        </div>
        <?php
    }
    ?>
    <?php echo $content; ?>
</body>
</html>
