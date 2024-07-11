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
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        body {
            background-color: #e0f7fa;
            margin: 0;
            padding: 0;
        }

        main {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            padding-top: 20px;
            margin-top: 70px;
            width: 100%;
        }

        table {
            width: 80%;
            max-width: 800px;
            border-collapse: collapse;
            background-color: #ffffff;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            position: absolute;
            top: 30%;

        }

        th,
        td {
            padding: 12px 15px;
            text-align: center;
            border-bottom: 1px solid #dddddd;
        }

        th {
            background-color: #00796b;
            color: #ffffff;
            font-weight: bold;
        }

        tbody tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        tbody tr:hover {
            background-color: #c8e6c9;
        }

        caption {
            caption-side: top;
            font-size: 1.5em;
            margin: 20px 0;
            color: #00796b;
            font-weight: bold;
        }

        .botao {
            width: 40px;
            height: 40px;
            background-color: #00796b;
            color: #ffffff;
            display: flex;
            position: relative;
            left: 50%;
            transform: translate(-50%);
            align-items: center;
            justify-content: center;
            border-radius: 50%;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .botao:hover {
            background-color: #004d40;
        }

        .botao:focus {
            outline: none;
            box-shadow: 0 0 0 3px rgba(0, 150, 136, 0.3);
        }

        
    </style>
</head>

<body>
    <?php include ('menu.php'); ?>

    <?php include ('busca.php'); ?>    

    <main>

        <?php
        $controller = new ProdutoController();
        $result = $controller->getTodos();

        if ($result) {
            ?>
            <table>
                <caption>LISTA DE PRODUTOS</caption>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>NOME</th>
                        <th>VALOR</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($result as $row): ?>
                        <tr>
                            <td>
                                <?= $row["id"]; ?>
                            </td>
                            <td>
                                <?= $row["nomeProduto"]; ?>
                            </td>
                            <td>
                                <?= $row["valor"]; ?>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        <?php } ?>
    </main>

    <script>

        function buscar() {
            const input = document.getElementById('busca').value.toUpperCase();
            const table = document.querySelector('table tbody');
            const rows = table.getElementsByTagName('tr');


            for (let i = 0; i < rows.length; i++) {
                const cells = rows[i].getElementsByTagName('td');
                let encontrou = false;

                for (let j = 0; j < cells.length; j++) {
                    const cellText = cells[j].textContent || cells[j].innerText;
                    if (cellText.toUpperCase().indexOf(input) > -1) {
                        encontrou = true;
                        break;
                    }
                }

                if (encontrou) {
                    rows[i].style.display = '';
                } else {
                    rows[i].style.display = 'none';
                }
            }
        }


    </script>
</body>

</html>