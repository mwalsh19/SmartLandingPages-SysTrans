<?php
$baseUrl = Yii::app()->getBaseUrl(true);
if ($model->type !== 'LP1') {
    Yii::app()->clientScript->registerScriptFile($baseUrl . '/manager/js/search.js', CClientScript::POS_END);
}
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
    <label class="col-sm-2 control-label required">Main Title</label>
    <div class="col-sm-6">
        <?php echo $form->textField($model, 'main_title', array('class' => 'form-control input-sm')); ?>
        <?php echo $form->error($model, 'main_title', array('class' => 'help-block errorMessage')); ?>
    </div>
</div>

    <div class="form-group">
        <label class="col-sm-2 control-label required">SubTitle</label>
        <div class="col-sm-6">
            <?php echo $form->textField($model, 'sub_title', array('class' => 'form-control input-sm')); ?>
            <?php echo $form->error($model, 'sub_title', array('class' => 'help-block errorMessage')); ?>
        </div>
    </div>

<div class="form-group">
    <label class="col-sm-2 control-label required">Main Description</label>
    <div class="col-sm-10">
        <?php
        $this->widget('ext.ckeditor.CKEditorWidget', array(
            "model" => $model, # Data-Model
            "attribute" => 'main_description', # Attribute in the Data-Model
            'defaultValue' => $model->main_description,
            "config" => array(
                "height" => "100px",
                "width" => "auto",
                "toolbar" => Utils::getToolbarStyles()
            ),
            "ckEditor" => Yii::app()->basePath . "/../manager/ckeditor/ckeditor_php5.php",
            "ckBasePath" => Yii::app()->baseUrl . "/manager/ckeditor/",
        ));
        ?>
        <?php echo $form->error($model, 'main_description', array('class' => 'help-block errorMessage')); ?>

    </div>
</div>

    <div class="form-group">
        <label class="col-sm-2 control-label required">Google Analytic code<br><small>(landing page)</small></label>
        <div class="col-sm-6">
            <?php echo $form->textField($model, 'ga_lp', array('class' => 'form-control input-sm')); ?>
            <?php echo $form->error($model, 'ga_lp', array('class' => 'help-block errorMessage')); ?>
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-2 control-label required">Google Analytic code<br><small>(Thank you page)</small></label>
        <div class="col-sm-6">
            <?php echo $form->textField($model, 'ga_tp', array('class' => 'form-control input-sm')); ?>
            <?php echo $form->error($model, 'ga_tp', array('class' => 'help-block errorMessage')); ?>
        </div>
    </div>


    <hr>
    <h3>Background</h3>
    <div class="row">
        <div class="form-group">
            <div class="col-sm-5 col-sm-offset-1">
                <label>Desktop version*</label>
                <?php echo $form->fileField($model, 'background', array('id' => 'choose')); ?>
                <?php
                // systrans
                if (!$model->isNewRecord) {
                    echo '<br>';
                    $this->widget('ext.SAImageDisplayer', array(
                        'defaultImage' => Yii::app()->baseUrl . '/images/empty.png',
                        'baseDir' => 'uploads/systrans_files',
                        'originalFolderName' => '',
                        'image' => $model->background,
                        'size' => 'intermodal_background',
                        'class' => 'img-responsive'
                    ));
                    echo '<br>';
                }
                /*if (!$model->isNewRecord) {
                    echo '<br>';
                    $this->widget('ext.SAImageDisplayer', array(
                        'defaultImage' => Yii::app()->baseUrl . '/images/empty.png',
                        'baseDir' => 'uploads/intermodal_files',
                        'originalFolderName' => '',
                        'image' => $model->background,
                        'size' => 'intermodal_background',
                        'class' => 'img-responsive'
                    ));
                    echo '<br>';
                }*/
                ?>
                <?php echo $form->error($model, 'background', array('class' => 'help-block errorMessage')); ?>
                <?php echo CHtml::hiddenField('h_b_7', $model->background); ?>
            </div>
            <div class="col-sm-5 col-sm-offset-1">
                <label>Mobile version*</label>
                <?php echo $form->fileField($model, 'background_mobile', array('id' => 'choose')); ?>
                <?php
                if (!$model->isNewRecord) {
                    echo '<br>';
                    $this->widget('ext.SAImageDisplayer', array(
                        'defaultImage' => Yii::app()->baseUrl . '/images/empty.png',
                        'baseDir' => 'uploads/systrans_files',
                        'originalFolderName' => '',
                        'image' => $model->background_mobile,
                        'size' => 'intermodal_background',
                        'class' => 'img-responsive'
                    ));
                    echo '<br>';
                }
                ?>
                <?php echo $form->error($model, 'background_mobile', array('class' => 'help-block errorMessage')); ?>
                <?php echo CHtml::hiddenField('h_b_8', $model->background_mobile); ?>
            </div>
        </div>
    </div>
<!-- added region graphic here -->
    <hr>
    <h3>Region Graphic</h3>
    <div class="row">
        <div class="form-group">
            <div class="col-sm-5 col-sm-offset-1">
                <label>Desktop version*</label>
                <?php echo $form->fileField($model, 'region_graphic', array('id' => 'choose')); ?>
                <?php
                if (!$model->isNewRecord) {
                    echo '<br>';
                    $this->widget('ext.SAImageDisplayer', array(
                        'defaultImage' => Yii::app()->baseUrl . '/images/empty.png',
                        'baseDir' => 'uploads/systrans_files',
                        'originalFolderName' => '',
                        'image' => $model->region_graphic,
                        'size' => 'intermodal_region_graphic',
                        'class' => 'img-responsive'
                    ));
                    echo '<br>';
                }
                ?>
                <?php echo $form->error($model, 'region_graphic', array('class' => 'help-block errorMessage')); ?>
                <?php echo CHtml::hiddenField('h_b_9', $model->region_graphic); ?>
            </div>
            <div class="col-sm-5 col-sm-offset-1">
                <label>Mobile version*</label>
                <?php echo $form->fileField($model, 'region_graphic_mobile', array('id' => 'choose')); ?>
                <?php
                if (!$model->isNewRecord) {
                    echo '<br>';
                    $this->widget('ext.SAImageDisplayer', array(
                        'defaultImage' => Yii::app()->baseUrl . '/images/empty.png',
                        'baseDir' => 'uploads/systrans_files',
                        'originalFolderName' => '',
                        'image' => $model->region_graphic_mobile,
                        'size' => 'intermodal_region_graphic',
                        'class' => 'img-responsive'
                    ));
                    echo '<br>';
                }
                ?>
                <?php echo $form->error($model, 'region_graphic_mobile', array('class' => 'help-block errorMessage')); ?>
                <?php echo CHtml::hiddenField('h_b_10', $model->region_graphic_mobile); ?>
            </div>
        </div>
    </div>
<hr>
<h3>Benefits</h3>

<div class="row">
    <div class="col-sm-6">
        <div class="panel panel-default">
            <div class="panel-body">
                <div class="col-sm-4">
                    <?php echo $form->fileField($model, 'benef1_figure', array('id' => 'choose')); ?>
                    <?php
                    if (!$model->isNewRecord) {
                        echo '<br>';
                        $this->widget('ext.SAImageDisplayer', array(
                            'defaultImage' => Yii::app()->baseUrl . '/images/empty.png',
                            'baseDir' => 'uploads/systrans_files',
                            'originalFolderName' => '',
                            'image' => $model->benef1_figure,
                            'size' => 'intermodal_files',
                            'class' => 'img-responsive'
                        ));
                        echo '<br>';
                    }
                    ?>
                    <?php echo $form->error($model, 'benef1_figure', array('class' => 'help-block errorMessage')); ?>
                    <?php echo CHtml::hiddenField('h_b_1', $model->benef1_figure); ?>
                </div>
                <div class="col-sm-8">
                    <label class="control-label required">Title</label>
                    <?php echo $form->textField($model, 'benef1_caption_title', array('class' => 'form-control input-sm')); ?>
                    <label class="control-label required">Caption</label>
                    <?php
                    echo $form->textArea($model, 'benef1_caption', array('class' => 'form-control input-sm', 'rows' => 5));
                    ?>
                    <?php echo $form->error($model, 'benef1_caption', array('class' => 'help-block errorMessage')); ?>
                </div>
            </div>
        </div>
    </div>
    <div class="col-sm-6">
        <div class="panel panel-default">
            <div class="panel-body">
                <div class="col-sm-4">
                    <?php echo $form->fileField($model, 'benef2_figure', array('id' => 'choose')); ?>
                    <?php
                    if (!$model->isNewRecord) {
                        echo '<br>';
                        $this->widget('ext.SAImageDisplayer', array(
                            'defaultImage' => Yii::app()->baseUrl . '/images/empty.png',
                            'baseDir' => 'uploads/systrans_files',
                            'originalFolderName' => '',
                            'image' => $model->benef2_figure,
                            'size' => 'intermodal_files',
                            'class' => 'img-responsive'
                        ));
                        echo '<br>';
                    }
                    ?>
                    <?php echo $form->error($model, 'benef2_figure', array('class' => 'help-block errorMessage')); ?>
                    <?php echo CHtml::hiddenField('h_b_2', $model->benef2_figure); ?>
                </div>
                <div class="col-sm-8">
                    <label class="control-label required">Title</label>
                    <?php echo $form->textField($model, 'benef2_caption_title', array('class' => 'form-control input-sm')); ?>
                    <label class="control-label required">Caption</label>
                    <?php
                    echo $form->textArea($model, 'benef2_caption', array('class' => 'form-control input-sm', 'rows' => 5));
                    ?>
                    <?php echo $form->error($model, 'benef2_caption', array('class' => 'help-block errorMessage')); ?>
                </div>
            </div>
        </div>
    </div>
    <div class="col-sm-6">
        <div class="panel panel-default">
            <div class="panel-body">
                <div class="col-sm-4">
                    <?php echo $form->fileField($model, 'benef3_figure', array('id' => 'choose')); ?>
                    <?php
                    if (!$model->isNewRecord) {
                        echo '<br>';
                        $this->widget('ext.SAImageDisplayer', array(
                            'defaultImage' => Yii::app()->baseUrl . '/images/empty.png',
                            'baseDir' => 'uploads/systrans_files',
                            'originalFolderName' => '',
                            'image' => $model->benef3_figure,
                            'size' => 'intermodal_files',
                            'class' => 'img-responsive'
                        ));
                        echo '<br>';
                    }
                    ?>
                    <?php echo $form->error($model, 'benef3_figure', array('class' => 'help-block errorMessage')); ?>
                    <?php echo CHtml::hiddenField('h_b_3', $model->benef3_figure); ?>
                </div>
                <div class="col-sm-8">
                    <label class="control-label required">Title</label>
                    <?php echo $form->textField($model, 'benef3_caption_title', array('class' => 'form-control input-sm')); ?>
                    <label class="control-label required">Caption</label>
                    <?php
                    echo $form->textArea($model, 'benef3_caption', array('class' => 'form-control input-sm', 'rows' => 5));
                    ?>
                    <?php echo $form->error($model, 'benef3_caption', array('class' => 'help-block errorMessage')); ?>
                </div>
            </div>
        </div>
    </div>
    <div class="col-sm-6">
        <div class="panel panel-default">
            <div class="panel-body">
                <div class="col-sm-4">
                    <?php echo $form->fileField($model, 'benef4_figure', array('id' => 'choose')); ?>
                    <?php
                    if (!$model->isNewRecord) {
                        echo '<br>';
                        $this->widget('ext.SAImageDisplayer', array(
                            'defaultImage' => Yii::app()->baseUrl . '/images/empty.png',
                            'baseDir' => 'uploads/systrans_files',
                            'originalFolderName' => '',
                            'image' => $model->benef4_figure,
                            'size' => 'intermodal_files',
                            'class' => 'img-responsive'
                        ));
                        echo '<br>';
                    }
                    ?>
                    <?php echo $form->error($model, 'benef4_figure', array('class' => 'help-block errorMessage')); ?>
                    <?php echo CHtml::hiddenField('h_b_4', $model->benef4_figure); ?>
                </div>
                <div class="col-sm-8">
                    <label class="control-label required">Title</label>
                    <?php echo $form->textField($model, 'benef4_caption_title', array('class' => 'form-control input-sm')); ?>
                    <label class="control-label required">Caption</label>
                    <?php
                    echo $form->textArea($model, 'benef4_caption', array('class' => 'form-control input-sm', 'rows' => 5));
                    ?>
                    <?php echo $form->error($model, 'benef4_caption', array('class' => 'help-block errorMessage')); ?>
                </div>
            </div>
        </div>
    </div>
    <div class="col-sm-6">
        <div class="panel panel-default">
            <div class="panel-body">
                <div class="col-sm-4">
                    <?php echo $form->fileField($model, 'benef5_figure', array('id' => 'choose')); ?>
                    <?php
                    if (!$model->isNewRecord) {
                        echo '<br>';
                        $this->widget('ext.SAImageDisplayer', array(
                            'defaultImage' => Yii::app()->baseUrl . '/images/empty.png',
                            'baseDir' => 'uploads/systrans_files',
                            'originalFolderName' => '',
                            'image' => $model->benef5_figure,
                            'size' => 'intermodal_files',
                            'class' => 'img-responsive'
                        ));
                        echo '<br>';
                    }
                    ?>
                    <?php echo $form->error($model, 'benef5_figure', array('class' => 'help-block errorMessage')); ?>
                    <?php echo CHtml::hiddenField('h_b_5', $model->benef5_figure); ?>
                </div>
                <div class="col-sm-8">
                    <label class="control-label required">Title</label>
                    <?php echo $form->textField($model, 'benef5_caption_title', array('class' => 'form-control input-sm')); ?>
                    <label class="control-label required">Caption</label>
                    <?php
                    echo $form->textArea($model, 'benef5_caption', array('class' => 'form-control input-sm', 'rows' => 5));
                    ?>
                    <?php echo $form->error($model, 'benef5_caption', array('class' => 'help-block errorMessage')); ?>
                </div>
            </div>
        </div>
    </div>
    <div class="col-sm-6">
        <div class="panel panel-default">
            <div class="panel-body">
                <div class="col-sm-4">
                    <?php echo $form->fileField($model, 'benef6_figure', array('id' => 'choose')); ?>
                    <?php
                    if (!$model->isNewRecord) {
                        echo '<br>';
                        $this->widget('ext.SAImageDisplayer', array(
                            'defaultImage' => Yii::app()->baseUrl . '/images/empty.png',
                            'baseDir' => 'uploads/systrans_files',
                            'originalFolderName' => '',
                            'image' => $model->benef6_figure,
                            'size' => 'intermodal_files',
                            'class' => 'img-responsive'
                        ));
                        echo '<br>';
                    }
                    ?>
                    <?php echo $form->error($model, 'benef6_figure', array('class' => 'help-block errorMessage')); ?>
                    <?php echo CHtml::hiddenField('h_b_6', $model->benef6_figure); ?>
                </div>
                <div class="col-sm-8">
                    <label class="control-label required">Title</label>
                    <?php echo $form->textField($model, 'benef6_caption_title', array('class' => 'form-control input-sm')); ?>
                    <label class="control-label required">Caption</label>
                    <?php
                    echo $form->textArea($model, 'benef6_caption', array('class' => 'form-control input-sm', 'rows' => 5));
                    ?>
                    <?php echo $form->error($model, 'benef6_caption', array('class' => 'help-block errorMessage')); ?>
                </div>
            </div>
        </div>
    </div>
</div>
<hr>

<div class="form-group">
    <label class="col-sm-2 control-label required">Body copy</label>
    <div class="col-sm-10">
        <?php
        $this->widget('ext.ckeditor.CKEditorWidget', array(
            "model" => $model, # Data-Model
            "attribute" => 'body_copy', # Attribute in the Data-Model
            'defaultValue' => $model->body_copy,
            "config" => array(
                "height" => "200px",
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

