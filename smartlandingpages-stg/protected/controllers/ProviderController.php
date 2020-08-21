<?php

class ProviderController extends Controller {

    public $layout = '//layouts/manager';

    public function filters() {
        return array(
            'accessControl - login, logout', // perform access control for CRUD operations
            'postOnly + delete', // we only allow deletion via POST request
        );
    }

    public function accessRules() {
        return array(
            array('allow', // allow authenticated user to perform 'create' and 'update' actions
                'actions' => array(
                    'index',
                    'create',
                    'update',
                    'delete',
                    'urlposting',
                    'analytics'
                ),
                'roles' => array('A'),
                'users' => array('@'),
            ),
            array('deny', // deny all users
                'users' => array('*'),
            ),
        );
    }

    public function actionIndex() {
        $data = MProvider::model()->findAll();
        $this->render('index', array('data' => $data));
    }

    public function actionCreate() {
        $model = new MProvider();

        if (!empty($_POST['MProvider'])) {
            $model->attributes = $_POST['MProvider'];
            if ($model->validate()) {
                if ($model->save(false)) {
                    $this->redirect(array('provider/index'));
                }
            }
        }

        $this->render('create', array('model' => $model));
    }

    public function actionUpdate() {
        $model = MProvider::model()->findByPk(Yii::app()->request->getParam('id'));
        $model->scenario = 'update';

        if (!empty($_POST['MProvider'])) {
            $model->attributes = $_POST['MProvider'];
            if ($model->validate()) {
                if ($model->save(false)) {
                    $this->redirect(array('provider/index'));
                }
            }
        }

        $this->render('update', array('model' => $model));
    }

    public function actionDelete() {
        $params = Yii::app()->request->getPost('id');
        $model = MProvider::model()->findByPk($params);
        if (!empty($model)) {
            //MUrlPosting::model()->deleteAll('id_provider=:id_provider', array(':id_provider' => $params));
            $model->delete();
        }
        $this->redirect(array('provider/index'));
    }

    public function actionAnalytics() {
        $params = Yii::app()->request->getParam('id');
        if (empty($params)) {
            throw new CHttpException(409, 'Not found');
        }

        $result = Yii::app()->db->createCommand()
                ->select('*')
                ->from('tbl_url_posting p')
                ->leftJoin('tbl_click c', 'c.UID = p.UID')
                ->where('id_provider=:id_provider', array(':id_provider' => $params))
                ->order('clicks DESC')
                ->queryAll();
        $provider = MProvider::model()->findByPk($params);
        $this->render('analytics', array('result' => $result, 'provider' => $provider));
    }

}
