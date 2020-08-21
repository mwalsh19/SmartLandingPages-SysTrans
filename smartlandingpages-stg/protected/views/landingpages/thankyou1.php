<?php
$ClienteScript = Yii::app()->clientScript;
$directory = Yii::app()->getBaseUrl(true) . '/vendor/thankyou';
$ClienteScript->registerCssFile($directory . '/assets/css/swift/bootstrap.css');
$ClienteScript->registerCssFile($directory . '/assets/css/swift/temp1.css');

$publisher = !empty($_GET['publisher']) ? $_GET['publisher'] : $publisher;
$type = !empty($_GET['type']) ? $_GET['type'] : $type;
$email = !empty($_GET['email']) ? $_GET['email'] : $email;

$slug_path = !empty($this->slug_path) ? $this->slug_path : '';
?>

<div class="container thanks">
    <div class="row-fluid">
        <div class="span12 innerlogo"><img src="<?php echo $directory; ?>/assets/img/swift/logo-inner.png" /></div>
    </div>
    <div class="row-fluid">
        <div class="span6 lft"><img src="<?php echo $directory; ?>/assets/img/swift/thankyou.png" /></div>
        <div class="span6">
            <div class="rhtcon">
                <p>If you would like to speak to a recruiter now, please call <br /><span>844-903-1151.</span></p>
                <p>If you are ready to go through our full application process <br /><a href="https://intelliapp2.driverapponline.com/c/swiftcomp?uri_b=ia_swiftcomp_875284378  ">click here.</a></p>
                <hr />
                <p><em>If you are not ready at this time, you will be receiving an email shortly with the above information so you can apply at your convenience.</em></p>
            </div>
        </div>
    </div>
</div>

<?php
if ($slug_path === 'l/generic') {
    ?>
    <script>
        (function (i, s, o, g, r, a, m) {
            i['GoogleAnalyticsObject'] = r;
            i[r] = i[r] || function () {
                (i[r].q = i[r].q || []).push(arguments)
            }, i[r].l = 1 * new Date();
            a = s.createElement(o),
                    m = s.getElementsByTagName(o)[0];
            a.async =
                    1;
            a.src =
                    g;
            m.parentNode.insertBefore(
                    a,
                    m)
        })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');

        ga('create', 'UA-68200113-8', 'auto');
        ga('send', 'pageview');

    </script>

    <?php
}
?>

<?php
$this->renderPartial('_conversion_codes', array('publisher' => $publisher, 'type' => $type, 'email' => $email, 'slug_path' => $slug_path));

