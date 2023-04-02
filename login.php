<?php
session_start();
include('conexao.php'); //buscar a conexao

// se estiver vazio vai retornar a pagina
if(isset($_POST['btn2'])){
    $nome = $_POST['nome'];
    $bi = $_POST['bilhete'];

    $sql = "SELECT nome FROM cadastr WHERE nome='$nome' AND bilhete='$bi' ";
    $resultado = mysqli_query($conexao, $sql);

    if(mysqli_num_rows($resultado)>0){
        $_SESSION['nome'] = $nome;
        $_SESSION['msg2'] = True;
        header("location:index.php");
    }
    else{
        $_SESSION['nome'] = $nome;
        $_SESSION['msg'] = True;
        header('location:index.php');
    }
}
else{
    header("location:index.php");
}
mysqli_close($conexao);
?>