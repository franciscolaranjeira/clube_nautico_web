<?php 
    
    class EncarregadoEducacao {

        private $nome;
        private $telefone;
    
        function __construct($nome,$telefone){
            $this -> nome = $nome;
            $this -> telefone = $telefone;
        }
        
        function setNome($nome){
            $this -> nome = $nome;
        }

        function getNome(){
            return $this -> nome;
        }

        function setTelefone($telefone){
            $this -> telefone = $telefone;
        }
        
        function getTelefone(){
            return $this -> telefone;
        }
    }
?>