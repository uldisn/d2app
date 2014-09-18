<!DOCTYPE html>
<html lang="<?php echo Yii::app()->language ?>">
<head>
    <meta charset="utf-8">
    <title><?php echo CHtml::encode($this->pageTitle); ?></title>
    <meta name="description"
          content="<?php echo (P3Page::getActivePage()) ? P3Page::getActivePage()->t('description') : '' ?>">
    <meta name="keywords"
          content="<?php echo (P3Page::getActivePage()) ? P3Page::getActivePage()->t('keywords') : '' ?>">
    <meta name="author" content="">

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
    <script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <?php
    $cs = Yii::app()->getClientScript();
    $cs->registerMetaTag('width=device-width, initial-scale=1.0', 'viewport');
    $cs->registerLinkTag('shortcut icon', NULL, '/favicon.ico', NULL, NULL);

    // CSS files
    $css = Yii::app()->assetManager->publish(
        Yii::app()->theme->basePath . '/assets',
        true,   // hash by name
        -1,     // level
        false); // forceCopy
    $cs->registerCssFile($css . '/p3.css');
    $cs->registerCssFile($css . '/parkoil.css');
    ?>
</head>

<body>

<div class="container">
    <div class="subwrapper">
        <?php echo $content; ?>
    </div>
</div>
</body>
</html>