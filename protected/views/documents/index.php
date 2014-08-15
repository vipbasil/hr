<?php
/* @var $this DocumentsController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Документы',
);

 $this->menu=array();
 if(isset($_GET['pid'])&&$_GET['pid']>0){
 	$this->menu=array(
		array('label'=>'Создать документ', 'url'=>array('create','pid'=>$_GET['pid'])),
		array('label'=>'Управление документами', 'url'=>array('admin','pid'=>$_GET['pid'])),
		array('label'=>'Вернуться к пользователю', 'url'=>array('personal/view','id'=>$_GET['pid'])),
	);

 } else
 {
 	$this->menu=array(
		array('label'=>'Создать документ', 'url'=>array('create')),
		array('label'=>'Управление документами', 'url'=>array('admin')),
	);
 }
?>

<h1>Документы</h1>

<?php
//	if($pid>0)$dataProvider;
	$dataProvider->criteria->condition= "COMPANY_ID=".Yii::app()->getModule('user')->user()->profile->getAttribute('active_company');
  if(isset($_GET['pid'])&&$_GET['pid']>0){
  		$dataProvider->criteria->condition= "PERSONAL_ID=".$_GET['pid'];;

		$this->widget('zii.widgets.CListView', array(
		'dataProvider'=>$dataProvider,
		'itemView'=>'_view',
		));
	}else{
       	$this->widget('zii.widgets.CListView', array(
		'dataProvider'=>$dataProvider,
		'itemView'=>'_view',
		));
	}
 ?>
