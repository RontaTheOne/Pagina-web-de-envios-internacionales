<?php
  
  class conexion
  {
      public static function con()
      {
          try
          {
              $conexion =mysqli_connect("localhost","root","","CLICK_SHOP");//servidor,usuario,clave,nom_bd
              return $conexion;
          }//fin try
          catch(Exception $e)
          {
              echo"ERROR EN LA CONEXION DE BASE DE DATOS" .$e; 

          }//
      }//fin funcion con
  }//fin clase conexion
  
  /*prueba conexion a bd
  $prueba= new conexion();
  if ($prueba->con()) 
  {
      echo"CONEXION A LA BASE DE DATOS";
  }
  else
  {
      echo"NO HAY CONEXION A LA BASE DE DATOS";
  }*/
 ?>