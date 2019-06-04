<?php

/**
 * This is the model class for table "tbl_leads_archive".
 *
 * The followings are the available columns in table 'tbl_leads_archive':
 * @property string $id_lead
 * @property string $referral_code
 * @property string $state
 * @property string $city
 * @property integer $leads
 * @property string $create_date
 */
class MLeadsArchive extends CActiveRecord {

    public $sum;

    public function tableName() {
        return 'tbl_leads_archive';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules() {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('referral_code, state, city, leads', 'required'),
            array('leads', 'numerical', 'integerOnly' => true),
            array('referral_code', 'length', 'max' => 255),
            array('state', 'length', 'max' => 5),
            array('city', 'length', 'max' => 45),
            array('create_date', 'safe'),
            // The following rule is used by search().
            // @todo Please remove those attributes that should not be searched.
            array('id_lead, referral_code, state, city, leads, create_date', 'safe', 'on' => 'search'),
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
            'id_lead' => 'Id Lead',
            'referral_code' => 'Referral Code',
            'state' => 'State',
            'city' => 'City',
            'leads' => 'Leads',
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

        $criteria->compare('id_lead', $this->id_lead, true);
        $criteria->compare('referral_code', $this->referral_code, true);
        $criteria->compare('state', $this->state, true);
        $criteria->compare('city', $this->city, true);
        $criteria->compare('leads', $this->leads);
        $criteria->compare('create_date', $this->create_date, true);

        return new CActiveDataProvider($this, array(
            'criteria' => $criteria,
        ));
    }

    /**
     * Returns the static model of the specified AR class.
     * Please note that you should have this exact method in all your CActiveRecord descendants!
     * @param string $className active record class name.
     * @return MLeadsArchive the static model class
     */
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

}
