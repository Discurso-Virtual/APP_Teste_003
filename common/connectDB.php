<?php
// Ficheiro de conexão ao servidor e base de dados para usar em todas as páginas a desenvolver / include_once 'connectDB.php'

Class Connection {
private  $ipServer="192.168.1.131";
private  $server = "mysql:host=localhost;dbname=teste";
private  $user = "root";
private  $pass = "1234";
private $options  = array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,);
protected $con;
 
            public function openConnection()
             {
               try
                 {
          $this->con = new PDO($this->server, $this->user,$this->pass,$this->options);
          return $this->con;
                  }
               catch (PDOException $e)
                 {
                     echo "There is some problem in connection: " . $e->getMessage();
                 }
             }
public function closeConnection() {
     $this->con = null;
  }
}
