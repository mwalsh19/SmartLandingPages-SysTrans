<?php
Yii::app()->clientScript->registerPackage('truckdrivers');
$directory = Yii::app()->getBaseUrl(true) . '/vendor/truck-drivers/assets';
?>
<div class="wrapper" style="background-image: url(<?php echo $directory . '/images/' . $data->background; ?>)"><div id="banner_image"><img src="<?php echo $directory ?>/images/header.jpg" width="810" height="112" /></div>
    <div id="banner_mobile"></div>
    <div id="inner_contents">

        <?php echo $data->header_html ?>

        <div id="form_column">
            <iframe src="http://swiftdriverapps.com/miniapp/FUY2A4/indeed" style="border:0px  none;" name="myiFrame" scrolling="no" frameborder="1" marginheight="0px" marginwidth="0px" height="250px" width="315px"></iframe>
        </div>
        <div id="phone_column">
            <p>Take the first step toward a rewarding career with Swift.<br>
            </p>
            <?php
            $east = $data->phone_number_1;
            $west = $data->phone_number_2;
            if (!empty($east)) {
                ?>
                <p>
                    Call today:
                    <img src="<?php echo $directory ?>/images/redphone.png" align="left" width="26" height="46" style="margin-right:5px;" /><br>
                    <span style="color:#790000; font-size:18px;"><a href="tel:<?php echo str_replace('-', '', $east); ?>" style="color:#790000; text-decoration: none;"><?php echo $east; ?></a></span>
                </p>
                <?php
            }
            if (!empty($west)) {
                ?>
                <p>
                    Call today:
                    <img src="<?php echo $directory ?>/images/bluephone.png" width="23" height="44" align="left" style="margin-right:7px;"/><br>
                    <span style="color:#213564; font-size:18px;"><a href="tel:<?php echo str_replace('-', '', $west); ?>" style="color:#213564; text-decoration: none;"><?php echo $west; ?></a></span>
                </p>
                <?php
            }
            ?>
        </div>

        <?php echo $data->description_html ?>

    </div>
    <a href="<?php echo Yii::app()->createUrl('landing-pages/privacy-policy'); ?>" class="bottomlinks"> Privacy Policy
    </a><a href="http://www.joinswift.com" class="bottomlinks">
        joinswift.com
    </a>
    <a href="http://swiftdriverapps.com/app/4VHWQG/indeed" class="bottomlinks">Online Application </a></div>


<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-68200113-1', 'auto');
  ga('send', 'pageview');

</script>
<!-- Start Quantcast Tag -->
<script type="text/javascript">
    var _qevents = _qevents || [];
    (function () {
        var elem = document.createElement('script');
        elem.src = (document.location.protocol == "https:" ? "https://secure" : "http://edge") + ".quantserve.com/quant.js";
        elem.async = true;
        elem.type = "text/javascript";
        var scpt = document.getElementsByTagName('script')[0];
        scpt.parentNode.insertBefore(elem, scpt);

    })();
    _qevents.push(
            {qacct: "p-0zTGw55mJDG6B", labels: "_fp.event.Join Swift Bonus"}

    );

</script>
<noscript>
<img src="//secure.quantserve.com/pixel/p-0zTGw55mJDG6B.gif?labels=_fp.event.Join+Swift+Bonus" style="display: none;" border="0" height="1" width="1" alt="Quantcast"/>
</noscript>
