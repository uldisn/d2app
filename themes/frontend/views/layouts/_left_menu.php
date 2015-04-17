<?php


$user = User::model()->findByPk(Yii::app()->user->id);

$menu_tems = require Yii::getPathOfAlias('application') . '/config/left_menu.php';

$this->widget('vendor.uldisn.ace.widgets.TbAceMenu', array(
    'type' => '',
    'stacked' => false, 
    'htmlOptions' => array('class' => 'nav-list'),
    'items' => $menu_tems,
        )
);
?>
<div class="sidebar-collapse" id="sidebar-collapse">
    <i class="icon-double-angle-left" data-icon1="icon-double-angle-left" data-icon2="icon-double-angle-right"></i>
</div>

<script type="text/javascript">
    try {
        ace.settings.check('sidebar', 'collapsed')
    } catch (e) {
    }
</script>
