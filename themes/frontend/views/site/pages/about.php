<?php
$this->pageTitle=Yii::app()->name . ' - '. Yii::t('app', 'About');
$this->breadcrumbs=array(
	Yii::t('app', 'About'),
);
?>

<?php $this->widget("TbBreadcrumbs", array("links"=>$this->breadcrumbs)) ?>

<h1><?php echo Yii::t('app', 'About'); ?></h1>

<p><?php echo Yii::t('app', 'This is a "static" page. You may change the content of this page by updating the file'); ?> <tt><?php echo __FILE__; ?></tt>.</p>