<!DOCTYPE html>
<html lang="<?php echo Yii::app()->language ?>">
<head>
<?php
    $app_asset_path = Yii::app()->assetManager->publish(
        Yii::app()->theme->basePath . '/assets',
        true,   // hash by name
        -1,     // level
        false); // forceCopy
?>    
    <meta charset="utf-8">
    <link rel="shortcut icon" href="<?php echo $app_asset_path; ?>/favicon.ico" type="image/x-icon" />
    <title><?php echo CHtml::encode($this->pageTitle); ?></title>
<?php

if (Yii::app()->user->isGuest) {
    $file = Yii::getPathOfAlias('application.themes.frontend.views.layouts') . DIRECTORY_SEPARATOR . 'ace_logon.php';
} else {
    $file = Yii::getPathOfAlias('application.themes.frontend.views.layouts') . DIRECTORY_SEPARATOR . '_main.php';
}
$this->renderFile($file, array('content' => $content,'app_asset_path'=>$app_asset_path));
?>    
</body></html>
