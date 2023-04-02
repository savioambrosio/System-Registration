<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/boostrap.css">
    <link rel="stylesheet" href="solicitar.css">
    <link rel="icon" href="images/ispaj.png">
    <link rel="stylesheet" href="fontawesome-free-6.2.1-web/css/all.min.css">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.0/jquery.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <title>Confirmar Matricula</title>

    <section id="part2">
        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="images/il.png" alt="...">
                    <div class="cara">
                        <h5 class="text-light">Confirmar <span class="text-warning">Matricula</span></h5></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="part6">
        <div class="container-fluid">
            <div class="tab-content" id="nav-tabContent">
                <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                  <div class="forma1">
                    <div class="card1">
                      <div class="card bg-transparent">
                          <div class="card-header bg-secondary">
                          </div>
                          <div class="card-body">
                            <form class="row g-3" action="confirmar.php" method="post">
                                <div class="col-md-3">
                                <label for="inputEmail4" class="form-label">Nome</label>
                                  <input type="text" class="form-control" name="nome" id="nome" placeholder="insira o seu nome" required>
                                </div>
                                <div class="col-md-3">
                                    <label for="inputAddress" class="form-label">Bilhete</label>
                                    <input type="text" class="form-control" name="bilhete" id="bilhete" placeholder="bilhete...">
                                </div>
                                <div class="col-md-3">
                                    <label for="inputEmail4" class="form-label">Filho(a) de</label>
                                    <input type="text" class="form-control" name="filho" id="filho" placeholder="nome do pai..">
                                </div>
                                <div class="col-md-3">
                                    <label for="inputEmail4" class="form-label">e de</label>
                                    <input type="text" class="form-control" name="de" id="de" placeholder="nome da mãe">
                                </div>
                                <div class="col-md-1">
                                <label for="inputPassword4" class="form-label">Idade</label>
                                <input type="text" class="form-control" name="idade" id="idade" maxlength="2" placeholder="idade">
                                </div>
                                <div class="col-md-2">
                                <label for="inputdate" class="form-label">Data de Nascimento</label>
                                  <input type="date" class="form-control" name="data" id="date">
                                </div>
                                <div class="col-md-2">
                                    <label for="inputAddress" class="form-label">Estado Civil</label>
                                    <select id="estado" name="estado" class="form-select">
                                        <option selected>Solteiro</option>
                                        <option>Casado</option>
                                        <option>Viúvo</option>
                                        <option>Namorando</option>
                                    </select>
                                </div>

                                <div class="col-md-4">
                                    <label for="inputAddress" class="form-label">Morada</label>
                                    <input type="text" class="form-control" name="residencia" id="residencia" placeholder="Ex: Viana">
                                </div>
                                <div class="col-md-3">
                                <label for="inputAddress2" class="form-label">Telemovel</label>
                                  <input type="text" class="form-control" name="telefone" id="telefone" placeholder="+244" maxlength = "9">
                                </div>
                                <div class="col-md-2">
                                    <label for="inputAddress2" class="form-label">Matricula</label>
                                    <input type="number" class="form-control" name = "ma" id="ma" placeholder="Ex: 54586">
                                </div>
                                <div class="col-md-3">
                                    <label for="inputAddress2" class="form-label">Email</label>
                                    <input type="email" class="form-control" name = "email" id="email" placeholder="insira o seu email">
                                </div>
                                <div class="col-md-3">
                                <label for="inputCity" class="form-label">Curso</label>
                                <select id="curso"name="curso" class="form-select">
                                    <option selected>Engenharia Infórmatica</option>
                                    <option>Engenharia Civil</option>
                                    <option>Odontologia</option>
                                    <option>Analises Clinicas</option>
                                    <option>Gestão</option>
                                    <option>Cardiopunominia</option>
                                </select>
                                </div>
                                <div class="col-md-2">
                                    <label for="inputAddress2" class="form-label">Turno</label>
                                    <select id="turno" name="turno" class="form-select">
                                        <option selected>Manhã</option>
                                        <option>Tarde</option>
                                        <option>Noite</option>
                                    </select>
                                </div>
                                <div class="col-md-1">
                                    <label for="inputAddress2" class="form-label">Turma</label>
                                    <select id="curso" name="turma" class="form-select">
                                        <option selected>A</option>
                                        <option>B</option>
                                        <option>C</option>
                                        <option>D</option>
                                    </select>
                                </div>
                                <div class="col-md-1">
                                    <label for="inputAddress2" class="form-label">Ano</label>
                                    <input type="text" class="form-control" name = "ano" id="ano">
                                </div>
                                <div class="col-12">
                                    <button type="reset" class="btn btn-danger text-white" name="btns"><i class="fa-solid fa-broom"></i>&nbsp&nbspLimpar</button>
                                </div>
                                <div class="col-12">
                                    <button type="submit" class="btn btn-warning text-white" name="btn"><i class="fa-solid fa-download"></i> Guardar</button>
                                    <a href="index.php" class="btn btn-primary text-white"><i class="fa-solid fa-right-from-bracket"></i>Sair</a>
                                </div>
                            </form>
                            </div>
                            <div class="card-footer text-center">
                            </div>
                        </div>
                      </div>
                  </div>
                </div>
            </div>
        </div>
    </section>
    <?php
            if(isset($_SESSION['msg'])){
    ?>
                                <div class="modal" tabindex="-1" id="myModal">
                                    <div class="modal-dialog ">
                                        <div class="modal-content">
                                        <div class="modal-header">
                                            <img src="images/verificar.png" width="40" height="40" alt="" class="d-inline-block align-text-top"><h5 class="modal-title"><span class="text-sucsess">Bingo!</span></h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body bg-success text-light">
                                            <p>A confirmação da matricula foi feita com exito senhor <?php echo $_SESSION['nome'];?>, muito em breve entraremos em contacto contigo. Muito obrigada!</p>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-success text-light" data-bs-dismiss="modal"><i class="fa-solid fa-thumbs-up"></i>&nbspOK</button>
                                        </div>
                                        </div>
                                    </div>
                                </div>
                                <script>
                                    $(document) .ready(function (){
                                            $('#myModal').modal('show');
                                        
                                    });
                                </script>
    <?php
    }
        unset($_SESSION['msg']);
    ?>
</head>
<body>