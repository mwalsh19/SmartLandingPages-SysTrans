<?php

class WebhookController extends Controller {

    public $layout = '//layouts/manager';

    public function filters() {
        return array('accessControl',
            'postOnly + delete',
        );
    }

    public function accessRules() {
        return array(
            array('allow',
                'actions' => array(
                    'production',
                    'test'
                ),
                'ips' => array('131.103.20.*', '165.254.145.*', '104.192.143.*', '201.247.237.*')
            ),
            array('deny',
                'ips' => array('*'),
            )
        );
    }

    public function actionProduction() {
       $this->layout = false;
       
       $postdata = file_get_contents("php://input");
       file_put_contents(Yii::getPathOfAlias('application.runtime') . '/bitbucket', $postdata);
       
       
       echo 'production builded now!';
    }
    
    public function actionTest() {
       $this->layout = false;
       
       $output = array();
       echo 'done';
       //exec(Yii::getPathOfAlias('application.runtime') . '/production.sh > /dev/null 2>&1');
       //exec(Yii::getPathOfAlias('application.runtime') . '/production.sh 2>&1', $output);
       //var_dump($output);
    }
}
