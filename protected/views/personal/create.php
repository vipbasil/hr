<?php
/* @var $this PersonalController */
/* @var $model Personal */

$this->breadcrumbs=array(
	'Personals'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Personal', 'url'=>array('index')),
	array('label'=>'Manage Personal', 'url'=>array('admin')),
);
?>

<h1>Create Personal</h1>

<?php
	$model->companies=array(Yii::app()->getModule('user')->user()->profile->getAttribute('active_company'));
	echo $this->renderPartial('_form', array('model'=>$model));
?>