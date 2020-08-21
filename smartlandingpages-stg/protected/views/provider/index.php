<?php
Yii::app()->clientScript->registerPackage('dataTables');

Yii::app()->clientScript->registerScript('dataTableInit', '
         $("#dataTable").dataTable();
        ');
?>
<section class="content-header">
    <h1>
        Providers
        <small><?php echo Yii::app()->name; ?></small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> <?php echo Yii::app()->name; ?></a></li>
        <li lass="active"><a href="#"> Providers</a></li>
    </ol>
</section>

<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title"> Providers</h3>
                    <div class="pull-right" style="margin: 10px 10px 0 0; overflow: hidden;">
                        <a href="<?php echo $this->createUrl('provider/create'); ?>" class="btn btn-info btn-sm" style="color: #fff;">
                            <i class="glyphicon glyphicon-plus"></i> Create new
                        </a>
                    </div>
                </div><!-- /.box-header -->
                <div class="box-body table-responsive">
                    <table id="dataTable" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>Provider Name</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            if (!empty($data)) {
                                foreach ($data as $provider) {
                                    ?>
                                    <tr>
                                        <td><?php echo $provider->name ?></td>
                                        <td style="width: 35%;">
                                            <a href="<?php echo $this->createUrl('provider/update', array('id' => $provider->id_provider)); ?>" class="btn btn-primary btn-sm">
                                                <i class="glyphicon glyphicon-edit"></i> Edit
                                            </a>
                                            <a href="<?php echo $this->createUrl('manager/urlposting', array('id' => $provider->id_provider)); ?>" class="btn btn-success btn-sm">
                                                <i class="glyphicon glyphicon-edit"></i> Landing Pages
                                            </a>
                                            <a href="<?php echo $this->createUrl('provider/analytics', array('id' => $provider->id_provider)); ?>" class="btn btn-default btn-sm">
                                                <i class="glyphicon glyphicon-stats"></i> Analytics
                                            </a>
                                            <?php
//                                            echo CHtml::link('<i class="glyphicon glyphicon-trash"></i> Delete', '#', array(
//                                                'class' => 'btn btn-danger btn-sm',
//                                                'confirm' => Yii::t('general', 'Are you sure you want to delete this record?'),
//                                                'params' => array('id' => $provider->id_provider),
//                                                'submit' => Yii::app()->createUrl('provider/delete')
//                                            ));
                                            ?>
                                        </td>
                                    </tr>
                                    <?php
                                }
                            }
                            ?>

                        </tbody>
                    </table>
                </div><!-- /.box-body -->
            </div><!-- /.box -->
        </div>
    </div>
</section><!-- /.content -->
