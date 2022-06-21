<?php
$localBD = "localhost";
$usuarioBD="root";
$senhaBD="";
$base="avaliacao_mysql";
$conexao = new mysqli($localBD, $usuarioBD, $senhaBD,$base);

$idProd=$_GET["idProd"];

// query para deletar dados da tabela produtos
$sql="DELETE FROM produtos WHERE idProd = $idProd";
//query para delear dados da tabela preço
$sql2="DELETE FROM preço WHERE idPreco = $idProd";
//executando query para deletar dados da tabela produtos
$conexao->query($sql);

//executando query para deletra dados da tabela preço e redirecionando para página index.php
if($conexao->query($sql2) === TRUE){
    header('location:index.php');
} else {
    echo "Erro: ".$sql."<br>".$conexao->error;
}

$conexao->close();

