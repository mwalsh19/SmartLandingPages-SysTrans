<?php

/**
 * This is the model class for table "tbl_flatbed".
 *
 * The followings are the available columns in table 'tbl_flatbed':
 * @property string $id_flatbed
 * @property string $referral_code
 * @property string $phone_number
 * @property string $create_date
 * @property string $id_master
 *
 * The followings are the available model relations:
 * @property TblMaster $idMaster
 */
class MFlatbed extends CActiveRecord {

    /**
     * @return string the associated database table name
     */
    public function tableName() {
        return 'tbl_flatbed';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules() {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('referral_code, intelliapp_referral_code,phone_number', 'required'),
            array('phone_number', 'length', 'max' => 20),
            array('id_master', 'length', 'max' => 10),
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
            'id_flatbed' => 'Id Flatbed',
            'referral_code' => 'Referral Code',
            'phone_number' => 'Phone Number',
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

        $criteria->compare('id_flatbed', $this->id_flatbed, true);
        $criteria->compare('referral_code', $this->referral_code, true);
        $criteria->compare('phone_number', $this->phone_number, true);
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
     * @return MFlatbed the static model class
     */
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

}
