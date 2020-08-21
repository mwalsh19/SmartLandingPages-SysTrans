<?php
$this->setPageTitle('System Transport - Smart Landing Pages');
Yii::app()->clientScript->registerPackage('dataTables');

Yii::app()->clientScript->registerScript('dataTableInit', '
 var table = $("#table").dataTable({
    "iDisplayLength": 75,
    "aaSorting": []
});

');
Yii::app()->clientScript->registerScript('swapLandingpage', "
    var landingPageToSwap = '';
    $(document).on('click', '.swap-btn', function(){
        $('#swapModal').modal('show');
        landingPageToSwap = $(this).data('id');
    });

    $('#saveLandingpage').on('click', function(){
        var landingPageBase = $('#swap-landingpage-list option:selected').val();

       // console.log('swap: '+landingPageToSwap);
       // console.log('base: '+landingPageBase);

        if(landingPageToSwap !== '' && landingPageBase !== ''){
            $('#landingPageToSwap').val(landingPageToSwap);
            $('#swap-form').submit();
        }else{
            alert('You need select a landing page');
        }
    });
");
?>
<?php
$this->renderPartial('_alerts');
?>

<!-- Modal -->
<div class="modal fade" id="swapModal" tabindex="-1" role="dialog" aria-labelledby="swapModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Swap Template</h4>
            </div>
            <div class="modal-body">
                <?php
                $form = $this->beginWidget('CActiveForm', array(
                    'id' => 'swap-form',
                    'action' => $this->createUrl(Yii::app()->createUrl('page/swap')),
                    'enableAjaxValidation' => false,
                    'enableClientValidation' => true,
                    'htmlOptions' => array(
                        'class' => 'form-horizontal',
                        'enctype' => 'multipart/form-data'
                    )
                ));


                $templates_recent_student = Yii::app()->db->createCommand('SELECT tbl_master.id_master, tbl_master.template_type, tbl_recent_student.type FROM tbl_master LEFT JOIN tbl_recent_student ON tbl_recent_student.id_master = tbl_master.id_master WHERE tbl_master.path LIKE "%base%" AND tbl_master.template_type = "tbl_recent_student" ORDER BY tbl_recent_student.type ASC')->queryAll();
                $templates_intermodal = Yii::app()->db->createCommand('SELECT tbl_master.id_master, tbl_master.template_type, tbl_intermodal.type FROM tbl_master LEFT JOIN tbl_intermodal ON tbl_intermodal.id_master = tbl_master.id_master WHERE tbl_master.path LIKE "%base%" AND tbl_master.template_type = "tbl_intermodal" ORDER BY tbl_intermodal.type ASC')->queryAll();
                $templates_dr_january = Yii::app()->db->createCommand('SELECT tbl_master.id_master, tbl_master.template_type FROM tbl_master LEFT JOIN tbl_dr_january ON tbl_dr_january.id_master = tbl_master.id_master WHERE tbl_master.path LIKE "%base%" AND tbl_master.template_type = "tbl_dr_january"')->queryAll();


                // system trans templates start here
                // $templates_sys_trans = Yii::app()->db->createCommand('SELECT tbl_master.id_master, tbl_master.template_type, tbl_sys_trans.type FROM tbl_master LEFT JOIN tbl_sys_trans ON tbl_sys_trans.id_master = tbl_master.id_master WHERE tbl_master.template_type = "tbl_sys_trans" ORDER BY tbl_sys_trans.type ASC')->queryAll();

                $swap_templates_Base = array();

                if (!empty($templates_recent_student)) {

                    for ($index = 0; $index < count($templates_recent_student); $index++) {

                        $label = '';
                        switch ($templates_recent_student[$index]['type']) {
                            case 'R':
                                $label = 'Style A - ' . 'Recent Grad';
                                break;
                            case 'RDT':
                                $label = 'Style A - ' . 'Recent Grad (Desert Terrain)';
                                break;
                            case 'S':
                                $label = 'Style A - ' . 'Students';
                                break;
                            case 'SDT':
                                $label = 'Style A - ' . 'Students (Desert Terrain)';
                                break;
                            case 'E':
                                $label = 'Style A - ' . 'Experienced';
                                break;
                            case 'EDT':
                                $label = 'Style A - ' . 'Experienced (Desert Terrain';
                                break;
                            case 'ECAN':
                                $label = 'Style A - ' . 'Experienced - Canada';
                                break;
                            case 'D':
                                $label = 'Style A - ' . 'Dedicated';
                                break;
                            case 'I':
                                $label = 'Style A - ' . 'Intermodal';
                                break;
                            case 'REFRI':
                                $label = 'Style A - ' . 'Refrigerated';
                                break;
                            case 'ND':
                                $label = 'Style A - ' . 'North Dakota';
                                break;
                        }

                        $swap_templates_Base[$templates_recent_student[$index]['id_master']] = $label;
                    }
                }
                if (!empty($templates_intermodal)) {

                    for ($index = 0; $index < count($templates_intermodal); $index++) {
                        $label = '';
                        switch ($templates_intermodal[$index]['type']) {
                            case 'D':
                                $label = 'Style B - ' . 'Dedicated';
                                break;
                            case 'I':
                                $label = 'Style B - ' . 'Intermodal';
                                break;
                            case 'SO':
                                $label = 'Special Offer';
                                break;
                        }

                        $swap_templates_Base[$templates_intermodal[$index]['id_master']] = $label;
                    }
                }
                if (!empty($templates_dr_january)) {

                    for ($index = 0; $index < count($templates_dr_january); $index++) {
                        $templates_dr_january[$index];
                        $label = 'Style C - ' . 'DR January General';

                        $swap_templates_Base[$templates_dr_january[$index]['id_master']] = $label;
                    }
                }
                if (!empty($templates_sys_trans)) {

                    for ($index = 0; $index < count($templates_sys_trans); $index++) {

                        $label = '';
                        switch ($templates_sys_trans[$index]['type']) {
                            case 'R':
                                $label = 'Style A - ' . 'SYS Trans';
                                break;
                        }

                        $swap_templates_Base[$templates_sys_trans[$index]['id_master']] = $label;
                    }
                }


                echo CHtml::dropDownList('landingPageBase', '', $swap_templates_Base, array(
                    'class' => 'form-control',
                    'id' => 'swap-landingpage-list',
                    'prompt' => 'Select Template you\'d like to use'
                        )
                );
                echo CHtml::hiddenField('landingPageToSwap', '', array('id' => 'landingPageToSwap'));
                $this->endWidget();
                ?>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-primary" id="saveLandingpage">Swap</button>
            </div>
        </div>
    </div>
</div>
<section class="content-header">
    <h1>
        Manager > Landing Pages
    </h1>
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
                                <th>Referral code</th>
                                <th>Phone number</th>
                                <th>Path</th>
                                <th>Create date</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            if ($_SERVER['SERVER_NAME'] == 'localhost') {
                                $baseUrl = Yii::app()->getBaseUrl(true) . '/landing-pages/';
                            } else {
                                $baseUrl = Yii::app()->getBaseUrl(true) . '/';
                            }
                            if (!empty($data)) {
                                $referral_code = '';
                                $phone_number = '';
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
                                        <td><a href="<?php echo $baseUrl . $landingpage->path ?>?no-track" target="_blank"><?php echo $baseUrl . $landingpage->path ?></a></td>
                                        <td style="width: 10%;"><?php echo $landingpage->create_date ?></td>
                                        <td>
                                            <div class="btn-group" style="min-width: 100px;">
                                                <button type="button" class="btn btn-primary btn-flat btn-sm">Action</button>
                                                <button type="button" class="btn btn-primary btn-flat btn-sm dropdown-toggle" data-toggle="dropdown">
                                                    <span class="caret"></span>
                                                    <span class="sr-only">Toggle Dropdown</span>
                                                </button>
                                                <ul class="dropdown-menu" role="menu">
                                                    <li><a href="<?php echo $_SERVER['SERVER_NAME'] == 'localhost' ? '/page/duplicate?id=' . $landingpage->id_master : '/landing-pages/page/duplicate?id=' . $landingpage->id_master; ?>">Clone</a></li>
                                                    <li><a href="<?php echo $_SERVER['SERVER_NAME'] == 'localhost' ? '/page/update?id=' . $landingpage->id_master : '/landing-pages/page/update?id=' . $landingpage->id_master; ?>">Update</a></li>
                                                    <li><a href="<?php echo $_SERVER['SERVER_NAME'] == 'localhost' ? '/page/archive?id=' . $landingpage->id_master : '/landing-pages/page/archive?id=' . $landingpage->id_master; ?>">Archive</a></li>
                                                    <li><a data-toggle="modal" data-target="#swapModal" href="javascript:void(0);" class="swap-btn" data-id="<?php echo $landingpage->id_master ?>">Swap Template</a></li>
                                                </ul>
                                            </div>
                                            <?php
                                            if (!empty($landingpage->id_swap)) {
                                                echo "<label class='label label-danger' style='margin-top: 10px;'>Swaped</label>";
                                            }
                                            ?>
        <!--                                            <a href="<?php //echo Yii::app()->createUrl($this->createUrl('page/duplicate', array('id' => $landingpage->id_master)));                                                                                                                                                                                                                                                   ?>" class="btn btn-success  btn-sm">
                                                <i class="glyphicon glyphicon-transfer"></i> Clone
                                            </a>
                                            <a href="<?php //echo Yii::app()->createUrl($this->createUrl('page/update', array('id' => $landingpage->id_master)));                                                                                                                                                                                                                                                   ?>" class="btn btn-primary  btn-sm">
                                                <i class="glyphicon glyphicon-edit"></i> Update
                                            </a>
                                            <a href="<?php //echo Yii::app()->createUrl($this->createUrl('page/archive', array('id' => $landingpage->id_master)));                                                                                                                                                                                                                                                   ?>" class="btn btn-default  btn-sm">
                                                <i class="glyphicon glyphicon-folder-close"></i> Archive
                                            </a>
                                            <a href="javascript:void(0);" class="btn btn-default btn-sm advanced-clone-btn" data-id="<?php // echo $landingpage->id_master                                                                                                                                                                                                                                                 ?>">
                                                <i class="glyphicon glyphicon-folder-close"></i> Swap
                                            </a>-->


                                            <?php
//                                            echo CHtml::link('<i class="glyphicon glyphicon-trash"></i> Delete', '#', array(
//                                                'class' => 'btn btn-danger btn-sm',
//                                                'confirm' => Yii::t('banners', 'Are you sure you want to delete this record?'),
//                                                'params' => array('id' => $landingpage->id_master),
//                                                'submit' => Yii::app()->createUrl('page/delete')
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
