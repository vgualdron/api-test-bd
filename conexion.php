<?php 
// session_start();
error_reporting(E_ALL ^ E_NOTICE);
date_default_timezone_set('America/Bogota');
 class Conexion extends PDO { 
   private $tipo_de_base = 'mysql';
   private $host = '127.0.0.1';
   private $nombre_de_base = 'novum_bd';
   private $usuario = 'admin_novum';
   private $contrasena = 'i~45tDS?MNf?';
   private  $options = array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8');
   public function __construct() {
      try{
         parent::__construct($this->tipo_de_base.':host='.$this->host.';dbname='.$this->nombre_de_base, $this->usuario, $this->contrasena, $this->options);
      }catch(PDOException $e){
         echo 'Ha surgido un error y no se puede conectar a la base de datos. Detalle: ' . $e->getMessage();
         exit;
      }
   }
 } 
?>