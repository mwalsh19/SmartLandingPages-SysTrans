<?php
$this->setPageTitle('Publishers');
Yii::app()->clientScript->registerPackage('dataTables');

Yii::app()->clientScript->registerScript('dataTableInit', '
 var table = $("#table").dataTable({
    "iDisplayLength": 75,
    "aaSorting": []
});

');
?>
<section class="content-header">
    <h1>
        Publishers
        <small>manager</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Manager</a></li>
        <li class="active"><a href="#">Publisher</a></li>
    </ol>
</section>


<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Publishers</h3>
                </div><!-- /.box-header -->
                <div class="col-xs-12 clearfix">
                    <div class="pull-right" style="margin-bottom: 10px;">
                        <a href="<?php echo Yii::app()->createUrl($this->createUrl('page/createPublisher')); ?>" class="btn btn-primary  btn-sm">
                            <i class="glyphicon glyphicon-plus"></i> Create Publisher
                        </a>
                    </div>
                </div>
                <div class="box-body table-responsive">
                    <table id="table" class="table table-mailbox table-bordered table-striped table-responsive table-condensed" style="font-size: 13px;">
                        <thead>
                            <tr>
                                <th>Publisher</th>
                                <th>Create date</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            if (!empty($data)) {
                                foreach ($data as $publisher) {
                                    ?>
                                    <tr>
                                        <td><?php echo $publisher->publisher ?></td>
                                        <td><?php echo $publisher->create_date ?></td>
                                        <td style="width: 20%;">
                                            <a href="<?php echo Yii::app()->createUrl($this->createUrl('page/updatePublisher', array('id' => $publisher->id_publisher))); ?>" class="btn btn-primary  btn-sm">
                                                <i class="glyphicon glyphicon-edit"></i> Update
                                            </a>
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
