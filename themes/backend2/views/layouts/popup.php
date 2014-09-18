<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
	<head>
		<meta charset="utf-8">
		<title><?php echo CHtml::encode($this->pageTitle); ?></title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="">
		<meta name="author" content="">



		<style type="text/css">
			body {
				padding-top: 10px;
			}
		</style>

		<!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
		<!--[if lt IE 9]>
		  <script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->

        <?php
        // CSS files
        $cs = Yii::app()->getClientScript();
        $published = Yii::app()->assetManager->publish(Yii::app()->theme->basePath . '/css/backend.css');
        $cs->registerCssFile($published);
        ?>

		<!-- Le fav and touch icons -->
		<link rel="shortcut icon" href="images/favicon.ico">
		<link rel="apple-touch-icon" href="images/apple-touch-icon.png">
		<link rel="apple-touch-icon" sizes="72x72" href="images/apple-touch-icon-72x72.png">
		<link rel="apple-touch-icon" sizes="114x114" href="images/apple-touch-icon-114x114.png">
	</head>

<body id="popup">

<div class="container">

	<?php echo $content; ?>

</div><!-- page -->

</body>
</html>
