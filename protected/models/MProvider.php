<?php

/**
 * This is the model class for table "tbl_provider".
 *
 * The followings are the available columns in table 'tbl_provider':
 * @property string $id_provider
 * @property string $name
 *
 * The followings are the available model relations:
 * @property TblLandingPage[] $tblLandingPages
 * @property TblUrlPosting[] $tblUrlPostings
 */
class MProvider extends CActiveRecord {

    /**
     * @return string the associated database table name
     */
    public function tableName() {
        return 'tbl_provider';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules() {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('name', 'required'),
            // The following rule is used by search().
            // @todo Please remove those attributes that should not be searched.
            array('id_provider, name', 'safe', 'on' => 'search'),
        );
    }

    /**
     * @return array relational rules.
     */
    public function relations() {
        // NOTE: you may need to adjust the relation name and the related
        // class name for the relations automatically generated below.
        return array(
            'tblLandingPages' => array(self::HAS_MANY, 'MLandingPage', 'id_provider'),
            'tblUrlPostings' => array(self::HAS_MANY, 'TblUrlPosting', 'id_provider'),
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels() {
        return array(
            'id_provider' => 'Id Provider',
            'name' => 'Name',
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

        $criteria->compare('id_provider', $this->id_provider, true);
        $criteria->compare('name', $this->name, true);

        return new CActiveDataProvider($this, array(
            'criteria' => $criteria,
        ));
    }

    /**
     * Returns the static model of the specified AR class.
     * Please note that you should have this exact method in all your CActiveRecord descendants!
     * @param string $className active record class name.
     * @return MProvider the static model class
     */
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

}
