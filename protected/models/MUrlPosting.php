<?php

/**
 * This is the model class for table "tbl_url_posting".
 *
 * The followings are the available columns in table 'tbl_url_posting':
 * @property string $UID
 * @property string $id_state
 * @property string $id_provider
 *
 * The followings are the available model relations:
 * @property TblClick[] $tblClicks
 * @property TblProvider $idProvider
 * @property TblState $idState
 */
class MUrlPosting extends CActiveRecord {

    public $url;

    /**
     * @return string the associated database table name
     */
    public function tableName() {
        return 'tbl_url_posting';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules() {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('UID, id_state, id_provider', 'required'),
            array('UID', 'length', 'max' => 64),
            array('id_state, id_provider', 'length', 'max' => 10),
            array('url', 'safe'),
            // The following rule is used by search().
            // @todo Please remove those attributes that should not be searched.
            array('UID, id_state, id_provider', 'safe', 'on' => 'search'),
        );
    }

    /**
     * @return array relational rules.
     */
    public function relations() {
        // NOTE: you may need to adjust the relation name and the related
        // class name for the relations automatically generated below.
        return array(
            'tblClicks' => array(self::HAS_MANY, 'MClick', 'UID'),
            'idProvider' => array(self::BELONGS_TO, 'MProvider', 'id_provider'),
            'idState' => array(self::BELONGS_TO, 'MState', 'id_state'),
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels() {
        return array(
            'UID' => 'Uid',
            'id_state' => 'Id State',
            'id_provider' => 'Id Provider',
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

        $criteria->compare('UID', $this->UID, true);
        $criteria->compare('id_state', $this->id_state, true);
        $criteria->compare('id_provider', $this->id_provider, true);

        return new CActiveDataProvider($this, array(
            'criteria' => $criteria,
        ));
    }

    /**
     * Returns the static model of the specified AR class.
     * Please note that you should have this exact method in all your CActiveRecord descendants!
     * @param string $className active record class name.
     * @return MUrlPosting the static model class
     */
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

}
