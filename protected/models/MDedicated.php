<?php

/**
 * This is the model class for table "tbl_dedicated".
 *
 * The followings are the available columns in table 'tbl_dedicated':
 * @property string $id_dedicated
 * @property string $referral_code
 * @property string $header_logo
 * @property string $background
 * @property string $image
 * @property string $footer_logo
 * @property string $heading
 * @property string $description_html
 * @property string $details_html
 * @property string $phone_number
 * @property string $support_indeed
 * @property string $create_date
 * @property string $id_master
 *
 * The followings are the available model relations:
 * @property TblMaster $idMaster
 */
class MDedicated extends CActiveRecord {

    /**
     * @return string the associated database table name
     */
    public function tableName() {
        return 'tbl_dedicated';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules() {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('intelliapp_referral_code,support_indeed,referral_code, header_logo, background, image, heading, description_html, details_html, phone_number', 'required'),
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
            'id_dedicated' => 'Id Dedicated',
            'referral_code' => 'Referral Code',
            'header_logo' => 'Header Logo',
            'background' => 'Background',
            'image' => 'Image',
            'footer_logo' => 'Footer Logo',
            'heading' => 'Heading',
            'description_html' => 'Description Html',
            'details_html' => 'Details Html',
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

        $criteria->compare('id_dedicated', $this->id_dedicated, true);
        $criteria->compare('referral_code', $this->referral_code, true);
        $criteria->compare('header_logo', $this->header_logo, true);
        $criteria->compare('background', $this->background, true);
        $criteria->compare('image', $this->image, true);
        $criteria->compare('footer_logo', $this->footer_logo, true);
        $criteria->compare('heading', $this->heading, true);
        $criteria->compare('description_html', $this->description_html, true);
        $criteria->compare('details_html', $this->details_html, true);
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
     * @return MDedicated the static model class
     */
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

}
