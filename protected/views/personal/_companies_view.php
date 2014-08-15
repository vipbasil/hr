<?php
/* @var $this CompaniesController */
/* @var $data Companies */
//print_r($data);
?>

<div class="view">

	<b><?php  echo CHtml::encode(Companies::model()->getAttributeLabel('COMPANY_ID')); ?>:</b>
	<?php  echo CHtml::link(CHtml::encode($data['COMPANY_ID']), array('companies/view', 'id'=>$data['COMPANY_ID']));  ?>
	<br />

	<b><?php echo CHtml::encode(Companies::model()->getAttributeLabel('OMPANY_NAME'));?>:</b>
	<?php

	echo CHtml::encode($data['COMPANY_NAME']);

	?>
	<br />



</div>