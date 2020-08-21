<?php
$indeed_url = Yii::app()->getBaseUrl(true) . Yii::app()->request->getUrl();
Yii::app()->clientScript->registerPackage('dedicated');
$directory = Yii::app()->getBaseUrl(true) . '/vendor/dedicated/assets';
$intelliapp_referral_code = !empty($data->intelliapp_referral_code) ? '?r=' . $data->intelliapp_referral_code : '';
?>
<div class="container main">
    <div class="car" style="background: url(<?php echo $directory . '/img/dedicated_dollar/' . $data->background; ?>) bottom center no-repeat;">
        <div class="row-fluid">
            <div class="span8">
                <div class="lftcon">
                    <div class="topbg"><?php echo $data->heading; ?></div>
                    <div class="innercon">
                        <div class="mainlogo"><img src="<?php echo $directory . '/img/dedicated_dollar/' . $data->header_logo; ?>"  alt="logo" /></div>

                        <?php echo $data->description_html; ?>
                    </div>
                </div>
            </div>
            <!--End left Content-->
            <div class="span4 frm">
                <form action="" method="post" id="crst_swift_dedicated" class="crst_swift_dedicated">
                    <div class="frmcon box-shadow" id="important-number">
                        <h2>Ready to Apply?</h2>
                        <p>Just fill out our short application
                            below and a recruiter will call you.
                            It's that simple.</p>
                            <div class="row-fluid">
                                <input class="span12 validate[required]" id="first_name" name="first_name" type="text" placeholder="First Name" />
                                <input class="span12 validate[required]" id="last_name" name="last_name" type="text" placeholder="Last Name" />
                                <input class="span12 validate[required]" id="phone" name="phone" type="text" placeholder="Phone numbers" />
                                <input class="span12 validate[required,custom[email]]" id="email" name="email" type="text" placeholder="Email Address" />
                                <input class="span12 validate[required]" id="street_address" name="street_address" type="text" placeholder="Street Address" />
                                <input class="span12 validate[required]" id="city" name="city" type="text" placeholder="City" />
                                <select class="span12 state validate[required]" name="state" id="state">
                                    <option value="" selected="selected">State</option>
                                    <option value="AL" >Alabama</option><option value="AZ" >Arizona</option><option value="AR" >Arkansas</option><option value="CA" >California</option><option value="CO" >Colorado</option><option value="CT" >Connecticut</option><option value="DE" >Delaware</option><option value="DC" >District Of Columbia</option><option value="FL" >Florida</option><option value="GA" >Georgia</option><option value="ID" >Idaho</option><option value="IL" >Illinois</option><option value="IN" >Indiana</option><option value="IA" >Iowa</option><option value="KS" >Kansas</option><option value="KY" >Kentucky</option><option value="LA" >Louisiana</option><option value="MA" >Massachusetts</option><option value="MI" >Michigan</option><option value="MN" >Minnesota</option><option value="MS" >Mississippi</option><option value="MO" >Missouri</option><option value="MT" >Montana</option><option value="NE" >Nebraska</option><option value="NV" >Nevada</option><option value="NH" >New Hampshire</option><option value="NJ" >New Jersey</option><option value="NM" >New Mexico</option><option value="NY" >New York</option><option value="NC" >North Carolina</option><option value="OH" >Ohio</option><option value="OK" >Oklahoma</option><option value="OR" >Oregon</option><option value="PA" >Pennsylvania</option><option value="RI" >Rhode Island</option><option value="SC" >South Carolina</option><option value="TN" >Tennessee</option><option value="TX" >Texas</option><option value="UT" >Utah</option><option value="VA" >Virginia</option><option value="WA" >Washington</option><option value="WI" >Wisconsin</option><option value="WY" >Wyoming</option>
                                </select>
                                <input class="span12 zip validate[required]" id="zip_code" name="zip_code" type="text" placeholder="Zip code" />
                                <input class="span12 validate[required]" id="moving_violation" name="moving_violation" type="text" placeholder="List any Moving Violations">
                                <select class="span12 validate[required]" name="cdl_valid" id="cdl_valid">
                                    <option value="" selected="selected">Do you have your CDL?</option>
                                    <option value="Yes">Yes</option>
                                    <option value="No">No</option>
                                </select>

                                <p class="bottom">*By submitting this form you are opting in to receive correspondence from Swift. For additional info see the Terms and Conditions below.</p>

                                <button type="submit" id="submit" name="submit" class="span12 btnsubmit visible-phone">APPLY NOW</button>
                            </div>
                        </div>
                        <div class="buttons visible-desktop visible-tablet">
                            <input type="image" id="submit" name="submit" src="<?php echo $directory ?>/img/dedicated/btnapply.png" width="105" height="27" alt="APPLY NOW" />
                            <input type="image" id="reset" name="reset" src="<?php echo $directory ?>/img/dedicated/btnreset.png" width="105" height="27" onclick="this.form.reset();
                            return false;" alt="RESET" />
                            <input type="hidden" name="form_type" value="T1">
                            <input type="hidden" name="job_target" value="<?php echo isset($_GET['id']) ? $_GET['id'] : '' ?>">
                        </div>
                        <?php
                        if ($data->support_indeed) {
                            ?>
                            <!-- <div class="buttons"><span class="indeed-apply-widget"  data-indeed-apply-apiToken="21e2e8f9c8a8733e5b8a0445ccfbc713b9824e1f6691abf5b805b08a267d225d" data-indeed-apply-jobUrl="<?php echo $indeed_url ?>" data-indeed-apply-allow-apply-on-indeed="0" data-indeed-apply-jobMeta="WordPress" data-indeed-apply-jobTitle="CETruck Driver" data-indeed-apply-email="a0dd30ad2c9238a149704460f79b54bbab0840c7dad57ba153e60f6fbbbd1e2e"></span></div> -->
                            <?php
                        }
                        ?>
                    </form>
                </div>

            </div>
        </div>
    </div>
    <!-- Bottom content ================================================== -->
    <div class="container">
        <div class="bottomcontainer">
            <div class="row-fluid">
                <div class="span7">
                    <div class="botconlft"> <img class="botpic" src="<?php echo $directory . '/img/dedicated_dollar/' . $data->image; ?>"  alt=""/>
                        <div class="botcon">
                            <img class="diamond-image" src="<?php echo $directory; ?>/img/dedicated/diamond2.png"  alt=""/>
                            <?php echo $data->details_html; ?>
                        </div>
                    </div>
                </div>
                <div class="span5">
                    <div class="botconrht">
                        <ul>
                            <li>Availability is limited.
                                <div class="call"> <span>Call NOW!</span>
                                    <strong><?php echo $data->phone_number; ?></strong>
                                </div>
                            </li>
                        </ul>
                        <ul class="botinnercon">
                            <li>Swift is a proud supporter of our <br>
                                veterans. <a href="http://joinswift.com/new-to-trucking.html#panel2">Click to learn more <br>
                                about opportunities for Vets.</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="footer">
                <p>*By completing this form, I agree to receive correspondence from Swift Transportation. This includes receiving autodialed telephone calls, prerecorded messages, text messages and emails about trucking job opportunities at the contact number and address I have provided above. I understand that I am not required to provide my consent as a condition of submitting my application.</p>
                <ul>
                    <?php
                    if (!empty($data->footer_logo)) {
                        ?>
                        <li><img src="<?php echo $directory . '/img/dedicated_dollar/' . $data->footer_logo; ?>"  alt="Footer Logo"/></li>
                        <?php
                    }
                    ?>
                    <li><a target="_blank" href="<?php echo Yii::app()->createUrl('landing-pages/privacy-policy'); ?>">Privacy Policy</a><span>|</span></li>
                    <li><a href="http://www.joinswift.com" target="_blank">joinswift.com</a><span>|</span></li>
                    <li><a target="blank" href="https://intelliapp2.driverapponline.com/c/swiftcomp<?php echo $intelliapp_referral_code; ?>">Online Application</a></li>
                </ul>
            </div>
        </div>

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
        <?php
        Yii::app()->clientScript->registerScript('init', "
           $('#crst_swift_dedicated').validationEngine('attach');
           $('input').placeholder();
           ", CClientScript::POS_END);
           ?>

