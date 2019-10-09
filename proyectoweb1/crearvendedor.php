<?php
//condicion para comprobar si los campos están declarados anteriormente y si no estan vacíos
/*if(isset($_POST['enviar']) && !empty($_POST['1']) && !empty($_POST['2']) && 
        !empty($_POST['3']) &&!empty($_POST['4']) && !empty($_POST['5']) && !empty($_POST['6']) 
        && !empty($_POST['7']) && !empty($_POST['8'])){
    */
    require_once 'MySQL.php';
    
 
    
    $tdoc= $_POST['tipodocumento'];
    $ndoc = $_POST['identificacionvendedor'];
    $nombre = $_POST['nombrevendedor'];
    $apellido = $_POST['apellidovendedor'];
    $estadoc = $_POST['estadocivil'];
    $contrasena = md5($_POST['clavevendedor']);
   

    $mysql = new MySQL;
   
    $mysql->conectar();
    
   
    $insertar= $mysql->efectuarConsulta("insert into tiendacotecnova.vendedores ( ven_doc_iden, ven_nombres, ven_apellidos, ven_password, estado_civil_id, tipo_documento_id) VALUES(   
    '".$ndoc. "', '" .$nombre. "','" .$apellido. "','" .$contrasena. "','" .$estadoc. "','" .$tdoc. "')"); 



echo  "insert into tiendacotecnova.vendedores
    ( ven_doc_iden, ven_nombres, ven_apellidos,  ven_password, estado_civil_id, tipo_documento_id ) 
    VALUES(    
    '".$ndoc. "', '" .$nombre. "','" .$apellido. "','" .$contrasena. "','" .$estadoc. "','" .$tdoc. "')"; 

   


if($insertar==true){
    header("Location: index.html");
 } 
 else
  {
    header("Location: crear_vendedores.php");
 }
 
 ?>