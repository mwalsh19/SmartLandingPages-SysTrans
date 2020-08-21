<?php

/**
 * This is the model class for table "tbl_dr_january".
 *
 * The followings are the available columns in table 'tbl_dr_january':
 * @property string $id_dr_january
 * @property string $referral_code
 * @property string $intelliapp_referral_code
 * @property string $phone
 * @property string $body_title
 * @property string $body_copy
 * @property string $id_master
 * @property string $create_date
 *
 * The followings are the available model relations:
 * @property TblMaster $idMaster
 */
class MDrJanuary extends CActiveRecord {

    /**
     * @return string the associated database table name
     */
    public function tableName() {
        return 'tbl_dr_january';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules() {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('referral_code, intelliapp_referral_code, phone, body_title, body_copy', 'required'),
            array('phone', 'length', 'max' => 20),
            array('id_master', 'length', 'max' => 10),
            array('create_date, id_master, type', 'safe'),
            // The following rule is used by search().
            // @todo Please remove those attributes that should not be searched.
            array('id_dr_january, referral_code, intelliapp_referral_code, phone, body_title, body_copy, id_master, create_date', 'safe', 'on' => 'search'),
        );
    }

    /**
     * @return array relational rules.
     */
    public function relations() {
        // NOTE: you may need to adjust the relation name and the related
        // class name for the relations automatically generated below.
        return array(
            'tblDrJanuary' => array(self::BELONGS_TO, 'MMaster', 'id_master'),
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels() {
        return array(
            'id_dr_january' => 'Id Dr January',
            'referral_code' => 'Referral Code',
            'intelliapp_referral_code' => 'Intelliapp Referral Code',
            'phone' => 'Phone',
            'body_title' => 'Body Title',
            'body_copy' => 'Body Copy',
            'id_master' => 'Id Master',
            'create_date' => 'Create Date',
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

        $criteria->compare('id_dr_january', $this->id_dr_january, true);
        $criteria->compare('referral_code', $this->referral_code, true);
        $criteria->compare('intelliapp_referral_code', $this->intelliapp_referral_code, true);
        $criteria->compare('phone', $this->phone, true);
        $criteria->compare('body_title', $this->body_title, true);
        $criteria->compare('body_copy', $this->body_copy, true);
        $criteria->compare('id_master', $this->id_master, true);
        $criteria->compare('create_date', $this->create_date, true);

        return new CActiveDataProvider($this, array(
            'criteria' => $criteria,
        ));
    }

    /**
     * Returns the static model of the specified AR class.
     * Please note that you should have this exact method in all your CActiveRecord descendants!
     * @param string $className active record class name.
     * @return MDrJanuary the static model class
     */
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

}
