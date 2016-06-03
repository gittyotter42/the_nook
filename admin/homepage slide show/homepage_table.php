<?php
//establishing connection
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
   
//creating table
   $sql =<<<EOF
      CREATE TABLE HOMEPAGE_SLIDESHOW
     (ID             INTEGER  PRIMARY KEY,
      TITLE          TEXT     NOT NULL,
      PHOTO          TEXT     NOT NULL,
      STATUS         INTEGER  NOT NULL);
EOF;

   $ret = $db->exec($sql);
   if(!$ret){
      echo $db->lastErrorMsg();
   } else {
      echo "Table created successfully\n";
   }
   $db->close();

?>