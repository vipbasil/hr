<?php
/* @var $this FileController */
/* @var $data File */
?>

<div class="view">

	<b><?php echo "№" ?>:</b>
	<?php echo CHtml::encode($data->FILE_ID); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('FILE_NAME')); ?>:</b>
	<?php echo CHtml::encode($data->FILE_NAME); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('FILE_PATH')); ?>:</b>
	<?php
	 if(exif_imagetype ( Yii::getPathOfAlias('webroot').'/files/'.$data->FILE_NAME )) {
	 	echo CHtml::image($data->FILE_PATH, $data->FILE_NAME);
	 }
	 else
	 {	 	echo CHtml::link($data->FILE_NAME,$data->FILE_PATH);	 }
	 ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('FILE_TYPE')); ?>:</b>
	<?php echo CHtml::encode($data->FILE_TYPE); ?>
	<br />
	<?php echo CHtml::link('Удалить', array('file_delete', 'id'=>$data->FILE_ID,'did'=>$data->DOCUMENT_ID),array('confirm' => 'Вы уверены?')); ?>
	<br />


</div>