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
 * @property string $type
 * @property string $create_date
 * @property string $id_master
 *
 * The followings are the available model relations:
 * @property TblMaster $idMaster
 */
class MRecentStudentBase extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tbl_recent_student';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('referral_code, intelliapp_referral_code, main_title, main_description, benef1_caption, benef2_caption, benef3_caption, benef4_caption, benef5_caption, benef6_caption, benef1_figure, benef2_figure, benef3_figure, benef4_figure, benef5_figure, benef6_figure, bottom_headline_copy, bottom_body_copy, phone, type, create_date, id_master', 'required'),
			array('referral_code, main_title', 'length', 'max'=>45),
			array('benef1_caption, benef2_caption, benef3_caption, benef4_caption, benef5_caption, benef6_caption', 'length', 'max'=>100),
			array('benef1_figure, benef2_figure, benef3_figure, benef4_figure, benef5_figure, benef6_figure', 'length', 'max'=>64),
			array('phone', 'length', 'max'=>20),
			array('type', 'length', 'max'=>1),
			array('id_master', 'length', 'max'=>10),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_recent_student, referral_code, intelliapp_referral_code, main_title, main_description, benef1_caption, benef2_caption, benef3_caption, benef4_caption, benef5_caption, benef6_caption, benef1_figure, benef2_figure, benef3_figure, benef4_figure, benef5_figure, benef6_figure, bottom_headline_copy, bottom_body_copy, phone, type, create_date, id_master', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
			'idMaster' => array(self::BELONGS_TO, 'TblMaster', 'id_master'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_recent_student' => 'Id Recent Student',
			'referral_code' => 'Referral Code',
			'intelliapp_referral_code' => 'Intelliapp Referral Code',
			'main_title' => 'Main Title',
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
			'bottom_headline_copy' => 'Bottom Headline Copy',
			'bottom_body_copy' => 'Bottom Body Copy',
			'phone' => 'Phone',
			'type' => 'Type',
			'create_date' => 'Create Date',
			'id_master' => 'Id Master',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id_recent_student',$this->id_recent_student,true);
		$criteria->compare('referral_code',$this->referral_code,true);
		$criteria->compare('intelliapp_referral_code',$this->intelliapp_referral_code,true);
		$criteria->compare('main_title',$this->main_title,true);
		$criteria->compare('main_description',$this->main_description,true);
		$criteria->compare('benef1_caption',$this->benef1_caption,true);
		$criteria->compare('benef2_caption',$this->benef2_caption,true);
		$criteria->compare('benef3_caption',$this->benef3_caption,true);
		$criteria->compare('benef4_caption',$this->benef4_caption,true);
		$criteria->compare('benef5_caption',$this->benef5_caption,true);
		$criteria->compare('benef6_caption',$this->benef6_caption,true);
		$criteria->compare('benef1_figure',$this->benef1_figure,true);
		$criteria->compare('benef2_figure',$this->benef2_figure,true);
		$criteria->compare('benef3_figure',$this->benef3_figure,true);
		$criteria->compare('benef4_figure',$this->benef4_figure,true);
		$criteria->compare('benef5_figure',$this->benef5_figure,true);
		$criteria->compare('benef6_figure',$this->benef6_figure,true);
		$criteria->compare('bottom_headline_copy',$this->bottom_headline_copy,true);
		$criteria->compare('bottom_body_copy',$this->bottom_body_copy,true);
		$criteria->compare('phone',$this->phone,true);
		$criteria->compare('type',$this->type,true);
		$criteria->compare('create_date',$this->create_date,true);
		$criteria->compare('id_master',$this->id_master,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return MRecentStudentBase the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
