<?php

/**
 * This is the model class for table "documents".
 *
 * The followings are the available columns in table 'documents':
 * @property integer $DOCUMENT_ID
 * @property string $DOCUMENT_SERIES
 * @property string $DOCUMENT_NUMBER
 * @property string $DOCUMENT_DATE_FROM
 * @property string $DOCUMENT_DATE_TO
 * @property integer $DOCUMENT_TYPE_ID
 * @property integer $PERSONAL_ID
 * @property string $DOCUMENT_EMITENT
 * @property integer $COMPANY_ID
 */
class Documents extends CActiveRecord
{
	public $DOCUMENT_TYPE_NAME,$PERSONAL_NAME;

	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Documents the static model class
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
		return 'documents';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('DOCUMENT_TYPE_ID, PERSONAL_ID, COMPANY_ID', 'required'),
			array('DOCUMENT_TYPE_ID, PERSONAL_ID, COMPANY_ID', 'numerical', 'integerOnly'=>true),
			array('DOCUMENT_SERIES, DOCUMENT_NUMBER, DOCUMENT_EMITENT', 'length', 'max'=>45),
			array('DOCUMENT_DATE_FROM, DOCUMENT_DATE_TO', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('DOCUMENT_ID DOCUMENT_SERIES, PERSONAL_NAME,DOCUMENT_NUMBER, DOCUMENT_DATE_FROM, DOCUMENT_DATE_TO, DOCUMENT_TYPE_ID,DOCUMENT_TYPE_NAME, PERSONAL_ID, DOCUMENT_EMITENT, COMPANY_ID', 'safe', 'on'=>'search'),
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
                        'files' => array(self::HAS_MANY, 'File', 'FILE_ID'),
                        'type' => array(self::HAS_ONE,    'DocumentTypes', 'DOCUMENT_TYPE_ID'),
                        'company'=>array(self::BELONGS_TO,   'Companies', 'COMPANY_ID'),
                        'personal'=>array(self::BELONGS_TO,  'Personal', 'PERSONAL_ID'),
                );

	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'DOCUMENT_ID' => '№',
			'DOCUMENT_SERIES' => 'Серия документа',
			'DOCUMENT_NUMBER' => 'Номер документа',
			'DOCUMENT_DATE_FROM' => 'От',
			'DOCUMENT_DATE_TO' => 'До',
			'DOCUMENT_TYPE_ID' => 'Тип документа',
			'DOCUMENT_TYPE_NAME' => 'Тип документа',
			'PERSONAL_ID' => 'Персонал',
			'DOCUMENT_EMITENT' => 'Выдан',
			'COMPANY_ID' => 'Предприятие',
		);
	}

      public function getTypes()
    {
     //this function returns the list of categories to use in a dropdown
      return CHtml::listData(DocumentTypes::model()->findAll(), 'DOCUMENT_TYPE_ID', 'DOCUMENT_TYPE_NAME');
    }
     public function getCompanies()
    {
     //this function returns the list of categories to use in a dropdown
      return CHtml::listData(Companies::model()->findAll(array('condition'=>'COMPANY_TYPE=1 and COMPANY_ID='.(Yii::app()->getModule('user')->user()->profile->getAttribute('active_company')).'')), 'COMPANY_ID', 'COMPANY_NAME' );
    }
     public function getPersonal()
    {
     //this function returns the list of categories to use in a dropdown
      return CHtml::listData(Personal::model()->findAll(),'PERSONAL_ID', 'full_name');
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

		$criteria->compare('DOCUMENT_ID',$this->DOCUMENT_ID);
		$criteria->compare('DOCUMENT_SERIES',$this->DOCUMENT_SERIES,true);
		$criteria->compare('DOCUMENT_NUMBER',$this->DOCUMENT_NUMBER,true);
		$criteria->compare('DOCUMENT_DATE_FROM',$this->DOCUMENT_DATE_FROM,true);
		$criteria->compare('DOCUMENT_DATE_TO',$this->DOCUMENT_DATE_TO,true);
		$criteria->compare('DOCUMENT_TYPE_ID',$this->DOCUMENT_TYPE_ID);
		$criteria->compare('PERSONAL_ID',$this->PERSONAL_ID);
		$criteria->compare('DOCUMENT_EMITENT',$this->DOCUMENT_EMITENT,true);
		$criteria->compare('COMPANY_ID',$this->COMPANY_ID);
		$criteria->with =  array('type','personal',);

		//$criteria->with = "personal"; // Make sure you query with the post table.
        $criteria->compare('type.DOCUMENT_TYPE_NAME',$this->DOCUMENT_TYPE_NAME,true);
        $criteria->compare('personal.NAME',$this->PERSONAL_NAME,true);
        $criteria->compare('personal.SECOND_NAME',$this->PERSONAL_NAME,true,'OR');

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
			    'sort'=>array(
        			'attributes'=>array(
            			'DOCUMENT_TYPE_NAME'=>array(
               				 'asc'=>'type.DOCUMENT_TYPE_NAME',
                			 'desc'=>'type.DOCUMENT_TYPE_NAME DESC',
            				),
            				'*',
        			),
    			 )
		));
	}
	/* public function __get($key){
    		$action = 'get'.str_replace(' ','',ucwords(str_replace('_',' ',$key)));
            if(method_exists($this, $action)) return $this->$action();
            return parent::__get($key);
        }
 	 public function getDocumentTypeName(){
                return $this->type["DOCUMENT_TYPE_NAME"];
     }*/
}