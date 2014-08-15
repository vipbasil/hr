<?php
/* @var $this CompaniesController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Предприятия',
);

$this->menu=array(
	array('label'=>'Создать предприятие', 'url'=>array('create')),
	array('label'=>'Управление прдприятиями', 'url'=>array('admin')),
);
?>

<h1>Companies</h1>

<?php
    $dataProvider->sort->defaultOrder='COMPANY_TYPE DESC';
	$this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
