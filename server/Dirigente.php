<?php 
    include_once 'TipoSocio.php';

    class Dirigente {

        private $idDirigente;
        private $socioDirigente = false;

        function __construct($tipoSocio, $socioDirigente){
            switch ($tipoSocio) {
                case 'SMenor':
                    $idDirigente = 1;                
                    break;
    
                case 'SAdulto':
                    if($socioDirigente == true){
                        $idDirigente = 2;                   
                    }else{
                        $idDirigente = 1;
                    }
                    break;
                case 'SSenior':               
                    if($socioDirigente == true){
                        $idDirigente = 2;
                    }else{
                        $idDirigente = 1;
                    }              
                    break;
            }
        }

        function setIDDirigente($idDirigente){
            $this -> idDirigente = $idDirigente;
        }
        function getIDDirigente(){
            return $this -> idDirigente;
        }
        function setSocioDirigente($socioDirigente){
            $this -> socioDirigente = $socioDirigente;
        }
        function getSocioDirigente(){
            return $this -> socioDirigente;
        }
    }
?>