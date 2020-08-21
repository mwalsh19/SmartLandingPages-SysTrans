<?php
$this->setPageTitle('Path without specific landing page');
Yii::app()->clientScript->registerPackage('dataTables');

Yii::app()->clientScript->registerScript('dataTableInit', '
         $("#table").dataTable({
         });
        ');
?>

<section class="content-header">
    <h1>
        Manager > Path without specific landing page
    </h1>
</section>

<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Missing Pages</h3>
                </div><!-- /.box-header -->
                <div class="box-body table-responsive">
                    <p>
                        The missing pages are basically all the different URLS that don't have any real landing page in the system,
                        we collected them as an internal tool to found other possible landing pages missed.
                    </p>
                    <table id="table" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>Path</th>
                                <th>Create date</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            if (!empty($data)) {
                                foreach ($data as $missingpage) {
                                    ?>
                                    <tr>
                                        <td><?php echo $missingpage->path ?></td>
                                        <td style="width: 25%;"> <?php echo $missingpage->create_date ?></td>
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
