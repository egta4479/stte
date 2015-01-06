<?php
/* @var $this LectureController */
/* @var $model Lecture */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'lecture-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'code'); ?>
		<?php echo $form->textField($model,'code',array('size'=>11,'maxlength'=>11)); ?>
		<?php echo $form->error($model,'code'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'name'); ?>
		<?php echo $form->textField($model,'name',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ismandatory'); ?>
		<!--<?php echo $form->textField($model,'ismandatory'); ?>-->
		<?php echo $form->dropDownList($model,'ismandatory',$this->mandatories); ?>
		<?php echo $form->error($model,'ismandatory'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'day'); ?>
		<!--<?php echo $form->textField($model,'day'); ?>-->
		<?php echo $form->dropDownList($model,'day',$this->days); ?>
		<?php echo $form->error($model,'day'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'hour'); ?>
		<?php echo $form->textField($model,'hour'); ?>
		<?php echo $form->error($model,'hour'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->