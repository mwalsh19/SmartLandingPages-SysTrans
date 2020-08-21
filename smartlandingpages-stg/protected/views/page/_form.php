<?php
$basePath = Yii::app()->getBaseUrl(true) . '/landing-pages/';

switch ($master->template_type) {
    case 'tbl_apply':
        $view = '_apply';
        break;
    case 'tbl_dedicated':
        $view = '_dedicated';
        break;
    case 'tbl_truckjob':
        $view = '_truckjob';
        break;
    case 'tbl_flatbed':
        $view = '_flatbed';
        break;
    case 'tbl_truckdriver':
        $view = '_truckdriver';
        break;
    case 'tbl_recent_student':
        $view = '_recent_student';
        break;
    case 'tbl_intermodal':
        $view = '_intermodal';
        break;
    case 'tbl_dr_january':
        $view = '_dr_january';
        break;
}
if (!empty($status) && $status == 'duplicate') {
    Yii::app()->clientScript->registerScript('verifyLPIfExists', "
        $('.LPPath').on('focusout', function(){
              var path = $('.LPPath').val();
            $.get('" . Yii::app()->createUrl('page/verifyPath') . "', {path: path}, function(response){
                //console.log(response.exists);
               if(response.exists == true){
                   $('#submitBtn').hide();
                   $('.showError').html('<div style=\"color: red;\">The path you entered already exists. Please check the path again.</div>');
                   return false;
               }else{
                   $('#submitBtn').show();
                   $('.showError').html('<div style=\"color: green;\">The entered path is available</div>');
                   return true;
               }
            });
        });

         $('#submitBtn').on('click', function(event){
          event.preventDefault();
             var path = $('.LPPath').val();
            $.get('" . Yii::app()->createUrl('page/verifyPath') . "', {path: path}, function(response){
               // console.log(response.exists);
               if(response.exists){
                    alert('The entered path is already exists, please change path.');
                    return false;
               }else{
                   $('#admin-form').submit();
               }
            });
        });

    ");
}
?>
<section class="content">
    <div class="row">
        <!-- left column -->
        <div class="col-md-12">
            <!-- general form elements -->
            <div class="box box-primary">
                <!-- form start -->
                <div class="box-body clearfix">
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
                    <div class="col-sm-12">
                        <h3>Preview</h3>
                        <iframe src="<?php echo $basePath . $master->path; ?>" width="100%" height="400" style="border:none;">
                        </iframe>
                        <hr>
                    </div>
                    <div class="col-sm-12">
                        <h3>General</h3>
                        <div class="form-group">
                            <?php echo $form->labelEx($master, 'path', array('class' => 'col-sm-2 control-label')); ?>
                            <div class="col-sm-6">
                                <?php echo $form->textField($master, 'path', array('class' => 'form-control input-sm LPPath')); ?>
                                <?php echo $form->error($master, 'path', array('class' => 'help-block errorMessage')); ?>

                                <p>
                                    The <strong>Path*</strong> must NOT contain slash <strong>(/)</strong> at the beginning or end. <br>
                                    Do not use <strong>/landing-page/</strong><br />
                                    Example:<br />
                                    <strong class="text-green">Correct:</strong> <i>name-of-landing-page/other-param</i><br/>
                                    <strong class="text-red">Incorrect:</strong> <i>/name-of-landing-page/other-param/</i><br/>
                                </p>
                            </div>
                            <div class="col-sm-4 showError">

                            </div>
                        </div>
                        <div class="form-group">
                            <?php echo $form->labelEx($master, 'publisher', array('class' => 'col-sm-2 control-label')); ?>
                            <div class="col-sm-6">
                                <?php echo $form->textField($master, 'publisher', array('class' => 'form-control input-sm')); ?>
                                <?php echo $form->error($master, 'publisher', array('class' => 'help-block errorMessage')); ?>
                            </div>
                        </div>

                        <?php echo $form->hiddenField($master, 'template_type', array('class' => 'form-control')); ?>

                        <div class="form-group">
                            <?php echo $form->labelEx($master, 'title', array('class' => 'col-sm-2 control-label')); ?>
                            <div class="col-sm-6">
                                <?php echo $form->textField($master, 'title', array('class' => 'form-control input-sm')); ?>
                                <p>The title is for <strong>TAB TITLE or PAGE TITLE</strong>
                                </p>
                                <?php echo $form->error($master, 'title', array('class' => 'help-block errorMessage')); ?>
                            </div>
                        </div>

                        <?php
                        $this->renderPartial($view, array('form' => $form, 'model' => $model));
                        ?>
                        <hr>
                        <div class="form-group">
                            <div class="col-lg-12">
                                <button type="submit" class="btn btn-primary" id="submitBtn">Save</button>&nbsp;
                                <a class="btn btn-default" href="<?php echo Yii::app()->createUrl('page/index'); ?>">Cancel</a>
                            </div>
                        </div>
                    </div>

                    <?php $this->endWidget(); ?>

                </div>
            </div><!-- /.box -->

        </div><!--/.col (left) -->

    </div>   <!-- /.row -->
</section><!-- /.content -->