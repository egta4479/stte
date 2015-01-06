<?php
/* @var $this LectureFacultyMemberController */
/* @var $model LectureFacultyMember */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id'); ?>
		<?php echo $form->textField($model,'id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'lecture_id'); ?>
		<?php echo $form->textField($model,'lecture_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'facultymember_id'); ?>
		<?php echo $form->textField($model,'facultymember_id'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->