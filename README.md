Composer
===========
* in root directory to composer.json add:

{
    "repositories":[
        {
            "type":"composer",
            "url":"http://packages.phundament.com"
        }
	]
}
 

* create directory vendor/uldisn/app_[projekt name] for example /uldisn/app_d2app
* Copy https://github.com/uldisn/d2app (no gitclone) to vendor/uldisn/app_[projekt name]
* start php composer.phar install
* start php composer.phar update
* if require some packages, load by composer: php composer.phar rewquire dbrisinajumi/audittrail dev-master 
* final directory structure:
```
  vendor
    clevertech
    composer
    cornernote
    crisu83
    dbrisinajumi
      audittrail
      d2company
      d2files
      d2person
      DbrLib
      gii-template-collection
      yeeki
    samdark
    schmunk42
    uldisn
      ace
      app_[project]
      yii-user
    vitalets
    yiiext
    yiisoft
  www
  logs
  upload
```
ACE Admin
=========

ACe Admin version ace-v1.2--bs-v2.3.x copy to vendor/responsiweb/ace-v1.2--bs-v2.3.x

Database
========
* Crreate MySql Database. ([project]_01) 
* vendor/uldisn/app_[projekt name]/config/main-local.php
 * set mysql connection detyails
 * set loging directory: components=>log=>routes(class=CFileLogRoute;logPath='...')

Migration
=========
migration (yiic migrate) start step by step uncomenting uldisn/d2app/config/console.php follow rows:

* audittrail
* core_init
* yii-user
* d2files
* d2person
* d2company
* core_main - izveido administratoru "d2app_admin"
* yeeki

WWW
===
* Create directrie www and in index.php path to /vendor/uldisn/d2app/config/main.php.
* config apache
* Open web apge. Default logon for admin: d2app_admin/carnikava




