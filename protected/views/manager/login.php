
<div class="form-box" id="login-box">
    <!--<div class="header"><img src="<?php echo Yii::app()->baseUrl ?>/manager/images/williams_sm_logo.png" class="icon"></div>-->
    <div class="header" style="background-color: #919194;" ><img src="<?php echo Yii::app()->baseurl; ?>/manager/images/system-trans-logo.png" /></div>

    <?php
    $form = $this->beginWidget('CActiveForm', array(
        'id' => 'login-form',
        'enableAjaxValidation' => true,
        'enableClientValidation' => true,
    ));
    ?>

    <div class="body bg-gray">
        <div class="form-group">
            <?php echo $form->textField($model, 'username', array('placeholder' => 'User ID', 'class' => 'form-control')); ?>
            <?php echo $form->error($model, 'username'); ?>
        </div>
        <div class="form-group">
            <?php echo $form->passwordField($model, 'password', array('placeholder' => 'Password', 'class' => 'form-control')); ?>
            <?php echo $form->error($model, 'password'); ?>
        </div>
        <div class="form-group">
            <?php echo $form->checkBox($model, 'rememberMe'); ?> Remember me
        </div>
    </div>
    <div class="footer">
        <button type="submit" class="btn bg-gray btn-block">Log me in</button>
    </div>

    <?php $this->endWidget(); ?>

    

</div>

<div style="margin: 75px auto 0px auto; max-width: 705px;">
    <img src="<?php if ($_SERVER['SERVER_NAME'] != 'localhost') { echo '/landing-pages'; } ?>/manager/images/laced_footer.png">
</div>