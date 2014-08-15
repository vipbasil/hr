<?php

/**
 * This is the model class for table "family_members".
 *
 * The followings are the available columns in table 'family_members':
 * @property integer $FAMILY_MEMBERS__ID
 * @property string $NAME
 * @property string $SECOND_NAME
 * @property string $DATE_OF_BITH
 * @property string $SEX
 * @property integer $FAMILY_MEMBER_TYPE_ID
 * @property integer $PERSONAL_ID
 */
class FamilyMembers extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return FamilyMembers the static model class
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
		return 'family_members';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('FAMILY_MEMBER_TYPE_ID, PERSONAL_ID', 'numerical', 'integerOnly'=>true),
			array('NAME, SECOND_NAME', 'length', 'max'=>100),
			array('SEX', 'length', 'max'=>1),
			array('DATE_OF_BITH', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('FAMILY_MEMBERS__ID, NAME, SECOND_NAME, DATE_OF_BITH, SEX, FAMILY_MEMBER_TYPE_ID, PERSONAL_ID', 'safe', 'on'=>'search'),
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
		 'personal'=>array(self::BELONGS_TO,  'Personal', 'PERSONAL_ID'),
		 'type'=>array(self::BELONGS_TO,  'FamilyMemberType', 'FAMILY_MEMBER_TYPE_ID'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'FAMILY_MEMBERS__ID' => '№',
			'NAME' => 'Имя',
			'SECOND_NAME' => 'Фамилия',
			'DATE_OF_BITH' => 'Дата рождения',
			'SEX' => 'Пол',
			'FAMILY_MEMBER_TYPE_ID' => 'Родственная связь',
			'PERSONAL_ID' => 'Номер персонала',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	   public function getFamilyMembersType()
    {
    	 $rawData=FamilyMemberType::model()->findAll();
       // $rawData=User::model()->findAll();
       $items=array();
		 foreach ($rawData as $type)
       {
       	$items[]=array('FAMILY_MEMBER_TYPE_ID'=>$type['FAMILY_MEMBER_TYPE_ID'],'FAMLIY_MEMBER_TYPE_NAME'=>$type['FAMLIY_MEMBER_TYPE_NAME']);
       }
       return CHtml::listData(FamilyMemberType::model()->findAll() , 'FAMILY_MEMBER_TYPE_ID', 'FAMLIY_MEMBER_TYPE_NAME' );
    }
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('FAMILY_MEMBERS__ID',$this->FAMILY_MEMBERS__ID);
		$criteria->compare('NAME',$this->NAME,true);
		$criteria->compare('SECOND_NAME',$this->SECOND_NAME,true);
		$criteria->compare('DATE_OF_BITH',$this->DATE_OF_BITH,true);
		$criteria->compare('SEX',$this->SEX,true);
		$criteria->compare('FAMILY_MEMBER_TYPE_ID',$this->FAMILY_MEMBER_TYPE_ID);
		$criteria->compare('PERSONAL_ID',$this->PERSONAL_ID);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}