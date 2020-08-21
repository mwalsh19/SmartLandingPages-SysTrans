<?php

/**
 * This is the model class for table "tbl_landing_page".
 *
 * The followings are the available columns in table 'tbl_landing_page':
 * @property string $id_landing_page
 * @property string $url
 * @property string $id_provider
 * @property string $job_target_referral_code
 *
 * The followings are the available model relations:
 * @property TblProvider $idProvider
 */
class MLandingPage extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tbl_landing_page';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('url, id_provider, job_target_referral_code', 'required'),
			array('id_provider', 'length', 'max'=>10),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_landing_page, url, id_provider, job_target_referral_code', 'safe', 'on'=>'search'),
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
			'idProvider' => array(self::BELONGS_TO, 'TblProvider', 'id_provider'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_landing_page' => 'Id Landing Page',
			'url' => 'Url',
			'id_provider' => 'Id Provider',
			'job_target_referral_code' => 'Job Target Referral Code',
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

		$criteria->compare('id_landing_page',$this->id_landing_page,true);
		$criteria->compare('url',$this->url,true);
		$criteria->compare('id_provider',$this->id_provider,true);
		$criteria->compare('job_target_referral_code',$this->job_target_referral_code,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return MLandingPage the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
