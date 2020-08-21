<?php
$baseUrl = Yii::app()->getBaseUrl(true);
$CClientScript = Yii::app()->clientScript;

$CClientScript->registerPackage('dataTables');
//$CClientScript->registerScriptFile($baseUrl . '/manager/js/views.js', CClientScript::POS_END);

$CClientScript->registerScriptFile($baseUrl . '/manager/js/plugins/daterangepicker/moment.js', CClientScript::POS_END);
$CClientScript->registerScriptFile($baseUrl . '/manager/js/plugins/daterangepicker/daterangepicker.js', CClientScript::POS_END);
$CClientScript->registerCssFile($baseUrl . '/manager/css/daterangepicker/daterangepicker-bs3.css');
$CClientScript->registerScriptFile(Yii::app()->getBaseUrl(true) . '/manager/js/leads.js', CClientScript::POS_END);


$CClientScript->registerCssFile($baseUrl . '/manager/js/chartist/chartist.min.css');
$CClientScript->registerScriptFile($baseUrl . '/manager/js/chartist/chartist.min.js', CClientScript::POS_END);



Yii::app()->clientScript->registerScript('search', "
    var ajaxUpdateTimeout;
    var ajaxRequest;
    var dataUpdated;

    $('input#string').keyup(function(event){
            ajaxRequest = $(this).serialize();
               clearTimeout(ajaxUpdateTimeout);
               ajaxUpdateTimeout = setTimeout(function () {
                   $.fn.yiiListView.update('ajaxListView', { data: ajaxRequest});
               },
               300);

    });

    function calculateLeads(){
        $('.total span').text($(document).find('.ajaxTotalLeads').text());
    }

     $('input#string').keypress(function(event){
       if (event.which == 13) return false;
       if (event.which == 13) event.preventDefault ();
     });
"
);



$data = $dataProvider->getData();

$totalLeads = 0;
if (!empty($rawData)) {
    if (empty($filter)) {
        for ($index = 0; $index < count($rawData); $index++) {
            $totalLeads += (int) $rawData[$index]['leads'];
        }
    } else {
        for ($index = 0; $index < count($rawData); $index++) {
            $totalLeads += (int) $rawData[$index]['sum'];
        }
    }
}


//LEADS ANALYTICS
if (!empty($filter) && !empty($data)) {
    $filterByDate = !empty($_GET['date']) ? $_GET['date'] : '';
    $barOffset = '70';

    if ($filter == 'state') {
        $title = 'Leads by State - Top 10';
        $chart_title = 'State';
        $chart_key = 'state';
    } else if ($filter == 'city') {
        $title = 'Leads by City - Top 10';
        $chart_title = 'City';
        $chart_key = 'city';
    } else if ($filter == 'referral_code') {
        $title = 'Leads by Referrer - Top 10';
        $chart_title = 'Referrer';
        $chart_key = 'referral_code';
        $barOffset = '250';
    }

    $CClientScript->registerScript('InitGraphStats', '

      var loadingImage = $("#loadingImage"),
            filter = "' . $filter . '",
                filterByDate = "' . $filterByDate . '",
                raw_data = "",
                raw_label = "",
                threshold = "",
                index = 0,
                startCounter = 0,
                total = 0,
                i;

    function initGraphStats(raw_data, raw_label){
        setTimeout(function(){
            new Chartist.Bar(".leadsGraphStats", {
                labels: raw_label,
                series: [raw_data]
            }, {
                seriesBarDistance: 15,
                reverseData: true,
                horizontalBars: true,
                axisY: {
                  offset: ' . $barOffset . '
                }
            });

            var graphHeigth = 0;
            for(var index2 = 0; index2 < raw_data.length; index2++){
                $(".columnTotals").append("<div class=\"pad\" style=\"padding: 33px 10px 0 10px;\"><div class=\"clearfix\"><small class=\"pull-right\">"+raw_data[index2]+"</small></div></div>");
                graphHeigth += 55;
            }
            $(".leadsGraphStats").height(graphHeigth);
            loadingImage.hide();

            }, 70);
    }

    function capitalizeFirstLetter(string) {
        return string.charAt(0).toUpperCase() + string.slice(1);
    }

    $.get("' . Yii::app()->createUrl('manager/getLeadsAnalytics') . '" , {filter: filter, date: filterByDate}, function(result){
        total = result.length;

        var raw_data_array = [],
        raw_label_array = [];

        for(i = startCounter; i < total; i++){
            raw_data_array.push(parseInt(result[i].sum));

            var labelValue;

            if(filter == "city"){
                labelValue = result[i].city !== "" ? result[i].city: "N/A";
            }else if(filter == "state"){
                labelValue = result[i].state !== "" ? result[i].state: "N/A";
            }else{
                labelValue = result[i].referral_code !== "" ? result[i].referral_code: "N/A";
            }
            raw_label_array.push(capitalizeFirstLetter(labelValue));
        }

        raw_data= raw_data_array;
        raw_label= raw_label_array;

        initGraphStats(raw_data, raw_label);

    });

', CClientScript::POS_END);
} else {
    $title = 'All Leads';
}

$this->setPageTitle($title);
?>
<section class="content-header clearfix">
    <h1 class="pull-left">
        <span>Manager</span> > <span><?php echo!empty($data) ? $title : 'Leads'; ?></span>
    </h1>
    <div class="pull-right">
        <?php
        $params = array();
        if (!empty($_GET['filter'])) {
            $params['filter'] = $_GET['filter'];
        }
        if (!empty($_GET['date'])) {
            $params['date'] = $_GET['date'];
        }
        if (!empty($data)) {
            $url = Yii::app()->createUrl('manager/exportLeads', $params);
        }
        if (!empty($data)) {
            ?>
            <a href="<?php echo $url; ?>" class="btn btn-primary btn-sm"> Export leads</a>
            <?php
        }
        ?>
    </div>
</section>

<section class="content">
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-body">
                    <?php if (!empty($filter) && !empty($data)) { ?>
                        <div class="clearfix">

                            <div class="box-header">
                                <h3 class="box-title" style="font-size: 12px;font-weight: bold;margin-bottom: 0;padding-bottom: 0;"><?php echo $title; ?></h3>
                            </div><!-- /.box-header -->
                            <div style="text-align:center;margin:10px;" class="leadsGraphContainer-<?php echo $filter ?>">
                                <div class="row">
                                    <div class="col-sm-11">
                                        <img id="loadingImage" src="<?php echo $baseUrl ?>/images/loading.gif" style="position: absolute; left: 50%; top: 50%; margin-left: -100px; margin-top: -14px;">
                                        <div class="leadsGraphStats" style="width:100%;height:550px;"></div>
                                    </div>
                                    <div class="col-sm-1 columnTotals">

                                    </div>
                                </div>

                            </div>
                            <br />
                        </div>
                    <?php } ?>

                    <?php if (empty($filter)) { ?>
                        <div class="clearfix">
                            The below report shows Leads by state, city and referral code. <br><br>
                            <strong>Referral code</strong> - The referral code of Landing Page<br>
                            <strong>State</strong> - The State selected on Lead Form<br>
                            <strong>City</strong> -  The City selected on Lead Form<br>
                            <strong>Leads</strong> - The # of times the Lead Form was send.<br><br>
                        </div>
                    <?php } ?>

                    <div class="clearfix">
                        <div class="pull-left">
                            <div class="pull-left">
                                <div class="total" style="font-size: 25px;">
                                    Total Leads:
                                    <span><?php echo $totalLeads; ?></span>
                                </div>
                            </div>
                        </div>
                        <div class="pull-right">
                            <div class="clearfix">
                                <div class="pull-left">
                                    <label style="margin: 8px 10px 0 0;">Search:</label>
                                </div>
                                <div class="pull-right">
                                    <?php
                                    if (!empty($data)) {
                                        echo CHtml::beginForm(CHtml::normalizeUrl(Yii::app()->createUrl('manager/leads')), 'get', array('id' => 'filter-form', 'style' => 'width: 300px;'));
                                        echo CHtml::textField('string', (isset($_GET['string'])) ? $_GET['string'] : '', array('id' => 'string', 'class' => 'form-control', 'placeholder' => 'Type your search terms...'));
                                        CHtml::endForm();
                                    }
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr>

                    <?php
                    $this->renderPartial('_leadsListView', array('filter' => $filter, 'dataProvider' => $dataProvider));
                    ?>
                </div>
            </div>
        </div>
    </div>
</section>