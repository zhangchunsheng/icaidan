<?php
/* @var $this IcdUserController */
/* @var $model IcdUser */

$this->breadcrumbs=array(
	'Icd Users'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List IcdUser', 'url'=>array('index')),
	array('label'=>'Create IcdUser', 'url'=>array('create')),
	array('label'=>'Update IcdUser', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete IcdUser', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage IcdUser', 'url'=>array('admin')),
);
?>

<h1>View IcdUser #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'username',
		'password',
		'email',
	),
)); ?>
