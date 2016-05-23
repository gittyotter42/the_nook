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
   
   
   $drop = "DROP TABLE EMAIL;";

   $ret = $db->exec($drop);
   if(!$ret){
      echo $db->lastErrorMsg();
   } else {
      echo "Table dropped successfully\n";
   }

   $sql =<<<EOF
      
      CREATE TABLE EMAIL
      (ID INTEGER PRIMARY KEY,
      NAME           TEXT    NOT NULL,
      EMAIL          TEXT    NOT NULL);
EOF;

   $ret = $db->exec($sql);
   if(!$ret){
      echo $db->lastErrorMsg();
   } else {
      echo "Table created successfully\n";
   }
   $db->close();
?>