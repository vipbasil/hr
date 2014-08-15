<?php
/* @var $this JobsController */
/* @var $model Jobs */
/* @var $personal Personal*/

$this->breadcrumbs=array(
	'Personals'=>array('index'),
	'Изменение записи о работе',
);

$this->menu=array(
	array('label'=>'List Personal',   'url'=>array('index')),
	array('label'=>'Create Personal', 'url'=>array('create')),
	array('label'=>'Update Personal', 'url'=>array('update', 'id'=>$personal->PERSONAL_ID)),
	array('label'=>'View Personal',   'url'=>array('view', 'id'=>$personal->PERSONAL_ID)),
	array('label'=>'Delete Personal', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$personal->PERSONAL_ID),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Personal', 'url'=>array('admin')),
	array('label'=>'Работа с документами', 'url'=>array('documents', 'id'=>$personal->PERSONAL_ID)),
	array('label'=>'Добавить запись о работе', 'url'=>array('CreateJob', 'id'=>$personal->PERSONAL_ID)),
	array('label'=>'Удалить запись о работе','url'=>'#', 'linkOptions'=>array('submit'=>array('DeleteJob', 'id'=>$personal->PERSONAL_ID,'jid'=>$model->JOB_ID),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Добавить запись о члене семьи', 'url'=>array('createFamily', 'id'=>$model->PERSONAL_ID)),

);
?>

<h1>Создать запись о работе</h1>

<?php echo $this->renderPartial('_job_form', array('model'=>$model)); ?>