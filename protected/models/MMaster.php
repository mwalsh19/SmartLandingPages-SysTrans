<?php

/**
 * This is the model class for table "tbl_master".
 *
 * The followings are the available columns in table 'tbl_master':
 * @property string $id_master
 * @property string $path
 * @property string $publisher
 * @property string $title
 * @property string $template_type
 * @property string $create_date
 *
 * The followings are the available model relations:
 * @property TblApply[] $tblApplies
 * @property TblDedicated[] $tblDedicateds
 * @property TblFlatbed[] $tblFlatbeds
 * @property TblTruckdriver[] $tblTruckdrivers
 * @property TblTruckjob[] $tblTruckjobs
 */
class MMaster extends CActiveRecord {

    /**
     * @return string the associated database table name
     */
    public function tableName() {
        return 'tbl_master';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules() {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('path, publisher, title, template_type', 'required'),
            array('publisher', 'length', 'max' => 50),
            array('title', 'length', 'max' => 100),
            array('template_type', 'length', 'max' => 20),
            array('id_swap', 'safe'),
            // The following rule is used by search().
            // @todo Please remove those attributes that should not be searched.
            array('id_master, path, publisher, title, template_type, create_date, status', 'safe', 'on' => 'search'),
        );
    }

    /**
     * @return array relational rules.
     */
    public function relations() {
        // NOTE: you may need to adjust the relation name and the related
        // class name for the relations automatically generated below.
        return array(
            'tblApplies' => array(self::HAS_MANY, 'MApply', 'id_master'),
            'tblDedicateds' => array(self::HAS_MANY, 'MDedicated', 'id_master'),
            'tblFlatbeds' => array(self::HAS_MANY, 'MFlatbed', 'id_master'),
            'tblTruckdrivers' => array(self::HAS_MANY, 'MTruckdriver', 'id_master'),
            'tblTruckjobs' => array(self::HAS_MANY, 'MTruckjob', 'id_master'),
            'tblRecentstudent' => array(self::HAS_MANY, 'MRecentStudent', 'id_master'),
            'tblIntermodals' => array(self::HAS_MANY, 'MIntermodal', 'id_master'),
            'tblDrJanuary' => array(self::HAS_MANY, 'MDrJanuary', 'id_master'),
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels() {
        return array(
            'id_master' => 'Id Master',
            'path' => 'Path',
            'publisher' => 'Publisher',
            'title' => 'Title',
            'template_type' => 'Template Type',
            'swap_base' => 'Variant for swap option',
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

        $criteria->compare('id_master', $this->id_master, true);
        $criteria->compare('path', $this->path, true);
        $criteria->compare('publisher', $this->publisher, true);
        $criteria->compare('title', $this->title, true);
        $criteria->compare('template_type', $this->template_type, true);
        $criteria->compare('create_date', $this->create_date, true);

        return new CActiveDataProvider($this, array(
            'criteria' => $criteria,
        ));
    }

    /**
     * Returns the static model of the specified AR class.
     * Please note that you should have this exact method in all your CActiveRecord descendants!
     * @param string $className active record class name.
     * @return MMaster the static model class
     */
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

}
