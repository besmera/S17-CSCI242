<?php

class DatabaseManager {
     private $db = NULL;

     public function __construct() {
          $conn = "My Connection";
          //imagine $conn contains a real db connection
          $this->db = $conn;
      }

      public function getDb()
      {
           return $this->db;
      }

      public function query($query) {
          //I would normally do something with db
          return $query;
      }

}

$db = new DatabaseManager();
echo $db->getDb();
echo $db->query("Some SQL");

