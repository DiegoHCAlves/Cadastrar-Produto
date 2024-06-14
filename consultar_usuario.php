<?php
require "controller.php";
?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <style>
        * {
            box-sizing: border-box;
        }

        body {
            background-color: #015958;
            font-family: Arial, sans-serif;
            overflow: hidden;
            margin: 0;
        }

        main {

            height: 100vh;
            padding-top: 20px;
            margin-top: 70px;
            width: 100%;
        }

        table {
            width: 60%;
            position: absolute;
            top: 35%;
            left: 50%;
            transform: translate(-50%, -50%);
            border-collapse: collapse;
            background-color: #5FCDD9;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);

        }

        th,
        td {
            padding: 10px;
            text-align: left;
            border: 1px solid #ddd;
            text-align: center;
        }

        th {
            background-color: #0CABA8;
        }

        tbody tr:nth-child(even) {
            background-color: #0CABA3;
        }

        tbody tr:hover {
            background-color: #008F8C;
        }

        caption {
            caption-side: top;
            font-size: 1.5em;
            margin: 30px 0 10px 0;
            padding: 10px;
            color: black;
            font-weight: bold;
            background-color: #0CABA8;
            border: 1px;
            border-color: black;
        }

        .botao {
            width: 30px;
            height: 50%;
            background-color: white;
            padding: 10px;
            position: relative;
            left: 50%;
            transform: translate(-50%);
            border-radius: 5px;
            cursor: pointer;
        }

        .botao:hover {
            background-color: #f1f1f1;
            cursor: pointer;
        }
    </style>

</head>

<body>
    <?php include ('menu.php'); ?>

    <main>

        <?php
        $controller = new UsuarioController();
        $result = $controller->getTodos();

        if ($result) {
            ?>

            <table>
                <caption>LISTA DE USUARIOS</caption>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>NOME COMPLETO</th>
                        <th>APELIDO</th>
                        <th>EDITAR</th>
                        <th>EXCLUIR</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($result as $row): ?>
                        <tr>
                            <td>
                                <?= $row["id"]; ?>
                            </td>
                            <td>
                                <?= $row["nome_completo"]; ?>
                            </td>
                            <td>
                                <?= $row["apelido"]; ?>
                            </td>
                            <td>
                                <div class="botao" onclick="exibirEditarUsuario()">

                                </div>
                            </td>
                            <td>
                                <div class="botao" onclick="exibirExcluirUsuario()">
                                </div>
                            </td>

                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        <?php } ?>
    </main>
    <script>

        function exibirEditarUsuario() {
            window.location.href = 'controller.php ? controller = UsuarioController & method=editar_usuario';
        }

        function exibirExcluirUsuario() {
            window.location.href = 'controller.php ? controller = UsuarioController & method=excluir_usuario';
        }

    </script>
</body>

</html>