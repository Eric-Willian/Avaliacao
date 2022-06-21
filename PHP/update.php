<?php
$localBD = "localhost";
$usuarioBD="root";
$senhaBD="";
$base="avaliacao_mysql";
$conexao = new mysqli($localBD, $usuarioBD, $senhaBD,$base);

$idProd=$_POST["idProd"];
$produto=$_POST['produto'];
$preco=$_POST['preco'];
$cor=$_POST['cor'];

// query para atualização na tabela produtos
$sql="UPDATE `produtos` SET `nome` = '$produto' WHERE `produtos`.`idProd` = $idProd;";


// Avaliando a conexão com bd
if($conexao->connect_error){
    die("Conexão falhou".$conexao->connect_error);
}
//Execução da query de inserção da tabela produtos
$conexao->query($sql);

// query para atualização da tabela preço
$sql2="UPDATE `preço` SET `Preco` = '$preco' WHERE `preço`.`idPreco` = $idProd";

//Execução da query de atualzação da tabela preço
if($conexao->query($sql2) === TRUE){
    header('location:index.php');
} else {
    echo "Erro: ".$sql."<br>".$conexao->error;
}

$conexao->close();

