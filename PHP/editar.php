<?php
$localBD = "localhost";
$usuarioBD = "root";
$senhaBD = "";
$base = "avaliacao_mysql";
$conexao = new mysqli($localBD, $usuarioBD, $senhaBD, $base);
$idProd=$_GET['idProd'];

$sql="SELECT * FROM produtos INNER JOIN preço on idProd = idPreco WHERE idProd = $idProd";

$result = $conexao->query($sql);
            if ($result->num_rows > 0) {
                 while ($row = $result->fetch_assoc()) {
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <form action="update.php" method="POST">
            <table>
                <input type="hidden" name="idProd" value="<?php echo $idProd ?>">
                <tr><td>Produto</td><td><input type="text" name="produto" value="<?php echo $row["nome"];?>"></td></tr>
            <tr><td>Preço </td><td><input type="number" name="preco" value="<?php echo $row["Preco"];}} ?>" step="0.01"></td></tr>
                <tr><td><input type="submit"></td></tr>
            </table>
        </form>
    </body>
</html>