<?php

/**
 * This is the model class for table "scools".
 *
 * The followings are the available columns in table 'scools':
 * @property integer $SCOOLS_ID
 * @property string $DATE_FROM
 * @property string $DATE_TO
 * @property string $DOCUMENT_SERIES
 * @property string $DOCUMENT_NUMBER
 * @property string $DOCYMENT_DATE
 * @property integer $COMPLETE
 * @property string $INFO
 * @property integer $SCOOL_ID
 * @property integer $PERSONAL_ID
 *
 * The followings are the available model relations:
 * @property ScoolBase $sCOOL
 * @property Personal $pERSONAL
 */
class Scools extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Scools the static model class
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
		return 'scools';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('SCOOL_ID, PERSONAL_ID', 'required'),
			array('COMPLETE, SCOOL_ID, PERSONAL_ID', 'numerical', 'integerOnly'=>true),
			array('DOCUMENT_SERIES, DOCUMENT_NUMBER', 'length', 'max'=>45),
			array('INFO', 'length', 'max'=>255),
			array('DATE_FROM, DATE_TO, DOCYMENT_DATE', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('SCOOLS_ID, DATE_FROM, DATE_TO, DOCUMENT_SERIES, DOCUMENT_NUMBER, DOCYMENT_DATE, COMPLETE, INFO, SCOOL_ID, PERSONAL_ID', 'safe', 'on'=>'search'),
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
			'scoolbase' => array(self::HAS_ONE, 'ScoolBase', 'SCOOL_ID'),
			'personal' => array(self::HAS_ONE, 'Personal', 'PERSONAL_ID'),

		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'SCOOLS_ID' => '№',
			'DATE_FROM' => 'С:',
			'DATE_TO' => 'По:',
			'DOCUMENT_SERIES' => 'Серия документа',
			'DOCUMENT_NUMBER' => 'Номер документа',
			'DOCYMENT_DATE' => 'Дата',
			'COMPLETE' => 'Оконченное',
			'INFO' => 'Дополнительная Информация',
			'SCOOL_ID' => 'Учебное заведение',
			'PERSONAL_ID' => 'Персонал',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	    public function getScools()
    {

       return CHtml::listData(ScoolBase::model()->findAll() , 'SCOOL_ID', 'SCOOL_NAME' );
    }
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('SCOOLS_ID',$this->SCOOLS_ID);
		$criteria->compare('DATE_FROM',$this->DATE_FROM,true);
		$criteria->compare('DATE_TO',$this->DATE_TO,true);
		$criteria->compare('DOCUMENT_SERIES',$this->DOCUMENT_SERIES,true);
		$criteria->compare('DOCUMENT_NUMBER',$this->DOCUMENT_NUMBER,true);
		$criteria->compare('DOCYMENT_DATE',$this->DOCYMENT_DATE,true);
		$criteria->compare('COMPLETE',$this->COMPLETE);
		$criteria->compare('INFO',$this->INFO,true);
		$criteria->compare('SCOOL_ID',$this->SCOOL_ID);
		$criteria->compare('PERSONAL_ID',$this->PERSONAL_ID);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}