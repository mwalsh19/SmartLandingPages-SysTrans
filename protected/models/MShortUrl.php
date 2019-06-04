<?php

/**
 *
 *  @property string $real_url
 *  @property string $short_url
 *  @property string $analytic_url
 *  @property string $job_title
 */
class MShortUrl extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tbl_short_hr';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		return array(
			array('real_url', 'required', 'message' => 'You need to provide at least one final URL'),
			array('short_url, analytic_url, job_title', 'safe'),
		);
	}


	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return MState the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
