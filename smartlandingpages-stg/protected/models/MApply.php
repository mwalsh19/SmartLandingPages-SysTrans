<?php

/**
 * This is the model class for table "tbl_apply".
 *
 * The followings are the available columns in table 'tbl_apply':
 * @property string $id_apply
 * @property string $referral_code
 * @property string $image
 * @property string $image_position
 * @property string $description_html
 * @property string $details_html
 * @property string $secondary_description_html
 * @property string $phone_number_1
 * @property string $phone_number_2
 * @property integer $support_indeed
 * @property string $create_date
 * @property string $id_master
 *
 * The followings are the available model relations:
 * @property TblMaster $idMaster
 */
class MApply extends CActiveRecord {

    /**
     * @return string the associated database table name
     */
    public function tableName() {
        return 'tbl_apply';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules() {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('intelliapp_referral_code, referral_code, image, image_position, description_html, details_html, secondary_description_html', 'required'),
            array('support_indeed', 'numerical', 'integerOnly' => true),
            array('image', 'length', 'max' => 45),
            array('image_position, phone_number_1, phone_number_2', 'length', 'max' => 20),
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
            'idMaster' => array(self::BELONGS_TO, 'MMaster', 'id_master'),
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels() {
        return array(
            'id_apply' => 'Id Apply',
            'referral_code' => 'Referral Code',
            'image' => 'Image',
            'image_position' => 'Image Position',
            'description_html' => 'Description Html',
            'details_html' => 'Details Html',
            'secondary_description_html' => 'Secondary Description Html',
            'phone_number_1' => 'Phone Number 1',
            'phone_number_2' => 'Phone Number 2',
            'support_indeed' => 'Support Indeed',
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

        $criteria->compare('id_apply', $this->id_apply, true);
        $criteria->compare('referral_code', $this->referral_code, true);
        $criteria->compare('image', $this->image, true);
        $criteria->compare('image_position', $this->image_position, true);
        $criteria->compare('description_html', $this->description_html, true);
        $criteria->compare('details_html', $this->details_html, true);
        $criteria->compare('secondary_description_html', $this->secondary_description_html, true);
        $criteria->compare('phone_number_1', $this->phone_number_1, true);
        $criteria->compare('phone_number_2', $this->phone_number_2, true);
        $criteria->compare('support_indeed', $this->support_indeed);
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
     * @return MApply the static model class
     */
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

}
