<?php

//echo CPasswordHelper::hashPassword('TbVTFkeX');
ini_set('max_execution_time', 180);
ini_set('memory_limit','128M');
spl_autoload_unregister(array('YiiBase', 'autoload'));
require_once Yii::getPathOfAlias('webroot') . '/vendor/PHPExcel_pro/Classes/PHPExcel/IOFactory.php';
spl_autoload_register(array('YiiBase', 'autoload'));

class ManagerController extends Controller {

    public $layout = '//layouts/manager';

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
                    'create',
                    'update',
                    'delete',
                    'landingpage',
                    'urlposting',
                    'tenstreet',
                    'readexcel',
                    'Views',
                    'missingpages',
                    'dashboard',
                    'exportViews',
                    'exportLeads',
                    'leads',
                    'leadsRange',
                    'feedformat',
                    'viewsDev',
                    'getLeadsAnalytics',
                    'getViewsAnalytics',
                    'rangeLeadsAnalytics',
                    'tenstreetreport',
                    'rhinolabs',
                    'shorturl',
                    'analyticsshorturl'
                ),
                'roles' => array('A'),
                'users' => array('@'),
            ),
            array('deny',
                'users' => array('*'),
            )
        );
    }

    public function actionIndex() {
        $this->render('index');
    }

//UPLOAD EXCEL TOOL
    public function actionReadExcel() {
        $model_excel = new MExcel();
        $model_excel->excelfile = CUploadedFile::getInstance($model_excel, 'excelfile');
//
        if (!empty($model_excel->excelfile)) {
            $excel_file = $model_excel->excelfile->getTempName();
            try {
                $file_type = PHPExcel_IOFactory::identify($excel_file);
//Get que type of excel file
                $objReader = PHPExcel_IOFactory::createReader($file_type);
//Open buffer reader to excel file
                $objPHPExcel = $objReader->load($excel_file);
//Load de excel file
            } catch (Exception $e) {
                die('Error loading file "' .
                        pathinfo($excel_file, PATHINFO_BASENAME) .
                        '": ' .
                        $e->getMessage());
            }

            foreach ($objPHPExcel->getWorksheetIterator()as $sheet) {
//Get all sheets from workbook
//
                $highestRow = $sheet->getHighestRow();
//Get Highest Row form active sheet
                $highestColumn = $sheet->getHighestColumn();
//Get Highest Column form active sheet
//
                if ($highestRow < 2) {
                    continue;
                }
                for ($row = 2; $row <= $highestRow; $row ++) {
                    $rowData = $sheet->rangeToArray("A{$row}" .
                            ':' .
                            $highestColumn .
                            $row, NULL, TRUE, FALSE);
//Convert Cell Range from row to Array
                    $data = $rowData[0];
//The array retrieve one index array
                    $template_type = $data[4];
//Get the table name example: tbl_apply, tbl_flatbed etc...
//
                    $master = MMaster::model()->findByAttributes(array('path' => $data[1]));
//Search in tha master table if exist
//
                    if (!empty($master)) {
                        $id_master = $master->id_master;
//
                        $master->path = $data[1];
                        $master->publisher = $data[2];
                        $master->title = $data[3];
                        $master->template_type = $data[4];
                        $master->save(false);
//
                        switch ($template_type) {
                            case 'tbl_apply' : $model_template = MApply::model()->findByAttributes(array(
                                    'id_master' => $id_master));
                                break;
                            case 'tbl_dedicated' : $model_template = MDedicated::model()->findByAttributes(array(
                                    'id_master' => $id_master));
                                break;
                            case 'tbl_flatbed' : $model_template = MFlatbed::model()->findByAttributes(array(
                                    'id_master' => $id_master));
                                break;
                            case 'tbl_truckdriver' : $model_template = MTruckdriver::model()->findByAttributes(array(
                                    'id_master' => $id_master));
                                break;
                            case 'tbl_truckjob' : $model_template = MTruckjob::model()->findByAttributes(array(
                                    'id_master' => $id_master));
                                break;
                        }
                    } else {
                        $model_master = new MMaster();
                        $model_master->path = $data[1];
                        $model_master->publisher = $data[2];
                        $model_master->title = $data[3];
                        $model_master->template_type = $data[4];
                        $model_master->save(false);
                        $id_master = $model_master->id_master;
//
                        switch ($template_type) {
                            case 'tbl_apply' : $model_template = new MApply();
                                break;
                            case 'tbl_dedicated' : $model_template = new MDedicated();
                                break;
                            case 'tbl_flatbed' : $model_template = new MFlatbed();
                                break;
                            case 'tbl_truckdriver' : $model_template = new MTruckdriver();
                                break;
                            case 'tbl_truckjob' : $model_template = new MTruckjob();
                                break;
                        }
                    }
//
                    switch ($template_type) {
                        case 'tbl_apply' : //Apply template
                            $model_template->referral_code = $data[5];
                            $model_template->phone_number_1 = $data[6];
                            $model_template->phone_number_2 = $data[7];
                            $model_template->image = $data[8];
                            $model_template->image_position = $data[9];
                            $model_template->description_html = $data[10];
                            $model_template->details_html = $data[11];
                            $model_template->secondary_description_html = $data[12];
                            $model_template->support_indeed = $data[13];
                            $model_template->intelliapp_referral_code = $data[14];
                            break;
                        case 'tbl_dedicated' : //Dedicate template
                            $model_template->referral_code = $data[5];
                            $model_template->phone_number = $data[6];
                            $model_template->background = $data[7];
                            $model_template->image = $data[8];
                            $model_template->header_logo = $data[9];
                            $model_template->footer_logo = $data[10];
                            $model_template->heading = $data[11];
                            $model_template->description_html = $data[12];
                            $model_template->details_html = $data[13];
                            $model_template->support_indeed = $data[14];
                            $model_template->intelliapp_referral_code = $data[15];
                            break;
                        case 'tbl_flatbed' : //Flatbed template
                            $model_template->referral_code = $data[5];
                            $model_template->phone_number = $data[6];
                            $model_template->intelliapp_referral_code = $data[7];
                            break;
                        case 'tbl_truckdriver' : //Truck driver template
                            $model_template->referral_code = $data[5];
                            $model_template->header_html = $data[6];
                            $model_template->phone_number_1 = $data[7];
                            $model_template->phone_number_2 = $data[8];
                            $model_template->description_html = $data[9];
                            $model_template->background = $data[10];
                            $model_template->intelliapp_referral_code = $data[11];
                            break;
                        case 'tbl_truckjob' : //Truck job template
                            $model_template->referral_code = $data[5];
                            $model_template->phone_number = $data[6];
                            $model_template->content = $data[7];
                            $model_template->background = $data[8];
                            $model_template->intelliapp_referral_code = $data[9];
                            break;
                    }
                    $model_template->id_master = $id_master;
                    $model_template->save(false);
                }
            }
            Yii::app()->user->setFlash('status', 'Well done!');
            $this->redirect($this->createUrl('manager/readexcel'));
        } else {
            $this->render('readexcel', array('model' => $model_excel));
        }
    }

//MISSING PAGES
    public function actionMissingpages() {
        $query = MPageMissing::model()->findAll();
        $this->render('missingpage', array('data' => $query));
    }

//DASHBOARD
    public function actionDashboard() {
        $byState = $this->getAnalyticsByFilter('state');
        $byCity = $this->getAnalyticsByFilter('city');
        $byPublisher = $this->getAnalyticsByFilter('publisher');
        $leadsByState = $this->getLeadsByFilter('state');
        $leadsByCity = $this->getLeadsByFilter('city');
        $leadsByReferrer = $this->getLeadsByFilter('referral_code');

        $this->render('dashboard', array(
            'byState' => $byState,
            'byCity' => $byCity,
            'byPublisher' => $byPublisher,
            'leadsByState' => $leadsByState,
            'leadsByCity' => $leadsByCity,
            'leadsByReferrer' => $leadsByReferrer
                )
        );
    }

//ANALYTICS
    public function actionViews($string = '', $filter = '', $date = '') {
        $rawData = $this->getViews($string, $filter, $date);
//        var_dump($rawData);


        $dataProvider = new CArrayDataProvider($rawData, array(
            'keyField' => 'publisher',
            'pagination' => array(
                'pageSize' => 100,
            ),
            'sort' => array(
                'attributes' => array(
                    'publisher',
                    'state',
                    'city',
                    'type',
                    'path',
                    'clicks',
                    'sum',
                ),
            ),
        ));


        if (Yii::app()->request->isAjaxRequest) {
            $this->layout = false;
            $this->renderPartial('_viewsListView', array('filter' => $filter, 'dataProvider' => $dataProvider,
                'rawData' => $rawData));
        } else {
            $this->render('views', array(
                'dataProvider' => $dataProvider,
                'filter' => $filter,
                'rawData' => $rawData
            ));
        }
    }

    private function getViews($string = '', $filter = '', $date = '') {

        $command = Yii::app()->db->createCommand();

        $table_name = 'tbl_click_landingpage';
        if (!empty($date)) {
            $table_name = 'tbl_views_archive';
        }
        if (!empty($filter)) {
            $command->select('path, publisher, type, state, city, SUM(clicks) AS sum');
            $command->from($table_name);
            $command->order('sum DESC');
            $command->group($filter);
        } else {
            $command->select('*');
            $command->from($table_name);
            //$command->limit = 100;
            $command->order('clicks DESC');
        }

        if (!empty($date)) {
            $explode_date = explode('-', $date);
            $sql = 'YEAR(create_date) = "' . $explode_date[1] . '"  AND MONTH(create_date) = "' . $explode_date[0] . '"';
            $command->where($sql);
        }

        if (strlen($string) > 0) {
            $conditions = '';
            switch ($filter) {
                case 'state':
                    $conditions = 'state LIKE :string';
                    break;
                case 'city':
                    $conditions = 'state LIKE :string OR city LIKE :string';
                    break;
                case 'publisher':
                    $conditions = 'publisher LIKE :string';
                    break;
                default:
                    $conditions = 'publisher LIKE :string OR state LIKE :string OR city LIKE :string OR type LIKE :string OR path LIKE :string';
                    break;
            }

            if (!empty($conditions)) {
                if (empty($date)) {
                    $command->where($conditions, array(':string' => "%$string%"));
                } else {
                    $command->andWhere($conditions, array(':string' => "%$string%"));
                }
            }
        }
//die();
        $result_of_query = $command->queryAll();

        

        //echo $command->getText();
        //die();

        return $result_of_query;
    }

    public function actionGetViewsAnalytics($filter = '', $date = '') {

        $tableName = "tbl_click_landingpage";

        if (!empty($date)) {
            $tableName = "tbl_views_archive";
        }

        $command = Yii::app()->db->createCommand();
        $command->select('publisher, state, city, SUM(clicks) AS sum');
        $command->from($tableName);
        $command->order('sum DESC');
        $command->group($filter);
        $command->limit = 10;

        $analytics = $command->queryAll();

        header('Content-Type: application/json');
        echo json_encode($analytics);
    }

    public function getAnalyticsByFilter($filter) {
        $command = Yii::app()->db->createCommand();
        $command->select('path, publisher, type, state, city, SUM(clicks) AS sum');
        $command->distinct = true;
        $command->from('tbl_click_landingpage');
        $command->order('sum DESC');
        $command->group($filter);
        return $command->queryAll();
    }

    public function actionExportViews($string = '', $filter = '', $date = '') {
        $views = $this->getViews($string, $filter, $date);

        if (!empty($views)) {
            if (!empty($filter)) {

                switch ($filter) {
                    case 'city':
                        $headers = array(
                            'City',
                            'State',
                            'Views'
                        );
                        break;
                    case 'state':
                        $headers = array(
                            'State',
                            'Views'
                        );
                        break;
                    case 'publisher':
                        $headers = array(
                            'Publisher',
                            'Views'
                        );
                        break;
                }


                $data = array(1 => $headers);

                foreach ($views as $view) {
                    switch ($filter) {
                        case 'city':
                            $city = !empty($view['city']) ? $view['city'] : 'N/A';
                            $state = !empty($view['state']) ? $view['state'] : 'N/A';
                            $data[] = array($city, $state, $view['sum']);
                            break;
                        case 'state':
                            $state = !empty($view['state']) ? $view['state'] : 'N/A';
                            $data[] = array($state, $view['sum']);
                            break;
                        case 'publisher':
                            $publisher = !empty($view['publisher']) ? $view['publisher'] : 'N/A';
                            $data[] = array($publisher, $view['sum']);

                            break;
                    }
                }
            } else {
                $data = array(1 => array(
                        'Publisher',
                        'State',
                        'Type',
                        'Path',
                        'Views'));

                foreach ($views as $view) {
                    $publisher = !empty($view['publisher']) ? $view['publisher'] : 'N/A';
                    $state = !empty($view['state']) ? $view['state'] : 'N/A';
                    $type = !empty($view['type']) ? $view['type'] : 'N/A';
                    $path = 'http://joinswift.com/landing-pages/' . $view['path'];
                    $views_count = $view['clicks'];
                    $data[] = array($publisher,
                        $state,
                        $type,
                        $path,
                        $views_count);
                }
            }
            Yii::import('application.extensions.phpexcel.JPhpExcel');
            $xls = new JPhpExcel('UTF-8', false, 'Joinswift_views');
            $xls->addArray($data);
            $xls->generateXML('joinswift_views.xls');
        }
    }

//LEADS

    public function actionLeads($string = '', $filter = '', $date = '') {
        $rawData = $this->getLeads($string, $filter, $date);

        $dataProvider = new CArrayDataProvider($rawData, array(
            'keyField' => 'referral_code',
            'pagination' => array(
                'pageSize' => 20,
            ),
            'sort' => array(
                'attributes' => array(
                    'referral_code',
                    'state',
                    'city',
                    'leads',
                    'sum',
                ),
            ),
        ));


        if (Yii::app()->request->isAjaxRequest) {
            $this->layout = false;
            $this->renderPartial('_leadsListView', array('filter' => $filter, 'dataProvider' => $dataProvider,
                'rawData' => $rawData));
        } else {
            $this->render('leads', array(
                'dataProvider' => $dataProvider,
                'filter' => $filter,
                'rawData' => $rawData
            ));
        }
    }

    private function getLeads($string = '', $filter = '', $date = '') {
        $command = Yii::app()->db->createCommand();

        $current_month = '';
        $startMonth = '';
        $bothTables = false;

        /* DEFAULT */
        $table_name = 'tbl_leads';

        if (!empty($date)) {
            $current_month = date('m');
            /**/
            $date = explode(' - ', $date);
            /**/
            $startDateSelected = explode('-', $date[0]);
            $endDateSelected = explode('-', $date[1]);
            /**/
            $startMonth = $startDateSelected[1];
            $endMonth = $endDateSelected[1];

            if ($startMonth != $current_month && $endMonth != $current_month) {
                /* SEARCH ONLY ON LEADS ARCHIVE TABLE */
                $table_name = 'tbl_leads_archive';
            } else if ($startMonth == $current_month && $endMonth == $current_month) {
                /* SEARCH ONLY ON LEADS ORIGINAL TABLE */
                /* $table_name = 'tbl_leads'; */
            } else if ($startMonth != $current_month && $endMonth == $current_month) {
                /* SEARCH ON BOTH TABLES */
                $bothTables = true;

                if (!empty($filter)) {
                    $sumVar = 'sum';
                } else {
                    $sumVar = 'leads';
                }

                $rightJoinCommand = Yii::app()->db->createCommand();
                $rightJoinCommand->select("l.referral_code, l.state, l.city , SUM(IFNULL(l.leads, 0) + IFNULL(a.leads, 0)) as {$sumVar}");
                $rightJoinCommand->from("tbl_leads l ");
                $rightJoinCommand->rightJoin("tbl_leads_archive a", "(l.referral_code=a.referral_code and l.state=a.state and l.city=a.city)");
                $rightJoinCommand->where("(UNIX_TIMESTAMP(l.date) BETWEEN UNIX_TIMESTAMP('{$date[0]}') AND UNIX_TIMESTAMP('{$date[1]}'))");
                if (!empty($filter)) {
                    $rightJoinCommand->group("l." . $filter);
                } else {
                    $rightJoinCommand->group("l.referral_code, l.state, l.city");
                }
                $rightJoinCommand->order("{$sumVar} DESC");
                if (strlen($string) > 0) {
                    $this->setLike($rightJoinCommand, $string, $filter, 'l.');
                }
                $rightJoinSql = $rightJoinCommand->getText();

                $leftJoinCommand = Yii::app()->db->createCommand();
                $leftJoinCommand->select("l.referral_code, l.state, l.city , SUM(IFNULL(l.leads, 0) + IFNULL(a.leads, 0)) as {$sumVar}");
                $leftJoinCommand->from("tbl_leads l ");
                $leftJoinCommand->leftJoin("tbl_leads_archive a", "(l.referral_code=a.referral_code and l.state=a.state and l.city=a.city)");
                $leftJoinCommand->where("(UNIX_TIMESTAMP(l.date) BETWEEN UNIX_TIMESTAMP('{$date[0]}') AND UNIX_TIMESTAMP('{$date[1]}'))");

                if (!empty($filter)) {
                    $leftJoinCommand->group("l." . $filter);
                } else {
                    $leftJoinCommand->group("l.referral_code, l.state, l.city");
                }
                $leftJoinCommand->order("{$sumVar} DESC");
                if (strlen($string) > 0) {
                    $this->setLike($leftJoinCommand, $string, $filter, 'l.');
                }

                $command = $leftJoinCommand->union($rightJoinSql);
            }
        }

        /* FILTER IS NOT EMPTY */
        if (!empty($filter) && !$bothTables) {
            $command->select('referral_code, state, city, SUM(leads) AS sum');
            $command->from($table_name);
            $command->order('sum DESC');
            $command->group($filter);
        }

        /* FILTER IS EMPTY */
        if (empty($filter) && !$bothTables) {
            $command->select('*');
            $command->from($table_name);
            $command->order('leads DESC');
        }

        if (!empty($date) && !$bothTables) {
            $sql = "UNIX_TIMESTAMP(date) BETWEEN UNIX_TIMESTAMP('" . $date[0] . "') AND UNIX_TIMESTAMP('" . $date[1] . "')";
            $command->where($sql);
        }


        if (strlen($string) > 0 && !$bothTables) {
            $this->setLike($command, $string, $filter);
        }

        return $command->queryAll();
    }

    private function setLike(&$command, $string, $filter = '', $alias = '') {
        switch ($filter) {
            case 'state':
                $command->orWhere($alias . 'state LIKE :state', array(':state' => "%$string%"));
                break;
            case 'city':
                $command->orWhere($alias . 'city LIKE :city OR ' . $alias . 'state LIKE :state', array(
                    ':city' => "%$string%", ':state' => "%$string%"));
                break;
            case 'referral_code':
                $command->orWhere($alias . 'referral_code LIKE :referral_code', array(':referral_code' => "%$string%"));
                break;
            default:
                $command->orWhere($alias . 'referral_code LIKE :referral_code OR ' . $alias . 'city LIKE :city OR ' . $alias . 'state LIKE :state', array(
                    ':referral_code' => "%$string%", ':city' => "%$string%", ':state' => "%$string%"));
                break;
        }
    }

    public function actionGetLeadsAnalytics($filter = '', $date = '') {

        $tableName = "tbl_leads";

        if (!empty($date)) {
            $tableName = "tbl_leads_archive";
        }

        $command = Yii::app()->db->createCommand();
        $command->select('referral_code, state, city, SUM(leads) AS sum');
        $command->from($tableName);
        $command->order('sum DESC');
        $command->group($filter);
        $command->limit = 10;

        $analytics = $command->queryAll();

        header('Content-Type: application/json');
        echo json_encode($analytics);
    }

    public function getLeadsByFilter($filter) {
        $command = Yii::app()->db->createCommand();
        $command->select('referral_code, state, city, SUM(leads) AS sum');
        $command->from('tbl_leads');
        $command->order('sum DESC');
        $command->group($filter);
        return $command->queryAll();
    }

    public function actionExportLeads() {
        $filter = Yii::app()->request->getParam('filter');
        $date = Yii::app()->request->getParam('date');
        $views = $this->getLeads('', $filter, $date);


        if (!empty($views)) {
            if (!empty($filter)) {
                $column_names = array();

                if ($filter == 'state') {
                    $columnNames[] = 'State';
                } else if ($filter == 'city') {
                    $columnNames[] = 'City';
                    $columnNames[] = 'State';
                } else {
                    $columnNames[] = 'Referral code';
                }

                $columnNames[] = 'Leads';
                $data = array(
                    1 => $columnNames
                );

                foreach ($views as $view) {
                    if ($filter == 'state') {
                        $state = !empty($view['state']) ? $view['state'] : 'N/A';
                        $data[] = array($state, $view['sum']);
                    } else if ($filter == 'city') {
                        $city = !empty($view['city']) ? $view['city'] : 'N/A';
                        $state = !empty($view['state']) ? $view['state'] : 'N/A';
                        $data[] = array($city, $state, $view['sum']);
                    } else {
                        $referral_code = !empty($view['referral_code']) ? $view['referral_code'] : 'N/A';
                        $data[] = array($referral_code, $view['sum']);
                    }
                }
            } else {
                $data = array(1 => array('Referral code',
                        'State',
                        'City',
                        'Leads'));

                foreach ($views as $view) {
                    $referral_code = !empty($view['referral_code']) ? $view['referral_code'] : 'N/A';
                    $state = !empty($view['state']) ? $view['state'] : 'N/A';
                    $city = !empty($view['city']) ? $view

                            ['city'] : 'N/A';
                    $leads_count = $view['leads'];
                    $data[] = array($referral_code,
                        $state,
                        $city,
                        $leads_count);
                }
            }
            Yii :: import('application.extensions.phpexcel .JPhpExcel');
            $xls = new JPhpExcel('UTF-8', false, 'Joinswift_leads');
            $xls->addArray($data);
            $xls->generateXML('joinswift_leads.xls');
        }
    }

//LEADS RANGE
    public function actionLeadsRange() {
        $filter = Yii::app()->request->getQuery('filter');
        $data = $this->getLeadsRange();
        $this->render('leadsRange', array('data' => $data, 'filter' => $filter));
    }

    private function getLeadsRange() {
        $filter = Yii::app()->request->getQuery('filter');
        $filterByDate = Yii::app()->request->getQuery('date');
        $command = Yii::app()->db->createCommand();

        $current_month = '';
        $startMonth = '';
        $bothTables = false;

//DEFAULT
        $table_name = 'tbl_leads';

        if (!empty($filterByDate)) {
            $current_month = date('m');
//
            $date = explode(' - ', $filterByDate);
//
            $startDateSelected = explode('-', $date[0]);
            $endDateSelected = explode('-', $date[
                    1]);
//
            $startMonth = $startDateSelected[1];
            $endMonth = $endDateSelected[1];

            if ($startMonth != $current_month && $endMonth != $current_month) {
//SEARCH ONLY ON LEADS ARCHIVE TABLE
                $table_name = 'tbl_leads_archive';
            } else if ($startMonth == $current_month && $endMonth == $current_month) {
//SEARCH ONLY ON LEADS ORIGINAL TABLE
//$table_name = 'tbl_leads';
            } else if ($startMonth != $current_month && $endMonth == $current_month) {
//SEARCH ON BOTH TABLES
                $bothTables = true;

                if (!empty($filter)) {
                    $command->select("l.referral_code, l.state, l.city, SUM(l.leads+a.leads) as sum");
                    $command->from("tbl_leads l, tbl_leads_archive a");
                    $command->where("l.referral_code=a.referral_code and l.state=a.state and l.city=a.city");
                    $command->andWhere("(UNIX_TIMESTAMP(l.date) BETWEEN UNIX_TIMESTAMP('" . $date [0] . "') AND UNIX_TIMESTAMP('" . $date[1] . "'))");
                    $command->group("l. {
                    $filter}");
                    $command->order
                            ("sum DESC");
                } else {
                    $command->select("l.referral_code, l.state, l.city, SUM(l.leads) as leads");
                    $command->from("tbl_leads l, tbl_leads_archive a");
                    $command->where("l.referral_code=a.referral_code AND l.state=a.state AND l.city=a.city");
                    $command->andWhere("(UNIX_TIMESTAMP(l.date) BETWEEN UNIX_TIMESTAMP('" . $date[0] . "') AND UNIX_TIMESTAMP('" . $date[1] . "'))");
                    $command->group("l.referral_code, l.state, l.city");
                    $command->order("leads DESC");
                }
            }
        }

        //FILTER IS NOT EMPTY
        if (!empty($filter) && !$bothTables) {
            $command->select('referral_code, state, city, SUM(leads) AS sum');
            $command->from($table_name);
            $command->order('sum DESC');
            $command->group($filter);
        }

        //FILTER IS EMPTY
        if (empty($filter) && !$bothTables) {
            $command->select('*');
            $command->from($table_name);
            $command->order('leads DESC');
        }

        if (!empty($filterByDate)) {
            if (!$bothTables) {
                $sql = "UNIX_TIMESTAMP(date) BETWEEN UNIX_TIMESTAMP('" . $date[0] . "') AND UNIX_TIMESTAMP('" . $date[
                        1] . "')";
                $command->where($sql);
            }
        }

        return $command->
                        queryAll();
    }

//FeedFormat

    public function actionFeedformat() {
        $model_excel = new MExcel();
        $model_excel->excelfile = CUploadedFile ::getInstance($model_excel, 'excelfile');
//
        if (!empty($model_excel->excelfile)) {
            $excel_file = $model_excel->excelfile->getTempName();
            try {
                $file_type = PHPExcel_IOFactory::identify($excel_file);
                $objReader = PHPExcel_IOFactory::createReader($file_type);
                $objPHPExcel = $objReader->load($excel_file);
            } catch (Exception $e) {
                die('Error loading file "' .
                        pathinfo($excel_file, PATHINFO_BASENAME) .
                        '": ' .
                        $e->getMessage());
            }

            $xml = "";
            $counter = 0;
            foreach ($objPHPExcel->getWorksheetIterator() as $sheet) {
                if ($counter > 0) {
                    continue;
                }
                $highestRow = $sheet->getHighestRow();

                //echo $highestRow;

                $highestColumn = $sheet->getHighestColumn();
                if ($highestRow < 2) {
                    continue;
                }
                for ($row = 2; $row <= (isset($_GET['max']) ? $_GET['max'] : $highestRow); $row ++) {
                    $rowData = $sheet->rangeToArray("A{$row}" . ':' . $highestColumn . $row, NULL, TRUE, FALSE);
                    $data = $rowData[0];

                    //echo "A{$row}";
                    //var_dump($data);

                    $dateTimestamp = PHPExcel_Shared_Date::ExcelToPHP($data[5]);
                    $date = date('d/m/Y', $dateTimestamp);

                    $xml .= "<job>
                    <JobTitle><![CDATA[{$data[0]}]]></JobTitle>
                    <Ref_ID><![CDATA[{$data[17]}]]></Ref_ID>
                    <theDate><![CDATA[{$date}]]></theDate>
                    <City><![CDATA[{$data[3]}]]></City>
                    <State><![CDATA[{$data[4]}]]></State>
                    <Postal><![CDATA[ {$data[13]}]]></Postal>
                    <Country><![CDATA[{$data[12]}]]></Country>
                    <JobDescript_Main><![CDATA[{$data[1]}]]></JobDescript_Main>
                    <company><![CDATA[{$data[2]}]]></company>
                    <apply_url><![CDATA[{$data[19]}]]></apply_url>
                    <salary><![CDATA[{$data[14]}]]></salary>
                    <Education><![CDATA[{$data[9]}]]></Education>
                    <jobtype><![CDATA[{$data[18]}]]></jobtype>
                    <phone><![CDATA[{$data[8]}]]></phone>
                    <Responsibility><![CDATA[{$data[6]}]]></Responsibility>
                    <Duties><![CDATA[{$data[7]}]]></Duties>
                    <Job_Endorsements><![CDATA[{$data[10]}]]></Job_Endorsements>
                    <Job_Equipment><![CDATA[{$data[11]}]]></Job_Equipment>
                    <category><![CDATA[{$data[15]}]]></category>
                    <experience><![CDATA[{$data[16]}]]></experienc e>
                </job>";
                }
                $counter++;
            }
            $xml.= "</source>";

            $totalJobs = $highestRow - 1;
            $final = "<?xml version=\"1.0\"?>
        <source>
            <publisher><![CDATA[Swift Transportation ]]></publisher>
            <publisherurl>http://joinswift.com /</publisherurl>
            <jobcount>{$totalJobs}</jobcount>";

            $final.=$xml;

            /// echo $final;

            $file = Yii::getPathOfAlias('webroot') . '/playgroud/FATJ_Inbound_Feed_Format.xml';
            @unlink($file);
            if (!file_exists($file)) {
                touch($file); //Acces moment and modification
                chmod($file, 0755); //Set permisions
            }

            $fh = fopen($file, 'w');
            fwrite($fh, trim($final));
            fclose($fh);

            Yii::app()->user->setFlash('status', 'Well done!');
            $this->redirect($this->createUrl('manager/feedFormat'));
        } else {
            $this->render('feedFormat', array('model' => $model_excel));
        }
    }

    public function actionLogin() {
        $this->layout = '//layouts/login';
        $model = new MLoginForm;
        if (isset($_POST['ajax']) && $_POST['ajax'] === 'login-form') {
            echo CActiveForm::validate($model);
            Yii::app()->end();
        }

        //var_dump(Yii::app()->user->isGuest);
        //die();

        if (!Yii::app()->user->isGuest) {
            $this->redirect(array('page/index'));
        } else {
            if (isset($_POST['MLoginForm'])) {
                $model->attributes = $_POST['MLoginForm'];
                if ($model->validate() && $model->login())
                    $this->redirect(array('page/index'));
            }
            //die();
            $this->render('login', array('model' => $model));
        }
    }

    public function actionLogout() {
        Yii::app()->user->logout();
        $this->redirect(array('manager/login'));
    }

    public function actionProccessPosting() {
        $uid = Yii::app()->request->getQuery('uid');
        $referral_code = Yii::app()->request->getQuery('id');
        if (empty($uid)) {
            throw new CHttpException(409, 'Access Denied');
        }

        $url_posting = MUrlPosting::model()->find('UID=:UID', array(':UID' => trim($uid)));

        if (empty($url_posting)) {
            throw new CHttpException(404, 'Not found');
        }
        $click = MClick::model()->find('UID=:UID', array(':UID' => trim($uid)));

        if (empty($click)) {
            $model = new MClick();
            $model->UID = $uid;
            $model->clicks = $model->clicks + 1;
            $model->save(false);
        } else {
            $click->clicks = $click->clicks + 1;

            $click->save(false);
        }

        $landing_page = MLandingPage::model()->find('id_provider=:id_provider', array(':id_provider' => $url_posting->id_provider));
        $this->redirect($landing_page->url . '?id=' . $referral_code);
    }

    public function actionUrlposting() {
        $params = Yii::app()->request->getQuery('id');
        $states = '';

        $criteria1 = new CDbCriteria();
        $criteria1->condition = 'id_provider=:id_provider';
        $criteria1->params = array(':id_provider' => $params);
        $criteria1->order = 'id_state ASC';
        $urls_posting = MUrlPosting::model()->findAll($criteria1);

        $landing_page = MLandingPage::model()->find('id_provider=:id_provider', array(':id_provider' => $params));

        if (empty($urls_posting)) {
            $criteria = new CDbCriteria();
            $criteria->order = 'id_state ASC';
            $states = MState::model()->findAll($criteria);
        }

        if (empty($landing_page)) {
            $landing_page = new MLandingPage();
        }

        if (!empty($_POST['MLandingPage'])) {
            $landing_page->attributes = $_POST['MLandingPage'];
            $landing_page->id_provider = $params;
            if ($landing_page->validate() && $landing_page->save()) {
                if (!empty($_POST['MUrlPosting']) && empty($urls_posting)) {
                    foreach ($_POST['MUrlPosting'] as $value) {
                        $model = new MUrlPosting();
                        $model->UID = trim($value['UID']);
                        $model->id_state = $value['id_state'];
                        $model->id_provider = $params;
                        if ($model->validate()) {
                            $model->save();
                        }
                    }
                }

                Yii::app()->user->setFlash('message', 'The data was saved successfully');
                $this->redirect(Yii ::app()->createUrl('manager/urlposting', array('id' => $params)));
            }
        }

        $this->render('urlposting', array('data' => $urls_posting, 'landingpage' => $landing_page, 'states' => $states));
    }

    public function actionTenstreet() {
        $data = MOutputXml::model()->findAll();
        $this->render('tenstreet', array('data' => $data));
    }

    public function actionTenstreetReport() {

        //render view
        //this view contains the date range fields
        //also contains calls to each partial for each report
        $this->render('tenstreetReport', array());
    }

    public function actionRhinolabs() {
        $data = MRhinolabsForm::model()->findAll();
        $this->render('rhinolabs', array('data' => $data));
    }

    public function actionShorturl() {
        $shortURLModel = new MShortUrl();
        $str = "";
        if (!empty($_POST['MShortUrl'])) {
            $shortURLModel->attributes = $_POST['MShortUrl'];
            if ($shortURLModel->validate()) {
                $urls = explode("\n", $shortURLModel->real_url);
                //var_dump($urls);
                //die();
                $str = "<table border=\"1\" cellpadding=\"8\"><tr><th>Title</th><th>Long URL</th><th>Short URL</th><th>Analytics URL</th></tr>";
                foreach ($urls as $url_title) {
                    $trimed_url_title = trim($url_title);
                    $parts = explode('|', $trimed_url_title);
                    $url = trim($parts[1]);
                    $title = trim($parts[0]);
                    $current_url_check = MShortUrl::model()->find('real_url=:url', array(':url' => $url));
                    if(empty($current_url_check)) {
                        $call = $this->getShortUrl($url);
                        $response = json_decode($call);
                        if(!is_object($response)) {
                            $this->render('shorturl', array('model' => $shortURLModel, 'error' => $call));
                            exit;
                        } else {
                            if(!empty($response->error)) {
                                $this->render('shorturl', array('model' => $shortURLModel, 'error' => "Error from Google API: " . $response->error->message));
                                exit;
                            }
                            $id = str_replace(array("https://goo.gl/", "http://goo.gl/"), "", $response->id);
                            $protocol = strpos($response->id, "https://") !== false? "https://" : "http://";
                            $analytics_url = $protocol . "goo.gl/#analytics/goo.gl/$id/all_time";
                            
                            $str .= "<tr><td>$title</td><td><a href=\"{$response->longUrl}\" target=\"_blank\">{$response->longUrl}</a></td><td><a href=\"{$response->id}\" target=\"_blank\">{$response->id}</a></td><td><a href=\"$analytics_url\" target=\"_blank\">$analytics_url</a></td></tr>";
                            
                            //save to DB
                            $model = new MShortUrl();
                            $model->real_url = $url;
                            $model->job_title = $title;
                            $model->short_url = $response->id;
                            $model->analytic_url = $analytics_url;
                            $model->save(false);
                        }
                    } else {
                        $str .= "<tr><td>{$current_url_check->job_title}</td><td><a href=\"{$current_url_check->real_url}\" target=\"_blank\">{$current_url_check->real_url}</a></td><td><a href=\"{$current_url_check->short_url}\" target=\"_blank\">{$current_url_check->short_url}</a></td><td><a href=\"{$current_url_check->analytic_url}\" target=\"_blank\">{$current_url_check->analytic_url}</a></td></tr>";
                    }
                } 
                $str .= "</table>";
            }
        }

        $this->render('shorturl', array('model' => $shortURLModel, 'table' => $str));
    }

    public function actionAnalyticsshorturl() {
        $current_url_check = MShortUrl::model()->findAll();
        $str = "";
                
        if(!empty($current_url_check)) {
            $str = "<table border=\"1\" cellpadding=\"8\"><tr><th>Title</th><th>Long URL</th><th>Short URL</th><th>Analytics URL</th></tr>";

            foreach ($current_url_check as $job) {
                $str .= "<tr><td>{$job->job_title}</td><td><a href=\"{$job->real_url}\" target=\"_blank\">{$job->real_url}</a></td><td><a href=\"{$job->short_url}\" target=\"_blank\">{$job->short_url}</a></td><td><a href=\"{$job->analytic_url}\" target=\"_blank\">{$job->analytic_url}</a></td></tr>";
            }

            $str .= "</table>";
        } else {
            echo "Nothing to show";
        }
        
        $this->render('shorturl_analytics', array('table' => $str));
    }

    private function getShortUrl($url) {
        sleep(1);
        $url_encoded = urlencode($url);
        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => "https://www.googleapis.com/urlshortener/v1/url?key=AIzaSyC1gLtynpOdw1XehaptfjtTwxApUdoelHQ",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_SSL_VERIFYPEER => 0,
            CURLOPT_CUSTOMREQUEST => "POST",
            CURLOPT_POSTFIELDS => "{\"longUrl\": \"" . $url . "\"}",
            CURLOPT_HTTPHEADER => array(
                "content-type: application/json"
            ),
        ));

        $response = curl_exec($curl);
        $err = curl_error($curl);

        curl_close($curl);

        if ($err) {
            return "cURL Error #:" . $err;
        } else {
            return $response;
        }
    }

}
