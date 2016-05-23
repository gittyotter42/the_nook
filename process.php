<?php
    
var_dump($_GET); 
$sql = "INSERT INTO EMAIL (ID, NAME,EMAIL) VALUES (NULL, '".$_GET["name"]."', '".$_GET["email"]."');";

echo $sql; 

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

   $ret = $db->exec($sql);
   if(!$ret){
      echo $db->lastErrorMsg();
   } else {
      echo "Records created successfully\n";
   }
   $db->close();

function drop_table($text){
   $drop = "DROP TABLE ".$text.";";
   
   $ret = $db->exec($drop);
   if(!$ret){
      echo $db->lastErrorMsg();
   } else {
      echo "Records created successfully\n";
   }
}



?>