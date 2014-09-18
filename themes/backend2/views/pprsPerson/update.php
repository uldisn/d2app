<?php
$this->setPageTitle(
    Yii::t('D2personModule.model', 'Pprs Person')
    . ' - '
    . Yii::t('D2personModule.model', 'Update')
    . ': '
    . $model->getItemLabel()
);
$this->breadcrumbs[Yii::t('D2personModule.model', 'Pprs People')] = array('admin');
$this->breadcrumbs[$model->{$model->tableSchema->primaryKey}] = array('view', 'id' => $model->{$model->tableSchema->primaryKey});
$this->breadcrumbs[] = Yii::t('D2personModule.model', 'Update');
?>

<?php $this->widget("\TbBreadcrumb", array("links" => $this->breadcrumbs)) ?>
<h1>

    <?php echo Yii::t('D2personModule.model', 'Pprs Person'); ?>
    <small>
        <?php echo Yii::t('D2personModule.model', 'Update')?> #<?php echo $model->pprs_id ?>
    </small>
    
</h1>

<?php $this->renderPartial("_toolbar", array("model" => $model)); ?>

<?php
$this->renderPartial('_form', array('model' => $model));
?>



<h2>
    <?php echo Yii::t('D2personModule.model', 'Ppcn Person Contacts'); ?>     <small>ppcnPersonContacts</small>
</h2>


<div class="btn-group">
    <?php $this->widget('\TbButtonGroup', array(
        'type' => '', // '', 'primary', 'info', 'success', 'warning', 'danger' or 'inverse'
        'buttons' => array(
            array('label' => Yii::t('D2personModule.model', 'Create'), 'icon' => 'glyphicon-plus', 'url' => array('d2personppcnPersonContact/create', 'PpcnPersonContact' => array('ppcn_pprs_id' => $model->ppcn_id), 'returnUrl' => Yii::app()->request->url), array('class' => ''))
        ),
    ));
?></div>

<?php
$relatedSearchModel = $this->getRelatedSearchModel($model, 'ppcnPersonContacts');
$this->widget('\TbGridView',
    array(
        'id' => 'd2personppcnPersonContact-grid',
        'dataProvider' => $relatedSearchModel->search(),
        'filter' => $relatedSearchModel, // TODO: Restore similar functionality without oom problems: count($model->ppcnPersonContacts) > 1 ? $relatedSearchModel : null,
        'pager' => array(
            'class' => '\TbPager',
            'displayFirstAndLast' => true,
        ),
    'columns' => array(
        'ppcn_id',
                array(
                'name' => 'ppcn_pcnt_type',
                'value' => 'CHtml::value($data, \'ppcnPcntType.itemLabel\')',
                'filter' => '',//CHtml::listData(PcntContactType::model()->findAll(array('limit' => 1000)), 'pcnt_id', 'itemLabel'),
            ),
        array(
                'class' => 'TbEditableColumn',
                'name' => 'ppcn_value',
                'editable' => array(
                    'url' => $this->createUrl('/d2personppcnPersonContact/editableSaver'),
                    //'placement' => 'right',
                )
            ),
        #'ppcn_notes',
        array(
                'class' => 'TbEditableColumn',
                'name' => 'ppcn_modified',
                'editable' => array(
                    'url' => $this->createUrl('/d2personppcnPersonContact/editableSaver'),
                    //'placement' => 'right',
                )
            ),
        array(
            'class' => '\TbButtonColumn',
            'viewButtonUrl' => "Yii::app()->controller->createUrl('d2personppcnPersonContact/view', array('ppcn_id' => \$data->ppcn_id))",
            'updateButtonUrl' => "Yii::app()->controller->createUrl('d2personppcnPersonContact/update', array('ppcn_id' => \$data->ppcn_id))",
            'deleteButtonUrl' => "Yii::app()->controller->createUrl('d2personppcnPersonContact/delete', array('ppcn_id' => \$data->ppcn_id))",
        ),
    ),
));
?>


<h2>
    <?php echo Yii::t('D2personModule.model', 'Ppxd Person Xdocuments'); ?>     <small>ppxdPersonXDocuments</small>
</h2>


<div class="btn-group">
    <?php $this->widget('\TbButtonGroup', array(
        'type' => '', // '', 'primary', 'info', 'success', 'warning', 'danger' or 'inverse'
        'buttons' => array(
            array('label' => Yii::t('D2personModule.model', 'Create'), 'icon' => 'glyphicon-plus', 'url' => array('d2personppxdPersonXDocument/create', 'PpxdPersonXDocument' => array('ppxd_pprs_id' => $model->ppxd_id), 'returnUrl' => Yii::app()->request->url), array('class' => ''))
        ),
    ));
?></div>

<?php
$relatedSearchModel = $this->getRelatedSearchModel($model, 'ppxdPersonXDocuments');
$this->widget('\TbGridView',
    array(
        'id' => 'd2personppxdPersonXDocument-grid',
        'dataProvider' => $relatedSearchModel->search(),
        'filter' => $relatedSearchModel, // TODO: Restore similar functionality without oom problems: count($model->ppxdPersonXDocuments) > 1 ? $relatedSearchModel : null,
        'pager' => array(
            'class' => '\TbPager',
            'displayFirstAndLast' => true,
        ),
    'columns' => array(
        'ppxd_id',
                array(
                'name' => 'ppxd_pdcm_id',
                'value' => 'CHtml::value($data, \'ppxdPdcm.itemLabel\')',
                'filter' => '',//CHtml::listData(PdcmDocumentType::model()->findAll(array('limit' => 1000)), 'pdcm_id', 'itemLabel'),
            ),
        array(
                'class' => 'TbEditableColumn',
                'name' => 'ppxd_number',
                'editable' => array(
                    'url' => $this->createUrl('/d2personppxdPersonXDocument/editableSaver'),
                    //'placement' => 'right',
                )
            ),
        array(
                'class' => 'TbEditableColumn',
                'name' => 'ppxd_issue_date',
                'editable' => array(
                    'url' => $this->createUrl('/d2personppxdPersonXDocument/editableSaver'),
                    //'placement' => 'right',
                )
            ),
        array(
                'class' => 'TbEditableColumn',
                'name' => 'ppxd_expire_date',
                'editable' => array(
                    'url' => $this->createUrl('/d2personppxdPersonXDocument/editableSaver'),
                    //'placement' => 'right',
                )
            ),
        #'ppxd_notes',
        array(
                'class' => 'editable.EditableColumn',
                'name' => 'ppxd_status',
                'value' => '$data->getEnumLabel(\'ppxd_status\',$data->ppxd_status)',
                'editable' => array(
                    'type' => 'select',
                    'url' => $this->createUrl('/d2person/pprsPerson/editableSaver'),
                    'source' => $model->getEnumFieldLabels('ppxd_status'),
                    //'placement' => 'right',
                ),
               'filter' => $model->getEnumFieldLabels('ppxd_status'),
            ),
        array(
            'class' => '\TbButtonColumn',
            'viewButtonUrl' => "Yii::app()->controller->createUrl('d2personppxdPersonXDocument/view', array('ppxd_id' => \$data->ppxd_id))",
            'updateButtonUrl' => "Yii::app()->controller->createUrl('d2personppxdPersonXDocument/update', array('ppxd_id' => \$data->ppxd_id))",
            'deleteButtonUrl' => "Yii::app()->controller->createUrl('d2personppxdPersonXDocument/delete', array('ppxd_id' => \$data->ppxd_id))",
        ),
    ),
));
?>


<h2>
    <?php echo Yii::t('D2personModule.model', 'Ppxt Person Xtypes'); ?>     <small>ppxtPersonXTypes</small>
</h2>


<div class="btn-group">
    <?php $this->widget('\TbButtonGroup', array(
        'type' => '', // '', 'primary', 'info', 'success', 'warning', 'danger' or 'inverse'
        'buttons' => array(
            array('label' => Yii::t('D2personModule.model', 'Create'), 'icon' => 'glyphicon-plus', 'url' => array('d2personppxtPersonXType/create', 'PpxtPersonXType' => array('ppxt_pprs_id' => $model->ppxt_id), 'returnUrl' => Yii::app()->request->url), array('class' => ''))
        ),
    ));
?></div>

<?php
$relatedSearchModel = $this->getRelatedSearchModel($model, 'ppxtPersonXTypes');
$this->widget('\TbGridView',
    array(
        'id' => 'd2personppxtPersonXType-grid',
        'dataProvider' => $relatedSearchModel->search(),
        'filter' => $relatedSearchModel, // TODO: Restore similar functionality without oom problems: count($model->ppxtPersonXTypes) > 1 ? $relatedSearchModel : null,
        'pager' => array(
            'class' => '\TbPager',
            'displayFirstAndLast' => true,
        ),
    'columns' => array(
        'ppxt_id',
                array(
                'name' => 'ppxt_ptyp_id',
                'value' => 'CHtml::value($data, \'ppxtPtyp.itemLabel\')',
                'filter' => '',//CHtml::listData(PtypType::model()->findAll(array('limit' => 1000)), 'ptyp_id', 'itemLabel'),
            ),
        array(
            'class' => '\TbButtonColumn',
            'viewButtonUrl' => "Yii::app()->controller->createUrl('d2personppxtPersonXType/view', array('ppxt_id' => \$data->ppxt_id))",
            'updateButtonUrl' => "Yii::app()->controller->createUrl('d2personppxtPersonXType/update', array('ppxt_id' => \$data->ppxt_id))",
            'deleteButtonUrl' => "Yii::app()->controller->createUrl('d2personppxtPersonXType/delete', array('ppxt_id' => \$data->ppxt_id))",
        ),
    ),
));
?>

