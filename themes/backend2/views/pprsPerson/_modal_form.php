<?php
/* @var $this PprsPersonController */
/* @var $inputSelector jQuery selector to the select-input of the parent form */
/* @var $pk The primary key field added object */
/* @var $field The field of the newly added object to be used as the key/label of the parent form select-input */

$this->beginWidget('\TbModal', array('id' => $formId . "-modal"));

$form = $this->beginWidget('\TbActiveForm', array(
    'id' => $formId,
    'enableAjaxValidation' => true,
    'enableClientValidation' => true,
    'type' => 'horizontal',
));
?>


    <div class="modal-header">
        <button type="button" class="close" data-toggle="modal" data-target="#<?php echo $formId; ?>-modal">×</button>
        <h3><?php echo Yii::t('D2personModule.model', 'Create {model}', array('{model}' => Yii::t('D2personModule.model', 'Pprs Person'))); ?></h3>
    </div>
    <div class="modal-body">

        <?php
        $this->renderPartial('/d2person/pprsPerson/_elements', array(
            'model' => $model,
            'form' => $form,
        ));
        ?>

    </div>
    <div class="modal-footer">
        <a href="#" class="btn" data-toggle="modal" data-target="#<?php echo $formId; ?>-modal">Cancel</a>
        <?php
        echo CHtml::ajaxSubmitButton('Save', CHtml::normalizeUrl(array('d2person/pprsPerson/editableCreator', 'render' => true)), array(
            'dataType' => 'json',
            'type' => 'post',
            'success' => 'function(data, config) {
                //$("#loader").show();
                if (data && data.' . $pk . ') {
                    $("#' . $form->id . '").trigger("reset");
                    $("#' . $formId . '-modal").modal("hide");
                    $("' . $inputSelector . '")
                        .append($("<option>", { value : data.' . $pk . ', selected: "selected" }).text(data.' . $field . '));
                } else {
                    config.error.call(this, data && data.errors ? data.errors : "Unknown error");
                }
            }',
            'error' => 'function(errors) {
                //$("#loader").show();
                var msg = "";
                if (errors && errors.responseText) {
                    msg = errors.responseText;
                } else {
                    $.each(errors, function(k, v) {
                        msg += v + "<br>";
                    });
                }
                alert(msg);
            }',
            'beforeSend' => 'function() {
                //$("#loader").show();
            }',
        ), array('class' => 'btn btn-primary'));
        ?>

    </div>

<?php
$this->endWidget(); // form
$this->endWidget(); // modal
