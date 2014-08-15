<?php

/**
 * This is the model class for table "scool_base".
 *
 * The followings are the available columns in table 'scool_base':
 * @property integer $SCOOL_ID
 * @property string $SCOOL_NAME
 * @property string $SCOOL_OLD_NAMES
 * @property integer $SCOOL_TYPE_ID
 *
 * The followings are the available model relations:
 * @property ScoolType $sCOOLTYPE
 * @property Scools[] $scools
 */
class ScoolBase extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return ScoolBase the static model class
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
		return 'scool_base';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('SCOOL_TYPE_ID', 'required'),
			array('SCOOL_TYPE_ID', 'numerical', 'integerOnly'=>true),
			array('SCOOL_NAME', 'length', 'max'=>45),
			array('SCOOL_OLD_NAMES', 'length', 'max'=>255),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('SCOOL_ID, SCOOL_NAME, SCOOL_OLD_NAMES, SCOOL_TYPE_ID', 'safe', 'on'=>'search'),
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
			'type' => array(self::HAS_ONE, 'ScoolType', 'SCOOL_TYPE_ID'),
			'scools' => array(self::BELONGS_TO, 'Scools', 'SCOOL_ID'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'SCOOL_ID' => '№',
			'SCOOL_NAME' => 'Название',
			'SCOOL_OLD_NAMES' => 'Старые названия',
			'SCOOL_TYPE_ID' => 'Тип',
		);
	}

 	public function getTypes()
    {
     //this function returns the list of categories to use in a dropdown
      return CHtml::listData(ScoolType::model()->findAll(), 'SCOOL_TYPE_ID', 'SCOOL_TYPE_NAME');
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

		$criteria->compare('SCOOL_ID',$this->SCOOL_ID);
		$criteria->compare('SCOOL_NAME',$this->SCOOL_NAME,true);
		$criteria->compare('SCOOL_OLD_NAMES',$this->SCOOL_OLD_NAMES,true);
		$criteria->compare('SCOOL_TYPE_ID',$this->SCOOL_TYPE_ID);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}