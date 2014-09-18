<div class="btn-toolbar">
    <div class="btn-group">
        <?php
        switch ($this->action->id) {
            case "create":
                $this->widget("\TbButton", array(
                    "label" => Yii::t("D2personModule.model", "Manage"),
                    "icon" => "glyphicon-list-alt",
                    "url" => array("admin")
                ));
                break;
            case "admin":
                $this->widget("\TbButton", array(
                    "label" => Yii::t("D2personModule.model", "Create"),
                    "icon" => "glyphicon-plus",
                    "url" => array("create")
                ));
                break;
            case "view":
                $this->widget("\TbButton", array(
                    "label" => Yii::t("D2personModule.model", "Manage"),
                    "icon" => "glyphicon-list-alt",
                    "url" => array("admin")
                ));
                $this->widget("\TbButton", array(
                    "label" => Yii::t("D2personModule.model", "Update"),
                    "icon" => "glyphicon-edit",
                    "url" => array("update", "id" => $model->{$model->tableSchema->primaryKey})
                ));
                $this->widget("\TbButton", array(
                    "label" => Yii::t("D2personModule.model", "Create"),
                    "icon" => "glyphicon-plus",
                    "url" => array("create")
                ));
                $this->widget("\TbButton", array(
                    "label" => Yii::t("D2personModule.model", "Delete"),
                    "type" => "danger",
                    "icon" => "glyphicon-remove icon-white",
                    "htmlOptions" => array(
                        "submit" => array("delete", "id" => $model->{$model->tableSchema->primaryKey}, "returnUrl" => (Yii::app()->request->getParam("returnUrl")) ? Yii::app()->request->getParam("returnUrl") : $this->createUrl("admin")),
                        "confirm" => Yii::t("D2personModule.model", "Do you want to delete this item?"))
                ));
                break;
            case "update":
                $this->widget("\TbButton", array(
                    "label" => Yii::t("D2personModule.model", "Manage"),
                    "icon" => "glyphicon-list-alt",
                    "url" => array("admin")
                ));
                $this->widget("\TbButton", array(
                    "label" => Yii::t("D2personModule.model", "View"),
                    "icon" => "glyphicon-eye-open",
                    "url" => array("view", "id" => $model->{$model->tableSchema->primaryKey})
                ));
                $this->widget("\TbButton", array(
                    "label" => Yii::t("D2personModule.model", "Delete"),
                    "type" => "danger",
                    "icon" => "glyphicon-remove icon-white",
                    "htmlOptions" => array(
                        "submit" => array("delete", "id" => $model->{$model->tableSchema->primaryKey}, "returnUrl" => (Yii::app()->request->getParam("returnUrl")) ? Yii::app()->request->getParam("returnUrl") : $this->createUrl("admin")),
                        "confirm" => Yii::t("D2personModule.model", "Do you want to delete this item?"))
                ));
                break;
        }
        ?>    </div>
    <?php if ($this->action->id == 'admin'): ?>
        <div class="btn-group">
            <?php
            $this->widget('\TbButton', array(
                'label' => Yii::t('D2personModule.model', 'Search'),
                'icon' => 'glyphicon-search',
                'htmlOptions' => array('class' => 'search-button')
            ));?>
        </div>


        <div class="btn-group">
            <?php
            $this->widget('\TbButtonGroup', array(
                'buttons' => array(
                    array(
                        'label' => Yii::t('D2personModule.model', 'Relations'),
                        'icon' => 'glyphicon-search',
                        'items' => array(array('label' => 'ppcnPersonContacts - PpcnPersonContact', 'url' => array('/d2person/ppcnPersonContact/admin')), array('label' => 'ppxdPersonXDocuments - PpxdPersonXDocument', 'url' => array('/d2person/ppxdPersonXDocument/admin')), array('label' => 'ppxtPersonXTypes - PpxtPersonXType', 'url' => array('/d2person/ppxtPersonXType/admin'))
                        )
                    ),
                ),
            ));
            ?>        </div>


    <?php endif; ?></div>

<?php if ($this->action->id == 'admin'): ?>
    <div class="search-form" style="display:none">
        <?php $this->renderPartial('_search', array(
            'model' => $model,
        )); ?>
    </div>
<?php endif; ?>