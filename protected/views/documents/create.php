<?php
/* @var $this DocumentsController */
/* @var $model Documents */
$this->breadcrumbs=array(
	'Документы'=>array('index'),
	'Создать',
);
if(isset($_GET['pid'])&&$_GET['pid']>0){
	$this->menu=array(
	array('label'=>'Список документов', 'url'=>array('index','pid'=>$_GET['pid'])),
	array('label'=>'Управление документами', 'url'=>array('admin','pid'=>$_GET['pid'])),
	array('label'=>'Вернуться к пользователю', 'url'=>array('personal/view','id'=>$_GET['pid'])),
	);
}else{
	$this->menu=array(
		array('label'=>'Список документов', 'url'=>array('index')),
		array('label'=>'Управление документами', 'url'=>array('admin')),
	);
}

?>

<h1>Создать документ</h1>

<?php
 if(isset($_GET['pid'])&&$_GET['pid']>0){
	 $this->renderPartial('_form', array('model'=>$model,'pid'=>$_GET['pid']));
	}else {
	 $this->renderPartial('_form', array('model'=>$model));
	}

 ?>