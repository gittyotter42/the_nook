<?php
//getting info from user input and inserting
var_dump($_GET); 
$sql = "INSERT INTO HOMEPAGE_SLIDESHOW (ID, TITLE, PHOTO, STATUS) VALUES (NULL, '".$_GET["title"]."', '".$_GET["photo"]."', '".$_GET["status"]."');";

echo $sql; 

 class MyDB extends SQLite3
   {
      function __construct()
      {
         $this->open('test.db');
      }
   }
//opening database
   $db = new MyDB();
   if(!$db){
      echo $db->lastErrorMsg();
   } else {
      echo "Opened database successfully\n";
   }
//creating records and closing database
   $ret = $db->exec($sql);
   if(!$ret){
      echo $db->lastErrorMsg();
   } else {
      echo "Records created successfully\n";
   }
   $db->close();
?>