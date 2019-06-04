<?php
$baseUrl = Yii::app()->getBaseUrl(true);
$CClientScript = Yii::app()->clientScript;

$CClientScript->registerPackage('dataTables');


$CClientScript->registerCssFile('http://code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css');
$CClientScript->registerScriptFile('http://code.jquery.com/ui/1.11.4/jquery-ui.js', CClientScript::POS_END);
$CClientScript->registerScriptFile($baseUrl . '/manager/js/plugins/daterangepicker/moment.js', CClientScript::POS_END);
$CClientScript->registerScriptFile($baseUrl . '/manager/js/plugins/daterangepicker/daterangepicker.js', CClientScript::POS_END);
$CClientScript->registerCssFile($baseUrl . '/manager/css/daterangepicker/daterangepicker-bs3.css');
$CClientScript->registerScriptFile(Yii::app()->getBaseUrl(true) . '/manager/js/tenstreet.js', CClientScript::POS_END);
?>

<section class="content-header">
    <h1>
        Manager > Tenstreet
    </h1>
</section>
<div id="loader">
    <div id="loading">
        <div id="loading-center">
            <div id="loading-center-absolute">
                <div class="object" id="object_one"></div>
                <div class="object" id="object_two"></div>
                <div class="object" id="object_three"></div>
                <div class="object" id="object_four"></div>
                <div class="object" id="object_five"></div>
                <div class="object" id="object_six"></div>
                <div class="object" id="object_seven"></div>
                <div class="object" id="object_eight"></div>
            </div>
        </div>
    </div>
</div>
<iframe id="formToSend" src="<?php echo Yii::app()->createUrl('tenstreet/exportForm'); ?>" width="0" height="0" frameborder="0"></iframe>

<section class="content">
    <div class="row clearfix">
        <div class="col-sm-12">
            <article class="pull-left">
                <p>The below report shows the Tenstreet data in an easy to view UI.</p>
                <p>
                    <strong>1. Please select a "Date range" from the calendar bar.</strong>
                    <br>
                    <strong>2. Click the Apply button.</strong>
                </p>
            </article>
            <article class="pull-right">
                <div style="margin-bottom: 10px;">
                    <select>
                        <option>Select a Publisher</option>
                        <option>Snagajob</option>
                        <option>Google</option>
                    </select>
                </div>
                <div><a href="javascript:void(0)" class="btn btn-info btn-sm exportReport">Run Performance Report</a></div>
            </article>
        </div>
    </div>
    <br>
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-body">
                    <div class="clearfix">
                        <div class="pull-left" style="min-width: 420px;">
                            <select class="form-control" id="report-dates" style="max-width: 198px; display: inline-block;">
                                <option disabled selected> -- Select a Tenstreet report -- </option>
                                <option value="<?php echo Utils::dateRange('Today') ?>">Today</option>
                                <option value="<?php echo Utils::dateRange('Yesterday') ?>">Yesterday</option>
                                <option value="<?php echo Utils::dateRange('Last 7 Days + Today') ?>">Last 7 Days + Today</option>
                                <option value="<?php echo Utils::dateRange('Last 7 Days') ?>">Last 7 Days</option>
                                <option value="<?php echo Utils::dateRange('Last 30 Days + today') ?>">Last 30 Days + today</option>
                                <option value="<?php echo Utils::dateRange('Last 30 Days') ?>">Last 30 Days</option>
                                <option value="<?php echo Utils::dateRange('This Month') ?>">This Month</option>
                                <option value="<?php echo Utils::dateRange('This Year') ?>">This Year</option>
                                <option value="<?php echo Utils::dateRange('Last Month') ?>">Last Month</option>
                                <option value="<?php echo Utils::dateRange('Last Quarter') ?>">Last Quarter</option>
                                <option value="custom">Custom Date</option>
                            </select>
                            <span class="customDateVal">&nbsp;<strong></strong></span>
                        </div>
                        <!--                        <div class="pull-left">
                                                    <div class="pull-left">
                                                        <strong>Date range:</strong>
                                                    </div>
                                                    <br>
                                                    <div class="input-group" style="width: 250px;">
                                                        <div class="input-group-addon">
                                                            <i class="fa fa-calendar"></i>
                                                        </div>
                                                        <input type="text" class="form-control" id="datePicker" />
                                                    </div>
                                                </div>-->
                        <div class="pull-right">
                            <a href="javascript:void(0)" class="btn btn-primary btn-sm exportReport">Open View in Google Drive</a>
                        </div>
                    </div>
                    <br>
                    <table id="report1-table" class="table table-mailbox table-bordered table-striped table-responsive table-condensed" style="font-size: 13px;">
                        <thead>
                            <tr>
                                <th>Referrer Code</th>
                                <th>Total (all Tenstreet available rows)</th>
                                <th>Hired</th>
                                <th>Attending Academy</th>
                                <th>Not Qualified</th>
                                <th>Not Interested</th>
                                <th>No Response</th>
                                <th>Duplicate App</th>
                                <th>Unqualified Da</th>
                              <!--<th>Do Not Contact</th>-->
                               <!--<th>Total (all Tenstreet available rows)</th>-->

                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <!--<td></td>-->
                            </tr>
                        </tbody>
                        <tfoot>
                            <tr id="totals-row">
                                <th>Total (viewable columns)</th>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th></th>
                                <!--<th></th>-->
                            </tr>
                            <tr style="background: #000; color: #fff;">
                                <th style="font-weight: bold;">Grand Total</th>
                                <th id="grand-total" colspan="8" style="text-align: left; font-weight: bold;">0</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- Modal -->
<div class="modal fade" id="calendarModal" tabindex="-1" role="dialog" aria-labelledby="calendarModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <p>
                    Dates:
                    <label><b>To:</b></label>
                    <input type="text" id="input1" size="20">&nbsp;&nbsp;
                    <label><b>From:</b></label>
                    <input type="text" id="input2" size="20">
                </p>
                <div class="clearfix">
                    <div id="from" style="float: left; width: 50%;"></div>
                    <div id="to" style="float: left; width: 50%;"></div>
                </div>
            </div>
            <div class="modal-footer">
                <a href="javascript:void(0);" class="btn btn-primary btn-sm applyCustomDateBtn">Apply</a>
            </div>
        </div>
    </div>
</div>