<?php

class Conexion{

  private $server="";
  private $user="";
  private $pass="";
  private $db="";
  public $conector;

  function __construct($host,$user,$pass,$db){
     $this->server=$host;
     $this->user=$user;
     $this->pass=$pass;
     $this->db=$db;
   }

  function conectar(){
    $conectorTemp=new mysqli($this->server, $this->user, $this->pass, $this->db);
    if ($conectorTemp->connect_errno){
      $this->conector=false;
      echo "Ha habido un error";
    }else{
      $this->conector=$conectorTemp;
    }
  }

  function buscarAll(){
    $busqueda= $this->conector->query("SELECT * FROM '$this->db'");
    return $busqueda;
  }

  function buscar($str){
    $busqueda=$this->conector->query($str);
    return $busqueda;

    }

    function getConector(){
      return $this->conector;
    }

      public function getServer(){
          return $this->server;
      }

      public function setServer($server){
          $this->server = $server;
          return $this;
      }

      public function getUser(){
          return $this->user;
      }

      public function setUser($user){
          $this->user = $user;
          return $this;
      }

      public function getPass(){
          return $this->pass;
      }

      public function setPass($pass){
          $this->pass = $pass;
          return $this;
      }

      public function getDb(){
          return $this->db;
      }

      public function setDb($db){
          $this->db = $db;
          return $this;
      }

  }






?>
