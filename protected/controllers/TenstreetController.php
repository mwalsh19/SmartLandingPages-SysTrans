<?php

ini_set('max_execution_time', 180);
spl_autoload_unregister(array('YiiBase', 'autoload'));
require_once Yii::getPathOfAlias('application') . '/helpers/phpQuery-onefile.php';
spl_autoload_register(array('YiiBase', 'autoload'));

class TenstreetController extends Controller {

    public $layout = false;
    private $keys = array(
        "referrer_code",
        "new",
        "reapply",
        "attending_outside_school",
        "attempting_contact",
        "interview",
        "recruiting",
        "pending_investigations",
        "online_course",
        "awaiting_permit",
        "hireright_requested",
        "rehire_submitted",
        "ready_for_processing",
        "processing",
        "processing_complete",
        "attending_school",
        "attending_academy",
        "left_sch",
        "left_academy",
        "dl170_testing",
        "graduated_sch",
        "failed_sch",
        "compliance",
        "driver_reactivation",
        "no_show",
        "left_orientation",
        "hold",
        "ready_for_audit",
        "audit",
        "audit_deficiencies",
        "ok_to_code",
        "paf_entered",
        "hired",
        "not_qualified",
        "not_interested",
        "no_response",
        "duplicate_app",
        "xfer_allowed",
        "unqualified_da",
        "do_not_contact",
        "upload",
        "total");

    public function filters() {
        return array('accessControl - login, logout, proccessPosting',
            'postOnly + delete',
        );
    }

    public function accessRules() {
        return array(
            array('allow',
                'actions' => array(
                    'index',
                    'report1',
                    'export',
                    'exportForm',
                    'grandTotal'
                ),
                'users' => array('*'),
            ),
            array('deny',
                'users' => array('*'),
            )
        );
    }

    public function actionPublishers($id_group = 0) {

    }

    public function actionGrandTotal($id_group = 0) {
        $sql = "SELECT tr.total"
                . " FROM tbl_tenstreet_report tr WHERE tr.referrer_code = 'Grand Totals:' AND tr.id_group=" . $id_group . " GROUP BY tr.referrer_code";
        $rows = Yii::app()->db->createCommand($sql)->queryRow();
        $total = count($rows);

        //var_dump($rows);

        header('Content-Type: application/json');
        $obj = new stdClass();
        $obj->total = $rows['total'];
        echo json_encode($obj);
    }

    public function actionReport1($id_group = 0) {
        //referrer_code LIKE '%LACED%' AND
        $sql = "SELECT tr.referrer_code, tr.total, tr.hired, tr.not_qualified, tr.not_interested, tr.no_response, tr.duplicate_app, tr.unqualified_da, tr.attending_academy"
                . " FROM tbl_tenstreet_report tr WHERE tr.referrer_code != 'Grand Totals:' AND tr.id_group=" . $id_group . " GROUP BY tr.referrer_code";
        $rows = Yii::app()->db->createCommand($sql)->queryAll();
        $total = count($rows);
        $rows_arr = array();
        if ($total > 0) {

            for ($i = 0; $i < $total; $i++) {
                $item = $rows[$i];
                $rows_arr[] = array($item['referrer_code'], $item['total'], $item['hired'], $item['attending_academy'], $item['not_qualified']
                    , $item['not_interested'], $item['no_response'], $item['duplicate_app'], $item['unqualified_da']);
            }
        }

        header('Content-Type: application/json');
        $obj = new stdClass();
        $obj->iTotalRecord = $total;
        $obj->aaData = $rows_arr;
        echo json_encode($obj);
//        var_dump($rows);
    }

    public function actionIndex($date_from = '2015-07-01', $date_to = '2015-07-16') {
        
        header('Content-Type: application/json');
        echo json_encode(array('data'=>'0'));
        
//        $cookejar = dirname(__FILE__) . '/../runtime/cookie.txt';
//
//        $response = $this->getData(
//                "https://dashboard.tenstreet.com/support/login.php", "in_user=mwalsh%40lacedagency.com&in_pass=laced2015", $cookejar);
//
//        if ($response->status == 'fail') {
//            echo "cURL Error #:" . $response->data;
//        } else {
//            if (strpos($response->data, '/apps/newmgmt/account/user_answer_security_question.php') !== false) {
//
//                $response = $this->getData(
//                        "https://dashboard.tenstreet.com/apps/newmgmt/account/user_answer_security_question.php", "security_question=What%20was%20your%20high%20school%20mascot%3F%20%20(Patriots%2C%20Chargers%2C%20etc.)&security_answer=knights", $cookejar);
//
//                if ($response->status == 'fail') {
//                    echo "cURL Error #:" . $response->data;
//                } else {
//                    $response = $this->getData(
//                            "https://dashboard.tenstreet.com/apps/des/php/des_report_output.php?report_id=362", "date_from=$date_from&date_to=$date_to", $cookejar);
//
//                    if ($response->status == 'fail') {
//                        echo "cURL Error #:" . $response->data;
//                    } else {
//                        header('Content-Type: application/json');
//                        echo $this->parseData($response->data);
//                    }
//                }
//            } else {
//                $response = $this->getData(
//                        "https://dashboard.tenstreet.com/apps/des/php/des_report_output.php?report_id=362", "date_from=$date_from&date_to=$date_to", $cookejar);
//
//                if ($response->status == 'fail') {
//                    echo "cURL Error #:" . $response->data;
//                } else {
//                    header('Content-Type: application/json');
//                    echo $this->parseData($response->data);
//                }
//            }
//        }
    }

    private function parseData($str) {
        file_put_contents(Yii::getPathOfAlias('application') . '/runtime/testReport.html', $str);
        $data = preg_match("/<table(?=[^>]*class=\"small_st\")[^>]*>(.*?)<\\/table>/us", $str, $matches);

        $callFromDashboard = Yii::app()->request->getParam('dashboard_stats');
        if (empty($callFromDashboard)) {

            $cmd = Yii::app()->db->createCommand("SELECT MAX(id_group) AS last_id_group from tbl_tenstreet_report");
            $last_id_group = $cmd->queryScalar();
            $new_id_group = $last_id_group + 1;

            if (count($matches) > 0) {
                $dom = phpQuery::newDocument($matches[0]);

                $tableRows = $dom->find('.small_st tr');
                //$values = array();
                $total = count($tableRows);
                //$total = 9;

                $sql = "INSERT INTO tbl_tenstreet_report (" . implode(",", $this->keys) . ",id_group,referrer_code_crc) VALUES ";

                for ($i = 7; $i < $total; $i++) {
                    $td = $tableRows->eq($i)->find('td');
                    //$rowValues = array();
                    $row_separator = $i == 7 ? '' : ',';

                    $sql .= $row_separator . '(';

                    for ($f = 0; $f < count($td); $f++) {
                        $sql .= $f == 0 ? '"' . $td->eq($f)->text() . '"' : ',' . intval($td->eq($f)->text());
                        //$rowValues[$this->keys[$f]] = $f==0? $td->eq($f)->text() : intval($td->eq($f)->text());
                    }
                    $sql .= ',' . $new_id_group . ',CRC32("' . $td->eq(0)->text() . '")';

                    $sql .= ')';

                    //CRC32
                    //$rowValues["id_group"] = $new_id_group;
                    //$rowValues["referrer_code_crc"] = "CRC32('" . $rowValues['referrer_code'] . "')";
                    //$values[] = $rowValues;
                }

                $rows = Yii::app()->db->createCommand($sql)->execute();

                // $builder = Yii::app()->db->schema->commandBuilder;
                // $command = $builder->createMultipleInsertCommand('tbl_tenstreet_report', $values);
                // $rows = $command->execute();



                if ($rows) {
                    return json_encode(array(
                        'data' => $new_id_group
                    ));
                }
            }

            return null;
        } else {
            $this->layout = false;
            $grandTotal = 0;
            if (count($matches) > 0) {
                $dom = phpQuery::newDocument($matches[0]);
                $tableRows = $dom->find('.small_st tr');
                $total = count($tableRows);

                for ($i = 7; $i < $total; $i++) {
                    $td = $tableRows->eq($i)->find('td');
                    if ($td->eq(0)->text() == 'Grand Totals:') {
                        $total_tds = count($td) - 1;
                        $grandTotal = $td->eq($total_tds)->text();

                        if ($grandTotal == 'Grand Totals:') {
                            $grandTotal = 0;
                        }
                    }
                }
            }
            echo json_encode(array(
                'data' => $grandTotal
            ));
        }
    }

    private function getData($url, $postData, $cookejar) {
        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => $url,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_COOKIEJAR => $cookejar,
            CURLOPT_COOKIEFILE => $cookejar,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 180,
            CURLOPT_SSL_VERIFYPEER => false,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "POST",
            CURLOPT_POSTFIELDS => $postData,
            CURLOPT_HTTPHEADER => array(
                "content-type: application/x-www-form-urlencoded"
            ),
        ));

        $last_response = curl_exec($curl);
        $err = curl_error($curl);

        curl_close($curl);

        $resp = new stdClass();

        if ($err) {
            $resp->status = 'fail';
            $resp->data = $err;
        } else {
            $resp->status = 'success';
            $resp->data = $last_response;
        }

        return $resp;
    }

    public function actionExport() {
        $data = Yii::app()->request->getPost('data');
        $rows = "";
        if (!empty($data)) {
            $rows = json_decode($data);

            $excelData = [];
            $excelData[] = array(
                "Referrer Code",
                "Total",
                "Hired",
                "Attending Academy",
                "Not Qualified",
                "Not Interested",
                "No Response",
                "Duplicate App",
                "Unqualified Da",
            );

            $total = count($rows);
            for ($i = 0; $i < $total - 1; $i++) {
                $excelData[] = $rows[$i];
            }
            $excelData[] = $rows[$total - 1][0];
            $excelData[] = array("GRAND TOTAL", $rows[$total - 1][1][1], "", "", "", "", "", "", "");

            Yii::import('application.extensions.phpexcel.JPhpExcel');
            $xls = new JPhpExcel('UTF-8', false, 'TenstreetReport');
            $xls->addArray($excelData);
            $xls->generateXML('tenstreetReport.xls');
        }
    }

    public function actionExportForm() {
        $this->layout = false;
        echo "<script>function send(data){
                //console.log(data);
            document.getElementById('data').value = data;
            document.getElementById('sendForm').submit();
        }</script>";
        echo "<form id='sendForm' action='/tenstreet/export' method='post'><input type='hidden' name='data' id='data'></form>";
    }

}
