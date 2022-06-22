<?php
$localBD = "localhost";
$usuarioBD = "root";
$senhaBD = "";
$base = "avaliacao_mysql";
$conexao = new mysqli($localBD, $usuarioBD, $senhaBD, $base);
?>
<!DOCTYPE html>
<html>
    <head>
        <style>
            .produtos{
                border: 1px solid black;
            }
            .produtos th, .produtos td{
                border: 1px solid black;
            }
        </style>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <form action="adicionar.php" method="POST">
            <table>
                <tr><td>Produto</td><td><input type="text" name="produto"></td></tr>
                <tr><td>Preço </td><td><input type="number" name="preco" step="0.01"></td></tr>
                <tr><td>Cor</td><td> <input type="text" name="cor"></td></tr>
                <tr><td><input type="submit"></td></tr>
            </table>
        </form>

        <h3>Produtos</h3>
        <table class="produtos">
            <tr>
                <th>Nome</th>
                <th>Cor</th>
                <th>Preço</th>
                <th colspan="2">Opções</th>
            </tr>
            <?php
            $sql = "SELECT DISTINCT * FROM produtos INNER JOIN preço";

            $result = $conexao->query($sql);
            if ($result->num_rows > 0) {


                while ($row = $result->fetch_assoc()) {
                    echo "<tr ><td>" . $row["nome"] . "</td><td>" . $row["cor"] . "</td><td id=\"" . $row["idProd"] . "\">" . $row["Preco"] . "</td>"
                    . "<td><a href=\"editar.php?idProd=" . $row["idProd"] . "\">Alterar</a></td><td><a  href=\"deletar.php?idProd=" . $row["idProd"] . "\">Excluir</td></tr>";
                }

                echo "</table>";
            } else {
                echo "</table>";
            }


            $conexao->close();
            ?>
        </table>
        <script type="text/javascript" src="desconto.js"></script>
    </body>

</html>




