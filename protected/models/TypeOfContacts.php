<?php

/**
 * This is the model class for table "type_of_contacts".
 *
 * The followings are the available columns in table 'type_of_contacts':
 * @property integer $TYPE_OF_CONTACTS_ID
 * @property string $NAME_OF_TYPE_OF_CONTACTS
 */
class TypeOfContacts extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return TypeOfContacts the static model class
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
		return 'type_of_contacts';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('NAME_OF_TYPE_OF_CONTACTS', 'length', 'max'=>45),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('TYPE_OF_CONTACTS_ID, NAME_OF_TYPE_OF_CONTACTS', 'safe', 'on'=>'search'),
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
		 'contacts'    => array(self::BELONGS_TO, 'Contacts', 'CONTACT_ID'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'TYPE_OF_CONTACTS_ID' => '№',
			'NAME_OF_TYPE_OF_CONTACTS' => 'Наменование',
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

		$criteria->compare('TYPE_OF_CONTACTS_ID',$this->TYPE_OF_CONTACTS_ID);
		$criteria->compare('NAME_OF_TYPE_OF_CONTACTS',$this->NAME_OF_TYPE_OF_CONTACTS,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}