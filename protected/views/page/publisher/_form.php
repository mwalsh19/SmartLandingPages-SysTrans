
<section class="content">
    <div class="row">
        <!-- left column -->
        <div class="col-md-12">
            <!-- general form elements -->
            <div class="box box-primary">

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
                    <div class="box-header">
                        <h3 class="title">
                            Publisher
                        </h3>
                    </div>

                    <div class="form-group">
                        <?php echo $form->labelEx($model, 'publisher', array('class' => 'col-sm-2 control-label')); ?>
                        <div class="col-sm-4">
                            <?php echo $form->textField($model, 'publisher', array('class' => 'form-control')); ?>
                            <?php echo $form->error($model, 'publisher', array('class' => 'help-block errorMessage')); ?>
                            <p><strong>Instructions:</strong> The publisher should not be contain <strong>CAPITALIZE</strong> letters, or <strong>DASH (-)</strong>, only must contain <strong>LOWERCASE</strong> letter.</p>

                            <?php
                            $user = Yii::app()->user;
                            if ($user->hasFlash('result')) {
                                echo " <div class=\"text-red\">{$user->getFlash('result')}</div>";
                            }
                            ?>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-lg-12">
                            <button type="submit" class="btn btn-primary">Save</button>&nbsp;
                            <a class="btn btn-default" href="<?php echo Yii::app()->createUrl('page/publisher'); ?>">Cancel</a>
                        </div>
                    </div>


                    <?php $this->endWidget(); ?>

                </div>
            </div><!-- /.box -->

        </div><!--/.col (left) -->

    </div>   <!-- /.row -->
</section><!-- /.content -->