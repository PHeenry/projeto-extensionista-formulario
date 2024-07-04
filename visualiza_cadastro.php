<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Cadastro</title>
    <style>
        table {
            border-collapse: collapse;
            width: 80%;
            margin: 20px auto;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
        }
        th {
            background-color: #f2f2f2;
            text-align: center;
        }
        td {
            text-align: center;
        }
        .botao-excluir {
            background-color: red;
            color: white;
            padding: 5px 10px;
            border: none;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <center>
        <h1>Lista de Cadastro</h1>
        <table>
            <tr>
                <th><strong>NOME</strong></th>
                <th><strong>SOBRENOME</strong></th>
                <th><strong>EMAIL</strong></th>
                <th><strong>DATA DE NASCIMENTO</strong></th>
                <th><strong>OBSERVAÇÕES</strong></th>
                <th><strong>AÇÃO</strong></th>
            </tr>

            <?php
            require('conecta.php');

            $dados_select = mysqli_query($conn, "SELECT id, nome, sobrenome, email, data_nasc, obs FROM usuarios");

            while($dado = mysqli_fetch_array($dados_select)) {
                echo '<tr>';
                echo '<td>' . $dado['nome'] . '</td>';
                echo '<td>' . $dado['sobrenome'] . '</td>';
                echo '<td>' . $dado['email'] . '</td>';
                echo '<td>' . $dado['data_nasc'] . '</td>';
                echo '<td>' . $dado['obs'] . '</td>';
                echo '<td>
                        <form method="POST" action="editar_excluir.php" onsubmit="return confirm(\'Tem certeza que deseja excluir este registro?\');">
                            <input type="hidden" name="id" value="' . $dado['id'] . '">
                            <input type="submit" name="excluir" value="Excluir" class="botao-excluir">
                        </form>
                      </td>';
                echo '</tr>';
            }
            ?>
        </table>
        <br>
        <a href="index.html"><input type="button" value="Voltar"></a>
    </center>
</body>
</html>
