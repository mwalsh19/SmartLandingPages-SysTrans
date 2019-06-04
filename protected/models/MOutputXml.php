<?php

/**
 * This is the model class for table "tbl_output_xml".
 *
 * The followings are the available columns in table 'tbl_output_xml':
 * @property string $id_output
 * @property string $tenstreet_xml
 * @property string $create_date
 */
class MOutputXml extends CActiveRecord {

    /**
     * @return string the associated database table name
     */
    public function tableName() {
        return 'tbl_output_xml';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules() {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('tenstreet_xml, create_date', 'required'),
            // The following rule is used by search().
            // @todo Please remove those attributes that should not be searched.
            array('id_output, tenstreet_xml, create_date', 'safe', 'on' => 'search'),
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
            'id_output' => 'Id Output',
            'tenstreet_xml' => 'Tenstreet Xml',
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

        $criteria->compare('id_output', $this->id_output, true);
        $criteria->compare('tenstreet_xml', $this->tenstreet_xml, true);
        $criteria->compare('create_date', $this->create_date, true);

        return new CActiveDataProvider($this, array(
            'criteria' => $criteria,
        ));
    }

    /**
     * Returns the static model of the specified AR class.
     * Please note that you should have this exact method in all your CActiveRecord descendants!
     * @param string $className active record class name.
     * @return MOutputXml the static model class
     */
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

}
