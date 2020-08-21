<?php
$basePath = Yii::app()->getBaseUrl(true) . '/';
$ClienteScript = Yii::app()->clientScript;
$ClienteScript->registerCssFile('http://fast.fonts.net/cssapi/fdbec8c1-bb62-4a79-9b2e-74758d1444a9.css');
$ClienteScript->registerCssFile($basePath . 'vendor/swifttrans/css/styles.css');
$ClienteScript->registerScriptFile($basePath . 'vendor/swifttrans/js/jquery.validate.min.js', CClientScript::POS_END);
$ClienteScript->registerScriptFile($basePath . 'vendor/swifttrans/js/main.js', CClientScript::POS_END);
$ClienteScript->registerScript('ga-iology', "
(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

ga('create', 'UA-68906649-1', 'auto', {
  'allowLinker': true
});
ga('send', 'pageview');
", CClientScript::POS_BEGIN);
?>


<div class="swifttransForm">
    <div class="formErrors">
        <div class="alert alert-danger alert-dismissible fade in" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
            <p>Oh snap! An error has occurred, please fill in the required fields.</p>
        </div>
    </div>
    <?php
    $this->renderPartial('_leadForm', array('swifttransForm' => true));
    ?>
</div>


