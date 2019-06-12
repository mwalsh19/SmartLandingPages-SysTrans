
<?php
Yii::app()->clientScript->registerCssFile('http://fast.fonts.net/cssapi/fdbec8c1-bb62-4a79-9b2e-74758d1444a9.css');
Yii::app()->clientScript->registerPackage('intermodal');
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
        <div class="heading-separator"></div>

        <div class="sub-heading">
            <div class="sub-heading-wrap clearfix">
                <div class="logo"></div>
                <div class="sub-heading-phone">
                    <h1><?php echo $data->phone ?></h1>
                    <span>Give us a call to find out what Swift can do for you.</span>
                </div>
            </div>
        </div>
        <div class="btnGroup-mobile clearfix">
            <div class="grouBtn-wrap">
                <a href="tel:<?php echo $data->phone ?>" id="callBtn" class="form-control-btn">CLICK TO CALL</a>
                <a href="#quickForm" id="quickFormBtn" class="form-control-btn">QUICK FORM</a>
            </div>
        </div>
        <div class="top-container">
            <div class="top-container-wrap">
                <div class="landscape-container" <?php echo ($data->type == 'SO') ? "style='background: url({$uploadsPath}uploads/intermodal_files/{$data->background}) no-repeat;'" : "" ?>>
                    <div class="landscape-wrap">
                        <div class="main-description">
                            <div class="primary-description">
                                <h3><?php echo $data->main_title; ?></h3>
                                <h1>
                                    <?php
                                    if ($data->type == 'SO') {
                                        echo $data->sub_title;
                                    } else {
                                        echo "DRIVEN. TOGETHER.";
                                    }
                                    ?>
                                </h1>
                            </div>
                            <div class="secondary-description">
                                <?php
                                echo $data->main_description;
                                ?>
                            </div>
                            <div class="apply-form clearfix">
                                <input type="text" id="apply-email-field" class="form-control" placeholder="What’s Your Email Address?">
                                <a href="javascript:void(0);
                                   " id="apply-btn" class="form-control-btn">GET STARTED</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="middle-container">
            <div class="middle-container-wrap clearfix">

                <div class="left-side">
                    <div class="middle-copy">
                        <div class="copy">
                            <?php
                            echo $data->body_copy;
                            ?>
                        </div>
                        <div class="phone-number">
                            <h4>CALL NOW TO SPEAk with a recruiter.</h4>
                            <h3>
                                <?php echo $data->phone ?>
                            </h3>
                        </div>
                    </div>
                </div>

                <div class="right-side">
                    <?php
                    if ($data->type != 'SO') {
                        ?>
                        <div class="map">
                            <h2><?php echo $data->map_address ?></h2>
                            <img src="<?php echo $uploadsPath . '/uploads/intermodal_maps/' . $data->map_source; ?>">
                        </div>
                        <?php
                    }
                    ?>
                    <div class="benefits-sections">
                        <h2>DRIVER BENEFITS</h2>
                        <ul class="clearfix">
                            <li class="item1">
                                <div class="section-wrap" style="background: url(<?php echo $uploadsPath . 'uploads/intermodal_files/' . $data->benef1_figure ?>) no-repeat; background-size: cover;">
                                    <div class="section-text">
                                        <h3>
                                            <?php
                                            echo $data->benef1_caption;
                                            ?>
                                        </h3>
                                    </div>
                                </div>
                            </li>
                            <li class="item2">
                                <div class="section-wrap" style="background: url(<?php echo $uploadsPath . 'uploads/intermodal_files/' . $data->benef2_figure ?>) no-repeat; background-size: cover;">
                                    <div class="section-text">
                                        <h3>
                                            <?php
                                            echo $data->benef2_caption;
                                            ?>
                                        </h3>
                                    </div>
                                </div>
                            </li>
                            <li class="item3">
                                <div class="section-wrap" style="background: url(<?php echo $uploadsPath . 'uploads/intermodal_files/' . $data->benef3_figure ?>) no-repeat; background-size: cover;">
                                    <div class="section-text">
                                        <h3>
                                            <?php
                                            echo $data->benef3_caption;
                                            ?>
                                        </h3>
                                    </div>
                                </div>
                            </li>
                            <li class="item4">
                                <div class="section-wrap" style="background: url(<?php echo $uploadsPath . 'uploads/intermodal_files/' . $data->benef4_figure ?>) no-repeat; background-size: cover;">
                                    <div class="section-text">
                                        <h3>
                                            <?php
                                            echo $data->benef4_caption;
                                            ?>
                                        </h3>
                                    </div>
                                </div>
                            </li>
                            <li class="item5">
                                <div class="section-wrap"style="background: url(<?php echo $uploadsPath . 'uploads/intermodal_files/' . $data->benef5_figure ?>) no-repeat; background-size: cover;">
                                    <div class="section-text">
                                        <h3>
                                            <?php
                                            echo $data->benef5_caption;
                                            ?>
                                        </h3>
                                    </div>
                                </div>
                            </li>
                            <li class="item6">
                                <div class="section-wrap" style="background: url(<?php echo $uploadsPath . 'uploads/intermodal_files/' . $data->benef6_figure ?>) no-repeat; background-size: cover;">
                                    <div class="section-text">
                                        <h3>
                                            <?php
                                            echo $data->benef6_caption;
                                            ?>
                                        </h3>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>


        <div class="footer-container">
            <div class="footer-wrap">
                <p>
                    *By completing this form, I agree to receive correspondence from Swift Transportation. This includes receiving autodialed telephone calls, prerecorded messages, text messages and emails about trucking job opportunities at the contact number and address I have provided above. I understand that I am not required to provide my consent as a condition of submitting my application.
                </p>
                <ul>
                    <li><a href="<?php echo Yii::app()->createUrl('landing-pages/privacy-policy'); ?>" target="_blank">Privacy Policy</a><span>|</span></li>
                    <li><a target="blank" href="http://swifttrans.com/careers/for-drivers">swifttrans.com</a><span>|</span></li>
                    <li><a href="https://intelliapp2.driverapponline.com/c/swiftcomp?r=<?php echo $data->intelliapp_referral_code ?>" target="_blank">Online Application</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>

<div id="apply-form-overlay"></div>
<div class="container-form">
    <a name="quickForm"></a>
    <div class="form-wrap">
        <div class="form-heading">
            <h1>APPLY NOW!</h1>
            <p>
                Just fill out our short application below and a recruiter will call you. It's that simple.
            </p>
        </div>
        <form action="" method="post" id="leadForm" novalidate="novalidate">
            <div class="groupfields clearfix">
                <div class="firstname-control">
                    <input type="text" name="first_name" placeholder="First name" class="form-control">
                </div>
                <div class="lastname-control">
                    <input type="text" name="last_name" placeholder="Last name" class="form-control">
                </div>
            </div>
            <div class="groupfields clearfix">
                <div class="phone-control">
                    <input type="text" name="phone" placeholder="Phone number" class="form-control">
                </div>
                <div class="email-control">
                    <input type="text" name="email" placeholder="Email Address" class="form-control">
                </div>
            </div>

            <input type="text" name="street_address" placeholder="Street Address" class="form-control">
            <input type="text" name="city" placeholder="City" class="form-control">
            <div class="groupfields clearfix">
                <div class="state-control">
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
                <div class="zip-control">
                    <input type="text" name="zip_code" placeholder="Zip code" class="form-control">
                </div>
            </div>

            <input type="text" name="moving_violation" placeholder="List any moving violations" class="form-control">
            <div class="cdl-valid-control clearfix">
                <select name="cdl_valid" class="form-control">
                    <option>Do you have your Class A CDL?</option>
                    <option value="Yes">Yes</option>
                    <option value="No">No</option>
                </select>
            </div>
            <input type="hidden" name="form_type" value="T3">
            <input type="submit" value="SUBMIT" class="form-control-btn">
        </form>
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