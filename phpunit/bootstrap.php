<?php
//$config = realpath(dirname(__FILE__).'/../../vendor/uldisn/parkoil_app/config/test.php'); 
//$config=realpath(dirname(__FILE__).'/../vendor/uldisn/parkoil_app/config/concole.php');
//require_once dirname(__FILE__).'/../vendor/yiisoft/yii/framework/yii.php'; 
////require_once dirname(__FILE__).'/../vendor/yiisoft/yii/framework/tests/CTestCase.php'; 
//
//
//Yii::createConsoleApplication($config);

$yii_framework = realpath(dirname(__FILE__).'/../../../yiisoft/yii/framework');
$yiit=$yii_framework . '/yiit.php';
$config = realpath(dirname(__FILE__).'/../../depo2app/config/test.php'); 
var_dump($config);//exit;
require_once $yiit ;
require_once $yii_framework . '/test/CWebTestCase.php';
//Yii::createWebApplication($config)->run();
Yii::createWebApplication($config);
//Yii::import('vendor.dbrisinajumi.fcrn.components.*');
