<?php
/* @var $this IcdUserController */
/* @var $model IcdUser */

$this->breadcrumbs=array(
	'Icd Users'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List IcdUser', 'url'=>array('index')),
	array('label'=>'Manage IcdUser', 'url'=>array('admin')),
);
?>

<h1>Create IcdUser</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>