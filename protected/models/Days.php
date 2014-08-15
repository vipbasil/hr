<?php

/**
 * This is the model class for table "days".
 *
 * The followings are the available columns in table 'days':
 * @property integer $DAY_ID
 * @property string $DATE
 * @property integer $TAPE_OF_DAY_ID
 *
 * The followings are the available model relations:
 * @property TypeOfDay $tAPEOFDAY
 * @property Follow[] $follows
 * @property Follow[] $follows1
 */
class Days extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Days the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'days';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('TYPE_OF_DAY_ID', 'required'),
			array('TYPE_OF_DAY_ID', 'numerical', 'integerOnly'=>true),
			array('DATE', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('DAY_ID, DATE, TYPE_OF_DAY_ID', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
			'tYPEOFDAY' => array(self::BELONGS_TO, 'TypeOfDay', 'TYPE_OF_DAY_ID'),
			'follows' => array(self::HAS_MANY, 'Follow', 'DAY_ID'),
			'follows1' => array(self::HAS_MANY, 'Follow', 'TYPE_OF_DAY_ID'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'DAY_ID' => 'Day',
			'DATE' => 'Date',
			'TYPE_OF_DAY_ID' => 'Type Of Day',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('DAY_ID',$this->DAY_ID);
		$criteria->compare('DATE',$this->DATE,true);
		$criteria->compare('TYPE_OF_DAY_ID',$this->TYPE_OF_DAY_ID);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}