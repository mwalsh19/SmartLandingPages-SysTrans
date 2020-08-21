<?php
$this->setPageTitle('Landing Pages');
Yii::app()->clientScript->registerPackage('dataTables');

Yii::app()->clientScript->registerScript('dataTableInit', '
 $("#table").dataTable({
     "iDisplayLength": 50
 });
');
?>

<section class="content-header">
    <h1>
        Manager > Rhinolabs Lead Forms
    </h1>
</section>

<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Rhinolabs Lead Forms</h3>
                </div><!-- /.box-header -->
                <div class="box-body table-responsive">
                    <table id="table" class="table table-mailbox table-bordered table-striped table-responsive table-condensed" style="font-size: 13px;">
                        <thead>
                            <tr>
                                <th>Referral code</th>
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>Phone</th>
                                <th>Email</th>
                                <th>Street Address</th>
                                <th>City</th>
                                <th>State</th>
                                <th>Zip code</th>
                                <th>List any moving violations</th>
                                <th>Do you have a Class A CDL?</th>
                                <th>Create date</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            if (!empty($data)) {
                                foreach ($data as $rhinolab_record) {
                                    ?>
                                    <tr>
                                        <td><?php echo $rhinolab_record->referral_code ?></td>
                                        <td><?php echo $rhinolab_record->first_name ?></td>
                                        <td><?php echo $rhinolab_record->last_name; ?></td>
                                        <td><?php echo $rhinolab_record->phone; ?></td>
                                        <td><?php echo $rhinolab_record->email; ?></td>
                                        <td><?php echo $rhinolab_record->street_address; ?></td>
                                        <td><?php echo $rhinolab_record->city; ?></td>
                                        <td><?php echo $rhinolab_record->state; ?></td>
                                        <td><?php echo $rhinolab_record->zipcode; ?></td>
                                        <td><?php echo $rhinolab_record->moving_violation; ?></td>
                                        <td><?php echo $rhinolab_record->cdl_valid; ?></td>
                                        <td><?php echo $rhinolab_record->create_date; ?></td>
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
