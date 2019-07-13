<script>
    window.history.replaceState({}, '', document.location.href + '/thankyou/');
</script>


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
$template_type = $user->getFlash('template_type');
$intellaappPath = 'tsystem';
?>

<?php
    Yii::app()->clientScript->registerPackage('systrans');
    $main_directory = Yii::app()->getBaseUrl(true) . '/vendor/systrans';
    
    switch ($template_type) {
        case 'ST1':
        case 'ST2':
        case 'STTeam':
            $name = 'st';
            $company_symbol = 'System Transport';
            $company = 'System Transport';
            $primary_color = "#d71e26";
            $rgba_secondary_full = "rgb(33, 38, 52, 1)";
            $rgba_secondary = "rgb(33, 38, 52, 0.8)";
            $overlay_secondary = "rgb(33, 38, 52, .9)";
            $invest_section_color = '#212634';
            $invest_section_inner = '#161924';
            $footer_color = '#1d1d1d';
            $website_name = 'systemtrans.com';
            $privacy_url = 'https://systemtrans.com/privacy-policy/';
            $website_url = 'https://systemtrans.com';
            $fb_url = 'https://www.facebook.com/SystemTransport/';
            $ig_url = 'https://www.instagram.com/system_transport/';
            $assets = Yii::app()->getBaseUrl(true) . '/vendor/systrans/systrans/images';
            break;
        case 'JJW1':
            $name = 'jjw';
            $company_symbol = 'JJW';
            $company = 'James J. Williams';
            $primary_color = "#f8e084";
            $rgba_secondary_full = "rgba(0, 27, 21, 1)";
            $rgba_secondary = "rgba(0, 27, 21, .75)";
            $overlay_secondary = "rgba(0, 27, 21, .9)";
            $invest_section_color = '#005844';
            $invest_section_inner = '#004c3b';
            $footer_color = '#252525';
            $website_name = 'jjwilliams.com';
            $website_url = 'https://jjwilliams.com';
            $privacy_url = 'https://jjwilliams.com/privacy-policy/';
            $fb_url = 'https://www.facebook.com/JamesJWilliamsTankers';
            $ig_url = 'https://www.instagram.com/james.j.williams/';
            $assets = Yii::app()->getBaseUrl(true) . '/vendor/systrans/jjw/images';
            break;
        case 'TWT1':
        case 'TWT2':
        case 'TWT3':
            $name = 'twt';
            $company_symbol = 'TWT';
            $company = 'TWT Refrigerated Service Transport';
            $primary_color = "#ec9f23";
            $rgba_secondary_full = "rgba(0, 41, 33, 1)";
            $rgba_secondary = "rgba(0, 41, 33, .75)";
            $overlay_secondary = "rgba(0, 41, 33, .9)";
            $invest_section_color = '#01a787';
            $invest_section_inner = '#00987b';
            $footer_color = '#1d1d1d';
            $website_name = 'twtrans.com';
            $website_url = 'https://twtrans.com';
            $privacy_url = 'https://twtrans.com/privacy-policy/';
            $fb_url = 'https://www.facebook.com/TWTRefrigerated';
            $ig_url = 'https://www.instagram.com/twt_refrigerated/';
            $assets = Yii::app()->getBaseUrl(true) . '/vendor/systrans/twt/images';
            break;
        default:
            $name = 'st';
            $primary_color = "#d71e26";
            $assets = Yii::app()->getBaseUrl(true) . '/vendor/systrans/twt/images';
            break;
    }
    ?>
<link rel="icon" type="image/png" href="<?php echo $assets . '/' . $name ?>-favicon.ico">
<style>
  .btn-click-here {
    background: <?php echo $primary_color ?>;
  }
  .header {
    background: <?php echo 'url(' . $assets . '/' . $name . '-thankyou-hero-gfx.jpg) no-repeat bottom'; ?>;
    background-size: cover;
  }
  .sub-heading {
    background: <?php echo $rgba_secondary ?>;
  }
  #applyNowBtn {
    background: <?php echo $primary_color ?>;
  }
</style>
<div class="main" id="swift-thankyou">
  <div class="main-wrap">
    <!-- header -->
    <div id="sub-heading" class="sub-heading">
            <div class="sub-heading-wrap clearfix">
                <div class="logo" style="background: url(<?php echo $assets; ?>/<?php echo $name; ?>-logo.png) no-repeat"></div>
                <div class="sub-heading-phone">
                    <span>Call now to speak with a recruiter</span>
                    <h1 style="color: <?php echo $primary_color ?>"><?php echo $phone ?></h1>
                </div>
            </div>
    </div>

    <div class="header">
      <div class="header-wrap">
        <div class="checked-icon"></div>
        <div class="header-copy">
          <h1>Thanks <?php echo $first_name; ?>!</h1>
          <p>A recruiter will be contacting you soon.<br />
            Click below if you would like to complete our full online application.</p>
          <a target="_blank" href="https://intelliapp.driverapponline.com/c/<?php echo $intellaappPath; ?>?r=<?php echo $intelliapp_referral_code; ?>" id="applyNowBtn" class="form-control-btn btn">Apply Now</a>
          </a>
        </div>
      </div>
    </div>
    <div class="middle-container no-background-color">
      <div class="middle-wrap">
        <h4>Call now to speak to a recruiter</h4>
        <div class="sub-heading-phone center">
            <h1 style="color: <?php echo $primary_color ?>"><?php echo $phone ?></h1>
        </div>
        <p>If you are not ready at this time, you will be receiving an email shortly <br />
          with the above information so you can apply at your convenience.</p>
      </div>
    </div>
     <div class="middle-container">
      <div class="middle-wrap">
        <h2 class="heading">JOIN OUR COMMUNITY!</h2>
        <p>Join our fast-growing community on your favorite social networks for news, tips, photos and a place to share your experiences.
         Or check us out to see what it's like to be a part of the <?php echo $company; ?> family!</p>
         <div class="social">
          <a href="<?php echo $fb_url ?>" target="_blank"><img src="<?php echo $assets; ?>/fb-icon-<?php echo $name; ?>.png" alt="facebook" /></a>
          <a href="<?php echo $ig_url ?>" target="_blank"><img src="<?php echo $assets; ?>/ig-icon-<?php echo $name; ?>.png" alt="instagram" /></a>
         </div> 
      </div>
    </div>

    <div class="footer-container">
            <div class="footer-wrap">
                <div class="phone-number-footer">
                    <h4>Call now to speak with a recruiter.</h4>
                    <h3 style="color: <?php echo $primary_color ?>">
                        <?php echo $phone ?>
                    </h3>
                </div>
                <div class="terms">
                    <p>
                        *BY COMPLETING THIS FORM, I AGREE TO RECEIVE CORRESPONDENCE FROM <?php echo $company; ?>. THIS INCLUDES RECEIVING TELEPHONE CALLS, PRERECORDED MESSAGES, TEXT MESSAGES AND EMAILS ABOUT TRUCKING JOB OPPORTUNITIES AT THE CONTACT NUMBER AND ADDRESS I HAVE PROVIDED ABOVE. I UNDERSTAND THAT I AM NOT REQUIRED TO PROVIDE MY CONSENT AS A CONDITION OF SUBMITTING MY APPLICATION.
                    </p>
                    <ul>
                        <li><a href="<?php echo $privacy_url; ?>" target="_blank">Privacy Policy</a><span>|</span></li>
                        <li><a target="blank" href="<?php echo $website_url ?>"><?php echo $website_name ?></a><span>|</span></li>
                        <li><a href="https://intelliapp.driverapponline.com/c/<?php echo $intellaappPath; ?>?r=<?php echo $intelliapp_referral_code; ?>" target="_blank">Online Application</a></li>
                    </ul>
                </div>
            </div>
        </div>
  </div>
</div>

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
$this->renderPartial('_conversion_codes', array('publisher' => $publisher, 'type' => $type, 'email' => $email,
    'slug_path' => $slug_path));

$this->renderPartial('_refrigerated_ga', array('slug' => $slug_path, 'isThankyou' => true));

$this->renderPartial('_recruitment_ga', array('slug' => $slug_path, 'isThankyou' => true, 'data_type' => $data_type));

$this->renderPartial('_refrigerated_conversion_codes', array('slug' => $slug_path));
