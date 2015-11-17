<?php

//exit('eeee');
// Use this file as local.php to override settings only on your local machine
//
// DO NOT COMMIT THIS FILE !!!
// include 'development' or 'production'
$environmentConfigFile = dirname(__FILE__) . DIRECTORY_SEPARATOR . 'main-development.php';

$applicationDirectory = realpath(dirname(__FILE__) . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR);

$localConfig = array(
    'aliases' => array(
        ),
    'import' => array(


    ),
    'modules' => array(
        // code generator
//        'po_test' => array( //++
//            'class' => 'vendor.uldisn.po_test.Po_testModule',
//        ),
        'gii' => array(
            'class' => 'system.gii.GiiModule',
            'password' => 'p3',
            // If removed, Gii defaults to localhost only. Edit carefully to taste.
            'ipFilters' => array('127.0.0.1', '::1'),
            'generatorPaths' => array(
                //'vendor.phundament.gii-template-collection', // giix generators
                'vendor.dbrisinajumi.gii-template-collection', // giix generators
                //'bootstrap.gii', // bootstrap generator
            ),
        ),
       'd2mailer' => array(
            'class' => 'vendor.dbrisinajumi.d2mailer.D2mailerModule',
            'fromEmail' => 'uldis@weberp.lv',
            'fromName' => 'Uldis Nelsons',
            'smtp_host' => 'smtp.hosts.lv',
            'smtp_port' => 25,
            'logging' => true,
        ),
        

    ),
    'components' => array(
        
        'db' => array(
            'tablePrefix' => '',
            // MySQL
            'connectionString' => 'mysql:host=****host****;dbname=***db_name***',
            'emulatePrepare' => true,
            'username' => '***user_name***',
            'password' => '***user_password***',
            'charset' => 'utf8',
            'enableProfiling' => TRUE, //rada sql statementus
            'enableParamLogging' => TRUE, //add            
        ),
        'log'           => array(
            'class'  => 'CLogRouter',
            'enabled' => true,
            'routes' => array(
                //log in file
                array(
                    'class'  => 'CFileLogRoute',
                    'levels' => 'error, warning',
                    'logPath' => dirname(__FILE__).'/../',
                ),
                // FOR DEV - LOG ON SCREEN
                array(
                    'class'  => 'CWebLogRoute',
                    'levels' => 'error, warning',
                ),
                // FOR DEV - add info
                //array(
                //    'class'=>'vendor.malyshev.yii-debug-toolbar.YiiDebugToolbarRoute',
                //    'ipFilters'=>array('127.0.0.1','192.168.1.215'),
                //),
            ),
        ),
        
    ),
    'params' => array(
        'system' => 'DEV',

    )
);

// merge configs in the following order (most to least important) local, {env}, main
if (is_file($environmentConfigFile)) {
    return CMap::mergeArray(require($environmentConfigFile), $localConfig);
} else {
    return $localConfig;
}
