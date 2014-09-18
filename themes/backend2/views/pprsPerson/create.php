<?php
$this->setPageTitle(
    Yii::t('D2personModule.model', 'Pprs Person')
    . ' - '
    . Yii::t('D2personModule.crud', 'Create')
);

$this->breadcrumbs[Yii::t('D2personModule.model', 'Pprs People')] = array('admin');
$this->breadcrumbs[] = Yii::t('D2personModule.crud', 'Create');
?>
<?php $this->widget("\TbBreadcrumb", array("links" => $this->breadcrumbs)) ?>
    <h1>
        <?php echo Yii::t('D2personModule.model', 'Pprs Person'); ?>
        <small><?php echo Yii::t('D2personModule.crud', 'Create'); ?></small>

    </h1>

<?php $this->renderPartial("_toolbar", array("model" => $model)); ?>
<?php $this->renderPartial('_form', array('model' => $model, 'buttons' => 'create')); ?>
<?php $this->renderPartial("_toolbar", array("model" => $model)); ?>