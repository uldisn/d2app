<?php

class m151124_192651_yiisession extends EDbMigration {

    public function up() {
        $sql = " 
            CREATE TABLE YiiSession (
              id CHAR(32) PRIMARY KEY,
              expire INTEGER,
              DATA TEXT
            )
            ";
        $this->execute($sql);
    }

    public function down() {
        echo "m151124_192651_YiiSession does not support migration down.\n";
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
