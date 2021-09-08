<?php 
    include_once 'EncarregadoEducacao.php';
    
    class Socio {
        private  $codigoSocio;
        private  $idSocio;
        private  $nome;
        private  $numeroContribuinte;
        private  $dataNascimento;
        private  $numeroAulas;
        private EncarregadoEducacao $encEdu;
        private static $idadeMaximaMenor = 17;
        private static $idadeMaximaAdulto = 59;
        private static $numAulasReferencia = 4;

        function __construct($nome, $numeroContribuinte,$dataNascimento,$numeroAulas,EncarregadoEducacao $encEdu){
           
            $this -> nome = $nome;
            $this -> numeroContribuinte = $numeroContribuinte;
            $this -> dataNascimento = $dataNascimento;
            $this -> numeroAulas = $numeroAulas;
            $this -> encEdu = $encEdu;
        }
        /*
        function __construct($nome, $numeroContribuinte,$dataNascimento,$numeroAulas, Mensalidade $mensalidade,
        Dirigente $dirigente, TipoSocio $tipoSocio){
            $this($nome, $numeroContribuinte,$dataNascimento,$numeroAulas, null, $mensalidade, 
            $dirigente, $tipoSocio);
        }*/

        function setNome($nome){
            $this -> nome = $nome;
        }
        function getNome(){
            return $this -> nome;
        }

        function setNumeroContribuinte($numeroContribuinte){
            $this -> numeroContribuinte = $numeroContribuinte;
        }
        function getNumeroContribuinte(){
            return $this -> numeroContribuinte;
        }

        function setDataNascimento($dataNascimento){
            $this -> dataNascimento = $dataNascimento;
        }
        function getDataNascimento(){
            return $this -> dataNascimento;
        }
        
        function setNumeroAulas($numeroAulas){
            $this -> numeroAulas = $numeroAulas;
        }
        function getNumeroAulas(){
            return $this -> numeroAulas;
        }

        function setEncEdu(EncarregadoEducacao $encEdu){
            $this -> encEdu = $encEdu;
        }
         function getEncEdu(){
            return $this -> encEdu;
        }

        function setMensalidade(Mensalidade $mensalidade){
            $this -> mensalidade = $mensalidade;
        }
        function getMensalidade(){
            return $this -> mensalidade;
        }

        function setDirigente(Dirigente $dirigente){
            $this -> dirigente = $dirigente;
        }
        function getDirigente(){
            return $this -> dirigente;
        }

        function setTipoSocio($tipoSocio){
            $this -> tipoSocio = $tipoSocio;
        }
        function getTipoSocio(){
            return $this -> tipoSocio;
        }

        function getIdadeMaximaMenor(){
            return $this -> idadeMaximaMenor;
        }

        function getIdadeMaximaAdulto(){
            return $this -> idadeMaximaAdulto;
        }

        function getNumAulasReferencia(){
            return $this -> numAulasReferencia;
        }
    }
?>