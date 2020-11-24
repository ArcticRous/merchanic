<?php
require_once 'models/usuario.php';

class usuarioController{


    public function login(){
       echo'<h1>hola</h1>';

        if(isset($_POST)){
            $usuario = new Usuario();
            $usuario->setCorreo($_POST['correo']);
            $usuario->setPass($_POST['pass']);   

            $identity= $usuario->login();   
            
           if($identity && is_object($identity)){
                $_SESSION['identity'] = $identity;
                echo"";
               
            }else{
                $_SESSION['error login'] = 'identificacion fallida!!';
            }
            

        }
        header("Location: ".base_url);
    }
    

    
}
