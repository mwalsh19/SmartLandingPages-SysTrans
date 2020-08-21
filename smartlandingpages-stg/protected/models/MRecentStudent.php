<?php

/**
 * This is the model class for table "tbl_recent_student".
 *
 * The followings are the available columns in table 'tbl_recent_student':
 * @property string $id_recent_student
 * @property string $referral_code
 * @property string $intelliapp_referral_code
 * @property string $main_title
 * @property string $main_description
 * @property string $benef1_caption
 * @property string $benef2_caption
 * @property string $benef3_caption
 * @property string $benef4_caption
 * @property string $benef5_caption
 * @property string $benef6_caption
 * @property string $benef1_figure
 * @property string $benef2_figure
 * @property string $benef3_figure
 * @property string $benef4_figure
 * @property string $benef5_figure
 * @property string $benef6_figure
 * @property string $bottom_headline_copy
 * @property string $bottom_body_copy
 * @property string $phone
 * @property string $id_master
 *
 * The followings are the available model relations:
 * @property TblMaster $idMaster
 */
class MRecentStudent extends MRecentStudentBase {

    public $h_b_1;
    public $h_b_2;
    public $h_b_3;
    public $h_b_4;
    public $h_b_5;
    public $h_b_6;
    public $h_b_7;
    public $h_b_8;

    public function rules() {
        return array(
            array('referral_code, intelliapp_referral_code, main_title, main_description, benef1_caption, benef2_caption, benef3_caption, benef4_caption, benef5_caption, benef6_caption, bottom_headline_copy, bottom_body_copy, phone, type', 'required'),
            array('main_title', 'length', 'max' => 45),
            array('benef1_caption, benef2_caption, benef3_caption, benef4_caption, benef5_caption, benef6_caption', 'length', 'max' => 100),
            array('benef1_figure, benef2_figure, benef3_figure, benef4_figure, benef5_figure, benef6_figure', 'length', 'max' => 64),
            array('phone', 'length', 'max' => 20),
            array('id_master', 'length', 'max' => 10),
            array('benef1_figure, benef2_figure, benef3_figure, benef4_figure, benef5_figure, benef6_figure', 'file', 'safe' => true, 'types' => 'jpg, png', 'maxSize' => 5242880, 'tooLarge' => Yii::t('general', 'The file size exceeds the allowed'), 'wrongType' => Yii::t('general', 'Only allow files with extension jpg'), 'allowEmpty' => true, 'on' => 'update'),
            array('background, background_mobile', 'file', 'safe' => true, 'types' => 'jpg, png', 'maxSize' => 5242880, 'tooLarge' => Yii::t('general', 'The file size exceeds the allowed'), 'wrongType' => Yii::t('general', 'Only allow files with extension jpg'), 'allowEmpty' => true, 'on' => 'update'),
            array('h_b_1, h_b_2, h_b_3, h_b_4, h_b_5, h_b_6, h_b_7, h_b_8, id_master', 'safe')
        );
    }

    public function relations() {
        return array(
            'idMaster' => array(self::BELONGS_TO, 'MMaster', 'id_master'),
        );
    }

    public function attributeLabels() {
        return array(
            'id_recent_student' => 'Id Recent Student',
            'referral_code' => 'Referral Code',
            'intelliapp_referral_code' => 'Intelliapp Referral Code',
            'main_title' => 'Main Title',
            'main_description' => 'Main Description',
            'benef1_caption' => 'Benefit',
            'benef2_caption' => 'Benefit',
            'benef3_caption' => 'Benefit',
            'benef4_caption' => 'Benefit',
            'benef5_caption' => 'Benefit',
            'benef6_caption' => 'Benefit',
            'benef1_figure' => 'Benefit image',
            'benef2_figure' => 'Benefit image',
            'benef3_figure' => 'Benefit image',
            'benef4_figure' => 'Benefit image',
            'benef5_figure' => 'Benefit image',
            'benef6_figure' => 'Benefit image',
            'bottom_headline_copy' => 'Bottom Headline Copy',
            'bottom_body_copy' => 'Bottom Body Copy',
            'phone' => 'Phone',
            'id_master' => 'Id Master',
        );
    }

    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

}
