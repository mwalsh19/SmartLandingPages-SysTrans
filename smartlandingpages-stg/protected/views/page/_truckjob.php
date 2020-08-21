<div class="form-group">
    <label class="col-sm-2 control-label required">Referral code<br><small>(Lead Form)</small></label>
    <div class="col-sm-6">
        <?php echo $form->textField($model, 'referral_code', array('class' => 'form-control')); ?>
        <?php echo $form->error($model, 'referral_code', array('class' => 'help-block errorMessage')); ?>
    </div>
</div>

<div class="form-group">
    <label class="col-sm-2 control-label required">Referral code<br><small>(Intelliapp)</small></label>
    <div class="col-sm-6">
        <?php echo $form->textField($model, 'intelliapp_referral_code', array('class' => 'form-control')); ?>
        <?php echo $form->error($model, 'intelliapp_referral_code', array('class' => 'help-block errorMessage')); ?>
    </div>
</div>
<div class="form-group">
    <label class="col-sm-2 control-label required">Phone</label>
    <div class="col-sm-6">
        <?php echo $form->textField($model, 'phone_number', array('class' => 'form-control')); ?>
        <?php echo $form->error($model, 'phone_number', array('class' => 'help-block errorMessage')); ?>
    </div>
</div>
<div class="form-group">
    <label class="col-sm-2 control-label required">Content</label>
    <div class="col-sm-10">
        <?php
        $this->widget('ext.ckeditor.CKEditorWidget', array(
            "model" => $model, # Data-Model
            "attribute" => 'content', # Attribute in the Data-Model
            'defaultValue' => $model->content,
            "config" => array(
                "height" => "300px",
                "width" => "auto",
                "toolbar" => Utils::getToolbarStyles()
            ),
            "ckEditor" => Yii::app()->basePath . "/../manager/ckeditor/ckeditor_php5.php",
            "ckBasePath" => Yii::app()->baseUrl . "/manager/ckeditor/",
        ));
        ?>
        <?php echo $form->error($model, 'content', array('class' => 'help-block errorMessage')); ?>

    </div>
</div>
<?php
echo $form->hiddenField($model, 'background', array('class' => 'form-control'));
