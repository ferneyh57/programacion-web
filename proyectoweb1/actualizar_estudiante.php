<?php
//condicion para comprobar si los campos están declarados anteriormente y si no estan vacíos
if(isset($_POST['enviar']) && !empty($_POST['nombre']) &&!empty($_POST['apellido']) && !empty($_POST['estadocivil']) && !empty($_POST['credito']) 
        && !empty($_POST['programa']) && !empty($_POST['clave'])){
    
    require_once 'MySQL.php';
    
 
    
   
   
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $estadoc = $_POST['estadocivil'];
    $credito = $_POST['credito'];
    $programa = $_POST['programa'];
    $contrasena = md5($_POST['clave']);
  
   

    $mysql = new MySQL;
   
    $mysql->conectar();
    
   
    $insertar= $mysql->efectuarConsulta("update  tiendacotecnova.estudiantes set
     est_nombres='" .$nombre. "', est_apellidos='" .$apellido. "', est_total_credito='" .$credito. "', est_password='" .$contrasena. "',  programa_id='" .$programa. "', estado_civil_id='" .$estadoc. "' 
     where est_doc_iden='" .$id. "'
    ");
    
    echo "update  tiendacotecnova.estudiantes set
    est_nombres='" .$nombre. "', est_apellidos='" .$apellido. "', est_total_credito='" .$credito. "', est_password='" .$contrasena. "',  programa_id='" .$programa. "', estado_civil_id='" .$estadoc. "' 
    where est_doc_iden='" .$id. "'
   ";
   


if($insertar==true){
    header("Location: index.html");
 } 
 else
  {
    header("Location: formulario_actualizar.php");
 }
}
else{
    echo "<script type=\"text/javascript\">alert(\"Datos Incorrectos\");
    location.href = 'formulario_actualizar.php';
    </script>"; 
    
    
}
 ?>