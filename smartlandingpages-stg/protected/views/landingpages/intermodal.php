
<?php if ((isset($publisher[1]) && $publisher[1] === 'randallreilly') && strpos($publisher[0], 'jjw') !== false ) { ?>

<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-5BG6SSF');</script>
<!-- End Google Tag Manager -->

<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5BG6SSF"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

<?php } else if ((isset($publisher[1]) && $publisher[1] === 'randallreilly') && strpos($publisher[0], 'systemtrans') !== false) { ?>

<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-W4Z4N5B');</script>
<!-- End Google Tag Manager -->

<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-W4Z4N5B"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

<?php } ?>

<?php
    Yii::app()->clientScript->registerPackage('systrans');
    $main_directory = Yii::app()->getBaseUrl(true) . '/vendor/systrans';
    $uploadsPath = Yii::app()->getBaseUrl(true) . '/';
    $intellaappPath = 'tsystem';
    
    $type = '';
    switch ($data->type) {
        case 'ST1':
        case 'ST2':
        case 'STTeam':
            $type = 'landing-page-1';
            $name = 'st';
            $company = 'System Transport';
            $company_symbol = 'System Transport';
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
            $assets = Yii::app()->getBaseUrl(true) . '/vendor/systrans/systrans/images';
            break;
        case 'JJW1':
            $type = 'landing-page-2';
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
            $assets = Yii::app()->getBaseUrl(true) . '/vendor/systrans/jjw/images';
            break;
        case 'TWT1':
        case 'TWT2':
        case 'TWT3':
            $type = 'landing-page-3';
            $name = 'twt';
            $company = 'TWT Refrigerated Service';
            $company_symbol = 'TWT';
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
            $assets = Yii::app()->getBaseUrl(true) . '/vendor/systrans/twt/images';
            break;
        default:
            $type = 'landing-page-1';
            $name = 'st';
            $primary_color = "#d71e26";
            $assets = Yii::app()->getBaseUrl(true) . '/vendor/systrans/twt/images';
            break;
    }
    ?>


        <link rel="icon" type="image/png" href="<?php echo $assets . '/' . $name ?>-favicon.ico">

<style>
    .main-description h3 span {
        color: <?php echo $primary_color ?>;
    }
    .sub-heading {
        background: <?php echo $rgba_secondary ?>;
    }
    #callBtn, #quickFormBtn, #submit, .form-heading {
        background: <?php echo $primary_color ?>;
    }
    .invest-section {
        background: <?php echo $invest_section_color ?>;
    }
    .invest-section .box {
        background: <?php echo $invest_section_inner ?>;
    }
    .footer-container {
        background: <?php echo $footer_color ?>;
    }

    #apply-form-overlay {
        background: <?php echo $overlay_secondary ?>;
    }

    .apply-form-showing #sub-heading {
        background: <?php echo $rgba_secondary_full ?> !important;
    }

    .form-control-btn {
        background: <?php echo $primary_color ?>;
    }

    @media screen and (max-width: 950px) {
        .sub-heading {
            background: <?php echo $rgba_secondary_full ?>;
        }
    }
</style>
<div class="main systrans-<?php echo $type; ?>" id="systrans-<?php echo $type; ?>">
    <div class="main-wrap">
        <div id="sub-heading" class="sub-heading" data-name="<?php echo $name ?>">
            <div class="sub-heading-wrap clearfix">
                <div class="logo" style="background: url(<?php echo $assets; ?>/<?php echo $name; ?>-logo.png) no-repeat"></div>
                <div class="sub-heading-phone">
                    <span>Call now to speak with a recruiter</span>
                    <h1 style="color: <?php echo $primary_color ?>"><?php echo $data->phone ?></h1>
                </div>
            </div>
        </div>
        <div class="btnGroup-mobile clearfix">
            <div class="grouBtn-wrap">
                <a href="tel:<?php echo $data->phone ?>" id="callBtn" class="form-control-btn btn">Click to Call</a>
                <a href="#quickForm" id="quickFormBtn" class="form-control-btn btn">Quick Form</a>
            </div>
        </div>
        <div class="quickform-desktop desktop-only" id="form-desktop-trigger">
            <a href="#main-description" id="apply-btn2" class="form-control-btn btn">Quick Form</a>
        </div>
        <div class="top-container">
            <div class="top-container-wrap">
                <div class="landscape-container" 
                    <?php echo "style='background: url({$uploadsPath}uploads/systrans_files/{$data->background}) no-repeat;'"; ?>
                >
                    <div class="landscape-wrap">
                        <div id="main-description" class="main-description">
                            <div class="primary-description">
                                <h3><?php echo $data->main_title; ?></h3>
                            </div>
                            <div class="secondary-description">
                                <?php
                                    echo $data->main_description;
                                    ?>
                            </div>
                            <div class="apply-form clearfix desktop-only">
                                <h2> Get Started! </h2>
                                <p>Enter your email address below to get started.</p>
                                <input type="text" id="apply-email-field" class="form-control" placeholder="Please Enter Your Email Address">
                                <a href="javascript:void(0);
                                    " id="apply-btn" class="form-control-btn" style="background: url(<?php echo $assets; ?>/btn-<?php echo $name; ?>-next.png);"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="middle-container relative">
            <div class="quote-mobile mobile-only">
                <?php if ($data->type == 'ST1' || $data->type == 'TWT1' || $data->type == 'JJW1') {
                    echo '<img src="' . $assets . '/quote-experienced-driver.png" />';
                } ?>
                <?php if ($data->type == 'ST2' || $data->type == 'TWT2') {
                    echo '<img src="' . $assets . '/cdl-a/quote-cdl-a-driver.png" />';
                } ?>
                <?php if ($data->type == 'STTeam' || $data->type == 'TWT3') {
                    echo '<img src="' . $assets . '/team/quote-team-driver.png" />';
                } ?>
            </div>
            <div class="row middle-container-wrap clearfix">
                <?php if ($data->type == 'ST2' || $data->type == 'TWT2') {
                    echo '<div class="col-2 col background-middle" style="background: url(' . $assets . '/cdl-a/' . $name . '-recent-cdla-driver-gfx.jpg) no-repeat; background-size: cover;"></div>';
                } else if ($data->type == 'TWT3' || $data->type == 'STTeam' ) {
                    echo '<div class="col-2 col background-middle" style="background: url(' . $assets . '/team/' . $name . '-team-driver-gfx.jpg) no-repeat; background-size: cover;"></div>';
                } else {
                    echo '<div class="col-2 col background-middle" style="background: url(' . $assets . '/' . $name . '-experienced-driver-gfx.jpg) no-repeat; background-size: cover;"></div>';
                } ?>
                <div class="col-2 col">
                    <div class="text">
                        <div class="middle-copy flex-center">
                            <div class="quote desktop-only">
                                <?php if ($data->type == 'ST1' || $data->type == 'TWT1' || $data->type == 'JJW1') {
                                    echo '<img src="' . $assets . '/quote-experienced-driver.png" />';
                                } ?>
                                <?php if ($data->type == 'ST2' || $data->type == 'TWT2') {
                                    echo '<img src="' . $assets . '/cdl-a/quote-cdl-a-driver.png" />';
                                } ?>
                                <?php if ($data->type == 'STTeam' || $data->type == 'TWT3') {
                                    echo '<img src="' . $assets . '/team/quote-team-driver.png" />';
                                } ?>
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
        <div class="open-road" <?php echo "style='background: url({$uploadsPath}uploads/systrans_files/{$data->region_graphic}) no-repeat center; background-size: cover;'" ?>>
            <div class="">
                <h3><?php echo $data->sub_title; ?></h3>
            </div>
        </div>
        <div class="invest-section">
            <div class="grid-container">
                <h3>We Invest In You.</h3>
                <div class="flex-container">
                    <div class="box">
                        <p>
                            <img src="<?php echo $assets; ?>/icon-<?php echo $name; ?>-truck-checkmark.png" alt="invest-1" />
                        </p>
                        <h4>METICULOUSLY MAINTAINED<br>FOR YOUR SAFETY</h4>
                        <p><span style="color: #fff;">
                            Your safety is paramount to us. Every tractor has a lane departure & forward collision warning system, hard brake monitoring, and a satellite communication device installed. We have invested in building our own shops, staffing a 24/7/365 road service staff, and developed a robust network of outside shops to keep our trucks rolling. If a truck needs repairs, it’s not going out until it is 100% ready to the hit the road again safely with you at the wheel. You can count on that.
                            </span>
                        </p>
                    </div>
                    <div class="box">
                        <p>
                            <img src="<?php echo $assets; ?>/icon-<?php echo $name; ?>-driver-portal.png" alt="invest-1" />
                        </p>
                        <h4>DRIVER PORTAL: SUPPORT 24/7</h4>
                        <p><span style="color: #fff;">
                            Experience an award-winning app, The Driver Portal, made for drivers by drivers. With a simple tap, you will receive real-time updates and alerts, access your pay, current trip data, messages/notifications, available PTO, contact information, and so much more! Use the Notification Center to stay in touch when you’re out of your truck. You won’t be sitting in the tractor waiting for dispatch. Instead, conveniently stay informed with your cell while living your life. Access your driver portal anywhere on any device, anytime.</span> 
                        </p>
                    </div>
                    <?php if ($data->type == 'ST1' || $data->type == 'TWT1' || $data->type == 'JJW1' || $data->type == 'STTeam' || $data->type == 'TWT3') {
                    echo '<div class="box">
                            <p>
                                <img src="' . $assets . '/icon-' . $name . '-referral-program.png" alt="invest-1" />
                            </p>
                            <h4>DRIVER REFERRAL PROGRAM</h4>
                            <p><span style="color: #fff;">
                                No one knows good drivers better than you. At ' . $company . ', our drivers make us who we are – they are the face, heart, and backbone of this company. Their hard work and dedication to get the job done make us proud every day, and set us apart from our competition. If you have met someone you think would be a great addition to the ' . $company_symbol . ' family, we want an introduction. Your truck driver referrals could earn you up to $1,500!</span>
                            </p>
                        </div>';
                    } ?>
                    <?php if ($data->type == 'ST2' || $data->type == 'TWT2') {
                    echo '<div class="box">
                            <p>
                                <img src="' . $assets . '/cdl-a/icon-' . $name . '-tuition-reimbursement.png" alt="invest-1" />
                            </p>
                            <h4>TUITION REIMBURSEMENT</h4>
                            <p><span style="color: #fff;">
                                Have CDL Tuition debt? We understand it\'s hard to move forward and drive like you mean it when finances are fighting to hold you back. That\'s why our industry-leading program will reimburse up to $5,000 of out of pocket expenses for new graduates and/or drivers who are still paying off their CDL tuition debt. We deposit 12 monthly payments, starting after just 2 months of employment with our team! Now that\'s how you drive like you mean it.</span>
                            </p>
                        </div>';
                    } ?>
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
            <div class="desktop-heading desktop-only">
                <h3 class="capitalize">You're Almost There!</h3>
                <p>
                    Finish entering your info and a recruiter will contact you.
                </p>
            </div>
            <div class="form">
                <div class="form-wrap">
                    <form action="" method="post" id="leadForm" novalidate="novalidate">
                        <div class="groupfields flex-center">
                            <div class="firstname-control col-half col-half-desktop form-margin">
                                <input type="text" name="first_name" placeholder="First name" class="form-control">
                            </div>
                            <div class="lastname-control col-half col-half-desktop">
                                <input type="text" name="last_name" placeholder="Last name" class="form-control">
                            </div>
                        </div>
                        <div class="groupfields clearfix flex-center-desktop">
                            <div class="email-control col-half-desktop form-margin">
                                <input type="text" name="email" placeholder="Email Address" class="form-control">
                            </div>
                            <div class="phone-control col-half-desktop">
                                <input type="text" name="phone" placeholder="Phone number" class="form-control">
                            </div>
                        </div>
                        <div class="groupfields clearfix flex-center-desktop">
                            <input type="text" name="street_address" placeholder="Street Address" class="form-control col-half-desktop form-margin">
                            <input type="text" name="city" placeholder="City" class="form-control col-half-desktop">
                        </div>
                        <div class="groupfields flex-center">
                            <div class="state-control col-half form-margin">
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
                        <div class="groupfields clearfix flex-center-desktop">
                            <div class="cdl-valid-control col-half-desktop form-margin">
                                <select name="years_experience" class="form-control">
                                    <option>Years of Experience?</option>
                                    <option value="0-6-months">0 - 6 Months</option>
                                    <option value="6-12-months">6 - 12 Months</option>
                                    <option value="1-3-years">1 - 3 Years</option>
                                    <option value="3-5 Years">3 - 5 Years</option>
                                    <option value="5-plus-years">5+</option>
                                </select>
                            </div>
                            <div class="cdl-valid-control col-half-desktop">
                                <select name="cdl_valid" class="form-control">
                                    <option>Do you have your Class A CDL?</option>
                                    <option value="Yes">Yes</option>
                                    <option value="No">No</option>
                                </select>
                            </div>
                        </div>
                        <input type="hidden" name="form_type" value="T3">
                        <input type="hidden" name="template_type" value="<?php echo $data->type ?>">
                        <input id="submit" type="submit" value="Submit Application" class="form-control-btn btn">
                    </form>
                </div>
            </div>
        </div>
        <div class="footer-container">
            <div class="footer-wrap">
                <div class="phone-number-footer">
                    <h4>Call now to speak with a recruiter.</h4>
                    <h3 style="color: <?php echo $primary_color ?>">
                        <?php echo $data->phone ?>
                    </h3>
                </div>
                <div class="terms">
                    <p>
                        *BY COMPLETING THIS FORM, I AGREE TO RECEIVE CORRESPONDENCE FROM <?php echo $company; ?>. THIS INCLUDES RECEIVING TELEPHONE CALLS, PRERECORDED MESSAGES, TEXT MESSAGES AND EMAILS ABOUT TRUCKING JOB OPPORTUNITIES AT THE CONTACT NUMBER AND ADDRESS I HAVE PROVIDED ABOVE. I UNDERSTAND THAT I AM NOT REQUIRED TO PROVIDE MY CONSENT AS A CONDITION OF SUBMITTING MY APPLICATION.
                    </p>
                    <ul>
                        <li><a href="<?php echo $privacy_url; ?>" target="_blank">Privacy Policy</a><span>|</span></li>
                        <li><a target="blank" href="<?php echo $website_url ?>"><?php echo $website_name ?></a><span>|</span></li>
                        <li><a href="https://intelliapp2.driverapponline.com/c/<?php echo $intellaappPath; ?>?r=<?php echo $data->intelliapp_referral_code ?>" target="_blank">Online Application</a></li>
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
        ga('create', '<?php echo $data->ga_lp; ?>', 'auto');
        ga('send', 'pageview');</script>

<!-- Facebook Pixel Code -->
<script>
  !function(f,b,e,v,n,t,s)
  {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
  n.callMethod.apply(n,arguments):n.queue.push(arguments)};
  if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
  n.queue=[];t=b.createElement(e);t.async=!0;
  t.src=v;s=b.getElementsByTagName(e)[0];
  s.parentNode.insertBefore(t,s)}(window, document,'script',
  'https://connect.facebook.net/en_US/fbevents.js');
  fbq('init', '824397174323085');
  fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none"
  src="https://www.facebook.com/tr?id=824397174323085&ev=PageView&noscript=1"
/></noscript>
<!-- End Facebook Pixel Code -->

<?php $this->renderPartial('_specific_converion_codes', array('slug' => $slug)); ?>

