<?php $this->beginContent('//layouts/main'); ?>
<div class="row">
	<div class="span9">
		<div id="content">
			<?php echo $content; ?>
		</div><!-- content -->
	</div>
	<div class="span3">
		<div id="sidebar">
		    <h4>Operations</h4>
			<?php
			$this->widget('bootstrap.widgets.TbMenu', array(
				'items' => $this->menu,
				'htmlOptions' => array('class' => 'operations'),
			));
			?>
		</div><!-- sidebar -->
	</div>
</div>
<?php $this->endContent(); ?>