<?php

/**
 * This is the model class for table "jobs".
 *
 * The followings are the available columns in table 'jobs':
 * @property integer $JOB_ID
 * @property integer $COMPANY_ID
 * @property integer $PERSONAL_ID
 * @property string $JOB_DATE_FROM
 * @property string $JOB_DATE_TO
 * @property integer $JOB_STATUS_ID
 * @property string $JOB_TITLE
 * @property string $SALARY
 */
class Jobs extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Jobs the static model class
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
		return 'jobs';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('COMPANY_ID, PERSONAL_ID, JOB_STATUS_ID, SALARY', 'required'),
			array('JOB_TITLE,COMPANY_ID, PERSONAL_ID, JOB_STATUS_ID', 'numerical', 'integerOnly'=>true),
			array('SALARY', 'length', 'max'=>10),
			array('JOB_DATE_FROM, JOB_DATE_TO', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('JOB_ID, COMPANY_ID, PERSONAL_ID, JOB_DATE_FROM, JOB_DATE_TO, JOB_STATUS_ID, JOB_TITLE, SALARY', 'safe', 'on'=>'search'),
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
		'type' => array(self::BELONGS_TO,'JobType', 'JOB_TITLE'),
		'company' => array(self::BELONGS_TO,'Companies', 'COMPANY_ID'),
		'status' => array(self::BELONGS_TO,'JobStatus', 'JOB_STATUS_ID'),
		'personal' => array(self::BELONGS_TO,'Personal', 'PERSONAL_ID')

		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'JOB_ID' => 'Job',
			'COMPANY_ID' => 'Company',
			'PERSONAL_ID' => 'Personal',
			'JOB_DATE_FROM' => 'Job Date From',
			'JOB_DATE_TO' => 'Job Date To',
			'JOB_STATUS_ID' => 'Job Status',
			'JOB_TITLE' => 'Job Title',
			'SALARY' => 'Salary',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function getJobStatus()
	{
      return CHtml::listData(JobStatus::model()->findAll(), 'JOB_STATUS_ID', 'JOB_STATUS_DESCRIPTION');

	}
		public function getJobTitle()
	{
      return CHtml::listData(JobType::model()->findAll(), 'JOB_TYPE_ID', 'JOB_TYPE_NAME');

	}
	    public function getCompanies()
    {
       return CHtml::listData(Companies::model()->findAll() , 'COMPANY_ID', 'COMPANY_NAME' );
    }
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('JOB_ID',$this->JOB_ID);
		$criteria->compare('COMPANY_ID',$this->COMPANY_ID);
		$criteria->compare('PERSONAL_ID',$this->PERSONAL_ID);
		$criteria->compare('JOB_DATE_FROM',$this->JOB_DATE_FROM,true);
		$criteria->compare('JOB_DATE_TO',$this->JOB_DATE_TO,true);
		$criteria->compare('JOB_STATUS_ID',$this->JOB_STATUS_ID);
		$criteria->compare('JOB_TITLE',$this->JOB_TITLE,true);
		$criteria->compare('SALARY',$this->SALARY,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}