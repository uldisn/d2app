<?php
$this->breadcrumbs=array(
	'Pcnt Contact Types'=>array('index'),
	'Create',
);

$this->menu=array(
array('label'=>'List PcntContactType','url'=>array('index')),
array('label'=>'Manage PcntContactType','url'=>array('admin')),
);
?>

<h1>Create PcntContactType</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>