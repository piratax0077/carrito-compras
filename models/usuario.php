<?php

class Usuario{
    private $id;
    private $nombre;
    private $apellidos;
    private $email;
    private $password;
    private $imagen;
    private $db;
    
    public function __construct() {
        $this->db = Database::connect();
    }
    
    public function getId() {
        return $this->id;
    }

    public function getNombre() {
        return $this->nombre;
    }

    public function getApellidos() {
        return $this->db->real_escape_string($this->apellidos);
    }

    public function getEmail() {
        return $this->db->real_escape_string($this->email);
    }

    public function getPassword() {
        return password_hash($this->db->real_escape_string($this->password),PASSWORD_BCRYPT,['cost' => 4]);
    }

    public function getImagen() {
        return $this->imagen;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function setNombre($nombre) {
        $this->nombre = $this->db->real_escape_string($nombre);
    }

    public function setApellidos($apellidos) {
        $this->apellidos = $this->db->real_escape_string($apellidos);
    }

    public function setEmail($email) {
        $this->email = $this->db->real_escape_string($email);
    }

    public function setPassword($password) {
        $this->password = $password;
    }

    public function setImagen($imagen) {
        $this->imagen = $imagen;
    }

    public function save(){
        $sql = "INSERT INTO usuarios VALUES (null,'{$this->getNombre()}','{$this->getApellidos()}','{$this->getEmail()}','{$this->getPassword()}','user',null);";
        $save = $this->db->query($sql);
        $result = false;
        if($save){
            $result = true;
        }
        return $result;
    }
    
    public function login(){
        $result=false;
        $email = $this->email;
        $password = $this->password;
        //Comprobar si existe el usuario
        $sql = "SELECT * FROM usuarios WHERE email = '$email'";
        $login = $this->db->query($sql);
        
        if($login && $login->num_rows == 1){
            $usuario_identificado = $login->fetch_object();
            
            //Verificar la password
            $verify = password_verify($password,$usuario_identificado->password);
            
            if($verify){
                $result = $usuario_identificado;
            }
        }
        return $result;
        
    }
}
