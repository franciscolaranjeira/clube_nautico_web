<?php 
    include_once 'Desconto.php';
    include_once 'Dirigente.php';
    include_once 'EncarregadoEducacao.php';
    include_once 'Mensalidade.php';
    include_once 'Socio.php';
    include_once 'TipoSocio.php';
        
    class Model {
        private $host = "localhost";
        private $user = "root";
        private $pwd = "";
        private $dbName = "clube_nautico_web";
        private $conn;

        function __construct(){
            $this-> conn = new mysqli($this->host, $this-> user, $this-> pwd, $this->dbName);
            if ($this->conn->connect_error) {
                echo 'Connection Failed';
            } else {
                return $this->conn;
            }
        }

        public function displayRecords(){
            $sql = "SELECT socio.*,encarregado_educacao.nome AS nome_encEdu FROM socio 
            LEFT JOIN encarregado_educacao ON socio.encarregado_educacao_id = 
            encarregado_educacao.id_encarregado_educacao  
            ORDER BY nome";

            $result = $this->conn->query($sql);
            if($result->num_rows>0){
                while ($row = $result->fetch_array()) {
                    $data[] = $row; 
                }
                return $data;
            }
        }

        public function displayEncEdu(){
            $sql = "SELECT socio.*,CONCAT(tipo_socio.tipo_socio, '-', socio.id_socio) AS codigo, encarregado_educacao.nome 
            AS nome_encEdu, encarregado_educacao.telefone,dirigente.*,tipo_socio.*,mensalidade.*,desconto.*,aula.* 
            FROM socio LEFT JOIN encarregado_educacao ON socio.encarregado_educacao_id = encarregado_educacao.id_encarregado_educacao 
            LEFT JOIN tipo_socio ON socio.tipo_socio_id = tipo_socio.id_tipo_socio 
            LEFT JOIN dirigente  ON socio.dirigente_id = dirigente.id_dirigente 
            LEFT JOIN mensalidade ON socio.mensalidade_id = mensalidade.id_mensalidade 
            LEFT JOIN aula ON mensalidade.aula_id = aula.id_aula 
            LEFT JOIN desconto ON mensalidade.desconto_id = desconto.id_desconto 
            ORDER BY nome";

            $result = $this->conn->query($sql);
            if($result->num_rows>0){
                while ($row = $result->fetch_array()) {
                    $data[] = $row; 
                }
                return $data;
            }
        }
        public function insertSocio($post){
        /*   
            //SOCIOS MENORES
            $nome = $post['inputNome'];
            $numContribuinte = $post['inputNumeroContribuinte'];
            $dataNascimento = $post['inputDataNascimento'];
            $numAulas = $post['inputNumeroAulas'];
            $nomeEnc = $post['inputEncEducacao'];
            $telefoneEncEdu = $post['inputEncEducacaoTelefone'];

            $tipoSocio = new TipoSocio('SMenor');
            $mensalidade = new Mensalidade($tipoSocio);
            $dirigente = new Dirigente($tipoSocio,false);
            $enc = new EncarregadoEducacao($nomeEnc,$telefoneEncEdu);

            $sqlInsertEnc = "INSERT INTO encarregado_educacao (id_encarregado_educacao, nome, telefone) 
            VALUES (null, '$nomeEnc', '$telefoneEncEdu')";
            
            var_dump($sqlInsertEnc);

            $resultInsertEnc = $this->conn->query($sqlInsertEnc);

            if ($resultInsertEnc) {
                header('location:info-socios.php');
            }else{
                 echo "Error".$sqlInsertEnc."<br>".$this->conn->error;
              }
              
            $sqlInsertSocio = "INSERT INTO socio (id_socio, nome, numero_contribuinte, ano_nascimento, numero_aulas , 
            mensalidade_id,dirigente_id, encarregado_educacao_id ,tipo_socio_id)
            VALUES (NULL, '$nome', '$numContribuinte', '$dataNascimento', '$numAulas', '$mensalidade', '$dirigente',
             '$enc', '$tipoSocio')";

            $resultSocio = $this->conn->query($sqlInsertSocio);

            if ($resultSocio) {
                header('location:info-socios.php');
            }else{
                 echo "Error".$resultSocio."<br>".$this->conn->error;
              } */

              //SOCIOS ADULTOS
            $nome = $post['inputNome'];
            $numContribuinte = $post['inputNumeroContribuinte'];
            $dataNascimento = $post['inputDataNascimento'];
            $numAulas = $post['inputNumeroAulas'];
            $nomeEnc = $post['inputEncEducacao'];
            $telefoneEncEdu = $post['inputEncEducacaoTelefone'];

            $tipoSocio = new TipoSocio('SAdulto');
            $mensalidade = new Mensalidade($tipoSocio);
            $dirigente = new Dirigente($tipoSocio,false);
            
            //$socio = new Socio($nome,$numContribuinte,$dataNascimento,$numAulas,);

            $sql = "INSERT INTO socio (id_socio, nome, numero_contribuinte, ano_nascimento, numero_aulas , 
            mensalidade_id,dirigente_id, encarregado_educacao_id ,tipo_socio_id)
            VALUES (NULL, ?, ?, ?, ?, ?, ?, ?, ?)";

            $resultSocio = $this->conn->query($sql);

            if ($resultSocio) {
                header('location:info-socios.php');
            }else{
                 echo "Error".$resultSocio."<br>".$this->conn->error;
              } 

              
        }      

            
            

            
    }
?>