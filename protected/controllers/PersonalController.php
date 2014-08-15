<?php

class PersonalController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/column2';

	/**
	 * @return array action filters
	 */
	public function filters()
	{
		return array(
			'accessControl', // perform access control for CRUD operations
			'postOnly + delete', // we only allow deletion via POST request
		);
	}

	/**
	 * Specifies the access control rules.
	 * This method is used by the 'accessControl' filter.
	 * @return array access control rules
	 */
	public function accessRules()
	{
		return array(
			array('allow',  // allow all users to perform 'index' and 'view' actions
				'actions'=>array('index','view','documents','addJob','createJob','updateJob','deleteJob','createFamily','deleteFamily','updateFamily','createContact','deleteContact','updateContact','createScool','deleteScool','updateScool'),
				'users'=>array('*'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create','update'),
				'users'=>array('@'),
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('admin','delete'),
				'users'=>array('admin'),
			),
			array('deny',  // deny all users
				'users'=>array('*'),
			),
		);
	}

	/**
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */
	public function actionView($id)
	{
		$this->render('view',array(
			'model'=>$this->loadModel($id),
		));
	}

    public function actionAddJob($id)
	{
		$this->render('create',array(
			'model'=>$this->loadModel($id),
		));
	}
	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		$model=new Personal;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Personal']))
		{
			$model->attributes=$_POST['Personal'];
  		   $model->companies=$_POST['Personal']['get_companies'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->PERSONAL_ID));
		}

		$this->render('create',array(
			'model'=>$model,
		));
	}
    public function actionCreateJob($id)
	{
		$model=new Jobs;
        $personal=new Personal;
		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Jobs']))
		{
			$model->attributes=$_POST['Jobs'];
			$model->PERSONAL_ID=$id;
			//$model->COMPANY_ID=Yii::app()->getModule('user')->user()->profile->getAttribute('active_company');
  		    //print_r($_POST['Jobs']);
  		   //die();
  			if($model->save())
				$this->redirect(array('view','id'=>$model->PERSONAL_ID));
		}

		$this->render('create_job',array(
			'model'=>$model,
			'personal'=>$personal->findByPk($id),

		));
	}
	 public function actionCreateContact($id)
	{
		$model=new Contacts;
        $personal=new Personal;
		if(isset($_POST['Contacts']))
		{
			$model->attributes=$_POST['Contacts'];
			$model->PERSONAL_ID=$id;
  			if($model->save())
				$this->redirect(array('view','id'=>$model->PERSONAL_ID));
		}

		$this->render('create_contact',array(
			'model'=>$model,
			'personal'=>$personal->findByPk($id),

		));
	}
	 public function actionCreateScool($id)
	{
		$model=new Scools;
        $personal=new Personal;
		if(isset($_POST['Scools']))
		{

			$model->attributes=$_POST['Scools'];
			$model->PERSONAL_ID=$id;
  			if($model->save())
				$this->redirect(array('view','id'=>$model->PERSONAL_ID));
		}

		$this->render('create_scool',array(
			'model'=>$model,
			'personal'=>$personal->findByPk($id),

		));
	}
	public function actionCreateFamily($id)
	{
		$model=new FamilyMembers;
        $personal=new Personal;
		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['FamilyMembers']))
		{
			$model->attributes=$_POST['FamilyMembers'];
			$model->PERSONAL_ID=$id;
			//$model->COMPANY_ID=Yii::app()->getModule('user')->user()->profile->getAttribute('active_company');
  		    //print_r($_POST['Jobs']);
  		   //die();
  			if($model->save())
				$this->redirect(array('view','id'=>$model->PERSONAL_ID));
		}

		$this->render('create_family',array(
			'model'=>$model,
			'personal'=>$personal->findByPk($id),

		));
	}
	public function actionUpdateJob($id,$jid)
	{
		$model=new Jobs;
		$model=$model->findByPk($jid);
        $personal=new Personal;
		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Jobs']))
		{
			$model->attributes=$_POST['Jobs'];

			//$model->COMPANY_ID=Yii::app()->getModule('user')->user()->profile->getAttribute('active_company');
  		    //print_r($_POST['Jobs']);
  		   //die();
  			if($model->save())
				$this->redirect(array('view','id'=>$model->PERSONAL_ID));
		}

		$this->render('update_job',array(
			'model'=>$model,
			'personal'=>$personal->findByPk($id),

		));
	}
	public function actionUpdateContact($id,$jid)
	{
		$model=new Contacts;
		$model=$model->findByPk($jid);
        $personal=new Personal;
		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Contacts']))
		{
			$model->attributes=$_POST['Contacts'];

			//$model->COMPANY_ID=Yii::app()->getModule('user')->user()->profile->getAttribute('active_company');
  		    //print_r($_POST['Jobs']);
  		   //die();
  			if($model->save())
				$this->redirect(array('view','id'=>$model->PERSONAL_ID));
		}

		$this->render('update_contact',array(
			'model'=>$model,
			'personal'=>$personal->findByPk($id),

		));
	}
	public function actionUpdateScool($id,$jid)
	{
		$model=new Scools;
		$model=$model->findByPk($jid);
        $personal=new Personal;
		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Scools']))
		{
			$model->attributes=$_POST['Scools'];

			//$model->COMPANY_ID=Yii::app()->getModule('user')->user()->profile->getAttribute('active_company');

  			if($model->save())
				$this->redirect(array('view','id'=>$model->PERSONAL_ID));
		}

		$this->render('update_scool',array(
			'model'=>$model,
			'personal'=>$personal->findByPk($id),

		));
	}
	public function actionUpdateFamily($id,$jid)
	{
		$model=new FamilyMembers;
		$model=$model->findByPk($jid);
        $personal=new Personal;
		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);
       // print_r( $_POST);
       //die();
		if(isset($_POST['FamilyMembers']))
		{
			$_POST['FamilyMembers']['PERSONAL_ID']=$this->PERSONAL_ID;
			$model->attributes=$_POST['FamilyMembers'];

			//$model->COMPANY_ID=Yii::app()->getModule('user')->user()->profile->getAttribute('active_company');
  		    //print_r($_POST['Jobs']);
  		   //die();
  			if($model->save())
				$this->redirect(array('view','id'=>$model->PERSONAL_ID));
		}

		$this->render('update_family',array(
			'model'=>$model,
			'personal'=>$personal->findByPk($id),

		));
	}
	public function actionDeleteJob($id,$jid)
	{
		$model=new Jobs;
		$model=$model->findByPk($jid);
        $model->delete();
       	$this->redirect(array('view','id'=>$model->PERSONAL_ID));
		// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser

	}
	public function actionDeleteContact($id,$jid)
	{
		$model=new Contacts;
		$model=$model->findByPk($jid);
        $model->delete();
       	$this->redirect(array('view','id'=>$model->PERSONAL_ID));
		// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser

	}
	public function actionDeleteScool($id,$jid)
	{
		$model=new Scools;
		$model=$model->findByPk($jid);
        $model->delete();
       	$this->redirect(array('view','id'=>$model->PERSONAL_ID));
		// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser

	}
	public function actionDeleteFamily($id,$jid)
	{
		$model=new FamilyMembers;
		$model=$model->findByPk($jid);
        $model->delete();
       	$this->redirect(array('view','id'=>$model->PERSONAL_ID));
		// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser

	}
	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate($id)
	{
		$model=$this->loadModel($id);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);
          // print_r($_POST);
		if(isset($_POST['Personal']))
		{
			//$cmp=$model->companies;
			 //print_r($model->companies);
			$model->attributes=$_POST['Personal'];

            $model->companies=$_POST['Personal']['get_companies'];


			if($model->save())
			{

				$this->redirect(array('view','id'=>$model->PERSONAL_ID));

			}
		}

		$this->render('update',array(
			'model'=>$model,
		));
	}

	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'admin' page.
	 * @param integer $id the ID of the model to be deleted
	 */
	public function actionDelete($id)
	{

		$model=$this->loadModel($id);
		Jobs::model()->deleteAllByAttributes(array('PERSONAL_ID' =>$id));


		$this->loadModel($id)->delete();

		// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
		if(!isset($_GET['ajax']))
			$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
	}
    	public function actionDocuments($id)
	{
				// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
		$this->redirect(array('documents/index','pid'=>$id));
	}
	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		$dataProvider=new CActiveDataProvider('Personal');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Personal('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Personal']))
			$model->attributes=$_GET['Personal'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer the ID of the model to be loaded
	 */
	public function loadModel($id)
	{
		$model=Personal::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param CModel the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='personal-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
