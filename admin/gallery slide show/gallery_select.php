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

   $sql = "SELECT * from GALLERY_SLIDESHOW";


   $ret = $db->query($sql);
   while($row = $ret->fetchArray(SQLITE3_ASSOC) ){
      echo "ID = ". $row['ID'] . "<br>\n";
      echo "TITLE = ". $row['TITLE'] ."\n";
      echo "PHOTO = ". $row['PHOTO'] ."\n";  
      echo "STATUS = ". $row['STATUS'] ."\n";
   }
   echo "Operation done successfully\n";
   $db->close();
?>