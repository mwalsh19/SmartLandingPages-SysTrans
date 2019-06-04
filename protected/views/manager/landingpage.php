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
        Landing Pages
        <small>manager</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Manager</a></li>
        <li class="active"><a href="#">Landing pages</a></li>
    </ol>
</section>

<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Landing pages</h3>
                </div><!-- /.box-header -->
                <div class="box-body table-responsive">
                    <table id="table" class="table table-mailbox table-bordered table-striped table-responsive table-condensed" style="font-size: 13px;">
                        <thead>
                            <tr>
                                <th>Publisher</th>
                                <th>Title</th>
                                <th>Referral code</th>
                                <th>Phone number</th>
                                <th>Path</th>
                                <th>Create date</th>
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
                                    }
                                    ?>
                                    <tr>
                                        <td><?php echo $landingpage->publisher ?></td>
                                        <td><?php echo $landingpage->title ?></td>
                                        <td><?php echo $referral_code; ?></td>
                                        <td style="width: 10%;"><?php echo $phone_number;?></td>
                                        <td><a href="<?php echo $baseUrl . $landingpage->path ?>" target="_blank"><?php echo $baseUrl . $landingpage->path ?></a></td>
                                        <td style="width: 10%;"><?php echo $landingpage->create_date ?></td>
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
