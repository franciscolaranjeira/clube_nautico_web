<?php
    include_once '../server/Model.php';

    $obj =new Model();

    // SUBMIT
    if (isset($_POST['submit'])) {
       $obj -> insertSocio($_POST);
    }

    

?>
<!DOCTYPE html>
<html lang="eng">
    <head>
        <title>Clube Nautico WEB</title>
        <link rel="stylesheet" href="/clube_nautico_web/css/layout.css">
        <link rel="stylesheet" href="/clube_nautico_web/css/list-socios.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" 
        integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    </head>
    <body>
        <div class = "container">
            <!-- MENU TOPO -->
            <div class = "top_nav_bar">
                <div id = "info-socios">
                    <h2>Informações Socios</h2>
                </div>
                <div id = "mensalidades">
                    <h2>Mensalidades</h2>
                </div>
                <div id = "enc">
                    <h2>Encarregados Educação</h2>
                </div>
            </div>
            <div class = "content-box">
                <div class="">

                    <!-- FORM -->

                    <form class="row g-3" method="POST">
                        <div class="col-md-6">
                            <label for="inputNome" class="form-label">Nome</label>
                            <input type="text" class="form-control" name="inputNome">
                        </div>

                        <div class="col-md-6">
                            <label for="inputAnoNascimento" class="form-label">Data Nascimento</label>
                            <input type="date" class="form-control" name="inputDataNascimento">
                        </div>

                        <div class="col-6">
                            <label for="inputNumeroContribuinte" class="form-label">Numero Contribuinte</label>
                            <input type="number" class="form-control" name="inputNumeroContribuinte">
                        </div>

                        <div class="col-6">
                            <label for="inputNumeroAulas" class="form-label">Numero Aulas</label>
                            <input type="number" class="form-control" name="inputNumeroAulas">
                        </div>

                        <div class="col-md-6">
                            <label for="inputEncEducacao" class="form-label">Nome Encarregado Educação</label>
                            <input type="text" class="form-control" name="inputEncEducacao">
                        </div>

                        <div class="col-md-6">
                            <label for="inputEncEducacaoTelefone" class="form-label">Telefone Encarregado Educação</label>
                            <input type="number" class="form-control" name="inputEncEducacaoTelefone">
                        </div>

                        <legend class="col-form-label col-sm-2 pt-0">Dirigente?</legend>
                        <div class="col-sm-10">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="gridRadiosSim" value="option1">
                                <label class="form-check-label" for="gridRadios1">Sim</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="gridRadiosNão" value="option2" checked>
                                <label class="form-check-label" for="gridRadios2">Não</label>
                            </div>
                        </div>

                        <div class="col-12">
                            <button type="submit" name= "submit" class="btn btn-primary">submit</button>
                        </div>
                    </form>
                </div>
                <br>
                <div class = "content">

                    <!-- TABLE -->

                    <table class="table table-bordeless">
                        <thead class="thead-dark">
                            <tr class="">
                            <th>Nome</th>
                            <th>Numero Contribuinte</th>
                            <th>Data de Nascimento</th>
                            <th>Numero de Aulas</th>
                            <th>Encarregado Educação</th>
                            </tr>
                        </thead>
        
                        <?php
                        /* DISPLAY RECORDS */
                        $data = $obj->displayRecords();
                        foreach ($data as $value) {
                        ?>

                        <tr class="text-center">
                            <td><?php echo $value['nome']; ?></td>
                            <td><?php echo $value['numero_contribuinte']; ?></td>
                            <td><?php echo $value['ano_nascimento']; ?></td>  
                            <td><?php echo $value['numero_aulas']; ?></td>
                            <td><?php echo $value['nome_encEdu']; ?></td>
                            <td>
                                <a href="info-socios.php?editId=<?php $value['id_socio']; ?>" class="btn btn-info">Edit</a>
                                <a href="info-socios.php?deleteId=<?php $value['id_socio']; ?>" class="btn btn-danger">Delete</a>
                            </td>
                        </tr>
                        <?php 
                        }
                        ?>
                    </table>
                </div>
            </div>
        </div>
    </body>
</html>