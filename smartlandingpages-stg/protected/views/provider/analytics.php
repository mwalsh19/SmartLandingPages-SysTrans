<?php
Yii::app()->clientScript->registerPackage('dataTables');

Yii::app()->clientScript->registerScript('dataTableInit', '
         $("#dataTable").dataTable(
                //"pageLength": 40
            );
        ');
?>
<section class="content-header">
    <h1>
        Analytics
        <small><?php echo Yii::app()->name; ?></small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> <?php echo Yii::app()->name; ?></a></li>
        <li><a href="#"> Provider</a></li>
        <li class="active"> Analytics</li>
    </ol>
</section>

<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title"> Analytics</h3>
                    <div class="pull-right" style="margin: 10px 10px 0 0; overflow: hidden;">
                        <a href="<?php echo $this->createUrl('provider/index'); ?>" class="btn btn-primary btn-sm" style="color: #fff;">
                            <i class="glyphicon glyphicon-arrow-left"></i> Return to providers
                        </a>
                    </div>
                </div><!-- /.box-header -->
                <div class="box-body table-responsive">
                    <table id="dataTable" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>Media Provider</th>
                                <th>State</th>
                                <th>Clicks</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $total = 0;
                            if (!empty($result)) {
                                foreach ($result as $url_posting) {
                                    $model = new MUrlPosting();
                                    $model->id_state = $url_posting['id_state'];
                                    ?>
                                    <tr>
                                        <td><?php echo $provider->name; ?></td>
                                        <td><?php echo $model->idState->acronym; ?></td>
                                        <td>
                                            <?php
                                            $clicks = empty($url_posting['clicks']) ? 0 : $url_posting['clicks'];
                                            echo $clicks;
                                            $total = $total + $clicks;
                                            ?>
                                        </td>
                                    </tr>
                                    <?php
                                }
                            }
                            ?>

                        </tbody>
                    </table>
                    <br>
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <strong>Total clicks:</strong> <?php echo $total; ?>
                        </div>
                    </div>
                </div><!-- /.box-body -->
            </div><!-- /.box -->
        </div>
    </div>
</section><!-- /.content -->
