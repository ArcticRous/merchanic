<?php
class Usuario{

    private $id;
    private $nomusu;
    private $appusu;
    private $apmusu;
    private $pass;
    private $correo;
    private $fecha;
    private $sex_id;
    private $est_id;
    private $dir_id;
    private $imagen;

    public function __construct(){
        $this->db = database::connect();
        }
    function getId(){
        return $this->id;
        }
    function getNomusu(){
        return $this->nomusu;
        }
    function getAppusu(){
        return $this->appusu;
        }
    function getApmusu(){
        return $this->apmusu;
        }
    function getPass(){
        return $this->pass;
        }
    function getCorreo(){
        return $this->correo;
        }
    function getFecha(){
        return $this->fecha;
        }
    function getSex_id(){
        return $this->sex_id;
        }
    function getEst_id(){
        return $this->est_id;
        }
    function getDir_id(){
        return $this->dir_id;
        }
    function getImagen(){
            return $this->imagen;
        }
    function setId($id){
        $this->id = $id;
        }
    function setNomusu($nomusu){
        $this->nomusu = $this->db->real_escape_string($nomusu);
        }
    function setAppusu($appusu){
        $this->appusu = $this->db->real_escape_string($appusu);
        }
    function setApmusu($apmusu){
        $this->apmusu = $this->db->real_escape_string($apmusu);
        }
    function setPass($pass){
            $this->pass= $pass;
       }
    function setCorreo($correo){
            $this->correo = $this->db->real_escape_string($correo);       
        }
    function setImagen($imagen){
            $this->imagen = $imagen;
       } 
       
    public function login(){
        $result = false;
        $correo =$this->correo;  
        $pass =$this->pass;

        $sql = "SELECT * FROM usuarios WHERE correo ='$correo'";
        $login = $this->db->query($sql);

        if($login && $login->num_rows == 1){
            $usuario= $login->fetch_object();

            $verify = password_verify($pass, $usuario->pass);
             
            if($verify){
                $result = $usuario;
            }
        }
        return $result ;
       
    }   
    
}