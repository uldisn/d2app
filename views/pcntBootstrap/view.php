<?php
$this->breadcrumbs=array(
	'Pcnt Contact Types'=>array('index'),
	$model->pcnt_id,
);

$this->menu=array(
array('label'=>'List PcntContactType','url'=>array('index')),
array('label'=>'Create PcntContactType','url'=>array('create')),
array('label'=>'Update PcntContactType','url'=>array('update','id'=>$model->pcnt_id)),
array('label'=>'Delete PcntContactType','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->pcnt_id),'confirm'=>'Are you sure you want to delete this item?')),
array('label'=>'Manage PcntContactType','url'=>array('admin')),
);
?>

<h1>View PcntContactType #<?php echo $model->pcnt_id; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
'data'=>$model,
'attributes'=>array(
		'pcnt_id',
		'pcnt_name',
),
)); ?>
