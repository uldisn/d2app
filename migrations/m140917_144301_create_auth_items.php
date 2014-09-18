<?php
class m140917_144301_create_auth_items extends CDbMigration {

	public function up() {
        
        $sql = "
                    create table AuthItem
                    (
                       name varchar(64) not null,
                       type integer not null,
                       description text,
                       bizrule text,
                       data text,
                       primary key (name)
                    );

                    create table AuthItemChild
                    (
                       parent varchar(64) not null,
                       child varchar(64) not null,
                       primary key (parent,child),
                       foreign key (parent) references AuthItem (name) on delete cascade on update cascade,
                       foreign key (child) references AuthItem (name) on delete cascade on update cascade
                    );

                    create table AuthAssignment
                    (
                       itemname varchar(64) not null,
                       userid varchar(64) not null,
                       bizrule text,
                       data text,
                       primary key (itemname,userid),
                       foreign key (itemname) references AuthItem (name) on delete cascade on update cascade
                    );

                    create table Rights
                    (
                        itemname varchar(64) not null,
                        type integer not null,
                        weight integer not null,
                        primary key (itemname),
                        foreign key (itemname) references AuthItem (name) on delete cascade on update cascade
                    );
                
                   ";
         $this->execute($sql);
        
	}

	public function down() {
        
        $sql = "    
                    drop table if exists AuthItem;
                    drop table if exists AuthItemChild;
                    drop table if exists AuthAssignment;
                    drop table if exists Rights;
                    ";
        $this->execute($sql);
        
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