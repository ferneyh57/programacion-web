<?php

    if(isset($_POST['Identificacion']) && isset($_POST['pass'])  && isset($_POST['tipousuario']) && 
            !empty($_POST['Identificacion']) && !empty($_POST['pass'])  && !empty($_POST['tipousuario']) ){
        
        require ("MySQL.php");
        $mysql = new MySQL;
        $usuario = $_POST['Identificacion'];
        $contra = md5($_POST['pass']);
        $tipousuario =  $_POST['tipousuario'];
        $mysql->conectar();
        
        if($tipousuario == 1 ){
           $usuarios= $mysql->efectuarConsulta("select est_nombres from estudiantes where  est_doc_iden = ".$usuario." and est_password = '".$contra."'"); 
          

        }
        else if($tipousuario == 2 ){
            $usuarios= $mysql->efectuarConsulta("select ven_nombres from vendedores where  ven_doc_iden = ".$usuario." and ven_password = '".$contra."'"); 
          
          }
          else 
         {
            $usuarios= $mysql->efectuarConsulta("select admin_id from admin where  admin_usser = ".$usuario." and admin_pass = '".$contra."'"); 
          
          }
     
       
    }   
    $mysql->desconectar();
    if (mysqli_num_rows($usuarios) > 0){  
        header('Location: index.html');   

 
                $mysql->conectar();
   
                session_start();
                $_SESSION['nombre'] ;
                $_SESSION['tipousuario'] ;
   
                }



              
   
  
        

    

  else
  {
    
    sleep(2);
    header('Location: page-login.html');

   
  }

 
