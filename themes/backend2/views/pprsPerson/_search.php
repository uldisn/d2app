<div class="wide form">

    <?php
    $form = $this->beginWidget('\TbActiveForm', array(
        'action' => Yii::app()->createUrl($this->route),
        'method' => 'get',
    )); ?>
    <div class="row">
        <?php echo $form->label($model, 'pprs_id'); ?>
        <?php ; ?>
    </div>

    <div class="row">
        <?php echo $form->label($model, 'pprs_first_name'); ?>
        <?php echo $form->textField($model, 'pprs_first_name', array('size' => 60, 'maxlength' => 100)); ?>
    </div>

    <div class="row">
        <?php echo $form->label($model, 'pprs_second_name'); ?>
        <?php echo $form->textField($model, 'pprs_second_name', array('size' => 60, 'maxlength' => 100)); ?>
    </div>

    <div class="row">
        <?php echo $form->label($model, 'pprs_declared_place_of_residence'); ?>
        <?php echo $form->textArea($model, 'pprs_declared_place_of_residence', array('rows' => 6, 'cols' => 50)); ?>
    </div>

    <div class="row">
        <?php echo $form->label($model, 'pprs_real_pleace_of_residence'); ?>
        <?php echo $form->textArea($model, 'pprs_real_pleace_of_residence', array('rows' => 6, 'cols' => 50)); ?>
    </div>

    <div class="row">
        <?php echo $form->label($model, 'pprs_salary'); ?>
        <?php echo $form->textField($model, 'pprs_salary'); ?>
    </div>


    <div class="row buttons">
        <?php echo CHtml::submitButton(Yii::t('D2personModule.crud', 'Search')); ?>
    </div>

    <?php $this->endWidget(); ?>

</div><!-- search-form -->
