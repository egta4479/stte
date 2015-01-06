<?php
/* @var $this LectureClassroomController */
/* @var $data LectureClassroom */
?>

<div class="view">
	<!--<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>-->
	<?php echo CHtml::link(CHtml::encode("Update"), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('lecture_id')); ?>:</b>
	<?php echo CHtml::encode($data->lecture->code."-".$data->lecture->name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('classroom_id')); ?>:</b>
	<?php echo CHtml::encode($data->classroom->code."-".$data->classroom->name); ?>
	<br />


</div>