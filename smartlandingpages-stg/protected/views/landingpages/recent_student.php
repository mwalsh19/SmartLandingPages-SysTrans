<?php
Yii::app()->clientScript->registerCssFile('http://fast.fonts.net/cssapi/fdbec8c1-bb62-4a79-9b2e-74758d1444a9.css');
Yii::app()->clientScript->registerPackage('recent_student');

$template_type = "";
$uploadsPath = Yii::app()->getBaseUrl(true) . '/';
switch ($data->type) {
    case 'R':
        $template_type = "recentgrad";
        break;
    case 'RDT':
        $template_type = "recentgrad-dt";
        break;
    case 'S':
        $template_type = "student";
        break;
    case 'SDT':
        $template_type = "student-dt";
        break;
    case 'E':
        $template_type = "experienced";
        break;
    case 'EDT':
        $template_type = "experienced-dt";
        break;
    case 'D':
        $template_type = "dedicated";
        break;
    case 'I':
        $template_type = "intermodal";
        break;
    case 'REFRI':
        $template_type = "refrigerated";
        break;
    case 'ND':
        $template_type = "north-dakota";
        break;
    case 'ECAN':
        $template_type = "experienced-canada";
        break;
}

if (!empty($data->background)) {
    Yii::app()->clientScript->registerCss('dinamycBackground', "
    .landscape-container{
        background: url({$uploadsPath}uploads/recent_student_files/{$data->background}) no-repeat !important;
    }
");
}
if (!empty($data->background_mobile)) {
    Yii::app()->clientScript->registerCss('dinamycBackgroundMobile', "
    @media screen and (max-width: 767px){
        .landscape-container{
            background: url({$uploadsPath}uploads/recent_student_files/{$data->background_mobile}) no-repeat !important;
        }
    }
");
}
?>
<div class="main" id="swift-<?php echo $template_type; ?>">
    <div class="main-wrap">
        <div class="heading-separator"></div>

        <!-- top container-->
        <div class="top-container">
            <div class="mobile-logo"></div>
            <div class="btnGroup-mobile clearfix">
                <div class="grouBtn-wrap">
                    <a href="tel:<?php echo $data->phone; ?>" <?php if($data->type == 'S' || $data->type == 'SDT'){ ?>onclick="swiftEventTracking('Mobile Action', 'ClickToCall');"<?php } ?> id="callBtn" class="form-control-btn">CLICK TO CALL</a>
                    <a href="#quickForm" id="quickFormBtn" class="form-control-btn" <?php if($data->type == 'S' || $data->type == 'SDT'){ ?>onclick="swiftEventTracking('Mobile Action', 'QuickForm');"<?php } ?>>QUICK FORM</a>
                </div>
            </div>
            <div class="top-container-wrap">
                <!-- <div class="landscape-container" <?php //echo!empty($data->background) ? "style='background: url({$uploadsPath}uploads/recent_student_files/{$data->background}) no-repeat;'" : ""         ?>>-->
                <div class="landscape-container">
                    <div class="landscape-wrap">
                        <!-- main description-->
                        <div class="main-description">
                            <div class="desktop-logo"></div>
                            <div class="primary-description">
                                <h1>Now Hiring</h1>
                                <h2><?php echo $data->main_title; ?></h2>
                                <h3>Drivers</h3>
                            </div>
                            <div class="text-separator"></div>
                            <div class="secondary-description">
                                <p>
                                    <?php echo $data->main_description; ?>
                                </p>
                            </div>

                        </div>
                        <!-- form container-->

                        <?php
                        if ($data->type == 'ECAN') {
                            ?>
                            <div class="phone-heading">
                                <h4>CALL NOW TO LEARN MORE.</h4>
                                <h3><?php echo $data->phone; ?></h3>
                            </div>
                            <?php
                        }
                        if ($data->type != 'ECAN') {
                            ?>
                            <section class="form-desktop">
                                <div class="container-form">
                                    <?php $this->renderPartial('_leadForm', array('data' => $data)); ?>
                                </div>
                            </section>
                            <?php
                        }
                        ?>

                    </div>
                </div>
                <!-- truck figure container-->
                <div class="container-figure">
                    <div class="man-figure"></div>
                </div>
            </div>

        </div>
        <!-- end top container-->
        <div class="middle-container">
            <h2>Driver Benefits</h2>

            <div class="benefits-sections">
                <ul class="clearfix">
                    <li class="item1">
                        <div class="section-wrap" style="background: url(<?php echo $uploadsPath . 'uploads/recent_student_files/' . $data->benef1_figure ?>) no-repeat; background-size: cover;">
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
                        <div class="section-wrap" style="background: url(<?php echo $uploadsPath . 'uploads/recent_student_files/' . $data->benef2_figure ?>) no-repeat; background-size: cover;">
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
                        <div class="section-wrap" style="background: url(<?php echo $uploadsPath . 'uploads/recent_student_files/' . $data->benef3_figure ?>) no-repeat; background-size: cover;">
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
                        <div class="section-wrap" style="background: url(<?php echo $uploadsPath . 'uploads/recent_student_files/' . $data->benef4_figure ?>) no-repeat; background-size: cover;">
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
                        <div class="section-wrap"style="background: url(<?php echo $uploadsPath . 'uploads/recent_student_files/' . $data->benef5_figure ?>) no-repeat; background-size: cover;">
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
                        <div class="section-wrap" style="background: url(<?php echo $uploadsPath . 'uploads/recent_student_files/' . $data->benef6_figure ?>) no-repeat; background-size: cover;">
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
            <hr class="hr-separator">
        </div>

        <div class="bottom-container clearfix">
            <div class="left-side">
                <div class="left-side-wrap">
                    <?php
                    echo $data->bottom_headline_copy;
                    ?>
                    <?php
                    echo $data->bottom_body_copy;
                    ?>
                </div>
            </div>
            <a name="quickForm"></a>
            <section class="form-mobile"></section>
            <div class="right-side">
                <h4><?php echo ($data->type == 'ECAN') ? 'CALL NOW TO LEARN MORE.' : 'CALL NOW TO SPEAk with a recruiter.' ?></h4>
                <h3>
                    <?php
                    echo $data->phone;
                    ?>
                </h3>
            </div>
        </div>
        <div class="footer-container">
            <div class="footer-wrap">
                <p>
                    *By completing this form, I agree to receive correspondence from Swift Transportation. This includes receiving autodialed telephone calls, prerecorded messages, text messages and emails about trucking job opportunities at the contact number and address I have provided above. I understand that I am not required to provide my consent as a condition of submitting my application.
                </p>
                <ul>
                    <li><a href="<?php echo Yii::app()->createUrl('landing-pages/privacy-policy'); ?>" target="_blank">Privacy Policy</a><span>|</span></li>
                    <li><a target="blank" href="http://swifttrans.com/careers/for-drivers">swifttrans.com</a></li>
                    <?php if($data->type != 'ECAN') { 
                        
                        if(strpos($slug, 'swiftrefrigerated') !== false) {
                            $intellaappPath = 'centralref';
                        } else {
                            $intellaappPath = 'swiftcomp';
                        }
                        ?>
                    <li><span>|</span><a href="https://intelliapp2.driverapponline.com/c/<?php echo $intellaappPath; ?>?r=<?php echo $data->intelliapp_referral_code; ?>" target="_blank">Online Application</a></li>
                    <?php } ?>
                </ul>
            </div>
        </div>
    </div>
</div>
<?php
$this->renderPartial('_specific_converion_codes', array('slug' => $slug));

$this->renderPartial('_refrigerated_ga', array('slug' => $slug, 'isThankyou' => false));

$this->renderPartial('_recruitment_ga', array('slug' => $slug, 'isThankyou' => false, 'data_type' => $data->type));
