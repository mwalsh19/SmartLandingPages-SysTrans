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
        <link rel="icon" type="image/png" href="<?php echo Yii::app()->getBaseUrl(true) ?>/favicon_swift.ico">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
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
        $user = Yii::app()->user;
        if ($user->hasFlash('status') && $user->getFlash('status') == 'rejected') {
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
