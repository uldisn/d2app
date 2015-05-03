<?php

class m150503_095904_add_role_audittrail extends EDbMigration
{
	public function up()
	{
        $sql = " 
            insert into `authitem` 
            (`name`, `type`, `description`, `bizrule`, `data`) 
            values
            ('audittrail','2','Audittrail',NULL,'N;');
            INSERT INTO `authassignment` (`itemname`, `userid`) VALUES ('audittrail', '1'); 
            ";
        $this->execute($sql);            
        
	}

	public function down()
	{
		echo "m150503_095904_add_role_audittrail does not support migration down.\n";
		return false;
	}

	/*
	// Use safeUp/safeDown to do migration with transaction
	public function safeUp()
	{
	}

	public function safeDown()
	{
	}
	*/
}
