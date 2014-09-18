<div class="row">
    <div class="span8"> <!-- main inputs -->

        <div class="form-horizontal">

            <?php echo $form->textFieldRow($model, 'pprs_first_name', array('maxlength' => 100)); ?>

            <?php echo $form->textFieldRow($model, 'pprs_second_name', array('maxlength' => 100)); ?>

            <?php echo $form->textAreaRow($model, 'pprs_declared_place_of_residence', array('rows' => 6, 'cols' => 50, 'class' => 'span8')); ?>

            <?php echo $form->textAreaRow($model, 'pprs_real_pleace_of_residence', array('rows' => 6, 'cols' => 50, 'class' => 'span8')); ?>

            <?php echo $form->textFieldRow($model, 'pprs_salary'); ?>
        </div>
    </div>
    <!-- main inputs -->

    <div class="span4"> <!-- sub inputs -->

    </div>
    <!-- sub inputs -->
</div>
