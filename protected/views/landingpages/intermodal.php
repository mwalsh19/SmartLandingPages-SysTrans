
<?php
Yii::app()->clientScript->registerPackage('systrans');
$directory = Yii::app()->getBaseUrl(true) . '/vendor/systrans';
$uploadsPath = Yii::app()->getBaseUrl(true) . '/';

$type = '';
switch ($data->type) {
    case 'I':
        $type = 'intermodal';
        break;
    case 'D':
        $type = 'dedicated';
        break;
    case 'SO':
        $type = 'special-offer';
        break;
    default:
        $type = 'intermodal';
        break;
}
?>
<div class="main swift-<?php echo $type; ?>" id="swift-<?php echo $type; ?>">
    <div class="main-wrap">

        <div class="sub-heading">
            <div class="sub-heading-wrap clearfix">
                <div class="logo"></div>
                <div class="sub-heading-phone">
                    <span>Call now to speak with a recruiter</span>
                    <h1><?php echo $data->phone ?></h1>
                </div>
            </div>
        </div>
        <div class="btnGroup-mobile clearfix">
            <div class="grouBtn-wrap">
                <a href="tel:<?php echo $data->phone ?>" id="callBtn" class="form-control-btn btn">Click to Call</a>
                <a href="#quickForm" id="quickFormBtn" class="form-control-btn btn">Quick Form</a>
            </div>
        </div>
        <div class="top-container">
            <div class="top-container-wrap">
                <div class="landscape-container" <?php echo ($data->type == 'SO') ? "style='background: url({$uploadsPath}uploads/systrans_files/{$data->background}) no-repeat;'" : "" ?>>
                    <div class="landscape-wrap">
                        <div class="main-description">
                            <div class="primary-description">
                                <h3><?php echo $data->main_title; ?></h3>
                            </div>
                            <div class="secondary-description">
                                <?php
                                echo $data->main_description;
                                ?>
                            </div>
                            <div class="apply-form clearfix">
                                <h2> Get Started! </h2>
                                <p>Enter your email address below to get started.</p>
                                <input type="text" id="apply-email-field" class="form-control" placeholder="Please Enter Your Email Address">
                                <a href="javascript:void(0);
                                   " id="apply-btn" class="form-control-btn"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="middle-container relative">

            <div class="quote-mobile mobile-only">
                                <img src="<?php echo $directory ?>/Version-A/images/quote-experienced-driver.png" />
                            </div>

            <div class="row middle-container-wrap clearfix">

                <div class="col-2 col background-middle"></div>

                <div class="col-2 col">
                    <div class="text">
                        <div class="middle-copy flex-center">
                            <div class="quote desktop-only">
                                <img src="<?php echo $directory ?>/Version-A/images/quote-experienced-driver.png" />
                            </div>
                            <div class="copy">
                                <?php
                                echo $data->body_copy;
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="open-road" <?php echo ($data->type == 'SO') ? "style='background: url({$uploadsPath}uploads/systrans_files/{$data->region_graphic}) no-repeat center;'" : "" ?>>
            <h3><?php echo $data->sub_title; ?></h3>
        </div>

        <div class="invest-section">
            <div class="grid-container">
                <h3>We Invest In You.</h3>
                <div class="flex-container">
                    <div class="box">
                        <p>
                            <img src="/vendor/systrans/Version-A/images/icon-st-truck-checkmark.png" alt="invest-1" />
                        </p>
                        <h4>Lorem ipsum dolor sit Lorem dolor</h4>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                        </p>
                    </div>

                    <div class="box">
                        <p>
                            <img src="/vendor/systrans/Version-A/images/icon-st-driver-portal.png" alt="invest-1" />
                        </p>
                        <h4>Lorem ipsum dolor sit Lorem dolor</h4>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                        </p>
                    </div>

                    <div class="box">
                        <p>
                            <img src="/vendor/systrans/Version-A/images/icon-st-referral-program.png" alt="invest-1" />
                        </p>
                        <h4>Lorem ipsum dolor sit Lorem dolor</h4>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div class="icon-section">

            <div class="grid-container">
                <div>
                    <h2>What Drives You?</h2>
                </div>

                            <div class="icons col-3 item1 inline-block center">
                                <div class="inline-block">
                                    <img src="<?php echo $uploadsPath . 'uploads/systrans_files/' . $data->benef1_figure ?>" alt="<?php echo $data->benef1_caption; ?>" />
                                </div>
                                <div class="inline-block section-text">
                                    <h3>
                                        <?php echo $data->benef1_caption_title; ?>
                                    </h3>
                                    <p>
                                        <?php echo $data->benef1_caption; ?>
                                    </p>
                                </div>
                            </div>
                            <div class="icons col-3 item2 inline-block center">
                                <div class="inline-block">
                                    <img src="<?php echo $uploadsPath . 'uploads/systrans_files/' . $data->benef2_figure ?>" alt="<?php echo $data->benef2_caption; ?>" />
                                </div>
                                <div class="inline-block section-text">
                                    <h3>
                                        <?php echo $data->benef2_caption_title; ?>
                                    </h3>
                                    <p>
                                        <?php echo $data->benef2_caption; ?>
                                    </p>
                                </div>
                            </div>
                            <div class="icons col-3 item3 inline-block center">
                                <div class="inline-block">
                                    <img src="<?php echo $uploadsPath . 'uploads/systrans_files/' . $data->benef3_figure ?>" alt="<?php echo $data->benef3_caption; ?>" />
                                </div>
                                <div class="inline-block section-text">
                                    <h3>
                                        <?php echo $data->benef3_caption_title; ?>
                                    </h3>
                                    <p>
                                        <?php echo $data->benef3_caption; ?>
                                    </p>
                                </div>
                            </div>
                            <div class="icons col-3 item4 inline-block center">
                                <div class="inline-block">
                                    <img src="<?php echo $uploadsPath . 'uploads/systrans_files/' . $data->benef4_figure ?>" alt="<?php echo $data->benef4_caption; ?>" />
                                </div>
                                <div class="inline-block section-text">
                                    <h3>
                                        <?php echo $data->benef4_caption_title; ?>
                                    </h3>
                                    <p>
                                        <?php echo $data->benef4_caption; ?>
                                    </p>
                                </div>
                            </div>
                            <div class="icons col-3 item5 inline-block center">
                                <div class="inline-block">
                                    <img src="<?php echo $uploadsPath . 'uploads/systrans_files/' . $data->benef5_figure ?>" alt="<?php echo $data->benef5_caption; ?>" />
                                </div>
                                <div class="inline-block section-text">
                                    <h3>
                                        <?php echo $data->benef5_caption_title; ?>
                                    </h3>
                                    <p>
                                        <?php echo $data->benef5_caption; ?>
                                    </p>
                                </div>
                            </div>
                            <div class="icons col-3 item6 inline-block center">
                                <div class="inline-block">
                                    <img src="<?php echo $uploadsPath . 'uploads/systrans_files/' . $data->benef6_figure ?>" alt="<?php echo $data->benef6_caption; ?>" />
                                </div>
                                <div class="inline-block section-text">
                                    <h3>
                                        <?php echo $data->benef6_caption_title; ?>
                                    </h3>
                                    <p>
                                        <?php echo $data->benef6_caption; ?>
                                    </p>
                                </div>
                            </div>

                            <a name="quickForm"></a>
                </div>
        </div>

        <div id="apply-form-overlay"></div>
<div class="container-form">
    <div class="form-heading">
                <h1>Get Started!</h1>
                <p>
                    Just fill out our short application below and a recruiter will call you.
                </p>
            </div>
    <div class="form">
        <div class="form-wrap">
            <form action="" method="post" id="leadForm" novalidate="novalidate">
                <div class="groupfields flex-center">
                    <div class="firstname-control col-half">
                        <input type="text" name="first_name" placeholder="First name" class="form-control">
                    </div>
                    <div class="lastname-control col-half">
                        <input type="text" name="last_name" placeholder="Last name" class="form-control">
                    </div>
                </div>
                <div class="groupfields clearfix">
                    <div class="email-control">
                        <input type="text" name="email" placeholder="Email Address" class="form-control">
                    </div>
                    <div class="phone-control">
                        <input type="text" name="phone" placeholder="Phone number" class="form-control">
                    </div>
                </div>

                <input type="text" name="street_address" placeholder="Street Address" class="form-control">
                <input type="text" name="city" placeholder="City" class="form-control">
                <div class="groupfields flex-center">
                    <div class="state-control col-half">
                        <select name="state" id="state" class="form-control">
                            <option value="">Select a state</option>
                            <option value="AL">Alabama</option>
                            <option value="AZ">Arizona</option>
                            <option value="AR">Arkansas</option>
                            <option value="CA">California</option>
                            <option value="CO">Colorado</option>
                            <option value="CT">Connecticut</option>
                            <option value="DE">Delaware</option>
                            <option value="DC">District Of Columbia</option>
                            <option value="FL">Florida</option>
                            <option value="GA">Georgia</option>
                            <option value="ID">Idaho</option>
                            <option value="IL">Illinois</option>
                            <option value="IN">Indiana</option>
                            <option value="IA">Iowa</option>
                            <option value="KS">Kansas</option>
                            <option value="KY">Kentucky</option>
                            <option value="LA">Louisiana</option>
                            <option value="MA">Massachusetts</option>
                            <option value="MI">Michigan</option>
                            <option value="MN">Minnesota</option>
                            <option value="MS">Mississippi</option>
                            <option value="MO">Missouri</option>
                            <option value="MT">Montana</option>
                            <option value="NE">Nebraska</option>
                            <option value="NV">Nevada</option>
                            <option value="NH">New Hampshire</option>
                            <option value="NJ">New Jersey</option>
                            <option value="NM">New Mexico</option>
                            <option value="NY">New York</option>
                            <option value="NC">North Carolina</option>
                            <option value="OH">Ohio</option>
                            <option value="OK">Oklahoma</option>
                            <option value="OR">Oregon</option>
                            <option value="PA">Pennsylvania</option>
                            <option value="RI">Rhode Island</option>
                            <option value="SC">South Carolina</option>
                            <option value="TN">Tennessee</option>
                            <option value="TX">Texas</option>
                            <option value="UT">Utah</option>
                            <option value="VA">Virginia</option>
                            <option value="WA">Washington</option>
                            <option value="WI">Wisconsin</option>
                            <option value="WY">Wyoming</option>
                        </select>
                    </div>
                    <div class="zip-control col-half">
                        <input type="text" name="zip_code" placeholder="Zip code" class="form-control">
                    </div>
                </div>

                <div class="cdl-valid-control clearfix">
                    <select name="moving_violation" class="form-control">
                        <option>Years of Experience?</option>
                        <option value="Beginner">1-3</option>
                        <option value="Novice">3-5</option>
                        <option value="Intermediate">5-9</option>
                        <option value="Experienced">10+</option>
                    </select>
                </div>
                <div class="cdl-valid-control clearfix">
                    <select name="cdl_valid" class="form-control">
                        <option>Do you have your Class A CDL?</option>
                        <option value="Yes">Yes</option>
                        <option value="No">No</option>
                    </select>
                </div>
                <input type="hidden" name="form_type" value="T3">
                <input id="submit" type="submit" value="Submit Application" class="form-control-btn btn">
            </form>
        </div>
    </div>
</div>


        <div class="footer-container">
            <div class="footer-wrap">

                <div class="phone-number-footer">
                    <h4>Call now to speak with a recruiter.</h4>
                    <h3>
                        <?php echo $data->phone ?>
                    </h3>
                </div>
                <div class="terms">
                    <p>
                        *By completing this form, I agree to receive correspondence from Swift Transportation. This includes receiving autodialed telephone calls, prerecorded messages, text messages and emails about trucking job opportunities at the contact number and address I have provided above. I understand that I am not required to provide my consent as a condition of submitting my application.
                    </p>
                    <ul>
                        <li><a href="<?php echo Yii::app()->createUrl('landing-pages/privacy-policy'); ?>" target="_blank">Privacy Policy</a><span>|</span></li>
                        <li><a target="blank" href="http://swifttrans.com/careers/for-drivers">systemtrans.com</a><span>|</span></li>
                        <li><a href="https://intelliapp2.driverapponline.com/c/swiftcomp?r=<?php echo $data->intelliapp_referral_code ?>" target="_blank">Online Application</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
/* THIS GOOGLE ANALYTICS CODE IS ONLY FOR SPECIAL OFFERS */
if ($data->type == 'SO' && !empty($data->ga_lp) && !isset($_GET['no-track'])) {
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
        ga('create', '<?php echo $data->ga_lp; ?>', 'auto');
        ga('send', 'pageview');</script>
    <?php
}
?>

<?php $this->renderPartial('_specific_converion_codes', array('slug' => $slug)); ?>