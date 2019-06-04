<?php
Yii::app()->clientScript->registerCssFile('http://fast.fonts.net/cssapi/fdbec8c1-bb62-4a79-9b2e-74758d1444a9.css');
$baseUrl = Yii::app()->getBaseUrl(true) . "/";
Yii::app()->clientScript->registerCssFile($baseUrl . "vendor/thankyou2/css/styles.css");

$user = Yii::app()->user;
$phone = !empty($_GET['phone']) ? $_GET['phone'] : $user->getFlash('phone');
$intelliapp_referral_code = !empty($_GET['intelliapp_referral_code']) ? $_GET['intelliapp_referral_code']
            : $user->getFlash('intelliapp_referral_code');
$first_name = !empty($_GET['first_name']) ? $_GET['first_name'] : ucfirst($user->getFlash('first_name'));

$publisher = !empty($_GET['publisher']) ? $_GET['publisher'] : $publisher;
$type = !empty($_GET['type']) ? $_GET['type'] : $type;
$data_type = !empty($_GET['data_type']) ? $_GET['data_type'] : $data_type;
$ga_tp = !empty($_GET['ga_tp']) ? $_GET['ga_tp'] : $ga_tp;
$email = !empty($_GET['email']) ? $_GET['email'] : $email;

$slug_path = !empty($this->slug_path) ? $this->slug_path : '';
?>
<?php
if (strpos($slug, 'swiftrefrigerated') !== false) {
    $intellaappPath = 'centralref';
} else {
    $intellaappPath = 'swiftcomp';
}
?>
<div class="main" id="swift-thankyou">
  <div class="main-wrap">
    <div class="heading-separator"></div>
    <div class="header">
      <div class="header-wrap">
        <div class="logo" <?php echo ($data_type == 'REFRI') ? "style='background:url({$baseUrl}/vendor/recent_student/images/SwiftRefrigerated_logo_white.png) no-repeat;'"
            : "" ?>></div>
        <div class="checked-icon"></div>
        <div class="header-copy">
          <h1>Thanks <?php echo $first_name; ?>!</h1>
          <p>A recruiter will be contacting you within 24-48 hours.<br />
            If you would like to complete our full online application...</p>
          <a href="https://intelliapp2.driverapponline.com/c/<?php echo $intellaappPath; ?>?r=<?php echo $intelliapp_referral_code; ?>" class="btn-click-here" target="_blank">click here</a>
        </div>
      </div>
    </div>
    <div class="middle-container">
      <div class="middle-wrap">
        <h4>CALL NOW TO SPEAK WITH A RECRUITER.</h4>
        <h2><?php echo $phone; ?></h2>
        <p>If you are not ready at this time, you will be receiving an email shortly <br />
          with the above information so you can apply at your convenience.</p>
      </div>
    </div>

    <div class="footer-container">
      <div class="footer-wrap">
        <div class="top-copy">
          <a href="<?php echo Yii::app()->createUrl('landing-pages/privacy-policy'); ?>" target="_blank">Privacy Policy</a> |

          <a href="https://intelliapp2.driverapponline.com/c/<?php echo $intellaappPath; ?>?r=<?php echo $intelliapp_referral_code; ?>" target="_blank">Full Online Application</a>
        </div>
        <div class="footer-figure clearfix">
          <img src="<?php echo $baseUrl ?>vendor/thankyou2/images/footer-left.jpg" class="left">
          <img src="<?php echo $baseUrl ?>vendor/thankyou2/images/footer-center.jpg" class="center">
          <img src="<?php echo $baseUrl ?>vendor/thankyou2/images/footer-right.jpg" class="right">
        </div>
        <div class="bottom-copy">
          Swift Transportation Corporation 2200 S 75th Ave, Phoenix, AZ 85043
        </div>
      </div>
    </div>
  </div>
</div>

<?php
/* THIS GOOGLE ANALYTICS CODE IS ONLY FOR SPECIAL OFFERS */
if ($data_type == 'SO' && strlen($ga_tp) > 0 && !isset($_GET['no-track'])) {
    ?>
    <script> (function (i, s, o, g, r, a, m) {
            i['GoogleAnalyticsObject'] = r;
            i[r] = i[r] || function () {
                (i[r].q = i[r].q || []).push(arguments)
            }, i[r].l = 1 * new Date();
            a = s.createElement(o), m = s.getElementsByTagName(o)[0];
            a.async = 1;
            a.src = g;
            m.parentNode.insertBefore(a, m)
        })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');
        ga('create', '<?php echo $ga_tp; ?>', 'auto');
        ga('send', 'pageview');</script>
    <?php
}
?>
<?php
$this->renderPartial('_conversion_codes', array('publisher' => $publisher, 'type' => $type, 'email' => $email,
    'slug_path' => $slug_path));

$this->renderPartial('_refrigerated_ga', array('slug' => $slug_path, 'isThankyou' => true));

$this->renderPartial('_recruitment_ga', array('slug' => $slug_path, 'isThankyou' => true, 'data_type' => $data_type));

$this->renderPartial('_refrigerated_conversion_codes', array('slug' => $slug_path));
