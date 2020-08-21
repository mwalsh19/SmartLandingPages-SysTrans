<?php
$CClientScript = Yii::app()->clientScript;
$CClientScript->registerCssFile(Yii::app()->getBaseUrl(true) . '/manager/js/chartist/chartist.min.css');
$CClientScript->registerScriptFile(Yii::app()->getBaseUrl(true) . '/manager/js/chartist/chartist.min.js', CClientScript::POS_END);


//VIEWS BY STATE
if (!empty($byState)) {
    $raw_data = '';
    $raw_label = '';
    $chart_key = 'state';

    $data = $byState;
    $total = count($data) > 6 ? 6 : count($data);
    $startCounter = 1;

    for ($i = $startCounter; $i < $total; $i++) {
        $raw_data .= "{$data[$i]['sum']},";
        $label = !empty($data[$i][$chart_key]) ? ucfirst($data[$i][$chart_key]) : 'N/A';
        $raw_label.= "'" . $label . "',";
    }


    $CClientScript->registerScript('viewsByStateInit', "
    new Chartist.Bar('.viewsByState', {
        labels: [{$raw_label}],
        series: [
              [{$raw_data}],
            ]
    }, {
      seriesBarDistance: 15,
      reverseData: true,
      horizontalBars: true,
      axisY: {
        offset: 70
      }
});

", CClientScript::POS_END);
}
//VIEWS BY CITY
if (!empty($byCity)) {

    $raw_data = '';
    $raw_label = '';
    $chart_key = 'city';

    $data = $byCity;
    $total = count($data) > 6 ? 6 : count($data);
    $startCounter = 1;

    for ($i = $startCounter; $i < $total; $i++) {
        $raw_data .= "{$data[$i]['sum']},";
        $raw_label.= "'" . ucfirst($data[$i][$chart_key]) . "',";
    }


    $CClientScript->registerScript('viewsByCityInit', "
    new Chartist.Bar('.viewsByCity', {
        labels: [{$raw_label}],
        series: [
              [{$raw_data}],
            ]
    }, {
      seriesBarDistance: 15,
      reverseData: true,
      horizontalBars: true,
      axisY: {
        offset: 150
      }
});

", CClientScript::POS_END);
}


//VIEWS BY PUBLISHER
if (!empty($byPublisher)) {

    $raw_data = '';
    $raw_label = '';
    $chart_key = 'publisher';

    $data = $byPublisher;
    $total = count($data) > 6 ? 6 : count($data);
    $startCounter = 1;

    for ($i = $startCounter; $i < $total; $i++) {
        $raw_data .= "{$data[$i]['sum']},";
        $raw_label.= "'" . ucfirst($data[$i][$chart_key]) . "',";
    }

    $CClientScript->registerScript('viewsByPublisherInit', "
    new Chartist.Bar('.viewsByPublisher', {
        labels: [{$raw_label}],
        series: [
              [{$raw_data}],
            ]
    }, {
      seriesBarDistance: 15,
      reverseData: true,
      horizontalBars: true,
      axisY: {
        offset: 70
      }
});

", CClientScript::POS_END);
}

//LEADS BY STATE
if (!empty($leadsByState)) {

    $raw_data = '';
    $raw_label = '';
    $chart_key = 'state';

    $data = $leadsByState;
    $total = count($data) > 5 ? 5 : count($data);
    $startCounter = 0;

    for ($i = $startCounter; $i < $total; $i++) {
        $raw_data .= "{$data[$i]['sum']},";
        $raw_label.= "'" . ucfirst($data[$i][$chart_key]) . "',";
    }

    $CClientScript->registerScript('leadsByStateInit', "
    new Chartist.Bar('.leadsByState', {
        labels: [{$raw_label}],
        series: [
              [{$raw_data}],
            ]
    }, {
      seriesBarDistance: 15,
      reverseData: true,
      horizontalBars: true,
      axisY: {
        offset: 70
      }
});

", CClientScript::POS_END);
}


//LEADS BY CITY
if (!empty($leadsByCity)) {

    $raw_data = '';
    $raw_label = '';
    $chart_key = 'city';

    $data = $leadsByCity;
    $total = count($data) > 5 ? 5 : count($data);
    $startCounter = 0;

    for ($i = $startCounter; $i < $total; $i++) {
        $raw_data .= "{$data[$i]['sum']},";
        $raw_label.= "'" . ucfirst($data[$i][$chart_key]) . "',";
    }

    $CClientScript->registerScript('leadsByCityInit', "
    new Chartist.Bar('.leadsByCity', {
        labels: [{$raw_label}],
        series: [
              [{$raw_data}],
            ]
    }, {
      seriesBarDistance: 15,
      reverseData: true,
      horizontalBars: true,
      axisY: {
        offset: 70
      }
});

", CClientScript::POS_END);
}


//LEADS BY REFERRER
if (!empty($leadsByReferrer)) {

    $raw_data = '';
    $raw_label = '';
    $chart_key = 'referral_code';

    $data = $leadsByReferrer;
    $total = count($data) > 10 ? 10 : count($data);
    $startCounter = 0;

    for ($i = $startCounter; $i < $total; $i++) {
        $raw_data .= "{$data[$i]['sum']},";
        $raw_label.= "'" . ucfirst($data[$i][$chart_key]) . "',";
    }

    $CClientScript->registerScript('leadsByReferrerInit', "
    new Chartist.Bar('.leadsByReferrer', {
        labels: [{$raw_label}],
        series: [
              [{$raw_data}],
            ]
    }, {
      seriesBarDistance: 15,
      reverseData: true,
      horizontalBars: true,
      axisY: {
        offset: 250
      }
});

", CClientScript::POS_END);
}
date_default_timezone_set('America/Los_Angeles');

$CClientScript->registerScript('grandTotal', "
    var m = '" . date('m') . "';
    var d = '01';
    var Y = '" . date('Y') . "';

    var from = Y +'-'+ m +'-'+d;
    var to =  '" . date('Y-m-d') . "';

     $.get('" . Yii::app()->createUrl('tenstreet/index') . "', {dashboard_stats :'1', date_from: from, date_to:to }, function(response){
         $('.loadingTotal').hide();
         $('.tenstreetGrandTotal span').text(response.data);
     });
");
$this->setPageTitle('Dashboard');
?>


<section class="content-header">
    <h1>
        Dashboard
    </h1>
</section>

<!-- Main content -->
<section class="content">

    <div class="row">
        <div class="col-sm-3">
            <div class="small-box bg-green">
                <div class="inner">
                    <h3 class="total">
                        <span>
                            <?php
                            $total_leads_by_referral = 0;
                            if (!empty($leadsByReferrer)) {
                                for ($index2 = 0; $index2 < count($leadsByReferrer); $index2++) {
                                    $total_leads_by_referral += (int) $leadsByReferrer[$index2]['sum'];
                                }
                            }
                            echo $total_leads_by_referral;
                            ?>
                        </span>
                    </h3>
                    <p>
                        Total Leads by Referrer
                    </p>
                </div>
                <div class="icon">
                    <i class="ion ion-stats-bars"></i>
                </div>
                <a href="<?php echo Yii::app()->createUrl('manager/leads', array('filter' => 'referral_code')); ?>" class="small-box-footer">
                    More info <i class="fa fa-arrow-circle-right"></i>
                </a>
            </div>
        </div>
        <div class="col-sm-3">
            <img class="loadingTotal" src="<?php echo Yii::app()->getBaseUrl(true) ?>/images/loading_2.gif">
            <div class="small-box bg-blue">
                <div class="inner" style="min-height: 102px;">
                    <h3 class="tenstreetGrandTotal">
                        <span>0</span>
                    </h3>
                    <p>Tenstreet this month</p>
                </div>
                <div class="icon">
                    <i class="ion ion-stats-bars"></i>
                </div>
                <a  class="small-box-footer">
                    &nbsp;
                </a>
            </div>
        </div>
    </div>

    <!--<h5>Landing Pages Views</h5>-->
    <!--VIEWS BY STATE-->
    <div class="row">
        <div class="col-sm-6">
            <div class="nav-tabs-custom">
                <ul class="nav nav-tabs pull-right" style="min-height: 44px;">
                    <li class="pull-left header">Views by State - Top 5</li>
                </ul>
                <div class="tab-content">
                    <div class="row">
                        <div class="col-sm-11">
                            <div class="viewsByState" style="width: 100%; height: 275px;"></div>
                        </div>
                        <div class="col-sm-1">

                            <?php
                            if (!empty($byState)) {
                                $data = $byState;
                                $total = count($data) > 6 ? 6 : count($data);
                                $startCounter = 1;
                                for ($index1 = $startCounter; $index1 < $total; $index1++) {
                                    ?>
                                    <div class="pad">
                                        <div class="clearfix" style="padding: 10px 0 0 0;">
                                            <small class="pull-right"><?php echo $data[$index1]['sum'] ?></small>
                                        </div>
                                    </div>
                                    <?php
                                }
                            }
                            ?>

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--VIEWS BY PUBLISHER-->
        <div class="col-sm-6">
            <div class="nav-tabs-custom">
                <ul class="nav nav-tabs pull-right" style="min-height: 44px;">
                    <li class="pull-left header">Views by Publisher - Top 5</li>
                </ul>
                <div class="tab-content">
                    <div class="row">
                        <div class="col-sm-11">
                            <div class="viewsByPublisher" style="width: 100%; height: 275px;"></div>
                        </div>
                        <div class="col-sm-1">

                            <?php
                            if (!empty($byPublisher)) {
                                $data = $byPublisher;
                                $total = count($data) > 6 ? 6 : count($data);
                                $startCounter = 1;
                                for ($index1 = $startCounter; $index1 < $total; $index1++) {
                                    ?>
                                    <div class="pad">
                                        <div class="clearfix" style="padding: 10px 0 0 0;">
                                            <small class="pull-right"><?php echo $data[$index1]['sum'] ?></small>
                                        </div>
                                    </div>
                                    <?php
                                }
                            }
                            ?>

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--VIEWS BY PUBLISHER-->
        <div class="col-sm-12">
            <div class="nav-tabs-custom">
                <ul class="nav nav-tabs pull-right" style="min-height: 44px;">
                    <li class="pull-left header">Views by City - Top 5</li>
                </ul>
                <div class="tab-content">
                    <div class="row">
                        <div class="col-sm-11">
                            <div class="viewsByCity" style="width: 100%; height: 275px;"></div>
                        </div>
                        <div class="col-sm-1">

                            <?php
                            if (!empty($byCity)) {

                                $data = $byCity;
                                $total = count($data) > 6 ? 6 : count($data);
                                $startCounter = 1;
                                for ($index1 = $startCounter; $index1 < $total; $index1++) {
                                    ?>
                                    <div class="pad">
                                        <div class="clearfix" style="padding: 10px 0 0 0;">
                                            <small class="pull-right"><?php echo $data[$index1]['sum'] ?></small>
                                        </div>
                                    </div>
                                    <?php
                                }
                            }
                            ?>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--<h5>Leads Form</h5>-->
    <!--LEAD FORMS-->
    <div class="row">
        <div class="col-sm-6">
            <div class="nav-tabs-custom">
                <ul class="nav nav-tabs pull-right" style="min-height: 44px;">
                    <li class="pull-left header">Leads by State - Top 5</li>
                </ul>
                <div class="tab-content">
                    <div class="row">
                        <div class="col-sm-11">
                            <div class="leadsByState" style="width: 100%; height: 275px;"></div>
                        </div>
                        <div class="col-sm-1">

                            <?php
                            if (!empty($leadsByState)) {
                                $data = $leadsByState;
                                $total = count($data) > 5 ? 5 : count($data);
                                $startCounter = 0;
                                for ($index1 = $startCounter; $index1 < $total; $index1++) {
                                    ?>
                                    <div class="pad">
                                        <div class="clearfix" style="padding: 10px 0 0 0;">
                                            <small class="pull-right"><?php echo $data[$index1]['sum'] ?></small>
                                        </div>
                                    </div>
                                    <?php
                                }
                            }
                            ?>

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--LEADS BY -->
        <div class="col-sm-6">
            <div class="nav-tabs-custom">
                <ul class="nav nav-tabs pull-right" style="min-height: 44px;">
                    <li class="pull-left header">Leads by City - Top 5</li>
                </ul>
                <div class="tab-content">
                    <div class="row">
                        <div class="col-sm-11">
                            <div class="leadsByCity" style="width: 100%; height: 275px;"></div>
                        </div>
                        <div class="col-sm-1">

                            <?php
                            if (!empty($leadsByCity)) {
                                $data = $leadsByCity;
                                $total = count($data) > 5 ? 5 : count($data);
                                $startCounter = 0;
                                for ($index1 = $startCounter; $index1 < $total; $index1++) {
                                    ?>
                                    <div class="pad">
                                        <div class="clearfix" style="padding: 10px 0 0 0;">
                                            <small class="pull-right"><?php echo $data[$index1]['sum'] ?></small>
                                        </div>
                                    </div>
                                    <?php
                                }
                            }
                            ?>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <div class="row">
        <div class="col-sm-12">
            <div class="nav-tabs-custom">
                <ul class="nav nav-tabs pull-right" style="min-height: 44px;">
                    <li class="pull-left header">Leads by Referrer - Top 10</li>
                </ul>
                <div class="tab-content">
                    <div class="row">
                        <div class="col-sm-11">
                            <div class="leadsByReferrer" style="width: 100%; height: 550px;"></div>
                        </div>
                        <div class="col-sm-1">

                            <?php
                            if (!empty($leadsByReferrer)) {
                                $data = $leadsByReferrer;
                                $total = count($data) > 10 ? 10 : count($data);
                                $startCounter = 0;
                                for ($index1 = $startCounter; $index1 < $total; $index1++) {
                                    ?>
                                    <div class="pad" style="padding: 33px 10px 0 10px;">
                                        <div class="clearfix">
                                            <small class="pull-right"><?php echo $data[$index1]['sum'] ?></small>
                                        </div>
                                    </div>
                                    <?php
                                }
                            }
                            ?>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section><!-- /.content -->
