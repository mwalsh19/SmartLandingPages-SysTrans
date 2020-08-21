<section class="content-header clearfix">
    <h1 class="pull-left">
        <span>Manager</span> > <span>Google URL Shortner</span>
    </h1>
</section>

<section class="content">
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-body">
                    <p>Paste all the final/real URL here, separete each of them by a line</p>
                    <?php
                    $form = $this->beginWidget('CActiveForm', array(
                        'id' => 'create-form',
                        'enableAjaxValidation' => false,
                        'enableClientValidation' => true,
                        'htmlOptions' => array(
                            'class' => 'form-horizontal'
                        ),
                    ));
                    ?>
                    <div class="form-group">
                        <div class="col-md-12">
                            <?php echo $form->textarea($model, 'real_url', array('class' => 'form-control input-sm', 'style' => 'min-height: 300px;')); ?>
                            <?php echo $form->error($model, 'real_url', array('class' => 'help-block errorMessage')); ?>
                            <br>
                            <button type="submit" class="btn btn-primary">Create</button>
                        </div>
                    </div>
                    <?php $this->endWidget(); ?>
                    
                    <?php 
                    if (!empty($table)) {
                        echo $table; 
                    } 
                    
                    if(!empty($error)){
                        echo "<span class=\"errorMessage\">$error</span>"; 
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
</section>