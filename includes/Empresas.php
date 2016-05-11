<?php
    class Empresa{
        
        private $nombre="";
        private $email="";
        private $direction="";
        private $telefono="";
        private $localizacion="";
        private $cpostal="";
        private $poblacion ="";
        private $contacto ="";
        function __construct(
            $nombre,
            $email,
            $direction,
            $telefono,
            $localizacion,
            $cpostal,
            $poblacion,
            $contacto
        ){
            $this->nombre=$nombre;
            
            $this->email=$email;
            
            $this->direction=$direction;
            
            $this->telefono=$telefono;
            
            $this->localizacion=$localizacion;
            
            $this->cpostal=$cpostal;
            
            $this->poblacion=$poblacion;
            
            $this->contacto=$contacto;
        }
        public function getNombre(){
            return $this->nombre;
        }
        public function getEmail(){
            return $this->email;
        }
        public function getDirection(){
            return $this->direction;
            
        }
        public function getTelefono(){
            return $this->telefono;
        }
        public function getLocalizacion(){
            return $this->localizacion;
            
        }
        public function getCpostal(){
            return $this->cpostal;
        }
        public function getPoblacion(){
            return $this->poblacion;
        }
        public function getContacto(){
            return $this->contacto;
        }
        
    }
?>