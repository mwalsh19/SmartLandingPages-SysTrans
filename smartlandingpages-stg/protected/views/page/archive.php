<?php
$this->setPageTitle('Landing Pages');
Yii::app()->clientScript->registerPackage('dataTables');

Yii::app()->clientScript->registerScript('dataTableInit', '
 var table = $("#table").dataTable({
    "iDisplayLength": 75,
    "aaSorting": []
});

');
?>
<?php
$this->renderPartial('_alerts');
?>
<section class="content-header">
    <h1>
        Manager > Archive Landing Pages
    </h1>
</section>

<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Archive Landing pages</h3>
                </div><!-- /.box-header -->
                <div class="box-body table-responsive">
                    <table id="table" class="table table-mailbox table-bordered table-striped table-responsive table-condensed" style="font-size: 13px;">
                        <thead>
                            <tr>
                                <th>Publisher</th>
                                <th>Referral code</th>
                                <th>Phone number</th>
                                <th>Path</th>
                                <th>Create date</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $baseUrl = Yii::app()->getBaseUrl(true) . '/landing-pages/';
                            if (!empty($data)) {
                                $referral_code = '';
                                foreach ($data as $landingpage) {
                                    switch ($landingpage->template_type) {
                                        case 'tbl_apply':
                                            $landingpage_fields = $landingpage->tblApplies[0];
                                            $referral_code = $landingpage_fields->referral_code;
                                            $phone_number = $landingpage_fields->phone_number_1;
                                            break;
                                        case 'tbl_dedicated':
                                            $landingpage_fields = $landingpage->tblDedicateds[0];
                                            $referral_code = $landingpage_fields->referral_code;
                                            $phone_number = $landingpage_fields->phone_number;
                                            break;
                                        case 'tbl_flatbed':
                                            $landingpage_fields = $landingpage->tblFlatbeds[0];
                                            $referral_code = $landingpage_fields->referral_code;
                                            $phone_number = $landingpage_fields->phone_number;
                                            break;
                                        case 'tbl_truckdriver':
                                            $landingpage_fields = $landingpage->tblTruckdrivers[0];
                                            $referral_code = $landingpage_fields->referral_code;
                                            $phone_number = $landingpage_fields->phone_number_1;
                                            break;
                                        case 'tbl_truckjob':
                                            $landingpage_fields = $landingpage->tblTruckjobs[0];
                                            $referral_code = $landingpage_fields->referral_code;
                                            $phone_number = $landingpage_fields->phone_number;
                                            break;
                                        case 'tbl_recent_student':
                                            $landingpage_fields = $landingpage->tblRecentstudent[0];
                                            $referral_code = $landingpage_fields->referral_code;
                                            $phone_number = $landingpage_fields->phone;
                                            break;
                                        case 'tbl_intermodal':
                                            $landingpage_fields = $landingpage->tblIntermodals[0];
                                            $referral_code = $landingpage_fields->referral_code;
                                            $phone_number = $landingpage_fields->phone;
                                            break;
                                        case 'tbl_dr_january':
                                            $landingpage_fields = $landingpage->tblDrJanuary[0];
                                            $referral_code = $landingpage_fields->referral_code;
                                            $phone_number = $landingpage_fields->phone;
                                            break;
                                    }
                                    ?>
                                    <tr>
                                        <td><?php echo $landingpage->publisher ?></td>
                                        <td><?php echo $referral_code; ?></td>
                                        <td style="width: 10%;"><?php echo $phone_number; ?></td>
                                        <td><a href="<?php echo $baseUrl . $landingpage->path ?>?no-track&archived" target="_blank"><?php echo $baseUrl . $landingpage->path ?></a></td>
                                        <td style="width: 10%;"><?php echo $landingpage->create_date ?></td>
                                        <td>
                                            <a href="<?php echo Yii::app()->createUrl($this->createUrl('page/unarchive', array('id' => $landingpage->id_master))); ?>" class="btn btn-primary btn-sm">
                                                <i class="glyphicon glyphicon-folder-close"></i> Unarchive
                                            </a>
                                            <br />
                                            <label class="label label-<?php echo!empty($landingpage->id_swap) ? 'danger' : 'success' ?>" style=" display: inline-block;margin-top: 5px;">
                                                <?php echo!empty($landingpage->id_swap) ? 'Swaped' : 'Archived' ?>
                                            </label>
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
