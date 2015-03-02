<?php

/**
 * Phundament 3 Console Config File
 * Containes predefined yiic console commands for Phundament.
 * Define composer hooks by the following name schema: <vendor>/<packageName>-<action>

 */

// for testing purposes
$webappCommand = array(
    'yiic',
    'webapp',
    'create',
    realpath(dirname(__FILE__) . '/../../../'),
    'git',
    '--interactive=' . (getenv('PHUNDAMENT_TEST') ? '0' : '1')
);

// gets merged automatically if available
$localConsoleConfigFile = dirname(__FILE__) . DIRECTORY_SEPARATOR . 'console-local.php';

// merge compnents and modules from main config
$mainConfig = require('main.php');

$consoleConfig = array(
    'aliases'    => array(
        'vendor' => $applicationDirectory . '/../../../vendor',
        'webroot' => $applicationDirectory . '/../../../www',
        //'gii-template-collection'              => 'vendor.phundament.gii-template-collection', // TODO
        'audittrail' => 'vendor.dbrisinajumi.audittrail',
    ),
    'basePath'   => dirname(__FILE__) . DIRECTORY_SEPARATOR . '..',
    'name'       => 'Phundament Console Application',
    'components' => CMap::mergeArray(
        $mainConfig['components'],
        array()
    ),
    'modules'    => $mainConfig['modules'],
    'commandMap' => array(
        // dev command
        'database'      => array(
            'class' => 'vendor.schmunk42.database-command.EDatabaseCommand',
        ),
        'inst_d2app'      => array(
            //'class' => 'vendor.uldisn.d2app.commands.D2AppInstCommand',
            'class' => 'application.commands.D2AppInstCommand',
        ),
        // composer callback
        'migrate'       => array(
            // alias of the path where you extracted the zip file
            'class'                 => 'vendor.yiiext.migrate-command.EMigrateCommand',
            // this is the path where you want your core application migrations to be created
            'migrationPath'         => 'application.migrations', //9
            // the name of the table created in your database to save versioning information
            'migrationTable'        => 'migration',
            // the application migrations are in a pseudo-module called "core" by default
            'applicationModuleName' => 'core',
            // define all available modules (if you do not set this, modules will be set from yii app config)
            'modulePaths'           => array(
                
                'audittrail'              => 'vendor.dbrisinajumi.audittrail.migrations', //1
                'core_init'               => 'application.migrations_init',
                'yii-user'                => 'vendor.uldisn.yii-user.migrations',           //2
                'd2files'                 => 'vendor.dbrisinajumi.d2files.migrations',      //4
                'd2person'                => 'vendor.dbrisinajumi.d2person.migrations',    //5
                'd2company'               => 'vendor.dbrisinajumi.d2company.migrations',    //6
                'core_main'                    => 'application.migrations_init2',
                'yeeki'                   => 'vendor.dbrisinajumi.yeeki.migrations',      //8
                'd1files'                 => 'vendor.dbrisinajumi.d1files.migrations',    //8 for d2companies
                //no ready for init 'd2tasks'                 => 'vendor.dbrisinajumi.d2tasks.migrations',    //9
                //no ready for init 'd2finv'                  => 'vendor.dbrisinajumi.d2finv.migrations',
                
            ),
            // you can customize the modules migrations subdirectory which is used when you are using yii module config
            'migrationSubPath'      => 'migrations',
            // here you can configure which modules should be active, you can disable a module by adding its name to this array
            'disabledModules'       => array(),
            // the name of the application component that should be used to connect to the database
            'connectionID'          => 'db',
            // alias of the template file used to create new migrations
            #'templateFile' => 'system.cli.migration_template',
        ),
//        // composer callback
//        'p3bootstrap'   => array(
//            'class'           => 'vendor.phundament.p3bootstrap.commands.P3BootstrapCommand',
//            'themePath'       => 'application.themes',
//        ),
//        // composer callback
        'p3echo'        => array(
            'class' => 'application.commands.P3EchoCommand',
        ),
//        // composer callback
//        'p3media'       => array(
//            'class' => 'vendor.phundament.p3media.commands.P3MediaCommand',
//        ),
//        // composer callback
//        'less-setup'    => array(
//            'class' => 'vendor.crisu83.yii-less.commands.LessSetupCommand',
//        ),
//        // media file sync
//        'rsync'         => array(
//            'class'   => 'vendor.phundament.p3extensions.commands.P3RsyncCommand',
//            'servers' => array(
//                'local'      => realpath(dirname(__FILE__) . '/..'),
//                'production' => 'user@example.com:/path/to/phundament/app',
//            ),
//            'aliases' => array(
//                'p3media' => 'application.data.p3media' # Note: This setting syncs P3Media Files
//            ),
//            #'params' => '--rsh="ssh -p222"',
//        ),
//        // composer callback
//        'webapp'        => array(
//            'class' => 'application.commands.P3WebAppCommand',
//        ),
//        // composer callback
//        'backend-theme' => array(
//            'class'     => 'vendor.phundament.backend-theme.commands.PhBackendThemeCommand',
//            'themePath' => 'application.themes',
//            'themeName' => 'backend2',
//        ),
    ),
    'params'     => 
    CMap::mergeArray(
            $mainConfig['params'],
            array(
        'composer.callbacks' => array(
            'post-install' => array(
                    array('yiic', 'inst_d2app'),
                    array('yiic', 'migrate', '--interactive=1','--module=audittrail'),
                    array('yiic', 'migrate', '--interactive=1','--module=core_init'),
                    array('yiic', 'migrate', '--interactive=1','--module=yii-user'),
                    array('yiic', 'migrate', '--interactive=1','--module=d2files'),
                    array('yiic', 'migrate', '--interactive=1','--module=d2person'),
                    array('yiic', 'migrate', '--interactive=1','--module=d2company'),
                    array('yiic', 'migrate', '--interactive=1','--module=core_main'),
                    array('yiic', 'migrate', '--interactive=1','--module=yeeki'),
                    array('yiic', 'migrate', '--interactive=1','--module=d1files'),
            ),            
        ),    
//        'composer.callbacks' => array(
//            // command and args for Yii command runner
//            'yiisoft/yii-install'              => $webappCommand,
//            'phundament/p3bootstrap-install'   => array('yiic', 'p3bootstrap'),
//            'phundament/backend-theme-install' => array('yiic', 'backend-theme'),
//            'phundament/p3media-install'       => array('yiic', 'p3media'),
//            'crisu83/yii-less-install'         => array('yiic', 'less-setup'),
//            'post-install'                     => array(
//                'yiic',
//                'p3echo',
//                "To complete the installation process, please run\n\n    app/yiic migrate\n\nfrom your project directory."
//            ),
//            'post-update'                      => array(
//                'yiic',
//                'p3echo',
//                "To complete the update process, please run:\n\n    app/yiic migrate\n\nfrom your project directory."
//            ),
//            #'post-install'                     => array(
//            #                                          array('yiic', 'migrate', '--interactive=1'),
//            #                                          array('yiic', 'foo', '--bar=1'),
//            #                                      ),
//            #'post-update'                      => array('yiic', 'migrate', '--interactive=1'),
//        ),
    ))
);

// return merged config, from highest to lowest precedence: console-local, console
if (is_file($localConsoleConfigFile)) {
    return CMap::mergeArray($consoleConfig, require($localConsoleConfigFile));
} else {
    return $consoleConfig;
}