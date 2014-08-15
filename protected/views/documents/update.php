<?php
/* @var $this DocumentsController */
/* @var $model Documents */


 $this->menu=array();
 if(isset($_GET['pid'])&&$_GET['pid']>0){
	 $this->breadcrumbs=array(
		'Документы'=>array('index'),
		$model->DOCUMENT_ID=>array('view','id'=>$model->DOCUMENT_ID,'pid'=>$_GET['pid']),
		'Изменить',
	);
	$this->menu=array(
		array('label'=>'Список документов', 'url'=>array('index','pid'=>$_GET['pid'])),
		array('label'=>'Создать документ', 'url'=>array('create','pid'=>$_GET['pid'])),
		array('label'=>'Просмотр документа', 'url'=>array('view', 'id'=>$model->DOCUMENT_ID,'pid'=>$_GET['pid'])),
		array('label'=>'Управление документами', 'url'=>array('admin','pid'=>$_GET['pid'])),
		array('label'=>'Вернуться к пользователю', 'url'=>array('personal/view','id'=>$_GET['pid'])),
	);
 }
 else{
 	 $this->breadcrumbs=array(
		'Документы'=>array('index'),
		$model->DOCUMENT_ID=>array('view','id'=>$model->DOCUMENT_ID),
		'Изменить',
	);
     $this->menu=array(
  	    array('label'=>'Список документов', 'url'=>array('index')),
		array('label'=>'Создать документ', 'url'=>array('create')),
		array('label'=>'Просмотр документа', 'url'=>array('view', 'id'=>$model->DOCUMENT_ID)),
		array('label'=>'Управление документами', 'url'=>array('admin')),
		);
 }
?>

<h1>Изменить документ <?php echo $model->DOCUMENT_ID; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
<h1>Файлы этого документа</h1>

<?php

    $provider =File::model()->findAll(array("condition"=>"DOCUMENT_ID =".$model->DOCUMENT_ID.""));
    $activedatapr=new CArrayDataProvider($provider, array('keyField' => 'FILE_ID'));
	$this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$activedatapr,
	'itemView'=>'_fileEdit',
)); ?>
<? /* echo $this->renderPartial('_file_form', array('model'=>File::model(),'DOCUMENT_ID'=>$model->DOCUMENT_ID)); */ ?>