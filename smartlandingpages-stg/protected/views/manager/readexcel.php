<?php
Yii::app()->clientScript->registerCssFile(Yii::app()->getBaseUrl(true) . '/vendor/bootstrap/bootstrap.min.3.css');
Yii::app()->clientScript->registerScript('sendform', "
    $('#sendForm').on('click', function(){
        $('.wait').show();
//        $(this).prop('readonly', true);
    });
");
?>

<section class="content-header">
    <h1>
        Upload Excel File
        <small>manager</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Manager</a></li>
        <li class="active"><a href="#">Excel file</a></li>
    </ol>
</section>

<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Upload excel file</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                    <?php
                    $user = Yii::app()->user;
                    if ($user->hasFlash('status')) {
                        ?>
                        <div class="alert alert-success" role="alert"><?php echo $user->getFlash('status') ?></div>
                    <?php } ?>

                    <?php
                    $form = $this->beginWidget('CActiveForm', array(
                        'id' => 'excelfile',
                        'enableAjaxValidation' => false,
                        'enableClientValidation' => true,
                        'htmlOptions' => array(
                            'class' => 'form-horizontal',
                            'enctype' => 'multipart/form-data'
                        ),
                    ));
                    ?>
                    <div class="row">
                        <div class="col-sm-12">
                            <?php echo $form->labelEx($model, 'excelfile', array('class' => 'control-label')); ?>
                            <?php echo $form->fileField($model, 'excelfile', array()); ?>
                            <?php echo $form->error($model, 'excelfile', array('class' => 'help-block')); ?>
                            <p class="help-block">Format: xlsx, xls</p>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary" id="sendForm"><i class="glyphicon glyphicon-file"></i> Send file</button>
                    <p class="help-block wait" style="display: none;">Please wait...</p>
                    <?php $this->endWidget(); ?>

                </div>
            </div>
        </div>
    </div>
</div>

