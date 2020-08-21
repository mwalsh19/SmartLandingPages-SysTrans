<?php

/**
 * This is the model class for table "tbl_click_landingpage".
 *
 * The followings are the available columns in table 'tbl_click_landingpage':
 * @property string $id_click
 * @property string $path
 * @property string $path_crc
 * @property string $publisher
 * @property string $type
 * @property string $state
 * @property integer $clicks
 */
class MClickLandingpage extends CActiveRecord {

    /**
     * @return string the associated database table name
     */
    public function tableName() {
        return 'tbl_click_landingpage';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules() {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('path, path_crc, clicks', 'required'),
            array('clicks', 'numerical', 'integerOnly' => true),
            array('path', 'length', 'max' => 255),
            array('path_crc', 'length', 'max' => 10),
            array('publisher, type', 'length', 'max' => 45),
            array('state', 'length', 'max' => 25),
            // The following rule is used by search().
            // @todo Please remove those attributes that should not be searched.
            array('id_click, path, path_crc, publisher, type, state, clicks', 'safe', 'on' => 'search'),
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
            'id_click' => 'Id Click',
            'path' => 'Path',
            'path_crc' => 'Path Crc',
            'publisher' => 'Publisher',
            'type' => 'Type',
            'state' => 'State',
            'clicks' => 'Clicks',
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

        $criteria->compare('id_click', $this->id_click, true);
        $criteria->compare('path', $this->path, true);
        $criteria->compare('path_crc', $this->path_crc, true);
        $criteria->compare('publisher', $this->publisher, true);
        $criteria->compare('type', $this->type, true);
        $criteria->compare('state', $this->state, true);
        $criteria->compare('clicks', $this->clicks);

        return new CActiveDataProvider($this, array(
            'criteria' => $criteria,
        ));
    }

    /**
     * Returns the static model of the specified AR class.
     * Please note that you should have this exact method in all your CActiveRecord descendants!
     * @param string $className active record class name.
     * @return MClickLandingpage the static model class
     */
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

}
