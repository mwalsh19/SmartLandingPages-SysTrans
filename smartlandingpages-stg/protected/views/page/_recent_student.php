<div class="form-group">
    <label class="col-sm-2 control-label required">Referral code <small>(Lead Form)</small></label>
    <div class="col-sm-6">
        <?php echo $form->textField($model, 'referral_code', array('class' => 'form-control input-sm')); ?>
        <?php echo $form->error($model, 'referral_code', array('class' => 'help-block errorMessage')); ?>
    </div>
</div>
<div class="form-group">
    <label class="col-sm-2 control-label required">Referral code <small>(Intelliapp)</small></label>
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
    <label class="col-sm-2 control-label required">Template variant</label>
    <div class="col-sm-6">
        <?php
        echo $form->dropDownList($model, 'type', array(
            'S' => 'Students',
            'SDT' => 'Students (Desert Terrain)',
            'R' => 'Recent Grad',
            'RDT' => 'Recent Grad (Desert Terrain)',
            'E' => 'Experienced',
            'EDT' => 'Experienced (Desert Terrain)',
            'ECAN' => 'Experienced - Canada',
            'D' => 'Dedicated',
            'I' => 'Intermodal',
            'REFRI' => 'Refrigerated',
            'ND' => 'North Dakota'
                ), array('class' => 'form-control input-sm'));
        ?>
        <?php echo $form->error($model, 'type', array('class' => 'help-block errorMessage')); ?>
    </div>
</div>
<div class="form-group">
    <label class="col-sm-2 control-label required">Main title</label>
    <div class="col-sm-6">
        <?php echo $form->textField($model, 'main_title', array('class' => 'form-control input-sm')); ?>
        <?php echo $form->error($model, 'main_title', array('class' => 'help-block errorMessage')); ?>
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
                "height" => "200px",
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
<hr>
<h3>Background</h3>
<div class="row">
    <div class="form-group">
        <div class="col-sm-5 col-sm-offset-1">
            <label>Desktop version*</label>
            <?php echo $form->fileField($model, 'background', array('id' => 'choose')); ?>
            <?php
            if (!$model->isNewRecord) {
                echo '<br>';
                $this->widget('ext.SAImageDisplayer', array(
                    'defaultImage' => Yii::app()->baseUrl . '/images/empty.png',
                    'baseDir' => 'uploads/recent_student_files',
                    'originalFolderName' => '',
                    'image' => $model->background,
                    'size' => 'recent_student_background',
                    'class' => 'img-responsive'
                ));
                echo '<br>';
            }
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
                    'baseDir' => 'uploads/recent_student_files',
                    'originalFolderName' => '',
                    'image' => $model->background_mobile,
                    'size' => 'recent_student_background',
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
<hr>
<h3>Benefits section</h3>
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
                            'baseDir' => 'uploads/recent_student_files',
                            'originalFolderName' => '',
                            'image' => $model->benef1_figure,
                            'size' => 'recent_student_files',
                            'class' => 'img-responsive'
                        ));
                        echo '<br>';
                    }
                    ?>
                    <?php echo $form->error($model, 'benef1_figure', array('class' => 'help-block errorMessage')); ?>
                    <?php echo CHtml::hiddenField('h_b_1', $model->benef1_figure); ?>
                </div>
                <div class="col-sm-8">
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
                            'baseDir' => 'uploads/recent_student_files',
                            'originalFolderName' => '',
                            'image' => $model->benef2_figure,
                            'size' => 'recent_student_files',
                            'class' => 'img-responsive'
                        ));
                        echo '<br>';
                    }
                    ?>
                    <?php echo $form->error($model, 'benef2_figure', array('class' => 'help-block errorMessage')); ?>
                    <?php echo CHtml::hiddenField('h_b_2', $model->benef2_figure); ?>
                </div>
                <div class="col-sm-8">
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
                            'baseDir' => 'uploads/recent_student_files',
                            'originalFolderName' => '',
                            'image' => $model->benef3_figure,
                            'size' => 'recent_student_files',
                            'class' => 'img-responsive'
                        ));
                        echo '<br>';
                    }
                    ?>
                    <?php echo $form->error($model, 'benef3_figure', array('class' => 'help-block errorMessage')); ?>
                    <?php echo CHtml::hiddenField('h_b_3', $model->benef3_figure); ?>
                </div>
                <div class="col-sm-8">
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
                            'baseDir' => 'uploads/recent_student_files',
                            'originalFolderName' => '',
                            'image' => $model->benef4_figure,
                            'size' => 'recent_student_files',
                            'class' => 'img-responsive'
                        ));
                        echo '<br>';
                    }
                    ?>
                    <?php echo $form->error($model, 'benef4_figure', array('class' => 'help-block errorMessage')); ?>
                    <?php echo CHtml::hiddenField('h_b_4', $model->benef4_figure); ?>
                </div>
                <div class="col-sm-8">
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
                            'baseDir' => 'uploads/recent_student_files',
                            'originalFolderName' => '',
                            'image' => $model->benef5_figure,
                            'size' => 'recent_student_files',
                            'class' => 'img-responsive'
                        ));
                        echo '<br>';
                    }
                    ?>
                    <?php echo $form->error($model, 'benef5_figure', array('class' => 'help-block errorMessage')); ?>
                    <?php echo CHtml::hiddenField('h_b_5', $model->benef5_figure); ?>
                </div>
                <div class="col-sm-8">
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
                            'baseDir' => 'uploads/recent_student_files',
                            'originalFolderName' => '',
                            'image' => $model->benef6_figure,
                            'size' => 'recent_student_files',
                            'class' => 'img-responsive'
                        ));
                        echo '<br>';
                    }
                    ?>
                    <?php echo $form->error($model, 'benef6_figure', array('class' => 'help-block errorMessage')); ?>
                    <?php echo CHtml::hiddenField('h_b_6', $model->benef6_figure); ?>
                </div>
                <div class="col-sm-8">
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
    <label class="col-sm-2 control-label required">Bottom headline</label>
    <div class="col-sm-10">
        <?php
        $this->widget('ext.ckeditor.CKEditorWidget', array(
            "model" => $model, # Data-Model
            "attribute" => 'bottom_headline_copy', # Attribute in the Data-Model
            'defaultValue' => $model->bottom_headline_copy,
            "config" => array(
                "height" => "200px",
                "width" => "auto",
                "toolbar" => Utils::getToolbarStyles()
            ),
            "ckEditor" => Yii::app()->basePath . "/../manager/ckeditor/ckeditor_php5.php",
            "ckBasePath" => Yii::app()->baseUrl . "/manager/ckeditor/",
        ));
        ?>
        <?php echo $form->error($model, 'bottom_headline_copy', array('class' => 'help-block errorMessage')); ?>

    </div>
</div>
<div class="form-group">
    <label class="col-sm-2 control-label required">Bottom body copy</label>
    <div class="col-sm-10">
        <?php
        $this->widget('ext.ckeditor.CKEditorWidget', array(
            "model" => $model, # Data-Model
            "attribute" => 'bottom_body_copy', # Attribute in the Data-Model
            'defaultValue' => $model->bottom_body_copy,
            "config" => array(
                "height" => "200px",
                "width" => "auto",
                "toolbar" => Utils::getToolbarStyles()
            ),
            "ckEditor" => Yii::app()->basePath . "/../manager/ckeditor/ckeditor_php5.php",
            "ckBasePath" => Yii::app()->baseUrl . "/manager/ckeditor/",
        ));
        ?>
        <?php echo $form->error($model, 'bottom_body_copy', array('class' => 'help-block errorMessage')); ?>

    </div>
</div>