<?php

/**
 * This is the model class for table "tbl_intermodal".
 *
 * The followings are the available columns in table 'tbl_intermodal':
 * @property string $id_intermodal
 * @property string $referral_code
 * @property string $intelliapp_referral_code
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
 * @property string $benef6_caption_title
 * @property string $body_copy
 * @property string $phone
 * @property string $create_date
 * @property string $id_master
 * @property string $region_graphic
  * @property string $region_graphic_mobile
 *
 * The followings are the available model relations:
 * @property TblMaster $idMaster
 */
class MIntermodal extends MIntermodalBase {

    public $h_b_1;
    public $h_b_2;
    public $h_b_3;
    public $h_b_4;
    public $h_b_5;
    public $h_b_6;
    public $h_b_7;
    public $h_b_9;
    public $h_b_10;
    public $search_address_input;

    public function rules() {
        return array(
            array('type, referral_code, intelliapp_referral_code, main_title, main_description, benef1_caption, benef2_caption, benef3_caption, benef4_caption, benef5_caption, benef6_caption, body_copy, phone', 'required', 'message' => 'The field is required'),
            array('benef1_caption, benef2_caption, benef3_caption, benef4_caption, benef5_caption, benef6_caption', 'length', 'max' => 400),
            array('benef1_figure, benef2_figure, benef3_figure, benef4_figure, benef5_figure, benef6_figure', 'length', 'max' => 64),
            array('sub_title, ga_lp, ga_tp, benef1_caption_title, benef2_caption_title, benef3_caption_title, benef4_caption_title, benef5_caption_title, benef6_caption_title', 'required', 'message' => 'The field is required'),
            array('benef1_figure, benef2_figure, benef3_figure, benef4_figure, benef5_figure, benef6_figure', 'file', 'safe' => true, 'types' => 'jpg, png', 'maxSize' => 5242880, 'tooLarge' => Yii::t('general', 'The file size exceeds the allowed'), 'wrongType' => Yii::t('general', 'Only allow files with extension jpg'), 'allowEmpty' => true, 'on' => 'update'),
            array('background, region_graphic', 'file', 'safe' => true, 'types' => 'jpg, png', 'maxSize' => 5242880, 'tooLarge' => Yii::t('general', 'The file size exceeds the allowed'), 'wrongType' => Yii::t('general', 'Only allow files with extension jpg'), 'allowEmpty' => true, 'on' => 'update'),
            array('h_b_1, h_b_2, h_b_3, h_b_4, h_b_5, h_b_6, h_b_7, h_b_9, h_b_10, id_master, map_source, search_address_input, sub_title, ga_lp, ga_tp', 'safe')
        );
    }

    public function attributeLabels() {
        return array(
            'id_intermodal' => 'Id Intermodal',
            'referral_code' => 'Referral Code',
            'intelliapp_referral_code' => 'Intelliapp Referral Code',
            'main_description' => 'Main Description',
            'benef1_caption' => 'Benef1 Caption',
            'benef2_caption' => 'Benef2 Caption',
            'benef3_caption' => 'Benef3 Caption',
            'benef4_caption' => 'Benef4 Caption',
            'benef5_caption' => 'Benef5 Caption',
            'benef6_caption' => 'Benef6 Caption',
            'benef1_figure' => 'Benef1 Figure',
            'benef2_figure' => 'Benef2 Figure',
            'benef3_figure' => 'Benef3 Figure',
            'benef4_figure' => 'Benef4 Figure',
            'benef5_figure' => 'Benef5 Figure',
            'benef6_figure' => 'Benef6 Figure',
            'benef1_caption_title' => 'Benef1 Caption Title',
            'benef2_caption_title' => 'Benef2 Caption Title',
            'benef3_caption_title' => 'Benef3 Caption Title',
            'benef4_caption_title' => 'Benef4 Caption Title',
            'benef5_caption_title' => 'Benef5 Caption Title',
            'benef6_caption_title' => 'Benef6 Caption Title',
            'region_graphic' => 'Region Graphic',
            'region_graphic_mobile' => 'Mobile Region Graphic',
            'body_copy' => 'Body Copy',
            'phone' => 'Phone',
            'create_date' => 'Create Date',
            'id_master' => 'Id Master',
        );
    }

    public function relations() {
        return array(
            'idMaster' => array(self::BELONGS_TO, 'MMaster', 'id_master'),
        );
    }

    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

}
