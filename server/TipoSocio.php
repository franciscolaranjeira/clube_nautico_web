<?php 

    class TipoSocio {

        private $idTipoSocio;
        private $tipo;

        function __construct($tipo){
        }

        function setIDTipoSocio($idTipoSocio){
            $this -> idTipoSocio = $idTipoSocio;
        }

        function getIDTipoSocio(){
            return $this -> idTipoSocio;
        }

        function setTipo($tipo){
            $this -> tipo = $tipo;
        }

        function getTipo(){
            return $this -> tipo;
        }

    }
?>