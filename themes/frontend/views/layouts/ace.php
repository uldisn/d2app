<?php $this->beginContent('//layouts/main'); ?>
<div class="page-header position-relative">
    <h1>
        <?php
        if (!empty($this->contentHeader)) {
            echo $this->contentHeader;
        }
        ?>
    </h1>
</div>
<div class="row-fluid">
	<?php echo $content; ?>
</div><!-- content -->
<?php $this->endContent(); ?>