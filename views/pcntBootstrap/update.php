<?php
$this->breadcrumbs=array(
	'Pcnt Contact Types'=>array('index'),
	$model->pcnt_id=>array('view','id'=>$model->pcnt_id),
	'Update',
);

	$this->menu=array(
	array('label'=>'List PcntContactType','url'=>array('index')),
	array('label'=>'Create PcntContactType','url'=>array('create')),
	array('label'=>'View PcntContactType','url'=>array('view','id'=>$model->pcnt_id)),
	array('label'=>'Manage PcntContactType','url'=>array('admin')),
	);
	?>

	<h1>Update PcntContactType <?php echo $model->pcnt_id; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>