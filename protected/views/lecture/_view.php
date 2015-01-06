<?php
/* @var $this LectureController */
/* @var $data Lecture */
?>

<div class="view">


	<?php echo CHtml::link(CHtml::encode("Update"), array('view', 'id'=>$data->id)); ?>
	<br/>

	<b><?php echo CHtml::encode($data->getAttributeLabel('code')); ?>:</b>
	<?php echo CHtml::encode($data->code); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('name')); ?>:</b>
	<?php echo CHtml::encode($data->name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ismandatory')); ?>:</b>
	<?php echo CHtml::encode($this->mandatories[$data->ismandatory]); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('day')); ?>:</b>
	<?php echo CHtml::encode($this->days[$data->day]); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('hour')); ?>:</b>
	<?php echo CHtml::encode($data->hour); ?>
	<br />


</div>