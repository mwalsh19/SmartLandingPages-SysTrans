<?php

/**
 * This is the model class for table "tbl_truckdriver".
 *
 * The followings are the available columns in table 'tbl_truckdriver':
 * @property string $id_truckdriver
 * @property string $referral_code
 * @property string $header_html
 * @property string $description_html
 * @property string $background
 * @property string $phone_number_1
 * @property string $phone_number_2
 * @property string $create_date
 * @property string $id_master
 *
 * The followings are the available model relations:
 * @property TblMaster $idMaster
 */
class MTruckdriver extends CActiveRecord {

    /**
     * @return string the associated database table name
     */
    public function tableName() {
        return 'tbl_truckdriver';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules() {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('referral_code, intelliapp_referral_code,header_html, description_html, background, phone_number_1', 'required'),
            array('id_master', 'safe')
        );
    }

    /**
     * @return array relational rules.
     */
    public function relations() {
        // NOTE: you may need to adjust the relation name and the related
        // class name for the relations automatically generated below.
        return array(
            'idMaster' => array(self::BELONGS_TO, 'TblMaster', 'id_master'),
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels() {
        return array(
            'id_truckdriver' => 'Id Truckdriver',
            'referral_code' => 'Referral Code',
            'header_html' => 'Header Html',
            'description_html' => 'Description Html',
            'background' => 'Background',
            'phone_number_1' => 'Phone Number 1',
            'phone_number_2' => 'Phone Number 2',
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
    public function search() {
        // @todo Please modify the following code to remove attributes that should not be searched.

        $criteria = new CDbCriteria;

        $criteria->compare('id_truckdriver', $this->id_truckdriver, true);
        $criteria->compare('referral_code', $this->referral_code, true);
        $criteria->compare('header_html', $this->header_html, true);
        $criteria->compare('description_html', $this->description_html, true);
        $criteria->compare('background', $this->background, true);
        $criteria->compare('phone_number_1', $this->phone_number_1, true);
        $criteria->compare('phone_number_2', $this->phone_number_2, true);
        $criteria->compare('create_date', $this->create_date, true);
        $criteria->compare('id_master', $this->id_master, true);

        return new CActiveDataProvider($this, array(
            'criteria' => $criteria,
        ));
    }

    /**
     * Returns the static model of the specified AR class.
     * Please note that you should have this exact method in all your CActiveRecord descendants!
     * @param string $className active record class name.
     * @return MTruckdriver the static model class
     */
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

}
