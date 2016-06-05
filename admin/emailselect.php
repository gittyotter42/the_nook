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

   $sql = "SELECT * from EMAIL";


   $ret = $db->query($sql);
   while($row = $ret->fetchArray(SQLITE3_ASSOC) ){
      echo "ID = ". $row['ID'] . "<br>\n";
      echo "NAME = ". $row['NAME'] ."\n";
      echo "EMAIL = ". $row['EMAIL'] ."\n";  
      echo "MESSAGE = ". $row['MESSAGE'] ."\n";
   }
   echo "Operation done successfully\n";
   $db->close();
?>