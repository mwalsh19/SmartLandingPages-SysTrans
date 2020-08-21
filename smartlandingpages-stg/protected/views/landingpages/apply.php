
<?php
$indeed_url = Yii::app()->getBaseUrl(true) . Yii::app()->request->getUrl();
Yii::app()->clientScript->registerPackage('apply');
$directory = Yii::app()->getBaseUrl(true) . '/vendor/apply';
$xy = explode('x', $data->image_position);
$x = $xy[0];
$y = $xy[1];

$class = 'exp-recent';
switch ($data->image) {
    case 'man2.png':
        $class = 'student';
        break;
}

$intelliapp_referral_code = !empty($data->intelliapp_referral_code) ? '?r=' . $data->intelliapp_referral_code : '';
?>
<form action="" method="post" id="crst_swift" class="crst_swift">
    <div class="container main <?php echo $class ?>">
        <img class="pic" src="<?php echo $directory . '/assets/img/swift/' . $data->image; ?>" alt="pic" style="top: <?php echo $y ?>px; left: <?php echo $x ?>px; "/>
        <img class="car visible-desktop" src="<?php echo $directory ?>/assets/img/swift/car.png" alt="car" />
        <div class="row-fluid interchange">
            <div class="span8">
                <div class="lftcon">
                    <div class="logo">
                        <img src="<?php echo $directory ?>/assets/img/swift/logo.png" alt="logo" />
                    </div>
                    <div class="title visible-desktop">
                        <h1 class="swift_header"><span>the very best</span><br>
                            choose swift</h1>
                        <!--img src="<?php echo $directory ?>/assets/img/swift/title.png" alt="title" /-->
                    </div>
                    <div class="title visible-phone">
                        <img src="<?php echo $directory ?>/assets/img/swift/titlemobile.png" alt="title" />
                    </div>
                    <div class="innercon">

                        <?php echo $data->description_html; ?>

                        <div class="brownbox visible-desktop"><img alt="" src="<?php echo $directory ?>/assets/img/swift/diamond.png" />
                            <?php echo $data->details_html; ?>
                        </div>

                        <div class="recruiter">
                            <?php
                            if (empty($data->phone_number_1) && empty($data->phone_number_2)) {
                                ?>
                                <div class="title visible-desktop">
                                    <h1 class="swift_header"><span>APPLY NOW!</span></h1>
                                </div>
                                <?php
                            } else {
                                ?>
                                <h2>Talk to a recruiter now</h2>
                                <?php
                            }
                            ?>
                            <ul>
                                <?php if (!empty($data->phone_number_1)) { ?>
                                    <li class="first"><span><strong>Call</strong></span>: <em><?php echo $data->phone_number_1 ?></em></li>
                                    <?php
                                }
                                if (!empty($data->phone_number_2)) {
                                    ?>
                                    <li class="last">If home is <span><strong>West</strong></span> of the Mississippi call: <em><?php echo $data->phone_number_2 ?></em></li>
                                    <?php
                                }
                                ?>

                            </ul>
                        </div>

                        <?php echo $data->secondary_description_html; ?>
                        <div class="logos">
                            <img src="<?php echo $directory ?>/assets/img/swift/bestinclass.png" />
                            <img src="<?php echo $directory ?>/assets/img/swift/diamond-driver.png" />
                        </div>
                    </div>
                </div>
            </div>
            <!--End left Content-->
            <div class="span4 frm">
                <div class="frmcon box-shadow" id="important-number">
                    <h2>Ready to Apply?</h2>

                    <p>Just fill out our short application below and a recruiter will call you. It's that simple.</p>

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

                        <p>*By submitting this form you are opting in to receive correspondence from Swift. For additional info see the Terms and Conditions below.</p>

                        <button id="submit" name="submit" type="submit" class="span12 btnsubmit visible-phone">APPLY NOW</button>
                    </div>
                </div>
                <div class="buttons visible-desktop visible-tablet">

                    <button id="submit" name="submit" type="submit"><img src="<?php echo $directory ?>/assets/img/swift/btnapply.png"></button>
                    <button type="reset" name="reset"><img src="<?php echo $directory ?>/assets/img/swift/btnreset.png" /></button>
                    <input type="hidden" name="form_type" value="T1">
                    <input type="hidden" name="job_target" value="<?php echo isset($_GET['id']) ? $_GET['id'] : '' ?>">

                </div>
                <?php
                if ($data->support_indeed) {
                    ?>
                    <div class="buttons"><span class="indeed-apply-widget"  data-indeed-apply-apiToken="21e2e8f9c8a8733e5b8a0445ccfbc713b9824e1f6691abf5b805b08a267d225d" data-indeed-apply-jobUrl="<?php echo $indeed_url ?>" data-indeed-apply-allow-apply-on-indeed="0" data-indeed-apply-jobMeta="WordPress" data-indeed-apply-jobTitle="CETruck Driver" data-indeed-apply-email="a0dd30ad2c9238a149704460f79b54bbab0840c7dad57ba153e60f6fbbbd1e2e"></span></div>
                    <?php
                }
                ?>
            </div>
        </div>
    </div>
</form>
<?php
if ($data->support_indeed) {
    ?>
    <script type="text/javascript">
        (function (d, s, id) {
            var js, iajs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) {
                return;
            }
            js = d.createElement(s);
            js.id = id;
            js.setAttribute('data-indeed-apply-qs', 'WordPress');
            js.async = true;
            js.src = "https://apply.indeed.com/indeedapply/static/scripts/app/bootstrap.js";
            iajs.parentNode.insertBefore(js, iajs);
        }(document, 'script', 'indeed-apply-js'));
    </script>
    <?php
}
?>
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

<?php $this->renderPartial('_specific_converion_codes', array('slug' => $slug)); ?>