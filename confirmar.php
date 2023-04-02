<?php
session_start();
include('conexao.php'); //buscar a conexao

// se estiver vazio vai retornar a pagina
if(isset($_POST['btn'])){
    $nome =  $_POST['nome'];
    $dec =  $_POST['bilhete'];
    $filho =  $_POST['filho'];
    $de =  $_POST['de'];
    $idade = $_POST['idade'];
    $est = $_POST['estado'];
    $morada = $_POST['residencia'];
    $telefone =  $_POST['telefone'];
    $matricula = $_POST['ma'];
    $email = $_POST['email'];
    $curso =  $_POST['curso'];
    $turno = $_POST['turno'];
    $turma =  $_POST['turma'];
    $ano = $_POST['ano'];

    $sql = "INSERT INTO confirmar(nome,bilhete,filho, de, idade,estado,morada,telefone,matricula,email,curso,turno,turma,ano) 
            VALUES ('$nome','$dec','$filho','$de',$idade,'$est','$morada',$telefone,'$matricula','$email','$curso','$turno','$turma',$ano)";

    if(mysqli_query($conexao, $sql)){
        $_SESSION['nome'] = $nome;
        $_SESSION['msg']= True;
        header('location:confirmacao.php');
        exit();
    }
    else{
        echo "Ocorru algum erro!".mysqli_connect_error($conexao);
    }
}
mysqli_close($conexao);
?>