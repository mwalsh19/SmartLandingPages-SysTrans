
<?php
$baseUrl = Yii::app()->getBaseUrl(true);
Yii::app()->clientScript->registerPackage('truckjobs');
$directory = $baseUrl . '/vendor/truck-jobs/assets';

$intelliapp_referral_code = !empty($data->intelliapp_referral_code) ? '?r=' . $data->intelliapp_referral_code
            : '';
?>

<form action="" method="post" id="crst_swift" class="crst_swift">
    <div class="container main student">
        <div class="row-fluid interchange">
            <div class="span8">
                <div class="lftcon">
                    <div class="logo">
                        <img src="<?php echo $directory ?>/img/swift/logo.png" alt="logo" />
                    </div>
                    <div class="header-submit">
                        <a href="#submit-link"><img src="<?php echo $directory ?>/img/swift/apply.png" alt="submit" /></a>
                    </div>
                    <div class="innercon">
                        <section class="hero hero-flatbed" style="background: url(<?php echo $directory ?>/img/swift/<?php echo $data->background ?>) center center no-repeat fixed">
                            <?php echo $data->content ?>
                        </section>
                        <section class="main-content">
                            <h3>Class-A CDL truck driving jobs at Swift</h3>
                            <p>When you work with Swift, you’re investing in your truck driving career with some of the best pay packages and training in the trucking industry. When you join team Swift everything changes. Best in class training, great incentives, modern equipment and a place to truly grow. Don’t wait.</p>
                            <ul class="benefits">
                                <li><span>Great Miles = Great Pay</span></li>
                                <li><span>Late-Model Equipment Available</span></li>
                                <li><span>Dedicated Opportunities</span></li>
                                <li><span>Great Career Path</span></li>
                                <li><span>Paid Vacation</span></li>
                                <li><span>Excellent Benefits</span></li>
                            </ul>
                            <div class="call-now"><h2>If you're ready to start driving for the best, call now to speak to a recruiter. <span class="phone-number"><?php echo $data->phone_number; ?></span></h2></div>
                        </section>
                    </div>
                </div>
            </div>
            <!--End left Content-->
            <div id="submit-link" class="span4 frm">
                <div class="frmcon" id="important-number">
                    <h2>Ready to Apply?</h2>
                    <p>
                        Just fill out our short application
                        below and a recruiter will call you.
                        It's that simple.
                    </p>
                    <div class="row-fluid">
                        <input class="span12 validate[required]" id="first_name" name="first_name" type="text" placeholder="First Name">
                        <input class="span12 validate[required]" name="last_name" type="text" placeholder="Last Name">
                        <input class="span12 validate[required]" name="phone" type="text" placeholder="Phone numbers">
                        <input class="span12 validate[required,custom[email]]" name="email" type="text" placeholder="Email Address">
                        <input class="span12 validate[required]" id="street_address" name="street_address" type="text" placeholder="Street Address" />
                        <input class="span12 validate[required]" name="city" type="text" placeholder="City">

                        <select class="span12 validate[required]" name="state" id="state">
                            <option value="" selected="selected">Select a state</option>
                            <option value="AL" >Alabama</option><option value="AZ" >Arizona</option><option value="AR" >Arkansas</option><option value="CA" >California</option><option value="CO" >Colorado</option><option value="CT" >Connecticut</option><option value="DE" >Delaware</option><option value="DC" >District Of Columbia</option><option value="FL" >Florida</option><option value="GA" >Georgia</option><option value="ID" >Idaho</option><option value="IL" >Illinois</option><option value="IN" >Indiana</option><option value="IA" >Iowa</option><option value="KS" >Kansas</option><option value="KY" >Kentucky</option><option value="LA" >Louisiana</option><option value="MA" >Massachusetts</option><option value="MI" >Michigan</option><option value="MN" >Minnesota</option><option value="MS" >Mississippi</option><option value="MO" >Missouri</option><option value="MT" >Montana</option><option value="NE" >Nebraska</option><option value="NV" >Nevada</option><option value="NH" >New Hampshire</option><option value="NJ" >New Jersey</option><option value="NM" >New Mexico</option><option value="NY" >New York</option><option value="NC" >North Carolina</option><option value="OH" >Ohio</option><option value="OK" >Oklahoma</option><option value="OR" >Oregon</option><option value="PA" >Pennsylvania</option><option value="RI" >Rhode Island</option><option value="SC" >South Carolina</option><option value="TN" >Tennessee</option><option value="TX" >Texas</option><option value="UT" >Utah</option><option value="VA" >Virginia</option><option value="WA" >Washington</option><option value="WI" >Wisconsin</option><option value="WY" >Wyoming</option>
                        </select>

                        <input class="span12 validate[required]" name="zip_code" type="text" placeholder="Zip code">
                        <input class="span12 validate[required]" name="moving_violation" type="text" placeholder="List any Moving Violations">
                        <select class="span12 state validate[required]" name="cdl_valid" id="cdl_valid">
                            <option value="" selected="selected">Do you have your Class A CDL?</option>
                            <option value="Yes" >Yes</option><option value="No" >No</option>
                        </select>
                        <button  id="submit" name="submit" type="submit" class="span12 btnsubmit visible-phone">APPLY NOW</button>
                        <input type="hidden" name="form_type" value="T1">
                        <input type="hidden" name="job_target" value="<?php echo isset($_GET['id'])
                                        ? $_GET['id'] : ''
                            ?>">
                    </div>
                </div>
                <div class="buttons visible-desktop visible-tablet">
                    <button id="submit" name="submit" type="submit"><img src="<?php echo $directory ?>/img/swift/submit.png"></button>
                </div>

            </div>
        </div>
    </div>
</form>
<!-- Footer
    ================================================== -->
<div class="container">
    <div class="footer">
        <p>*By completing this form, I agree to receive correspondence from Swift Transportation. This includes receiving autodialed telephone calls, prerecorded messages, text messages and emails about trucking job opportunities at the contact number and address I have provided above. I understand that I am not required to provide my consent as a condition of submitting my application.</p>
        <ul>
            <li><a target="blank" href="<?php echo Yii::app()->createUrl('landing-pages/privacy-policy'); ?>">Privacy Policy</a><span>|</span></li>
            <li><a target="blank" href="http://swifttrans.com/careers/for-drivers">swifttrans.com</a><span>|</span></li>
            <li><a target="blank" href="https://intelliapp2.driverapponline.com/c/swiftcomp<?php echo $intelliapp_referral_code; ?>">Online Application</a></li>
        </ul>
    </div>
</div>

<?php
if ($slug === 'l/generic') {
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

        ga('create', 'UA-68200113-7', 'auto');
        ga('send', 'pageview');

    </script>

    <?php
}
?>

<?php
if ($publisher == 'steelhousepilot') {
    //add tracking code
    $this->renderPartial('partials/_steelhousepilot_lp');
}
?>

<?php
Yii::app()->clientScript->registerScript('init', "
     $('#crst_swift').validationEngine('attach');
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
