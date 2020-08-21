<section class="content-header">
    <h1>
        Update new provider
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> <?php echo Yii::app()->name; ?></a></li>
        <li> Providers</li>
        <li class="active"> Update new provider</li>
    </ol>
</section>
<?php
$this->renderPartial('_form', array('model' => $model));
