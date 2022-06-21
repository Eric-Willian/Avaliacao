<?php
$localBD = "localhost";
$usuarioBD="root";
$senhaBD="";
$base="avaliacao_mysql";
$conexao = new mysqli($localBD, $usuarioBD, $senhaBD,$base);

$produto=$_POST['produto'];
$preco=$_POST['preco'];
$cor=$_POST['cor'];

// query para inserção na tabela produtos
$sql="INSERT INTO produtos(nome,cor) VALUES('$produto','$cor');";


// Avaliando a conexão com bd
if($conexao->connect_error){
    die("Conexão falhou".$conexao->connect_error);
}
//Execução da query de inserção da tabela produtos
if($conexao->query($sql) === TRUE){
    header('location:index.php');
} else {
    echo "Erro: ".$sql."<br>".$conexao->error;
}

$sql="INSERT INTO preço(Preco) VALUES($preco)";

//Execução da query de inserção da tabela preço
if($conexao->query($sql) === TRUE){
    header('location:index.php');
} else {
    echo "Erro: ".$sql."<br>".$conexao->error;
}

$conexao->close();