<?php

class DocumentsController extends Controller
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
				'actions'=>array('index','view'),
				'users'=>array('*'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create','update','file_delete'),
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

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		$model=new Documents;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Documents']))
		{
			$model->attributes=$_POST['Documents'];
			$save=$model->save();

			$fls = CUploadedFile::getInstancesByName('files');

            // proceed if the images have been set
            if (isset($fls) && count($fls) > 0) {

                // go through each uploaded image
                foreach ($fls as $fl => $doc) {
                  //  echo $doc->name.'<br />';
                      $new_name=$model->type["DOCUMENT_TYPE_NAME"].md5(microtime()).".".pathinfo($doc->name, PATHINFO_EXTENSION);
                    if ($doc->saveAs(Yii::getPathOfAlias('webroot').'/files/'.$new_name)) {

                        $doc_add = new File();
                        $doc_add->FILE_NAME = $new_name; //it might be $img_add->name for you, filename is just what I chose to call it in my model
                        $doc_add->FILE_PATH = Yii::app()->getBaseUrl(true).'/files/'.$new_name; //it might be $img_add->name for you, filename is just what I chose to call it in my model
                        $doc_add->FILE_TYPE = pathinfo($doc->name, PATHINFO_EXTENSION);
                        $doc_add->DOCUMENT_ID = $model->DOCUMENT_ID; // this links your picture model to the main model (like your user, or profile model)
			            $doc_add->save(); // DONE
                    }else
                    {

                    }

                }
			}
			if($save)
			{
				if(isset($_GET['pid'])&&$_GET['pid']>0)	{
					$this->redirect(array('view','id'=>$model->DOCUMENT_ID,'pid'=>$_GET['pid']));
				}else{
					$this->redirect(array('view','id'=>$model->DOCUMENT_ID));
				}
			}
		}

		$this->render('create',array(
			'model'=>$model,
		));
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




       if(isset($_POST['Documents']))
		{
			$model->attributes=$_POST['Documents'];
			$save=$model->save();
			$fls = CUploadedFile::getInstancesByName('files');

            // proceed if the images have been set
            if (isset($fls) && count($fls) > 0) {

                // go through each uploaded image
                foreach ($fls as $fl => $doc) {
                  //  echo $doc->name.'<br />';
                      $new_name=$model->type["DOCUMENT_TYPE_NAME"].md5(microtime()).".".pathinfo($doc->name, PATHINFO_EXTENSION);
                    if ($doc->saveAs(Yii::getPathOfAlias('webroot').'/files/'.$new_name)) {

                        $doc_add = new File();
                        $doc_add->FILE_ID=null;
                        $doc_add->FILE_NAME = $new_name; //it might be $img_add->name for you, filename is just what I chose to call it in my model
                        $doc_add->FILE_PATH = Yii::app()->getBaseUrl(true).'/files/'.$new_name; //it might be $img_add->name for you, filename is just what I chose to call it in my model
                        $doc_add->FILE_TYPE = pathinfo($doc->name, PATHINFO_EXTENSION);
                        $doc_add->DOCUMENT_ID = $id; // this links your picture model to the main model (like your user, or profile model)
			            $doc_add->save(); // DONE
                    }else
                    {

                    }

                }
			}

			if($save)
				{
				if(isset($_GET['pid'])&&$_GET['pid']>0)	{
					$this->redirect(array('view','id'=>$model->DOCUMENT_ID,'pid'=>$_GET['pid']));
				}else{
					$this->redirect(array('view','id'=>$model->DOCUMENT_ID));
				}
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
	public function actionDelete($id,$pid=null)
	{

        //(array("condition"=>"DOCUMENT_ID =".$model->DOCUMENT_ID."")
		$fls = File::model()->findAll(array("condition"=>"DOCUMENT_ID =".$id.""));
        //$fls = File::model()->findByAttributes(array('DOCUMENT_ID'=>$id));
       	foreach($fls as $fl)
		{

   			unlink(Yii::getPathOfAlias('webroot').'/files/'.$fl->FILE_NAME);
   			$fl->delete();
		}
        $this->loadModel($id)->delete();
		// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
		if(!isset($_GET['ajax']))
		{
				if(isset($_GET['pid'])&&$_GET['pid']>0)	{
					$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin','pid'=>$_GET['pid']));
				}else{
					$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
				}
			}

	}
	public function actionfile_delete($id,$did)
	{
		$doc_del = new File();
		unlink(Yii::getPathOfAlias('webroot').'/files/'.$doc_del->findByPK($id)->FILE_NAME);
		$doc_del->deleteByPk($id);

		// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
		if(!isset($_GET['ajax']))
		{
				if(isset($_GET['pid'])&&$_GET['pid']>0)	{
					$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('update','id'=>$did,'pid'=>$_GET['pid']));
				}else{
					$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('update','id'=>$did));
				}
			}

	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		$dataProvider=new CActiveDataProvider('Documents');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Documents('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Documents']))
			$model->attributes=$_GET['Documents'];

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
		$model=Documents::model()->findByPk($id);
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
		if(isset($_POST['ajax']) && $_POST['ajax']==='documents-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
