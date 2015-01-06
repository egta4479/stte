<?php
/* @var $this LectureFacultyMemberController */
/* @var $model LectureFacultyMember */

$this->breadcrumbs=array(
	'Lecture Faculty Members'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List LectureFacultyMember', 'url'=>array('index')),
	array('label'=>'Create LectureFacultyMember', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#lecture-faculty-member-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>


<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'lecture-faculty-member-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		array(
                          'name'=>'lecture_id',
                          'value'=>'$data->lecture->name',
                          'filter'=>CHtml::listData(Lecture::model()->findAll(), 'id', 'name'),
                          'type'=>'text',
                          ),
		array(
                          'name'=>'facultymember_id',
                          'value'=>'$data->facultymember->code.\'-\'.$data->facultymember->name.\' \'.$data->facultymember->surname',
                          'filter'=>CHtml::listData(Facultymember::model()->findAll(), 'id', function($fm) {
								return CHtml::encode($fm->name." ".$fm->surname);
							}),
                          'type'=>'text',
                         
                       	  ),
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
