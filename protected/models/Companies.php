<?php

/**
 * This is the model class for table "companies".
 *
 * The followings are the available columns in table 'companies':
 * @property integer $COMPANY_ID
 * @property string $COMPANY_NAME
 * @property integer $COMPANY_TYPE
 * @property string $COMPANY_INFO
 *
 * The followings are the available model relations:
 * @property Jobs[] $jobs
 */
class Companies extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Companies the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
    public function behaviors(){
          return array( 'CAdvancedArBehavior' => array(
            'class' => 'application.extensions.CAdvancedArBehavior'));
          }
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'companies';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('COMPANY_NAME', 'required'),
			array('COMPANY_ID, COMPANY_TYPE', 'numerical', 'integerOnly'=>true),
			array('COMPANY_NAME', 'length', 'max'=>45, ),
			array('COMPANY_INFO', 'length', 'max'=>255),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('COMPANY_ID, COMPANY_NAME, COMPANY_TYPE, COMPANY_INFO', 'safe', 'on'=>'search'),
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
			'jobs' => array(self::HAS_MANY, 'Jobs', 'JOB_ID'),
			'fusercamp' => array(self::HAS_MANY, 'Fusercamp', 'COMPANY_ID','condition' => 'COMPANY_TYPE=1'),
			'documents'=>array(self::HAS_MANY,   'Documents', 'DOCUMENT_ID'),
 	        'personal' => array(self::MANY_MANY, 'Personal', 'company_to_personal(COMPANY_ID, PERSONAL_ID)'),

		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'COMPANY_ID' => '№ Компании',
			'COMPANY_NAME' => 'Наименование предприятия',
			'COMPANY_TYPE' => 'Тип предприятия',
			'COMPANY_INFO' => 'Добавочная информация о предприятии',
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
		$criteria->order= 'COMPANY_TYPE DESC';


		$criteria->compare('COMPANY_ID',$this->COMPANY_ID);
		$criteria->compare('COMPANY_NAME',$this->COMPANY_NAME,true);
		$criteria->compare('COMPANY_TYPE',$this->COMPANY_TYPE);
		$criteria->compare('COMPANY_INFO',$this->COMPANY_INFO,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}