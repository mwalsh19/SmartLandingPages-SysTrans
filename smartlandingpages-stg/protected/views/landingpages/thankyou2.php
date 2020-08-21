<?php
$directory = Yii::app()->getBaseUrl(true) . '/vendor/thankyou';

Yii::app()->clientScript->registerCssFile($directory . '/assets/css/swift/bootstrap.min.css');
Yii::app()->clientScript->registerCssFile($directory . '/assets/css/flatbed/temp2.css');
Yii::app()->clientScript->registerScriptFile($directory . '/assets/js/swift/jquery.placeholder.js', CClientScript::POS_END);
Yii::app()->clientScript->registerScriptFile($directory . '/assets/js/swift/jquery.validationEngine.js', CClientScript::POS_END);
Yii::app()->clientScript->registerScriptFile($directory . '/assets/js/swift/jquery.validationEngine-en.js', CClientScript::POS_END);


$publisher = !empty($_GET['publisher']) ? $_GET['publisher'] : $publisher;
$type = !empty($_GET['type']) ? $_GET['type'] : $type;
$email = !empty($_GET['email']) ? $_GET['email'] : $email;

$slug_path = !empty($this->slug_path) ? $this->slug_path : '';
?>

<header>
    <img class="logo" src="<?php echo $directory; ?>/assets/img/swift/logo.png" />
</header>
<div id="thank">
    <div class="top">
        <div class="thank-top-left col-md-4 hidden-sm hidden-xs">
        </div>
        <div class="top-mid col-md-8 col-xs-12">
            <h1 class="light blue">Thank you for your interest in driving for Swift Transportation!</h1>
            <h2 class="bold navy"></h2>
            <div class="mid-mid">
                <hr>
                <h4 class="uppercase yellow medium"></h4>
                <p>If you are ready to go through our full application process <a href="$ats_link">click here.</a></p>
                <hr>
                <div class="hat"><img src="<?php echo $directory; ?>/assets/img/swift/hat.png" /></div>
            </div>
        </div>
    </div><!-- form -->
</div><!-- top-->
</div><!-- thank-->

<div class="container">
    <div class="footer">
        <a href="https://www.leadformix.com" title="Marketing Automation" onclick="window.open(this.href);
                return(false);">
            <script type="text/javascript">
                var pkBaseURL = (("https:" == document.location.protocol) ? "https://vlog.leadformix.com/" : "https://vlog.leadformix.com/");
                bf_action_name = '';
                bf_idsite = 8944;
                bf_url = pkBaseURL + 'bf/bf.php';
                (function () {
                    var lfh = document.createElement('script');
                    lfh.type = 'text/javascript';
                    lfh.async = true;
                    lfh.src = pkBaseURL + 'bf/lfx.js';
                    var s = document.getElementsByTagName('head')[0];
                    s.appendChild(lfh);
                })();
            </script>
            <noscript><p>Marketing Automation Platform <img src="https://vlog.leadformix.com/bf/bf.php" style="border:0" alt="Marketing Automation Tool"/></p>
            </noscript>
        </a>
        <div class="button"><a href="http://joinswift.com/landing-pages/privacy-policy-swift/" target="_blank">Terms &amp; Conditions</a></div>
    </div>
</div>

<?php
$this->renderPartial('_conversion_codes', array('publisher' => $publisher, 'type' => $type, 'email' => $email, 'slug_path' => $slug_path));
