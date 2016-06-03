<?php
   class MyDB extends SQLite3
   {
      function __construct()
      {
         $this->open('test.db');
      }
   }
   $db = new MyDB();
   if(!$db){
      echo $db->lastErrorMsg();
   } else {
      echo "Opened database successfully\n";
   }

   $sql =<<<EOF
      CREATE TABLE EVENTS
      (ID INT PRIMARY KEY                       NOT NULL,
      TITLE          TEXT                       NOT NULL,
      PHOTO          TEXT                       NOT NULL,
      START          yyyy-mm-dd hh:mm:ss        NOT NULL,
      END            yyyy-mm-dd hh:mm:ss        NOT NULL,
      DESCRIPTION    TEXT);
EOF;

   $ret = $db->exec($sql);
   if(!$ret){
      echo $db->lastErrorMsg();
   } else {
      echo "Table created successfully\n";
   }
   $db->close();
?>