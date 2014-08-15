<?php
/* @var $this PersonalController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Personals',
);

$this->menu=array(
	array('label'=>'Create Personal', 'url'=>array('create')),
	array('label'=>'Manage Personal', 'url'=>array('admin')),
);
?>

<h1>Personals</h1>

<?php
	/*$pers=Personal::model()->get;
	$items ="";
 	foreach ($this->companies as $company)
       {
       	$items=$company['COMPANY_ID'].",";
       }*/
   // $dataProvider->criteria->condition= "COMPANY_ID IN(".trim($items," ,").")";
   // print_r($dataProvider);
    //$dataProvider->criteria->condition= "COMPANY_ID=".Yii::app()->getModule('user')->user()->profile->getAttribute('active_company');
	$dd=Personal::model()->search();
	$this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dd,
	'itemView'=>'_view',
)); ?>
