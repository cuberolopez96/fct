<?php
    require_once 'ConnectDB.php';
    require_once 'Empresas.php';
    class ModelEmpresas{
        private $conexion ="";
        public function __construct(){
            $this->conexion = new ConnectDB();
        }
        public function addEmpresa(Empresa $empresa){
            $this->conexion->query("INSERT INTO empresas(`nombre`,`email`,`direccion`,`telefono`,`Localizacion`,`cpostal`,`poblacion`,`contacto`) VALUES(:nombre,:email,:direccion,:telefono,:localizacion,:cpostal,:poblacion,:contacto)",array(
                ':nombre'=>$empresa->getNombre(),
                ':email'=>$empresa->getEmail(),
                ':direccion'
                =>$empresa->getDirection(),
                ':telefono'=>$empresa->getTelefono(),
                ':localizacion'=>$empresa->getLocalizacion(),
                ':cpostal'=>$empresa->getCpostal(),
                ':poblacion'=>$empresa->getPoblacion(),
                ':contacto'=>$empresa->getContacto(),
            ));
        }
        public function mostrar(){
            return $this->conexion->query("SELECT * FROM empresas");
        }
        public function mostrarPorId($id){
            return $this->conexion->query("SELECT * FROM empresas WHERE id=:id",array(
            ':id'=>$id,
            ))[0];
        }
        public function editEmpresa($id,$empresa){
            $this->conexion->query("UPDATE empresas SET `nombre`=:nombre,`email`=:email,`telefono`=:telf,`direccion`=:direccion,`Localizacion`=:localizacion, `cpostal`=:cpostal,`poblacion`=:poblacion,`contacto`=:contacto WHERE `id`=:id",array(
                ':id'=>$id,
                ':nombre'=>$empresa->getNombre(),
                ':email'=>$empresa->getEmail(),
                ':telf'=>$empresa->getTelefono(),
                ':direccion'=>$empresa->getDirection(),
                ':localizacion'=>$empresa->getLocalizacion(),
                ':cpostal'=>$empresa->getCpostal(),
                ':poblacion'=>$empresa->getPoblacion(),
                ':contacto'=>$empresa->getContacto(), 
            ));
        }
    }
?>