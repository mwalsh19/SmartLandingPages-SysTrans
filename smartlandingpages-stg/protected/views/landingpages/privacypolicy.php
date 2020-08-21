<?php
$baseurl = Yii::app()->getBaseUrl() . '/vendor/';
Yii::app()->clientScript->registerCssFile($baseurl . '/bootstrap/bootstrap.2.css');
Yii::app()->clientScript->registerCssFile($baseurl . '/template/validationEngine.jquery');
Yii::app()->clientScript->registerCssFile($baseurl . '/privacypolicy/assets/css/swift/style.css');
?>
<div class="container main">
    <img class="car visible-desktop" src="<?php echo $baseurl ?>/privacypolicy/assets/img/swift/car.png" />
    <div class="row-fluid interchange">
        <div class="span12">
            <div class="lftcon privacy">
                <div class="logo">
                    <img src="<?php echo $baseurl ?>/privacypolicy/assets/img/swift/logo.png" />
                </div>
                <h2 class="titletop">Privacy Policy</h2>

                <p><strong>What information do we collect?</strong></p>

                <p>We collect information from you when you register on our site or fill out a form.</p>

                <p>When ordering or registering on our site, as appropriate, you may be asked to enter your: name, e-mail address or phone number. You may, however, visit our site anonymously.</p>



                <p><strong>What do we use your information for?</strong></p>

                <p>Any of the information we collect from you may be used to process candidate application information.</p>

                <p>Your information, whether public or private, will not be sold, exchanged, transferred, or given to any other company for any reason whatsoever.</p>

                <p>The email address you provide may be used to send you information, respond to inquiries, and/or other requests or questions.</p>

                <p><strong>How do we protect your information?</strong></p>

                <p>We implement a variety of security measures to maintain the safety of your personal information when you enter, submit, or access your personal information.</p>

                <p>We offer the use of a secure server. All supplied sensitive/credit information is transmitted via Secure Socket Layer (SSL) technology and then encrypted into our Database to be only accessed by those authorized with special access rights to our systems, and are required to keep the information confidential.</p>

                <p>You can ask to be removed from our list and stop receiving job information at anytime by emailing <a href="mailto:marketing@swifttrans.com">marketing@swifttrans.com</a></p>

<!-- 
                <p><strong>Do we use cookies?</strong></p>

                <p>We do not use cookies.</p>
 -->

                <p><strong>Do we disclose any information to outside parties?</strong></p>

                <p>We do not sell, trade, or otherwise transfer to outside parties your personally identifiable information. This does not include trusted third parties who assist us in operating our website, conducting our business, or servicing you, so long as those parties agree to keep this information confidential. We may also release your information when we believe release is appropriate to comply with the law, enforce our site policies, or protect ours or others rights, property, or safety. However, non-personally identifiable visitor information may be provided to other parties for marketing, advertising, or other uses.</p>

                <p>Childrens Online Privacy Protection Act Compliance</p>



                <p>We are in compliance with the requirements of COPPA (Childrens Online Privacy Protection Act), we do not collect any information from anyone under 13 years of age. Our website, products and services are all directed to people who are at least 13 years old or older.</p>

                <p>Changes to our Privacy Policy</p>

                <p>If we decide to change our privacy policy, we will post those changes on this page.</p>



                <h2 class="titletop">Contacting Us</h2>



                <p>If there are any questions regarding this privacy policy you may contact us using the information below.</p>

                <p>2200 S75th Ave<br />
                Phoenix, AZ 85043<br />
                800-800-2200<br />
                </p>
            </div>
        </div>
        <!--End left Content-->
    </div>
</div>
<!-- Footer ================================================== -->
<div class="container">
    <div class="footer">
        <ul>
            <li><a target="blank" href="<?php echo Yii::app()->createUrl('landing-pages/privacy-policy'); ?>">Privacy Policy</a><span>|</span></li>
            <li><a target="blank" href="http://swifttrans.com/careers/for-drivers">swifttrans.com</a><span></span></li>
        </ul>
    </div>
</div>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-68200113-1', 'auto');
  ga('send', 'pageview');

</script>
<?php
Yii::app()->clientScript->registerScript('init', "
    jQuery('#crst_swift').validationEngine('attach');
    $('input').placeholder();
        $(window).resize(function () {
            var _El = $('#important-number');
            if ($(window).width() < 768) {
                $('.listitem').prepend(_El.parent());
            } else {
                //alert('hi')
                $('.interchange').append(_El.parent());
            }
        }).trigger('resize');
");
