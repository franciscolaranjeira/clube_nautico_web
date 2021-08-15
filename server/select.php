<?php

    class DisplayAll extends Connection{

        public function selectAll(){
            $sql = "SELECT socio.*,encarregado_educacao.nome AS nome_encEdu, dirigente.*, tipo_socio.*,
            mensalidade.*, desconto.*, aula.* FROM socio 
            LEFT JOIN encarregado_educacao ON socio.encarregado_educacao_id = 
            encarregado_educacao.id_encarregado_educacao 
            LEFT JOIN tipo_socio ON socio.tipo_socio_id = tipo_socio.id_tipo_socio 
            LEFT JOIN dirigente ON socio.dirigente_id = dirigente.id_dirigente
            LEFT JOIN mensalidade ON socio.mensalidade_id = mensalidade.id_mensalidade 
            LEFT JOIN aula ON mensalidade.aula_id = aula.id_aula 
            LEFT JOIN desconto ON mensalidade.desconto_id = desconto.id_desconto 
            ORDER BY nome";

            $stmt = $this->connect()->query($sql);
            while($row = $stmt->fetch() ){
                echo "<tr>";
                echo "<td>" . $row['nome'] . "</td>";
                echo "<th>" . $row['numero_contribuinte'] . "</th>";
                echo "<th>" . $row['ano_nascimento'] . "</th>";
                echo "<th>" . $row['numero_aulas'] . "</th>";
                echo "<th>" . $row['nome_encEdu'] . "</th>";
                echo "<th>Edit</th>";
                echo "<th>
                        <a onclick = 'return confirm('Are you sure you want to delete this user?')'
                        href = 
                        >Delete</a>
                    </th>";
                echo "</tr>";
            }
        }

        public function delete($id){
            $sql = "DELETE FROM socio WHERE id_socio = ?";
            $stmt = $this->connect()->prepare($sql);
            $stmt->execute($id);
        }
    }
?>