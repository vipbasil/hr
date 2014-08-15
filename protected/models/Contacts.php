<?php

/**
 * This is the model class for table "contacts".
 *
 * The followings are the available columns in table 'contacts':
 * @property integer $CONTACT_ID
 * @property string $INFO
 * @property integer $TYPE_OF_CONTACTS_ID
 * @property integer $PERSONAL_ID
 */
class Contacts extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Contacts the static model class
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
		return 'contacts';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('TYPE_OF_CONTACTS_ID', 'required'),
			array('TYPE_OF_CONTACTS_ID, PERSONAL_ID', 'numerical', 'integerOnly'=>true),
			array('INFO', 'length', 'max'=>255),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('CONTACT_ID, INFO, TYPE_OF_CONTACTS_ID, PERSONAL_ID', 'safe', 'on'=>'search'),
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
		 'type'    => array(self::HAS_ONE, 'TypeOfContacts', 'TYPE_OF_CONTACTS_ID'),
		 'personal'=>array(self::HAS_ONE, 'Personal', 'PERSONAL_ID'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'CONTACT_ID' => '№',
			'INFO' => 'Данные',
			'TYPE_OF_CONTACTS_ID' => 'Тип контакта',
			'PERSONAL_ID' => 'Персонал',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function getTypes()
    {
     //this function returns the list of categories to use in a dropdown
      return CHtml::listData(TypeOfContacts::model()->findAll(), 'TYPE_OF_CONTACTS_ID', 'NAME_OF_TYPE_OF_CONTACTS');
    }
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('CONTACT_ID',$this->CONTACT_ID);
		$criteria->compare('INFO',$this->INFO,true);
		$criteria->compare('TYPE_OF_CONTACTS_ID',$this->TYPE_OF_CONTACTS_ID);
		$criteria->compare('PERSONAL_ID',$this->PERSONAL_ID);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}