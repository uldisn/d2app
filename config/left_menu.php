<?php

return array(
        array(
            'label' => Yii::t('dbr_app', 'System'),
            'icon' => 'icon-cogs',            
            'visible' => Yii::app()->user->checkAccess('SysAdmin'),
            'submenuOptions' => array('class' => 'multi-level'),
            'items' => array(
                array(
                    'label' => Yii::t('dbr_app', 'Access managment'),
                    'url' => array('/rights'),
                    'visible' => Yii::app()->user->checkAccess('SysAdmin'),
                ),
                array(
                    'label' => Yii::t('dbr_app', 'Company Custom Fields'),
                    'url' => array('/d2company/cccfCustomField'),
                    'visible' => Yii::app()->user->checkAccess('SysAdmin'),
                ),                
            ),
        ),
        array(
            'label' => Yii::t('dbr_app', 'Administration'),
            'icon' => 'icon-cogs',            
            'visible' => Yii::app()->user->checkAccess('Administrator'),
            'submenuOptions' => array('class' => 'multi-level'),
            'items' => array(

                array(
                    'label' => Yii::t('D2personModule.model', 'Persons Document Types'),
                    'url' => array('/d2person/pdcmDocumentType'),
                    'visible' => Yii::app()->user->checkAccess('Administrator'),
                ),
                array(
                    'label' => Yii::t('D2personModule.model', 'Person Types'),
                    'url' => array('/d2person/ptypType'),
                    'visible' => Yii::app()->user->checkAccess('Administrator'),
                ),
                array(
                    'label' => Yii::t('D2personModule.model', 'Contact Types'),
                    'url' => array('/d2person/pcntContactType'),
                    'visible' => Yii::app()->user->checkAccess('Administrator'),
                ),
                array(
                    'label' => Yii::t('dbr_app', 'Positions'),
                    'url' => array('/d2company/cucpUserCompanyPosition'),
                    'visible' => Yii::app()->user->checkAccess('Administrator'),
                ),                
                array(
                    'label' => Yii::t('dbr_app', 'Users'),
                    'url' => array('/user/admin'),
                    'visible' => Yii::app()->user->checkAccess('UserAdmin'),
                ),
            )
        ),
        array(
            'label' => Yii::t('dbr_app', 'Office'),
            'visible' => Yii::app()->user->checkAccess('Administrator'),
            'icon' => 'building',
            'items' => array(
                array(
                    'label' => Yii::t('dbr_app', 'Companies'),
                    'url' => array('/d2company/ccmpCompany'),
                    'visible' => Yii::app()->user->checkAccess('Administrator'),
                ),
                array(
                    'label' => Yii::t('dbr_app', 'Persons'),
                    'url' => array('/d2person/pprsPerson'),
                    'visible' => Yii::app()->user->checkAccess('Administrator'),
                ),
                array(
                    'label' => Yii::t('dbr_app', 'Countries'),
                    'url' => array('/d2company/ccntCountry'),
                    'visible' => Yii::app()->user->checkAccess('Administrator'),
                ),
                array(
                    'label' => Yii::t('dbr_app', 'Wiki'),
                    'url' => array('/wiki/default/pageIndex'),
                    'visible' => Yii::app()->user->checkAccess('WikiEditor'),
                ),
            )
        ),
//        array(
//            'label' => Yii::t('dbr_app', 'Reports'),
//            'icon'=>'book',
//            'visible' => Yii::app()->user->checkAccess('Reports'),
//            'items' => array(
//                array(
//                    'label' => Yii::t('dbr_app', 'Dimensions'),
//                    'url' => array('/d2fixr/Report'),
//                    'visible' => Yii::app()->user->checkAccess('Reports'),
//                ),
//
//            )
//        ),
    );
