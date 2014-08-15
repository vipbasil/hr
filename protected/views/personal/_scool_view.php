<div class="view">
    <b><?php echo "№" ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->SCOOLS_ID), array('updateScool', 'jid'=>$data->SCOOLS_ID,'id'=>$data->PERSONAL_ID)); ?>
	<br />
	<b><?php echo CHtml::encode($data->DATE_FROM); ?>-<?php echo CHtml::encode($data->DATE_TO); ?></b>
	<br />
    <b><?php echo CHtml::encode($data->scoolbase["SCOOL_NAME"]); ?></b>
    <br />
	<b><?php echo CHtml::encode($data->getAttributeLabel('COMPLETE')); ?>:</b>
	<?php echo CHtml::encode($data->COMPLETE); ?>
	<br />
</div>

