<?php
/* @var $this LectureFacultyMemberController */
/* @var $model LectureFacultyMember */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'lecture-faculty-member-form',
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
		<?php echo $form->labelEx($model,'facultymember_id'); ?>
		<!--<?php echo $form->textField($model,'facultymember_id'); ?>-->
		<?php echo $form->dropDownList($model,'facultymember_id',$this->getFacultymember()); ?>
		<?php echo $form->error($model,'facultymember_id'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->