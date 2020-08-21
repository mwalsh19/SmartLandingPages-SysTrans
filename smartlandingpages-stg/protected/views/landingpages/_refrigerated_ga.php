<?php

if(strpos($slug, 'swiftrefrigerated') !== false && !isset($_GET['no-track'])) {
    if(isset($isThankyou) && $isThankyou) {
        $ga_tracking_code = 'UA-68200113-6';
    } else {
        $ga_tracking_code = 'UA-68200113-2';
    }
 ?>

<script>
 (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
 (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
 m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
 })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

 ga('create', '<?php echo $ga_tracking_code; ?>', 'auto');
 ga('send', 'pageview');

</script>

<?php 

}