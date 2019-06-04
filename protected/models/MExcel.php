<?php

class MExcel extends CFormModel {

    public $excelfile;

    public function rules() {
        return array(
            array('excelfile', 'required'),
            array('excelfile', 'file', 'types' => 'xls, xlsx', 'maxSize' => 5242880, 'tooLarge' => 'Only accepted formats', 'wrongType' => 'Solo se aceptan los formatos: xls, xlsx'),
        );
    }

    public function attributeLabels() {
        return array(
            'excelfile' => 'Excel file'
        );
    }

    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

}
