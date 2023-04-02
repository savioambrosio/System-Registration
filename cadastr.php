<?php
session_start();
include('conexao.php'); //buscar a conexao

// se estiver vazio vai retornar a pagina
if(isset($_POST['btn'])){
    $nome =  $_POST['nome'];
    $bile =  $_POST['bil'];
    $fone =  $_POST['fone'];
    $ema =  $_POST['email'];
    $pa =  $_POST['pai'];
    $ma=  $_POST['mae'];
    $ida =  $_POST['idade'];
    $sex =  $_POST['sexo'];
    $resi =  $_POST['morada'];
    $cur = $_POST['curso'];

    $sql = "INSERT INTO cadastr(nome,bilhete,fone,email,filho,de,idade,sexo,morada,curso) 
        VALUES ('$nome','$bile',$fone,'$ema','$pa','$ma','$ida','$sex','$resi','$cur')";

    if(mysqli_query($conexao, $sql)){
        $_SESSION['nome'] = $nome;
        $_SESSION['msg3'] = True;
        
        header("location:index.php");
    }
    else{
        echo "ocorreu algum erro...".mysqli_connect_error($conexao);
    }
}
mysqli_close($conexao);
?>