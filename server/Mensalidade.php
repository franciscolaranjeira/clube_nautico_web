<?php 
    include_once 'TipoSocio.php';

    class Mensalidade {
        
        private $idMensalidade;
        private $valorReferencia;
        private $tipoSocio;

        function __construct($tipoSocio){
            switch ($tipoSocio) {
                case 'SMenor':
                    $idMensalidade = 1;
                    break;
                case 'SAdulto':
                    $idMensalidade = 2;
                    break;
                case 'SSenior':
                    $idMensalidade = 3;
                    break;
            }
           
        }

        function setIdMensalidade($idMensalidade){
            $this -> idMensalidade = $idMensalidade;
        }
        function getIdMensalidade(){
            return $this -> idMensalidade;
        }
        function setValorReferencia($valorReferencia){
            $this -> valorReferencia = $valorReferencia;
        }
        function getValorReferencia(){
            return $this -> valorReferencia;
        }
        function setTipoSocio($tipoSocio){
            $this -> tipoSocio = $tipoSocio;
        }
        function getTipoSocio(){
            return $this -> tipoSocio;
        }
    }
?>