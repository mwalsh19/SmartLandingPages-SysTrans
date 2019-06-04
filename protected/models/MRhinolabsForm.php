<?php

/**
 * This is the model class for table "tbl_rhinolabs_form".
 *
 * The followings are the available columns in table 'tbl_rhinolabs_form':
 * @property string $id_form
 * @property string $referral_code
 * @property string $first_name
 * @property string $last_name
 * @property string $phone
 * @property string $email
 * @property string $street_address
 * @property string $city
 * @property string $state
 * @property string $zipcode
 * @property string $moving_violation
 * @property string $cdl_valid
 * @property string $create_date
 */
class MRhinolabsForm extends MRhinolabsFormBase {

    /**
     * @return string the associated database table name
     */
    public function tableName() {
        return 'tbl_rhinolabs_form';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules() {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('first_name, last_name, city', 'length', 'max' => 100),
            array('phone, moving_violation', 'length', 'max' => 45),
            array('email', 'length', 'max' => 200),
            array('state', 'length', 'max' => 4),
            array('zipcode', 'length', 'max' => 20),
            array('cdl_valid', 'length', 'max' => 10),
            array('referral_code, street_address, create_date', 'safe'),
            // The following rule is used by search().
            // @todo Please remove those attributes that should not be searched.
            array('id_form, referral_code, first_name, last_name, phone, email, street_address, city, state, zipcode, moving_violation, cdl_valid, create_date', 'safe', 'on' => 'search'),
        );
    }

    /**
     * @return array relational rules.
     */
    public function relations() {
        // NOTE: you may need to adjust the relation name and the related
        // class name for the relations automatically generated below.
        return array(
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels() {
        return array(
            'id_form' => 'Id Form',
            'referral_code' => 'Referral Code',
            'first_name' => 'First Name',
            'last_name' => 'Last Name',
            'phone' => 'Phone',
            'email' => 'Email',
            'street_address' => 'Street Address',
            'city' => 'City',
            'state' => 'State',
            'zipcode' => 'Zipcode',
            'moving_violation' => 'Moving Violation',
            'cdl_valid' => 'Cdl Valid',
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

        $criteria->compare('id_form', $this->id_form, true);
        $criteria->compare('referral_code', $this->referral_code, true);
        $criteria->compare('first_name', $this->first_name, true);
        $criteria->compare('last_name', $this->last_name, true);
        $criteria->compare('phone', $this->phone, true);
        $criteria->compare('email', $this->email, true);
        $criteria->compare('street_address', $this->street_address, true);
        $criteria->compare('city', $this->city, true);
        $criteria->compare('state', $this->state, true);
        $criteria->compare('zipcode', $this->zipcode, true);
        $criteria->compare('moving_violation', $this->moving_violation, true);
        $criteria->compare('cdl_valid', $this->cdl_valid, true);
        $criteria->compare('create_date', $this->create_date, true);

        return new CActiveDataProvider($this, array(
            'criteria' => $criteria,
        ));
    }

    /**
     * Returns the static model of the specified AR class.
     * Please note that you should have this exact method in all your CActiveRecord descendants!
     * @param string $className active record class name.
     * @return MRhinolabsFormBase the static model class
     */
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

}
