<?php

/**
 * This is the model class for table "personal".
 *
 * The followings are the available columns in table 'personal':
 * @property integer $PERSONAL_ID
 * @property string $NAME
 * @property string $SECOND_NAME
 * @property string $DATE_OF_BITH
 * @property string $PLACE_OF_BITH
 * @property string $NATIONLALITY
 * @property string $CITIZENSHIP
 * @property integer $MARITAL_STATUS
 * @property string $SEX
 *
 * The followings are the available model relations:
 * @property Contacts[] $contacts
 * @property Documents[] $documents
 * @property Events[] $events
 * @property FamilyMembers[] $familyMembers
 * @property File[] $files
 * @property Jobs[] $jobs
 * @property Scools[] $scools
 */
class Personal extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Personal the static model class
	 */
	//public $get_companies;
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
		return 'personal';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('MARITAL_STATUS', 'numerical', 'integerOnly'=>true),
			array('NAME, SECOND_NAME', 'length', 'max'=>100),
			array('PLACE_OF_BITH', 'length', 'max'=>200),
			array('NATIONLALITY, CITIZENSHIP', 'length', 'max'=>45),
			array('SEX', 'length', 'max'=>1),
			array('DATE_OF_BITH', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('PERSONAL_ID, NAME, SECOND_NAME, DATE_OF_BITH, PLACE_OF_BITH, NATIONLALITY, CITIZENSHIP, MARITAL_STATUS, SEX', 'safe', 'on'=>'search'),
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
			'contacts' => array(self::HAS_MANY, 'Contacts', 'PERSONAL_ID'),
			'documents' => array(self::HAS_MANY, 'Documents', 'DOCUMENT_ID'),
			'events' => array(self::HAS_MANY, 'Events', 'PERSONAL_ID'),
			'family' => array(self::HAS_MANY, 'FamilyMembers', 'PERSONAL_ID'),
			'files' => array(self::HAS_MANY, 'File', 'PERSONAL_ID'),
			'jobs' => array(self::HAS_MANY, 'Jobs', 'JOB_ID'),
			'scools' => array(self::HAS_MANY, 'Scools', 'PERSONAL_ID'),
			'companies' => array(self::MANY_MANY, 'Companies', 'company_to_personal(PERSONAL_ID, COMPANY_ID)'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'PERSONAL_ID' => '№',
			'NAME' => 'Имя',
			'SECOND_NAME' => 'Фамилия',
			'DATE_OF_BITH' => 'Дата рождения',
			'PLACE_OF_BITH' => 'место Рождения',
			'NATIONLALITY' => 'Национальность',
			'CITIZENSHIP' => 'Гражданство',
			'MARITAL_STATUS' => 'Семейное положение',
			'SEX' => 'Пол',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	  public function __get($key){
    		$action = 'get'.str_replace(' ','',ucwords(str_replace('_',' ',$key)));
            if(method_exists($this, $action)) return $this->$action();
            return parent::__get($key);
        }
 	 public function getFullName(){
                return $this->NAME.' '.$this->SECOND_NAME;
     }
    public function getFreeCompanies()
    {
       return CHtml::listData(Companies::model()->findAll(array('condition'=>'COMPANY_TYPE=1')) , 'COMPANY_ID', 'COMPANY_NAME' );
    }
	public function getMyJobs($id)
    {
        $rawData=Jobs::model()->findAll(array('condition'=>'PERSONAL_ID='.$id.''));
       // $rawData=User::model()->findAll();
		$dataProvider=new CArrayDataProvider($rawData, array(
    		'keyField'=>'JOB_ID',
    		'sort'=>array(
       	 	'attributes'=>array(
            	 'JOB_ID',
        	),
    	),
    		'pagination'=>array(
        	'pageSize'=>10,
    		),
		));
        return $dataProvider;
    }
     public function getMyFamily()
    {
    	 $rawData=FamilyMembers::model()->findAll(array('condition'=>'PERSONAL_ID='.$this->PERSONAL_ID.''));
       // $rawData=User::model()->findAll();
		$dataProvider=new CArrayDataProvider($rawData, array(
    		'keyField'=>'FAMILY_MEMBERS__ID',
    		'sort'=>array(
       	 	'attributes'=>array(
            	 'FAMILY_MEMBERS__ID',
        	),
    	),
    		'pagination'=>array(
        	'pageSize'=>10,
    		),
		));
        return $dataProvider;
       //return CHtml::listData(Companies::model()->findAll(array('condition'=>'COMPANY_TYPE=1')) , 'COMPANY_ID', 'COMPANY_NAME' );
    }
         public function getMyContacts()
    {
    	 $rawData=Contacts::model()->findAll(array('condition'=>'PERSONAL_ID='.$this->PERSONAL_ID.''));
       // $rawData=User::model()->findAll();
		$dataProvider=new CArrayDataProvider($rawData, array(
    		'keyField'=>'CONTACT_ID',
    		'sort'=>array(
       	 	'attributes'=>array(
            	 'CONTACT_ID',
        	),
    	),
    		'pagination'=>array(
        	'pageSize'=>10,
    		),
		));
        return $dataProvider;
       //return CHtml::listData(Companies::model()->findAll(array('condition'=>'COMPANY_TYPE=1')) , 'COMPANY_ID', 'COMPANY_NAME' );
    }
          public function getMyScools()
    {
    	 $rawData=Scools::model()->findAll(array('condition'=>'PERSONAL_ID='.$this->PERSONAL_ID.''));
       // $rawData=User::model()->findAll();
		$dataProvider=new CArrayDataProvider($rawData, array(
    		'keyField'=>'SCOOLS_ID',
    		'sort'=>array(
       	 	'attributes'=>array(
            	 'SCOOLS_ID',
        	),
    	),
    		'pagination'=>array(
        	'pageSize'=>10,
    		),
		));
        return $dataProvider;
       //return CHtml::listData(Companies::model()->findAll(array('condition'=>'COMPANY_TYPE=1')) , 'COMPANY_ID', 'COMPANY_NAME' );
    }

     public function getMyCompanies()
    {
    	$items = array();
       foreach ($this->companies as $company)
       {
       	$items[]=array('COMPANY_ID'=>$company['COMPANY_ID'],'COMPANY_NAME'=>$company['COMPANY_NAME']);
       }
       /*$items = array(array('id'=>1, 'title'=>'Title1', 'description' => 'Description1'),
               array('id'=>2, 'title'=>'Title2', 'description' => 'Description2'),
               array('id'=>3, 'title'=>'Title3', 'description' => 'Description3'),
               array('id'=>4, 'title'=>'Title4', 'description' => 'Description4'));*/

		$sort = new CSort;
		$sort->defaultOrder = 'COMPANY_ID DESC';
		$sort->attributes = array('COMPANY_ID');
       	$itemsProvider = new CArrayDataProvider($items, array(
       	  'keyField'   => 'COMPANY_ID',

         'sort' => $sort
        ));
        //print_r($itemsProvider);
        //die();
        return $itemsProvider;
       //return CHtml::listData(Companies::model()->findAll(array('condition'=>'COMPANY_TYPE=1')) , 'COMPANY_ID', 'COMPANY_NAME' );
    }
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('PERSONAL_ID',$this->PERSONAL_ID);
		$criteria->compare('NAME',$this->NAME,true);
		$criteria->compare('SECOND_NAME',$this->SECOND_NAME,true);
		$criteria->compare('DATE_OF_BITH',$this->DATE_OF_BITH,true);
		$criteria->compare('PLACE_OF_BITH',$this->PLACE_OF_BITH,true);
		$criteria->compare('NATIONLALITY',$this->NATIONLALITY,true);
		$criteria->compare('CITIZENSHIP',$this->CITIZENSHIP,true);
		$criteria->compare('MARITAL_STATUS',$this->MARITAL_STATUS);
		$criteria->compare('SEX',$this->SEX,true);
        $criteria->mergeWith(array('with'=>array('companies'=>array(
			'condition'=>'companies.COMPANY_ID=' .Yii::app()->getModule('user')->user()->profile->getAttribute('active_company'),
			'together'=>true,
			'joinType'=>'INNER JOIN'))));

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,

		));
	}
}