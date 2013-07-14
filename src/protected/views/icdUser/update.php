<?php
/* @var $this IcdUserController */
/* @var $model IcdUser */

$this->breadcrumbs=array(
	'Icd Users'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List IcdUser', 'url'=>array('index')),
	array('label'=>'Create IcdUser', 'url'=>array('create')),
	array('label'=>'View IcdUser', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage IcdUser', 'url'=>array('admin')),
);
?>

<h1>Update IcdUser <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>