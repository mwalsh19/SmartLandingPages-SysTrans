<?php
$array_slugs = array(
    'google21-lp',
    'experienced/google-lp',
    'student/google-lp',
    'experienced/yahoo-lp',
    'student/yahoobing-lp',
    'recentgrad/google-lp'
//    'recentgrad/yahoo-lp'
);
if (in_array($slug, $array_slugs)) {
    ?>
    <!-- Google Code for Retargeting JoinSwift.com visitors -->
    <!-- Remarketing tags may not be associated with personally identifiable information or placed on pages related to sensitive categories. For instructions on adding this tag and more information on the above requirements, read the setup guide: google.com/ads/remarketingsetup -->
    <script type="text/javascript">
        /* <![CDATA[ */
        var google_conversion_id = 1029165656;
        var google_conversion_label = "TO0CCJzCmQkQ2KTf6gM";
        var google_custom_params = window.google_tag_params;
        var google_remarketing_only = true;
        /* ]]> */
    </script>
    <script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js">
    </script>
    <noscript>
    <div style="display:inline;">
        <img height="1" width="1" style="border-style:none;" alt="" src="//googleads.g.doubleclick.net/pagead/viewthroughconversion/1029165656/?value=1.00&amp;currency_code=USD&amp;label=TO0CCJzCmQkQ2KTf6gM&amp;guid=ON&amp;script=0"/>
    </div>
    </noscript>
    <?php
}

if ($slug === 'swiftrefrigerated/jobsintrucks') {
    echo '<img src="http://www.jobsintrucks.com/pix.cgi?site=swift_refrigerated&page=app_started&jobref=LACED_SR_Generic_JobsInTrucks_EOI" width="1" height="1">';
}

if ($slug === 'DR/Exp/Jobs2Careers/Fall2015SignOnBonus') {
    //echo '<img src="//www.jobs2careers.com/conversion2.php?p=1536" width="1" height="1" />';
}

if ($slug === 'student/multiview') {
    echo '<script src="//assets.adobedtm.com/c876840ac68fc41c08a580a3fb1869c51ca83380/satelliteLib-84d07e2e188e3580a8c8ce9c26be7ad36914025e.js"></script>';
    echo '<script type="text/javascript">_satellite.pageBottom();</script>';
}