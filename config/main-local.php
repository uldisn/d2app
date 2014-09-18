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

    ),
    'components' => array(
        
        'db' => array(
            'tablePrefix' => '',
            // MySQL
            'connectionString' => 'mysql:host=localhost:4040;dbname=cb_01',
            'emulatePrepare' => true,
            'username' => 'root',
            'password' => '111',
            'charset' => 'utf8',
            'enableProfiling' => TRUE, //rada sql statementus
            'enableParamLogging' => TRUE, //add            
        ),
        'log'           => array(
            'class'  => 'CLogRouter',
            'enabled' => true,
            'routes' => array(
                array(
                    'class'  => 'CFileLogRoute',
                    'levels' => 'error, warning',
                    'logPath' => 'G:/xdocs/app-0.21.0_20131018/logfiles/uldisn_eu_app',
                ),
//                array(
//                    'class'=>'vendor.malyshev.yii-debug-toolbar.YiiDebugToolbarRoute',
//                    'ipFilters'=>array('127.0.0.1','192.168.1.215'),
//                ),
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