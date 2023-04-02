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
    <link rel="stylesheet" href="index.css">
    <link rel="icon" href="images/ispaj.png">
    <link rel="stylesheet" href="fontawesome-free-6.2.1-web/css/all.min.css">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.0/jquery.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <title>Login</title>
</head> 
<body>
    <section id="part2">
        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="images/is.JPG" alt="...">
                    <div class="cont text-left">
                        <div class="container">
                            <div class="card">
                                <div class="card-header text-left text-light">
                                    <p class="text-warning">Login</p>
                                </div>
                                <div class="card-body">
                                    <form action="login.php" method="post">
                                        <div class="mb-3">
                                            <label for="formGroupExampleInput" class="form-label text-white"><i class="fa-sharp fa-solid fa-users"></i> Nome</label>
                                            <input type="text" name="nome" class="form-control" id="formGroupExampleInput" placeholder="inisra o nome aluno">
                                        </div>
                                        <div class="mb-3">
                                            <label for="formGroupExampleInput2" class="form-label text-white"><i class="fa-solid fa-id-card"></i>&nbspBilhete</label>
                                            <input type="password" name="bilhete"class="form-control" id="formGroupExampleInput2" placeholder="insira o seu bilhete">
                                        </div>
                                        <button class="btn btn-warning text-light" style="width:30%" name="btn2">&nbspEntrar</button>
                                    </form>
                                </div>
                                <div class="card-footer text-muted text-center">
                                    <a href="index.html" class="text text-light" style="text-decoration:none" data-bs-toggle="modal" data-bs-target="#exampleModal">Fazer a matricula&nbsp<i class="fa-solid fa-paste"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="part5">
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel"><i class="fa-solid fa-id-card">&nbsp</i>Efectuar Matricula</h1>
                <button type="button" class="btn-close text-light" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form class="row g-3" action="cadastr.php" method="post">
                        <div class="col-md-6">
                        <label for="inputEmail4" class="form-label">Nome</label>
                        <input type="text" class="form-control" id="nome" name="nome" placeholder="inisra o seu nome.." required value="<?php echo $_SESSION['nome'];?>">
                        </div>
                        <div class="col-md-6">
                        <label for="inputPassword4" class="form-label">Bilhete</label>
                        <input type="text" class="form-control" id="bil" name="bil" placeholder="inisra o seu bilhete." required>
                        </div>
                        <div class="col-md-4">
                            <label for="inputPassword4" class="form-label">Telefone</label>
                            <input type="number" class="form-control" maxlength="9" id="fone" name="fone" placeholder="+244" required>
                        </div>
                        <div class="col-md-8">
                        <label for="inputAddress" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="Insira o seu email" required>
                        </div>
                        <div class="col-md-6">
                        <label for="inputAddress2" class="form-label">Filho de</label>
                        <input type="text" class="form-control" id="filho" name="pai" placeholder="nome do pai.." required>
                        </div>
                        <div class="col-md-6">
                        <label for="inputCity" class="form-label">e de</label>
                        <input type="text" class="form-control" id="fil" name="mae" placeholder="nome da mãe." required>
                        </div>
                        <div class="col-md-2">
                            <label for="inputCity" class="form-label">Média</label>
                            <input type="number" maxlength="2" class="form-control" id="idade" name="idade"  required>
                        </div>
                        <div class="col-md-4">
                            <label for="inputCity" class="form-label">Instituição</label>
                            <select id="sexo" name="sexo" class="form-select">
                                <option selected>Escolher</option>
                                <option>Comercial</option>
                                <option>IMEL</option>
                                <option>Alda Lara</option>
                                <option>IMEK</option>
                                <option>Pitruca</option>
                                <option>Emiras</option>
                                <option>outro</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label for="inputCity" class="form-label">Morada</label>
                            <input type="text" class="form-control" id="morada" name="morada" placeholder="insiara a morada">
                        </div>
                        <div class="col-md-12">
                        <label for="inputState" class="form-label">Curso</label>
                        <select name="curso"class="form-select">
                                <option selected>Engenharia Infórmatica</option>
                                <option>Engenharia Civil</option>
                                <option>Odontologia</option>
                                <option>Analises Clinicas</option>
                                <option>Gestão</option>
                                <option>Cardiopunominia</option>
                        </select>
                        </div>
                        <button type="reset" class="btn btn-danger" style="width:30%"><i class="fa-solid fa-user-minus"></i>&nbspLimpar</button>
                        &nbsp&nbsp;<button type="submit" class="btn btn-warning text-light" style="width:30%" name="btn"><i class="fa-solid fa-user-plus"></i>&nbspGuardar</button>
                    </form>
                </div>
            </div>
            </div>
        </section>
    <?php
            if(isset($_SESSION['msg2'])){
    ?>
                                <div class="modal" tabindex="-1" id="myModal" style="height:80%">
                                    <div class="modal-dialog pt-5">
                                        <div class="modal-content">
                                        <div class="modal-header">
                                            <img src="images/user.png" width="50" height="50" alt="" class="d-inline-block align-text-top">&nbsp<h5 class="modal-title"><?php echo $_SESSION['nome'];?></h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body text-light">
                                        <div class="d-grid gap-4 col-6 mx-auto">
                                            <a href="confirmacao.php" class="btn btn-warning text-light" type="button"><i class="fa-solid fa-right-to-bracket"></i>&nbspFazer Confirmação</a>
                                            <a href="solicitar.php" class="btn btn-secondary" type="button"><i class="fa-solid fa-right-to-bracket"></i>&nbspsolicitar Declaração</a>
                                        </div>
                                        </div>
                                        <div class="modal-footer bg-warning">
                                            <p></p>
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
        unset($_SESSION['msg2']);
    ?>
    <?php
            if(isset($_SESSION['msg'])){
    ?>
                                <div class="modal" tabindex="-1" id="myModal">
                                    <div class="modal-dialog ">
                                        <div class="modal-content">
                                        <div class="modal-header">
                                            <img src="images/er.png" width="40" height="40" alt="" class="d-inline-block align-text-top"><h5 class="modal-title"><span class="text-danger">Erro</span></h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body bg-danger text-light">
                                            <p>Erro ao acessar, não tens o acesso permitido para logar no sistema senhor <?php echo $_SESSION['nome'];?></p>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-danger text-light" data-bs-dismiss="modal">Voltar</button>
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

    <?php
            if(isset($_SESSION['msg3'])){
    ?>
                                <div class="modal" tabindex="-1" id="myModal">
                                    <div class="modal-dialog ">
                                        <div class="modal-content">
                                        <div class="modal-header">
                                            <img src="images/verificar.png" width="40" height="40" alt="" class="d-inline-block align-text-top"><h5 class="modal-title"><span class="text-sucsess">Bingo!</span></h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body bg-success text-light">
                                            <p>A sua matricula foi realizada com sucesso senhor <?php echo $_SESSION['nome'];?> contamos com a tua presença e vamos enviar uma notificação quando as listas forem anexadas!</p>
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
        unset($_SESSION['msg3']);
    ?>
    </div>
</body>
</html>