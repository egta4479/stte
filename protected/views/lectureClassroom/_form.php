<?php
/* @var $this LectureClassroomController */
/* @var $model LectureClassroom */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'lecture-classroom-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'lecture_id'); ?>
		<!--<?php echo $form->textField($model,'lecture_id'); ?>-->
		<?php echo $form->dropDownList($model,'lecture_id',$this->getLecture()); ?>
		<?php echo $form->error($model,'lecture_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'classroom_id'); ?>
		<!--<?php echo $form->textField($model,'classroom_id'); ?>-->
		<?php echo $form->dropDownList($model,'classroom_id',$this->getClassroom()); ?>
		<?php echo $form->error($model,'classroom_id'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->