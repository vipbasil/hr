<?php

/**
 * This is the model class for table "family_member_type".
 *
 * The followings are the available columns in table 'family_member_type':
 * @property integer $FAMILY_MEMBER_TYPE_ID
 * @property string $FAMLIY_MEMBER_TYPE_NAME
 */
class FamilyMemberType extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return FamilyMemberType the static model class
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
		return 'family_member_type';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('FAMLIY_MEMBER_TYPE_NAME', 'required'),
			array('FAMILY_MEMBER_TYPE_ID', 'numerical', 'integerOnly'=>true),
			array('FAMLIY_MEMBER_TYPE_NAME', 'length', 'max'=>45),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('FAMILY_MEMBER_TYPE_ID, FAMLIY_MEMBER_TYPE_NAME', 'safe', 'on'=>'search'),
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
		'familyMembers' => array(self::HAS_MANY, 'FamilyMembers', 'PERSONAL_ID'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'FAMILY_MEMBER_TYPE_ID' => '№',
			'FAMLIY_MEMBER_TYPE_NAME' => 'Наименование',
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

		$criteria->compare('FAMILY_MEMBER_TYPE_ID',$this->FAMILY_MEMBER_TYPE_ID);
		$criteria->compare('FAMLIY_MEMBER_TYPE_NAME',$this->FAMLIY_MEMBER_TYPE_NAME,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}