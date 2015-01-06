<?php
/* @var $this RegisterController */
/* @var $data Register */
?>

<div class="view">
	<?php echo CHtml::link(CHtml::encode("Update"), array('view', 'id'=>$data->id)); ?>
	<br />

	<!--
	<b><?php echo CHtml::encode($data->getAttributeLabel('student_id')); ?>:</b>
	<?php echo CHtml::encode($data->student_id); ?>
	<br />-->

	<b><?php echo CHtml::encode($data->getAttributeLabel('lecture_id')); ?>:</b>
	<?php $classroom=$this->getClassroom($data->lecture->id); echo CHtml::encode($data->lecture->code.' - '.$data->lecture->name.$this->getStatus($data->lecture->ismandatory).' / '.$this->days[$data->lecture->day].'-'.$data->lecture->hour); ?>
	<?php if($classroom){
			print($classroom->classroom->code.'-'.$classroom->classroom->name.','.$classroom->classroom->parentcode.' '.$this->getType($classroom->classroom->type));
		}?>
	<br />


</div>