<?php
//condicion para comprobar si los campos están declarados anteriormente y si no estan vacíos
/*if(isset($_POST['enviar']) && !empty($_POST['1']) && !empty($_POST['2']) && 
        !empty($_POST['3']) &&!empty($_POST['4']) && !empty($_POST['5']) && !empty($_POST['6']) 
        && !empty($_POST['7']) && !empty($_POST['8'])){
    */
    require_once 'MySQL.php';
    
 
    
    $tdoc= $_POST['tipodocumento'];
    $ndoc = $_POST['2'];
    $nombre = $_POST['3'];
    $apellido = $_POST['4'];
    $estadoc = $_POST['estadocivil'];
    $credito = $_POST['6'];
    $programa = $_POST['programa'];
    $contrasena = md5($_POST['8']);
   

    $mysql = new MySQL;
   
    $mysql->conectar();
    
   
    $insertar= $mysql->efectuarConsulta("insert into tiendacotecnova.estudiantes
    ( est_doc_iden, est_nombres, est_apellidos, est_total_credito, est_password, tipo_documento_id, programa_id, estado_civil_id) 
    VALUES(   
    '".$ndoc. "', '" .$nombre. "','" .$apellido. "', '" .$credito. "','" .$contrasena. "','" .$tdoc. "', '" .$programa. "','" .$estadoc. "' )"); 
echo  "insert into tiendacotecnova.estudiantes
( est_doc_iden, est_nombres, est_apellidos, est_total_credito, est_password, tipo_documento_id, programa_id, estado_civil_id) 
VALUES(   
'" .$tdoc. "','".$ndoc. "', '" .$nombre. "','" .$apellido. "', '" .$credito. "','" .$contrasena. "','" .$estadoc. "', '" .$programa. "' )";
   


if($insertar==true){
    header("Location: index.html");
 } 
 else
  {
    header("Location: crear_estudiantes.php");
 }
 
 ?>