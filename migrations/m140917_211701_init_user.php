<?php
class m140917_211701_init_user extends CDbMigration {

	public function up() {
        
        $this->insert(Yii::app()->getModule('user')->tableUsers, array(
            "id" => "1",
            "username" => 'd2app_admin',
            "password" => Yii::app()->getModule('user')->encrypting('carnikava'),
            "email" => 'admin@demo.com',
            "activkey" => Yii::app()->getModule('user')->encrypting(microtime()),
            "create_at" => time(),
            "lastvisit_at" => "0",
            "superuser" => "1",
            "status" => "1",
        ));        
        
        $profile_table = Yii::app()->getModule('user')->tableProfiles;
        
        $sql = " 
            ALTER TABLE `{$profile_table}` 
                ADD COLUMN `type` tinyint(4)   NOT NULL after `last_name` , 
                ADD COLUMN `ccmp_id` int(10)   NOT NULL DEFAULT 0 after `type` , 
                ADD COLUMN `sys_ccmp_id` int(10) unsigned   NULL after `ccmp_id` , 
                ADD COLUMN `phone` varchar(15)  COLLATE utf8_general_ci NULL after `sys_ccmp_id` , 
                ADD COLUMN `email` varchar(100)  COLLATE utf8_general_ci NULL after `phone` , 
                ADD COLUMN `person_id` smallint(5) unsigned   NULL after `email` 
                ;                
                ";
        $this->execute($sql);    

        $pf_table = Yii::app()->getModule('user')->tableProfileFields;
        $sql = " 
            insert  into `{$pf_table}`
                (`id`,`varname`,`title`,`field_type`,`field_size`,`field_size_min`,`required`,`match`,`range`,`error_message`,`other_validator`,`default`,`widget`,`widgetparams`,`position`,`visible`) 
                values 
                (1,'first_name','First Name','VARCHAR',255,3,2,'','','Incorrect First Name (length between 3 and 50 characters).','','','','',1,3),
                (2,'last_name','Last Name','VARCHAR',255,3,2,'','','Incorrect Last Name (length between 3 and 50 characters).','','','','',2,3),
                (3,'type','Type','tinyint',2,2,2,'','','',NULL,'','',NULL,3,3),
                (6,'phone','Phone','VARCHAR',15,7,0,'','','','','','','',0,3),
                (7,'email','Email','VARCHAR',100,5,0,'#^[_a-z0-9-]+(\\.[_a-z0-9-]+)*@[a-z0-9-]+(\\.[a-z0-9-]+)*(\\.[a-z]{2,4})$#','','incorrect email','','','','',0,3),
                (8,'ccmp_id','company','INTEGER',10,0,0,'','','','','0','','',0,0),(9,'sys_ccmp_id','company','INTEGER',10,0,0,'','','','','0','','',0,0),
                (10,'person_id','Person','smallint',5,0,0,'','','',NULL,'0','',NULL,0,0)
                ;

                ";
        $this->execute($sql);            
        
        $sql = " 
            insert into `{$profile_table}` 
                (`user_id`, `first_name`, `last_name`, `type`, `ccmp_id`, `sys_ccmp_id`, `phone`, `email`, `person_id`) 
                values
                ('1','d2app','admin','0','0','1',NULL,NULL,'1');
                ";
        $this->execute($sql);            

        
        $sql = " 
            INSERT INTO pprs_person (
              pprs_id,
              pprs_first_name,
              pprs_second_name
            ) 
            VALUES
              (
                1,
                'd2app',
                'admin'
              ) ;
                ";
        $this->execute($sql);            

        $sql = " 
                insert into `ccmp_company` 
                (   `ccmp_id`, `ccmp_name`, `ccmp_ccnt_id`, `ccmp_registrtion_no`, 
                    `ccmp_vat_registrtion_no`, `ccmp_registration_address`, `ccmp_official_ccit_id`, 
                    `ccmp_official_address`, `ccmp_official_zip_code`, `ccmp_office_ccit_id`, 
                    `ccmp_office_address`, `ccmp_office_zip_code`, `ccmp_statuss`, `ccmp_description`, 
                    `ccmp_office_phone`, `ccmp_office_email`, `ccmp_agreement_nr`, `ccmp_agreement_date`, 
                    `ccmp_sys_ccmp_id`
                    ) 
                values
                (   '1','SysCompany1',null,null,
                    NULL,null,NULL,
                    NULL,NULL,null,
                    NULL,NULL,'ACTIVE',NULL,
                    '','ccmp1@example.com',NULL,NULL,NULL); 

                ";
        $this->execute($sql);            

        $sql = " 
            insert into `ccgr_group` (`ccgr_id`, `ccgr_name`, `ccgr_notes`, `ccgr_hide`) values('1','SysComapny',NULL,'0');
            insert into `ccgr_group` (`ccgr_id`, `ccgr_name`, `ccgr_notes`, `ccgr_hide`) values('3','Customer',NULL,'0');
            insert into `ccxg_company_x_group` (`ccxg_ccmp_id`, `ccxg_ccgr_id`) values ('1','1');
            insert into `ccxg_company_x_group` (`ccxg_ccmp_id`, `ccxg_ccgr_id`) values ('1','3');

                ";
        $this->execute($sql);            

        $sql = " 
            insert into `ccuc_user_company` 
            (`ccuc_ccmp_id`, `ccuc_person_id`, `ccuc_status`) 
            values
            ('1','1','SYS');

                ";
        $this->execute($sql);            

        $sql = " 
            INSERT INTO `cccd_custom_data` (
              `cccd_ccmp_id`,
              `type`,
              `agreement_number`,
              `agreement_date`,
              `payment_terms`,
              `base_fcrn_id`
            ) 
            VALUES
              (
                '1',
                '0',
                '',
                '0000-00-00',
                '0',
                '1'
              ) ;


                ";
        $this->execute($sql);            

        $sql = " 
            insert into `authitem` (`name`, `type`, `description`, `bizrule`, `data`) values('Administrator','2','Administrators',NULL,'N;');
            INSERT INTO `authassignment` (`itemname`, `userid`) VALUES ('Administrator', '1'); 
            INSERT INTO `authitem` (`name`, `type`, `description`, `bizrule`, `data`) VALUES('SysAdmin','2','SysAdmin',NULL,'N;');
            INSERT INTO `authassignment` (`itemname`, `userid`) VALUES ('SysAdmin', '1');     
            INSERT INTO `authitem` (`name`, `type`, `description`, `bizrule`, `data`) VALUES('UserAdmin','2','UserAdmin',NULL,'N;');
            INSERT INTO `authassignment` (`itemname`, `userid`) VALUES ('UserAdmin', '1');        
  
            insert into `authitemchild` (`parent`, `child`) values('Administrator','Company.fullcontrol');
            insert into `authitemchild` (`parent`, `child`) values('Administrator','Company.*');
            
            INSERT INTO `authitemchild` VALUES('Administrator', 'D2person.PprsPerson.Create');
            INSERT INTO `authitemchild` VALUES('Administrator', 'D2person.PprsPerson.Update');
            INSERT INTO `authitemchild` VALUES('Administrator', 'D2person.PprsPerson.Delete');
            INSERT INTO `authitemchild` VALUES('Administrator', 'D2person.PprsPerson.View'); 


            ";
        $this->execute($sql);            
        
        
	}

	public function down() {
        
        
	}

	/**
	 * Transaction-safe migration up, be aware that MySQL has autocommit after every DDL statement.
	 * Uses $this->up to not duplicate code.
	 */
	public function safeUp() {
		$this->up();
	}
	
	/**
	 * Transaction-safe migration down, be aware that MySQL has autocommit after every DDL statement.
	 * Uses $this->down to not duplicate code.
	 */
	public function safeDown() {
		$this->down();
	}
}
?>