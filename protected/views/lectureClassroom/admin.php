<?php
/* @var $this LectureClassroomController */
/* @var $model LectureClassroom */

$this->breadcrumbs=array(
	'Lecture Classrooms'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List LectureClassroom', 'url'=>array('index')),
	array('label'=>'Create LectureClassroom', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#lecture-classroom-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Lecture Classrooms</h1>


<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'lecture-classroom-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		/*'id',*/
		/*'lecture_id',*/
		/*'classroom_id',*/
		/*'classroom.name',*/
		/*'lecture.name',*/
		/*array(
                        'name'=>'lecture.name',
                        'filter'=>CHtml::listData(Lecture::model()->findAll(), 'id', 'name'),
                        'value'=>'Lecture::Model()->FindByPk($data->id)->name',
                ),
		*/
		array(
                          'name'=>'lecture_id',
                          'value'=>'$data->lecture->name',
                          'filter'=>CHtml::listData(Lecture::model()->findAll(), 'id', 'name'),
                          'type'=>'text',
                          ),
		array(
                          'name'=>'classroom_id',
                          'value'=>'$data->classroom->code.\'-\'.$data->classroom->name',
                          'filter'=>CHtml::listData(Classroom::model()->findAll(), 'id', 'name'),
                          'type'=>'text',
                         
                          ),
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
