<?php

/**
 * This is the model class for table "countries".
 *
 * The followings are the available columns in table 'countries':
 * @property integer $COUNTRY_ID
 * @property string $COUNTRY_SHORT
 * @property string $COUNTRY_NAME
 * @property integer $COUNTRY_ENABLE
 */
class Countries extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Countries the static model class
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
		return 'countries';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('COUNTRY_SHORT, COUNTRY_NAME', 'required'),
			array('COUNTRY_ENABLE', 'numerical', 'integerOnly'=>true),
			array('COUNTRY_SHORT', 'length', 'max'=>2),
			array('COUNTRY_NAME', 'length', 'max'=>100),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('COUNTRY_ID, COUNTRY_SHORT, COUNTRY_NAME, COUNTRY_ENABLE', 'safe', 'on'=>'search'),
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
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'COUNTRY_ID' => 'Country',
			'COUNTRY_SHORT' => 'Country Short',
			'COUNTRY_NAME' => 'Country Name',
			'COUNTRY_ENABLE' => 'Country Enable',
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

		$criteria->compare('COUNTRY_ID',$this->COUNTRY_ID);
		$criteria->compare('COUNTRY_SHORT',$this->COUNTRY_SHORT,true);
		$criteria->compare('COUNTRY_NAME',$this->COUNTRY_NAME,true);
		$criteria->compare('COUNTRY_ENABLE',$this->COUNTRY_ENABLE);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}