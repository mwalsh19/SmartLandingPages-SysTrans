<?php

class SiteController extends Controller {

    public $layout = '//layouts/swiftrans_website';

    public function actionIndex() {
        $this->render('index');
    }

    public function actionError() {
        if ($error = Yii::app()->errorHandler->error) {
            if (Yii::app()->request->isAjaxRequest)
                echo $error['message'];
            else
                $this->render('error', $error);
        }
    }

    public function actionTest() {
        $this->layout = '//layouts/test';
        $this->render('//landingpages/ideedIndex');
    }

}
