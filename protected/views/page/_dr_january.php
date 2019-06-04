<?php
$baseUrl = Yii::app()->getBaseUrl(true);
?>
<div class="form-group">
    <label class="col-sm-2 control-label required">Referral code<br> <small>(Lead Form)</small></label>
    <div class="col-sm-6">
        <?php echo $form->textField($model, 'referral_code', array('class' => 'form-control input-sm')); ?>
        <?php echo $form->error($model, 'referral_code', array('class' => 'help-block errorMessage')); ?>
    </div>
</div>
<div class="form-group">
    <label class="col-sm-2 control-label required">Referral code<br> <small>(Intelliapp)</small></label>
    <div class="col-sm-6">
        <?php echo $form->textField($model, 'intelliapp_referral_code', array('class' => 'form-control input-sm')); ?>
        <?php echo $form->error($model, 'intelliapp_referral_code', array('class' => 'help-block errorMessage')); ?>
    </div>
</div>
<div class="form-group">
    <label class="col-sm-2 control-label required">Phone</label>
    <div class="col-sm-6">
        <?php echo $form->textField($model, 'phone', array('class' => 'form-control input-sm')); ?>
        <?php echo $form->error($model, 'phone', array('class' => 'help-block errorMessage')); ?>
    </div>
</div>

<div class="form-group">
    <label class="col-sm-2 control-label required">Body title</label>
    <div class="col-sm-6">
        <?php echo $form->textField($model, 'body_title', array('class' => 'form-control input-sm')); ?>
        <?php echo $form->error($model, 'body_title', array('class' => 'help-block errorMessage')); ?>
    </div>
</div>
<div class="form-group">
    <label class="col-sm-2 control-label required">Body Copy</label>
    <div class="col-sm-10">
        <?php
        $this->widget('ext.ckeditor.CKEditorWidget', array(
            "model" => $model, # Data-Model
            "attribute" => 'body_copy', # Attribute in the Data-Model
            'defaultValue' => $model->body_copy,
            "config" => array(
                "height" => "100px",
                "width" => "auto",
                "toolbar" => Utils::getToolbarStyles()
            ),
            "ckEditor" => Yii::app()->basePath . "/../manager/ckeditor/ckeditor_php5.php",
            "ckBasePath" => Yii::app()->baseUrl . "/manager/ckeditor/",
        ));
        ?>
        <?php echo $form->error($model, 'body_copy', array('class' => 'help-block errorMessage')); ?>

    </div>
</div>
<?php echo $form->hiddenField($model, 'type', array('class' => 'form-control input-sm', 'value' => 'NEWR')); ?>
