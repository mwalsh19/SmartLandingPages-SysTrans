
<?php
Yii::app()->clientScript->registerCssFile('http://fast.fonts.net/cssapi/fdbec8c1-bb62-4a79-9b2e-74758d1444a9.css');
Yii::app()->clientScript->registerPackage('dr_january');
$basePath = Yii::app()->getBaseUrl(true) . '/vendor/dr_lp/';
?>
<div class="container">
    <div class="yellow-line"></div>
    <div class="header">
        <div class="sub-heading-wrap clearfix">
            <div class="logo"></div>
            <div class="sub-heading-phone hideOnMobile">
                <h1><?php echo $data->phone; ?></h1>
            </div>
        </div>
    </div>
    <div class="btnGroup-mobile clearfix">
        <div class="grouBtn-wrap">
            <a href="tel:<?php echo $data->phone; ?>" id="callBtn" class="form-control-btn" onclick="swiftEventTracking('Mobile Action', 'ClickToCall');">CLICK TO CALL</a>
            <a href="#quickForm" id="quickFormBtn" class="form-control-btn" onclick="swiftEventTracking('Mobile Action', 'QuickForm');">QUICK FORM</a>
        </div>
    </div>
    <div class="hero-form">
        <section class="form-desktop">

            <div class="form-wrap">
                <div class="form-heading">
                    <h1 class="clearfix">
                        <div class="year">2016</div>
                        <div class="text">NEW<br>ROAD<br>AHEAD.</div>
                    </h1>
                    <p class="headline hideOnMobile">Just fill out our short application below and a recruiter will call you.</p>
                </div>
                <div class="lead-form-desktop">
                    <form action="" method="post" id="leadForm" novalidate="novalidate">
                        <input type="text" name="first_name" placeholder="FIRST NAME" class="form-control half first-name-field">
                        <input type="text" name="last_name" placeholder="LAST NAME" class="form-control half last-name-field">
                        <input type="text" name="phone" placeholder="PHONE NUMBER" class="form-control half">
                        <input type="text" name="email" placeholder="E-MAIL ADDRESS" class="form-control half">
                        <input type="text" name="street_address" placeholder="STREET ADDRESS" class="form-control full">
                        <input type="text" name="city" placeholder="CITY" class="form-control full">
                        <select name="state" id="state" class="form-control half">
                            <option value="">SELECT A STATE</option>
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

                        <input type="text" name="zip_code" placeholder="ZIP CODE" class="form-control half">
                        <input type="text" name="moving_violation" placeholder="LIST OF MOVING VIOLATIONS" class="form-control full">
                        <select name="cdl_valid" id="class_cdl" class="form-control full">
                            <option value="">DO YOU HAVE A CLASS A CDL?</option>
                            <option value="Yes">YES</option>
                            <option value="No">No</option>
                        </select>
                        <input type="hidden" name="form_type" value="T3">
                        <div class="errors-form"></div>
                        <input type="submit" value="submit form" class="form-control-btn">
                    </form>
                </div>
            </div>
        </section>

        <div class="benefits">
            <div class="top"></div>
            <div class="benefit-container clearfix">

                <div class="benefit"><img src="<?php echo $basePath ?>images/benefits-05.png"><div>Great Miles =<br> Great Pay</div></div>
                <div class="benefit"><img src="<?php echo $basePath ?>images/benefits.png"><div>Late-Model<br> Equipment Available</div></div>
                <div class="benefit"><img src="<?php echo $basePath ?>images/benefits-02.png"><div>Dedicated<br> Opportunities</div></div>


                <div class="benefit"><img src="<?php echo $basePath ?>images/benefits-06.png"><div>Great Career Path</div></div>
                <div class="benefit"><img src="<?php echo $basePath ?>images/benefits-03.png"><div>Paid Vacation</div></div>
                <div class="benefit last"><img src="<?php echo $basePath ?>images/benefits-04.png"><div>Excellent Benefits</div></div>

            </div>
        </div>

    </div>
    <div class="details">
        <div class="clearfix">
            <div class="left-side">
                <h2><?php echo $data->body_title; ?></h2>
                <p><?php echo $data->body_copy; ?></p>
            </div>
            <a name="quickForm"></a>
            <div class="lead-form-mobile">
                <div class="form-heading-mobile">
                    <h1>GET STARTED!</h1>
                    <p>
                        Just fill out our short application below and a recruiter will call you. It's that simple.
                    </p>
                </div>

            </div>
            <div class="right-side">
                <h4><?php echo $data->phone; ?></h4>
                <h3>CALL NOW TO SPEAK WITH A RECRUITER</h3>
            </div>
        </div>
    </div>
    <div class="footer">
        <div class="footer-wrap">
            <p>
                *By completing this form, I agree to receive correspondence from Swift Transportation. This includes receiving autodialed telephone calls, prerecorded messages, text messages and emails about trucking job opportunities at the contact number and address I have provided above. I understand that I am not required to provide my consent as a condition of submitting my application.
            </p>
            <ul>
                <li><a href="<?php echo Yii::app()->createUrl('landing-pages/privacy-policy'); ?>" target="_blank">Privacy Policy</a><span>|</span></li>
                <li><a target="blank" href="http://swifttrans.com/careers/for-drivers">swifttrans.com<span>|</span></a></li>
                <?php
                if (strpos($slug, 'swiftrefrigerated') !== false) {
                    $intellaappPath = 'centralref';
                } else {
                    $intellaappPath = 'swiftcomp';
                }
                ?>
                <li><a target="blank" href="https://intelliapp2.driverapponline.com/c/<?php echo $intellaappPath; ?>?r=<?php echo $data->intelliapp_referral_code; ?>">Online Application</a></li>
            </ul>
        </div>
    </div>
</div>

<?php
$this->renderPartial('_specific_converion_codes', array('slug' => $slug));

$this->renderPartial('_refrigerated_ga', array('slug' => $slug, 'isThankyou' => false));

$this->renderPartial('_recruitment_ga', array('slug' => $slug, 'isThankyou' => false, 'data_type' => $data->type));
