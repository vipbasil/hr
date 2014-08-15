<?php

/**
 * This is the model class for table "fusercamp".
 *
 * The followings are the available columns in table 'fusercamp':
 * @property integer $FOLLOW_ID
 * @property integer $USER_ID
 * @property integer $COMPANY_ID
 */
class Fusercamp extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Fusercamp the static model class
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
		return 'fusercamp';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('USER_ID, COMPANY_ID', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('FOLLOW_ID, USER_ID, COMPANY_ID', 'safe', 'on'=>'search'),
			//array('USER_ID, COMPANY_ID', 'ECompositeUniqueValidator'),
			array('USER_ID, COMPANY_ID', 'ECompositeUniqueValidator','attributesToAddError'=>'USER_ID','message'=>'Пользователь № {value_USER_ID}  уже имеет такую связь.'),
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
		 'users' => array(self::BELONGS_TO, 'User',  array('USER_ID')),
		 'companies' => array(self::BELONGS_TO, 'Companies',  array('COMPANY_ID'),'condition' => 'COMPANY_TYPE=1'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'FOLLOW_ID' => 'Связь',
			'USER_ID' => 'Пользователь',
			'COMPANY_ID' => 'Компания',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function getUsers()
    {
     //this function returns the list of categories to use in a dropdown
      return CHtml::listData(User::model()->findAll(), 'id', 'username');
    }
    public function getCompanies()
    {
     //this function returns the list of categories to use in a dropdown
      return CHtml::listData(Companies::model()->findAll(array('condition'=>'COMPANY_TYPE=1')), 'COMPANY_ID', 'COMPANY_NAME' );
    }
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('FOLLOW_ID',$this->FOLLOW_ID);
		$criteria->compare('USER_ID',$this->USER_ID);
		$criteria->compare('COMPANY_ID',$this->COMPANY_ID);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}
