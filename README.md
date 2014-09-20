Savākts viss, lai uzstādītu jaunu aplikāciju

Sagatavošana
===========
* izveido aap direktriju zem vendor/uldisn. Nosaukums: app_[projekts]
* iekopē šo repositoriju šajādirektorijā (neklonē ar Git)
* Izveido projekta DB. ([project]_01) 
* config/main-local.php
 * saliek connnection datus
 * loging direktoriju: components=>log=>routes(class=CFileLogRoute;logPath='...')

Datubāze
===========
Migrācija (yiic migrate) jālaiž pa sekojošiem soļiem, atkomentējot config/console.php attiecīgo rindu:

* audittrail
* core_init
* yii-user
* d2files
* d2person
* d2company
* core_main - izveido administratoru "d2app_admin"
* yeeki
* d1files

WWW
===========
* Jaizveido www direktorijs un index.php ceļš janorada un config/main.php.
* jānokonfigurē apache
* palaiž web pārlūku. Ir izveidots noklusētais admins d2app_admin/carnikava


Jāuzlabo
===========
Composeri ir opcija aplikācijas izvedei. Varētu arī iekļaut visu migraciju


