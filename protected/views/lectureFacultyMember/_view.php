<?php
/* @var $this LectureFacultyMemberController */
/* @var $data LectureFacultyMember */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode("Düzenle"), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('lecture_id')); ?>:</b>
	<?php echo CHtml::encode($data->lecture->code."-".$data->lecture->name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('facultymember_id')); ?>:</b>
	<?php echo CHtml::encode($data->facultymember->code."-".$data->facultymember->name." ".$data->facultymember->surname); ?>
	<br />


</div>