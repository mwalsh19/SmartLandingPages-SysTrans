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
        <?php echo $form->textField($model, 'phone_number_1', array('class' => 'form-control')); ?>
        <?php echo $form->error($model, 'phone_number_1', array('class' => 'help-block errorMessage')); ?>
    </div>
</div>

<div class="form-group">
    <label class="col-sm-2 control-label required">This page support Indeed service?</label>
    <div class="col-sm-2">
        <?php echo $form->dropDownList($model, 'support_indeed', array(1 => 'Yes', 0 => 'No'), array('class' => 'form-control')); ?>
        <?php echo $form->error($model, 'support_indeed', array('class' => 'help-block errorMessage')); ?>
    </div>
</div>
<div class="form-group">
    <label class="col-sm-2 control-label required">Description</label>
    <div class="col-sm-10">
        <?php
        $this->widget('ext.ckeditor.CKEditorWidget', array(
            "model" => $model, # Data-Model
            "attribute" => 'description_html', # Attribute in the Data-Model
            'defaultValue' => $model->description_html,
            "config" => array(
                "height" => "300px",
                "width" => "auto",
                "toolbar" => Utils::getToolbarStyles()
            ),
            "ckEditor" => Yii::app()->basePath . "/../manager/ckeditor/ckeditor_php5.php",
            "ckBasePath" => Yii::app()->baseUrl . "/manager/ckeditor/",
        ));
        ?>
        <?php echo $form->error($model, 'description_html', array('class' => 'help-block errorMessage')); ?>

    </div>
</div>
<div class="form-group">
    <label class="col-sm-2 control-label required">Details</label>
    <div class="col-sm-10">
        <?php
        $this->widget('ext.ckeditor.CKEditorWidget', array(
            "model" => $model, # Data-Model
            "attribute" => 'details_html', # Attribute in the Data-Model
            'defaultValue' => $model->details_html,
            "config" => array(
                "height" => "150px",
                "width" => "auto",
                "toolbar" => Utils::getToolbarStyles()
            ),
            "ckEditor" => Yii::app()->basePath . "/../manager/ckeditor/ckeditor_php5.php",
            "ckBasePath" => Yii::app()->baseUrl . "/manager/ckeditor/",
        ));
        ?>
        <?php echo $form->error($model, 'details_html', array('class' => 'help-block errorMessage')); ?>

    </div>
</div>
<div class="form-group">
    <label class="col-sm-2 control-label required">Secondary description</label>
    <div class="col-sm-10">
        <?php
        $this->widget('ext.ckeditor.CKEditorWidget', array(
            "model" => $model, # Data-Model
            "attribute" => 'secondary_description_html', # Attribute in the Data-Model
            'defaultValue' => $model->secondary_description_html,
            "config" => array(
                "height" => "150px",
                "width" => "auto",
                "toolbar" => Utils::getToolbarStyles()
            ),
            "ckEditor" => Yii::app()->basePath . "/../manager/ckeditor/ckeditor_php5.php",
            "ckBasePath" => Yii::app()->baseUrl . "/manager/ckeditor/",
        ));
        ?>
        <?php echo $form->error($model, 'details_html', array('class' => 'help-block errorMessage')); ?>

    </div>
</div>

<?php
echo $form->hiddenField($model, 'image', array('class' => 'form-control'));
echo $form->hiddenField($model, 'image_position', array('class' => 'form-control'));
?>