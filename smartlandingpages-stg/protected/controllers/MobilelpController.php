<?php

class MobilelpController extends Controller {

    public $layout = false;

    public function actionStudent($publisher = '') {
        $this->render('student');
    }

    public function actionSignonbonus($publisher = '') {
        $this->render('bonus');
    }

}