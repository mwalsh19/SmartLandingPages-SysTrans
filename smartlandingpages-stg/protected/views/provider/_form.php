<!-- Main content -->
<section class="content">
    <div class="row">
        <!-- left column -->
        <div class="col-md-8">
            <!-- general form elements -->
            <div class="box box-primary">
                <div class="box-header">
                    <h3 class="box-title">Url Posting</h3>
                </div><!-- /.box-header -->
                <!-- form start -->
                <div class="box-body">
                    <?php
                    $form = $this->beginWidget('CActiveForm', array(
                        'id' => 'admin-form',
                        'enableAjaxValidation' => false,
                        'enableClientValidation' => true,
                        'htmlOptions' => array(
                            'class' => 'form-horizontal',
                            'enctype' => 'multipart/form-data'
                        ),
                    ));
                    ?>

                    <div class="form-group">
                        <?php echo $form->labelEx($model, 'name', array('class' => 'col-sm-2 control-label')); ?>
                        <div class="col-sm-10">
                            <?php echo $form->textField($model, 'name', array('class' => 'form-control')); ?>
                            <?php echo $form->error($model, 'name', array('class' => 'help-block errorMessage')); ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-lg-12">
                            <button type="submit" class="btn btn-primary">Save</button>&nbsp;
                            <a class="btn btn-default" href="<?php echo Yii::app()->createUrl('provider/index'); ?>">Cancel</a>
                        </div>
                    </div>
                    <?php $this->endWidget(); ?>
                </div>
            </div><!-- /.box -->

        </div><!--/.col (left) -->

    </div>   <!-- /.row -->
</section><!-- /.content -->
