<?php
//condicion para comprobar si los campos están declarados anteriormente y si no estan vacíos
/*if(isset($_POST['enviar']) && !empty($_POST['1']) && !empty($_POST['2']) && 
        !empty($_POST['3']) &&!empty($_POST['4']) && !empty($_POST['5']) && !empty($_POST['6']) 
        && !empty($_POST['7']) && !empty($_POST['8'])){
    */
    require_once 'MySQL.php';
    
 
    
   
   
    $nombre = $_POST['3'];
    $apellido = $_POST['4'];
    $estadoc = $_POST['estadocivil'];
    $credito = $_POST['6'];
    $programa = $_POST['programa'];
    $contrasena = md5($_POST['8']);
   

    $mysql = new MySQL;
   
    $mysql->conectar();
    
   
    $insertar= $mysql->efectuarConsulta("update  tiendacotecnova.estudiantes set
     est_nombres='" .$nombre. "', est_apellidos='" .$apellido. "', est_total_credito='" .$credito. "', est_password='" .$contrasena. "',  programa_id='" .$programa. "', estado_civil_id='" .$estadoc. "' 
     where est_doc_iden=1
    ");

   


if($insertar==true){
    header("Location: index.html");
 } 
 else
  {
    header("Location: formulario_actualizar.php");
 }
 
 ?>