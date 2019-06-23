<?php
class PageController extends Controller {
    public $layout = '//layouts/manager';
    public function filters() {
        return array('accessControl - login, logout',
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
                    'duplicate',
                    'publisher',
                    'createPublisher',
                    'updatePublisher',
                    'deletePublisher',
                    'verifyPath',
                    'archivelp',
                    'archive',
                    'unarchive',
                    'swap',
                    'location'
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
        $criteria = new CDbCriteria();
        $criteria->order = "create_date DESC";
        $criteria->condition = "status=1";
        $data = MMaster::model()->findAll($criteria);
        $this->render('index', array('data' => $data));
    }
    public function actionArchivelp() {
        $criteria = new CDbCriteria();
        $criteria->order = "create_date DESC";
        $criteria->condition = "status=0";
        $data = MMaster::model()->findAll($criteria);
        $this->render('archive', array('data' => $data));
    }
    public function actionUpdate() {
        $id = Yii::app()->request->getParam('id');
        $master = MMaster::model()->findByPk($id);
        if (!empty($_POST['MMaster'])) {
            $data = "";
            $dir_files = "";
            switch ($master->template_type) {
                case 'tbl_apply':
                    $data = $_POST['MApply'];
                    $model = MApply::model()->find('id_master=:id_master', array(':id_master' => $master->id_master));
                    break;
                case 'tbl_dedicated':
                    $data = $_POST['MDedicated'];
                    $model = MDedicated::model()->find('id_master=:id_master', array(':id_master' => $master->id_master));
                    break;
                case 'tbl_truckjob':
                    $data = $_POST['MTruckjob'];
                    $model = MTruckjob::model()->find('id_master=:id_master', array(':id_master' => $master->id_master));
                    break;
                case 'tbl_flatbed':
                    $data = $_POST['MFlatbed'];
                    $model = MFlatbed::model()->find('id_master=:id_master', array(':id_master' => $master->id_master));
                    break;
                case 'tbl_truckdriver':
                    $data = $_POST['MTruckdriver'];
                    $model = MTruckdriver::model()->find('id_master=:id_master', array(':id_master' => $master->id_master));
                    break;
                case 'tbl_recent_student':
                    $dir_files = "webroot.uploads.recent_student_files";
                    $data = $_POST['MRecentStudent'];
                    $model = MRecentStudent::model()->find('id_master=:id_master', array(':id_master' => $master->id_master));
                    $model->scenario = 'update';
                    break;
                // systrans here
                case 'tbl_intermodal':
                    $dir_files = "webroot.uploads.systrans_files";
                    $data = $_POST['MIntermodal'];
                    $model = MIntermodal::model()->find('id_master=:id_master', array(':id_master' => $master->id_master));
                    $model->scenario = 'update';
                    break;
                /*case 'tbl_intermodal':
                    $dir_files = "webroot.uploads.intermodal_files";
                    $data = $_POST['MIntermodal'];
                    $model = MIntermodal::model()->find('id_master=:id_master', array(':id_master' => $master->id_master));
                    $model->scenario = 'update';
                    break;*/
                case 'tbl_dr_january':
                    $data = $_POST['MDrJanuary'];
                    $model = MDrJanuary::model()->find('id_master=:id_master', array(':id_master' => $master->id_master));
                    break;
            }
            $type = !empty($model->type) ? $model->type : '';
            $master->attributes = $_POST['MMaster'];
            $model->attributes = $data;
            if ($master->template_type == 'tbl_recent_student' || $master->template_type == 'tbl_intermodal') {
                $model->benef1_figure = CUploadedFile::getInstance($model, 'benef1_figure');
                $model->benef2_figure = CUploadedFile::getInstance($model, 'benef2_figure');
                $model->benef3_figure = CUploadedFile::getInstance($model, 'benef3_figure');
                $model->benef4_figure = CUploadedFile::getInstance($model, 'benef4_figure');
                $model->benef5_figure = CUploadedFile::getInstance($model, 'benef5_figure');
                $model->benef6_figure = CUploadedFile::getInstance($model, 'benef6_figure');
                $model->background = CUploadedFile::getInstance($model, 'background');
                $model->background_mobile = CUploadedFile::getInstance($model, 'background_mobile');
                $model->region_graphic = CUploadedFile::getInstance($model, 'region_graphic');
                $model->region_graphic_mobile = CUploadedFile::getInstance($model, 'region_graphic_mobile');
            }
            if ($master->validate()) {
                if ($model->validate()) {
                    if ($master->template_type == 'tbl_recent_student' || $master->template_type == 'tbl_intermodal') {
                        $originalDir = Yii::getPathOfAlias($dir_files);
                        // benefit 1
                        if (!empty($model->benef1_figure)) {
                            $image = Utils::saveImage($model, 'benef1_figure', $originalDir, array());
                            if ($image) {
                                $model->benef1_figure = $image;
                            }
                        } else {
                            $model->benef1_figure = $_POST['h_b_1'];
                        }
                        // benefit 2
                        if (!empty($model->benef2_figure)) {
                            $image = Utils::saveImage($model, 'benef2_figure', $originalDir, array());
                            if ($image) {
                                $model->benef2_figure = $image;
                            }
                        } else {
                            $model->benef2_figure = $_POST['h_b_2'];
                        }
                        // benefit 3
                        if (!empty($model->benef3_figure)) {
                            $image = Utils::saveImage($model, 'benef3_figure', $originalDir, array());
                            if ($image) {
                                $model->benef3_figure = $image;
                            }
                        } else {
                            $model->benef3_figure = $_POST['h_b_3'];
                        }
                        // benefit 4
                        if (!empty($model->benef4_figure)) {
                            $image = Utils::saveImage($model, 'benef4_figure', $originalDir, array());
                            if ($image) {
                                $model->benef4_figure = $image;
                            }
                        } else {
                            $model->benef4_figure = $_POST['h_b_4'];
                        }
                        // benefit 5
                        if (!empty($model->benef5_figure)) {
                            $image = Utils::saveImage($model, 'benef5_figure', $originalDir, array());
                            if ($image) {
                                $model->benef5_figure = $image;
                            }
                        } else {
                            $model->benef5_figure = $_POST['h_b_5'];
                        }
                        // benefit 6
                        if (!empty($model->benef6_figure)) {
                            $image = Utils::saveImage($model, 'benef6_figure', $originalDir, array());
                            if ($image) {
                                $model->benef6_figure = $image;
                            }
                        } else {
                            $model->benef6_figure = $_POST['h_b_6'];
                        }
                        // region graphic
                        if (!empty($model->region_graphic)) {
                            $image = Utils::saveImage($model, 'region_graphic', $originalDir, array());
                            if ($image) {
                                $model->region_graphic = $image;
                            }
                        } else {
                            $model->region_graphic = $_POST['h_b_9'];
                        }
                        // region graphic mobile
                        if (!empty($model->region_graphic_mobile)) {
                            $image = Utils::saveImage($model, 'region_graphic_mobile', $originalDir, array());
                            if ($image) {
                                $model->region_graphic_mobile = $image;
                            }
                        } else {
                            $model->region_graphic_mobile = $_POST['h_b_10'];
                        }
                        // background
                        if (!empty($model->background)) {
                                $image = Utils::saveImage($model, 'background', $originalDir, array());
                                if ($image) {
                                    $model->background = $image;
                                }
                            } else {
                                $model->background = $_POST['h_b_7'];
                            }
                            if (!empty($model->background_mobile)) {
                                $image = Utils::saveImage($model, 'background_mobile', $originalDir, array());
                                if ($image) {
                                    $model->background_mobile = $image;
                                }
                            } else {
                                $model->background_mobile = $_POST['h_b_8'];
                            }
                    }
                    if ($master->save() && $model->save()) {
                        $this->redirect($this->createUrl('page/index'));
                    }
                }
                if ($master->hasErrors() || $model->hasErrors()) {
                    $model->benef1_figure = $_POST['h_b_1'];
                    $model->benef2_figure = $_POST['h_b_2'];
                    $model->benef4_figure = $_POST['h_b_4'];
                    $model->benef5_figure = $_POST['h_b_5'];
                    $model->benef6_figure = $_POST['h_b_6'];
                    $model->region_graphic = $_POST['h_b_9'];
                    $model->region_graphic_mobile = $_POST['h_b_10'];
                    $model->background = $_POST['h_b_7'];
                    $model->background_mobile = $_POST['h_b_8'];
                }
            }
        } else {
            $landingPageData = "";
            $model = "";
            switch ($master->template_type) {
                case 'tbl_apply':
                    $landingPageData = $master->tblApplies;
                    $model = $landingPageData[0];
                    break;
                case 'tbl_dedicated':
                    $landingPageData = $master->tblDedicateds;
                    $model = $landingPageData[0];
                    break;
                case 'tbl_truckjob':
                    $landingPageData = $master->tblTruckjobs;
                    $model = $landingPageData[0];
                    break;
                case 'tbl_flatbed':
                    $landingPageData = $master->tblFlatbeds;
                    $model = $landingPageData[0];
                    break;
                case 'tbl_truckdriver':
                    $landingPageData = $master->tblTruckdrivers;
                    $model = $landingPageData[0];
                    break;
                case 'tbl_recent_student':
                    $landingPageData = $master->tblRecentstudent;
                    $model = $landingPageData[0];
                    break;
                case 'tbl_intermodal':
                    $landingPageData = $master->tblIntermodals;
                    $model = $landingPageData[0];
                    break;
                case 'tbl_dr_january':
                    $landingPageData = $master->tblDrJanuary;
                    $model = $landingPageData[0];
                    break;
            }
        }
        $this->render('_form', array(
            'master' => $master,
            'model' => $model)
        );
    }
    public function actionDuplicate() {
        $id = Yii::app()->request->getParam('id');
        $master = MMaster::model()->findByPk($id);
        if (!empty($_POST['MMaster'])) {
            $data = "";
            $dir_files = "";
            switch ($master->template_type) {
                case 'tbl_apply':
                    $data = $_POST['MApply'];
                    $model = new MApply();
                    break;
                case 'tbl_dedicated':
                    $data = $_POST['MDedicated'];
                    $model = new MDedicated();
                    break;
                case 'tbl_truckjob':
                    $data = $_POST['MTruckjob'];
                    $model = new MTruckjob();
                    break;
                case 'tbl_flatbed':
                    $data = $_POST['MFlatbed'];
                    $model = new MFlatbed();
                    break;
                case 'tbl_truckdriver':
                    $data = $_POST['MTruckdriver'];
                    $model = new MTruckdriver();
                    break;
                case 'tbl_recent_student':
                    $dir_files = "webroot.uploads.recent_student_files";
                    $data = $_POST['MRecentStudent'];
                    $model = new MRecentStudent();
                    $model->scenario = 'update';
                    break;
                case 'tbl_intermodal':
                    $dir_files = "webroot.uploads.intermodal_files";
                    $data = $_POST['MIntermodal'];
                    $model = new MIntermodal();
                    $model->scenario = 'update';
                    break;
                case 'tbl_dr_january':
                    $data = $_POST['MDrJanuary'];
                    $model = new MDrJanuary();
            }
            $master_model = new MMaster();
            $master_model->attributes = $_POST['MMaster'];
            $model->attributes = $data;
            if ($master->template_type == 'tbl_recent_student' || $master->template_type == 'tbl_intermodal') {
                $model->benef1_figure = CUploadedFile::getInstance($model, 'benef1_figure');
                $model->benef2_figure = CUploadedFile::getInstance($model, 'benef2_figure');
                $model->benef3_figure = CUploadedFile::getInstance($model, 'benef3_figure');
                $model->benef4_figure = CUploadedFile::getInstance($model, 'benef4_figure');
                $model->benef5_figure = CUploadedFile::getInstance($model, 'benef5_figure');
                $model->benef6_figure = CUploadedFile::getInstance($model, 'benef6_figure');
                $model->background = CUploadedFile::getInstance($model, 'background');
                $model->background_mobile = CUploadedFile::getInstance($model, 'background_mobile');
                $model->region_graphic = CUploadedFile::getInstance($model, 'region_graphic');
                $model->region_graphic_mobile = CUploadedFile::getInstance($model, 'region_graphic_mobile');
            }
            //var_dump($model);
            //die();
            if ($master_model->validate()) {
                //var_dump($model->validate());
                //die();
                if ($model->validate()) {
                    if ($master->template_type == 'tbl_recent_student' || $master->template_type == 'tbl_intermodal') {
                        $originalDir = Yii::getPathOfAlias($dir_files);
                        // benefit 1
                        if (!empty($model->benef1_figure)) {
                            $image = Utils::saveImage($model, 'benef1_figure', $originalDir, array());
                            if ($image) {
                                $model->benef1_figure = $image;
                            }
                        } else {
                            $model->benef1_figure = $_POST['h_b_1'];
                        }
                        // benefit 2
                        if (!empty($model->benef2_figure)) {
                            $image = Utils::saveImage($model, 'benef2_figure', $originalDir, array());
                            if ($image) {
                                $model->benef2_figure = $image;
                            }
                        } else {
                            $model->benef2_figure = $_POST['h_b_2'];
                        }
                        // benefit 3
                        if (!empty($model->benef3_figure)) {
                            $image = Utils::saveImage($model, 'benef3_figure', $originalDir, array());
                            if ($image) {
                                $model->benef3_figure = $image;
                            }
                        } else {
                            $model->benef3_figure = $_POST['h_b_3'];
                        }
                        // benefit 4
                        if (!empty($model->benef4_figure)) {
                            $image = Utils::saveImage($model, 'benef4_figure', $originalDir, array());
                            if ($image) {
                                $model->benef4_figure = $image;
                            }
                        } else {
                            $model->benef4_figure = $_POST['h_b_4'];
                        }
                        // benefit 5
                        if (!empty($model->benef5_figure)) {
                            $image = Utils::saveImage($model, 'benef5_figure', $originalDir, array());
                            if ($image) {
                                $model->benef5_figure = $image;
                            }
                        } else {
                            $model->benef5_figure = $_POST['h_b_5'];
                        }
                        // benefit 6
                        if (!empty($model->benef6_figure)) {
                            $image = Utils::saveImage($model, 'benef6_figure', $originalDir, array());
                            if ($image) {
                                $model->benef6_figure = $image;
                            }
                        } else {
                            $model->benef6_figure = $_POST['h_b_6'];
                        }
                        // background
                        if (!empty($model->background)) {
                            $image = Utils::saveImage($model, 'background', $originalDir, array());
                            if ($image) {
                                $model->background = $image;
                            }
                        } else {
                            $model->background = !empty($_POST['h_b_7']) ? $_POST['h_b_7'] : '';
                        }
                        if (!empty($model->background_mobile)) {
                            $image = Utils::saveImage($model, 'background_mobile', $originalDir, array());
                            if ($image) {
                                $model->background_mobile = $image;
                            }
                        } else {
                            $model->background_mobile = !empty($_POST['h_b_8']) ? $_POST['h_b_8'] : '';
                        }
                        // region_graphic
                        if (!empty($model->region_graphic)) {
                            $image = Utils::saveImage($model, 'region_graphic', $originalDir, array());
                            if ($image) {
                                $model->region_graphic = $image;
                            }
                        } else {
                            $model->region_graphic = !empty($_POST['h_b_9']) ? $_POST['h_b_9'] : '';
                        }
                        // region_graphic_mobile
                        if (!empty($model->region_graphic_mobile)) {
                            $image = Utils::saveImage($model, 'region_graphic_mobile', $originalDir, array());
                            if ($image) {
                                $model->region_graphic_mobile = $image;
                            }
                        } else {
                            $model->region_graphic_mobile = !empty($_POST['h_b_10']) ? $_POST['h_b_10'] : '';
                        }
                    }
                    if ($master_model->save()) {
                        $model->id_master = $master_model->id_master;
                        if ($model->save()) {
                            $this->redirect($this->createUrl('page/index'));
                        }
                    }
                }
                if ($master->hasErrors() || $model->hasErrors()) {
                    if ($master->template_type == 'tbl_recent_student' || $master->template_type == 'tbl_intermodal') {
                        $model->benef1_figure = $_POST['h_b_1'];
                        $model->benef2_figure = $_POST['h_b_2'];
                        $model->benef3_figure = $_POST['h_b_3'];
                        $model->benef4_figure = $_POST['h_b_4'];
                        $model->benef5_figure = $_POST['h_b_5'];
                        $model->benef6_figure = $_POST['h_b_6'];
                        $model->background = !empty($_POST['h_b_7']) ? $_POST['h_b_7'] : '';
                        $model->background_mobile = !empty($_POST['h_b_8']) ? $_POST['h_b_8'] : '';
                        $model->region_graphic = !empty($_POST['h_b_9']) ? $_POST['h_b_9'] : '';
                        $model->region_graphic_mobile = !empty($_POST['h_b_10']) ? $_POST['h_b_10'] : '';
                    }
                }
            }
        } else {
            $landingPageData = "";
            $model = "";
            switch ($master->template_type) {
                case 'tbl_apply':
                    $landingPageData = $master->tblApplies;
                    $model = $landingPageData[0];
                    break;
                case 'tbl_dedicated':
                    $landingPageData = $master->tblDedicateds;
                    $model = $landingPageData[0];
                    break;
                case 'tbl_truckjob':
                    $landingPageData = $master->tblTruckjobs;
                    $model = $landingPageData[0];
                    break;
                case 'tbl_flatbed':
                    $landingPageData = $master->tblFlatbeds;
                    $model = $landingPageData[0];
                    break;
                case 'tbl_truckdriver':
                    $landingPageData = $master->tblTruckdrivers;
                    $model = $landingPageData[0];
                    break;
                case 'tbl_recent_student':
                    $landingPageData = $master->tblRecentstudent;
                    $model = $landingPageData[0];
                    break;
                case 'tbl_intermodal':
                    $landingPageData = $master->tblIntermodals;
                    $model = $landingPageData[0];
                    break;
                case 'tbl_dr_january':
                    $landingPageData = $master->tblDrJanuary;
                    $model = $landingPageData[0];
                    break;
            }
        }
        $this->render('_form', array(
            'master' => $master,
            'model' => $model,
            'status' => 'duplicate'
                )
        );
    }
    public function actionArchive() {
        $id = Yii::app()->request->getParam('id');
        $master = MMaster::model()->findByPk($id);
        if (!empty($master)) {
            $master->status = 0;
            if ($master->save(false)) {
                if (!empty($master->id_swap)) {
                    $hasLandingPageSwaped = MMaster::model()->findByPk($master->id_swap);
                    if (!empty($hasLandingPageSwaped)) {
                        $hasLandingPageSwaped->status = 1;
                        $hasLandingPageSwaped->save(false);
                    }
                }
                Yii::app()->user->setFlash('success', 'The landing page has been archived.');
            } else {
                Yii::app()->user->setFlash('error', 'There was an error, try again.');
            }
        } else {
            Yii::app()->user->setFlash('error', 'The landing page not exists, please try again.');
        }
        $this->redirect(Yii::app()->createUrl('page/index'));
    }
    public function actionUnarchive() {
        $id = Yii::app()->request->getParam('id');
        $master = MMaster::model()->findByPk($id);
        if (!empty($master)) {
            $master->status = 1;
            if ($master->save(false)) {
                if (!empty($master->id_swap)) {
                    $hasLandingPageSwaped = MMaster::model()->findByPk($master->id_swap);
                    if (!empty($hasLandingPageSwaped)) {
                        $hasLandingPageSwaped->status = 0;
                        $hasLandingPageSwaped->save(false);
                    }
                }
                Yii::app()->user->setFlash('success', 'The landing page has been archived.');
            } else {
                Yii::app()->user->setFlash('error', 'There was an error, try again.');
            }
        } else {
            Yii::app()->user->setFlash('error', 'The landing page not exists, please try again.');
        }
        $this->redirect(Yii::app()->createUrl('page/archivelp'));
    }
    public function actionSwap() {
        if (!empty($_POST['landingPageBase']) && !empty($_POST['landingPageToSwap'])) {
            $templateBase = MMaster::model()->findByPk($_POST['landingPageBase']); //base
            $templateToSwap = MMaster::model()->findByPk($_POST['landingPageToSwap']); //swap
            if (!empty($templateBase) && !empty($templateToSwap)) {
                $phone = '';
                $templateToSwapData = '';
                switch ($templateToSwap->template_type) {
                    case 'tbl_apply':
                        $data = $templateToSwap->tblApplies;
                        $templateToSwapData = $data[0];
                        $phone = $templateToSwapData->phone_number_1;
                        break;
                    case 'tbl_dedicated':
                        $data = $templateToSwap->tblDedicateds;
                        $templateToSwapData = $data[0];
                        $phone = $templateToSwapData->phone_number;
                        break;
                    case 'tbl_truckjob':
                        $data = $templateToSwap->tblTruckjobs;
                        $templateToSwapData = $data[0];
                        $phone = $templateToSwapData->phone_number;
                        break;
                    case 'tbl_flatbed':
                        $data = $templateToSwap->tblFlatbeds;
                        $templateToSwapData = $data[0];
                        $phone = $templateToSwapData->phone_number;
                        break;
                    case 'tbl_truckdriver':
                        $data = $templateToSwap->tblTruckdrivers;
                        $templateToSwapData = $data[0];
                        $phone = $templateToSwapData->phone_number_1;
                        break;
                    case 'tbl_recent_student':
                        $data = $templateToSwap->tblRecentstudent;
                        $templateToSwapData = $data[0];
                        $phone = $templateToSwapData->phone;
                        break;
                    case 'tbl_intermodal':
                        $data = $templateToSwap->tblIntermodals;
                        $templateToSwapData = $data[0];
                        $phone = $templateToSwapData->phone;
                        break;
                    case 'tbl_dr_january':
                        $data = $templateToSwap->tblDrJanuary;
                        $templateToSwapData = $data[0];
                        $phone = $templateToSwapData->phone;
                        break;
                }
                $db = Yii::app()->db;
                $transaction = $db->beginTransaction();
                try {
                    //INSERT INTO MASTER
                    $sql = "INSERT INTO tbl_master(path, publisher, title, template_type, swap_base, status, id_swap)"
                            . " SELECT path, publisher, title, '{$templateBase->template_type}', 0, 1, {$templateToSwap->id_master} FROM tbl_master WHERE id_master={$templateToSwap->id_master}";
                    $db->createCommand($sql)->execute();
                    $lastIdMaster = $db->lastInsertID;
                    //INSERT INTO RELATIONAL TABLE
                    $sql2 = "";
                    if ($templateBase->template_type == 'tbl_recent_student') {
                        /* RECENT STUDENT */
                        $sql2 = "INSERT INTO tbl_recent_student(referral_code, intelliapp_referral_code, main_title,"
                                . " main_description, benef1_caption, benef2_caption, benef3_caption, benef4_caption,"
                                . " benef5_caption, benef6_caption, benef1_figure, benef2_figure, benef3_figure, benef4_figure,"
                                . " benef5_figure, benef6_figure, bottom_headline_copy, bottom_body_copy, phone, type, background, id_master)"
                                . " SELECT '{$templateToSwapData->referral_code}', '{$templateToSwapData->intelliapp_referral_code}', main_title,"
                                . " main_description, benef1_caption, benef2_caption, benef3_caption, benef4_caption,"
                                . " benef5_caption, benef6_caption, benef1_figure, benef2_figure, benef3_figure, benef4_figure,"
                                . " benef5_figure, benef6_figure, bottom_headline_copy, bottom_body_copy, '{$phone}', type, background,'{$lastIdMaster}'"
                                . " FROM tbl_recent_student WHERE id_master={$templateBase->id_master}";
                    } else if ($templateBase->template_type == 'tbl_dr_january') {
                        $sql2 = "INSERT INTO tbl_dr_january(referral_code, intelliapp_referral_code, phone,"
                                . " body_title, body_copy, type, id_master)"
                                . " SELECT '{$templateToSwapData->referral_code}', '{$templateToSwapData->intelliapp_referral_code}', '{$phone}',"
                                . " body_title, body_copy, 'NEWR', '{$lastIdMaster}'"
                                . " FROM tbl_dr_january WHERE id_master={$templateBase->id_master}";
                    } else {
                        /* INTERMODAL */
                        $sql2 = "INSERT INTO tbl_intermodal(referral_code, intelliapp_referral_code,"
                                . " main_title, sub_title, main_description, benef1_caption, benef2_caption, benef3_caption, benef4_caption,"
                                . " benef5_caption, benef6_caption, benef1_figure, benef2_figure, benef3_figure, benef4_figure,"
                                . " benef5_figure, benef6_figure, body_copy, phone, map_address, map_source, type, background, ga_lp, ga_tp, id_master)"
                                . " SELECT '{$templateToSwapData->referral_code}', '{$templateToSwapData->intelliapp_referral_code}',"
                                . " main_title, sub_title, main_description, benef1_caption, benef2_caption, benef3_caption, benef4_caption,"
                                . " benef5_caption, benef6_caption, benef1_figure, benef2_figure, benef3_figure, benef4_figure,"
                                . " benef5_figure, benef6_figure, body_copy, '{$phone}', map_address, map_source, type, background, ga_lp, ga_tp, '{$lastIdMaster}'"
                                . " FROM tbl_intermodal WHERE id_master={$templateBase->id_master}";
                    }
                    $db->createCommand($sql2)->execute();
                    $templateToSwap->status = 0;
                    $templateToSwap->id_swap = $lastIdMaster;
                    if ($templateToSwap->save(false)) {
                        Yii::app()->user->setFlash('success', 'The landing page has been swaped.');
                    } else {
                        Yii::app()->user->setFlash('error', 'There was an error, try again.');
                    }
                    $transaction->commit();
                } catch (Exception $exc) {
                    $transaction->rollback();
                }
            }
        }
        $this->redirect(Yii::app()->createUrl('page/index'));
    }
    public function actionPublisher() {
        $publishers = MPublisher::model()->findAll();
        $this->render('publisher/index', array('data' => $publishers));
    }
    public function actionCreatePublisher() {
        $publisher = new MPublisher();
        if (!empty($_POST['MPublisher'])) {
            $publisher->attributes = $_POST['MPublisher'];
            $ifExists = MPublisher::model()->exists('publisher=:publisher', array(':publisher' => trim($publisher->publisher)));
            if (!$ifExists) {
                if ($publisher->validate() && $publisher->save()) {
                    $this->redirect($this->createUrl('page/publisher'));
                }
            } else {
                Yii::app()->user->setFlash('result', "The publisher already exists, please try again.");
            }
        }
        $this->render('publisher/_form', array('model' => $publisher));
    }
    public function actionUpdatePublisher() {
        $id = Yii::app()->request->getParam('id');
        $publisher = MPublisher::model()->findByPk($id);
        if (!empty($_POST['MPublisher'])) {
            $publisher->attributes = $_POST['MPublisher'];
            if ($publisher->validate() && $publisher->save()) {
                $this->redirect($this->createUrl('page/publisher'));
            }
        }
        $this->render('publisher/_form', array('model' => $publisher));
    }
    public function actionDeletePublisher() {
        $id = Yii::app()->request->getPost('id');
        $publisher = MPublisher::model()->findByPk($id);
        if (!empty($publisher)) {
            $publisher->delete();
        }
        $this->redirect($this->createUrl('page/publisher'));
    }
    public function actionVerifyPath() {
        $path = Yii::app()->request->getParam('path');
        $result = MMaster::model()->exists('path=:path', array(':path' => $path));
        $obj = new stdClass();
        $obj->exists = $result;
        header('Content-Type: application/json');
        echo json_encode($obj);
    }
    private function downloadImage($image_url, $image_file) {
        $fp = fopen($image_file, 'w+');              // open file handle
        $ch = curl_init($image_url);
        // curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false); // enable if you want
        curl_setopt($ch, CURLOPT_FILE, $fp);          // output to file
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
        curl_setopt($ch, CURLOPT_TIMEOUT, 1000);      // some large value to allow curl to run for a long time
        curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0');
        // curl_setopt($ch, CURLOPT_VERBOSE, true);   // Enable this line to see debug prints
        curl_exec($ch);
        $err = curl_error($ch);
        curl_close($ch);                              // closing curl handle
        fclose($fp);                                  // closing file handle
        if ($err) {
            //die($err);
            return false;
        } else {
            return true;
        }
    }
}