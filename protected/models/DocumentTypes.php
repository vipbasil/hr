<?php

/**
 * This is the model class for table "document_types".
 *
 * The followings are the available columns in table 'document_types':
 * @property integer $DOCUMENT_TYPE_ID
 * @property string $DOCUMENT_TYPE_NAME
 * @property integer $MANDATORY
 */
class DocumentTypes extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return DocumentTypes the static model class
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
		return 'document_types';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('MANDATORY,MULTY_COMPANY', 'numerical', 'integerOnly'=>true),
			array('DOCUMENT_TYPE_NAME', 'length', 'max'=>45),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('DOCUMENT_TYPE_ID, DOCUMENT_TYPE_NAME, MANDATORY,MULTY_COMPANY', 'safe', 'on'=>'search'),
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
			  'documents'    => array(self::BELONGS_TO, 'Documents', 'DOCUMENT_ID'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'DOCUMENT_TYPE_ID' => '№',
			'DOCUMENT_TYPE_NAME' => 'Тип документа',
			'MANDATORY' => 'Обязательный',
			'MULTY_COMPANY' => 'Для всех компаний',
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
		$criteria->order= 'MANDATORY DESC';

		$criteria->compare('DOCUMENT_TYPE_ID',$this->DOCUMENT_TYPE_ID);
		$criteria->compare('DOCUMENT_TYPE_NAME',$this->DOCUMENT_TYPE_NAME,true);
		$criteria->compare('MANDATORY',$this->MANDATORY);
		$criteria->compare('MULTY_COMPANY',$this->MULTY_COMPANY);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}