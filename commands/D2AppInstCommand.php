<?php

/**
 * Class file.
 *
 * @author Uldis Nelsons <uldis@weberp.lv>
 * @link http://www.weberp.lv/
 */

/**
 * Interactive Command to create main-local.php with db name, username and password
 *
 *
 * @author Uldis Nelsons <uldis@weberp.lv>
 * @package d2app.command
 */
class D2AppInstCommand extends CConsoleCommand {

    public function getHelp() {
        echo <<<EOS
Usage: yiic D2AppInst

Create config/main_local.php from main-local_template.php with updated DB name, user and password

EOS;
    }

    public function run($args) {

        if (!self::confirm('Vai uzstādīsiet DB parametrus')) {
            return true;
        }

        $db_name = self::prompt(' DB Name:');
        $db_user = self::prompt(' User Name:');
        $db_password = self::prompt(' Password:');

        $template_path = Yii::getPathOfAlias('application.config') . '/main-local_template.php';
        $org_path = Yii::getPathOfAlias('application.config') . '/main-local.php';

        $template = file_get_contents($template_path);

        $template = str_replace('***db_name***', $db_name, $template);
        $template = str_replace('***user_name***', $db_user, $template);
        $template = str_replace('***user_password***', $db_password, $template);

        file_put_contents($org_path, $template);

        echo 'Settings saved' . PHP_EOL;
    }

}
