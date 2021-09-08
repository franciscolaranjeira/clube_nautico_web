<?php 

    class Desconto {
        
        private $idDesconto;
        private $percentagemDesconto;
    
        function __construct(){
        }

        function setDesconto($idDesconto){
            $this -> idDesconto = $idDesconto;
        }
        function getDesconto(){
            return $this -> idDesconto;
        }

        function setPercentagemDesconto($percentagemDesconto){
            $this -> percentagemDesconto = $percentagemDesconto;
        }
        function getPercentagemDesconto(){
            return $this -> percentagemDesconto;
        }
    }
?>