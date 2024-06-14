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
        }

        main {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh; 
        }

        h1 {
            font-size: 25px; 
            margin-bottom: 20px; 
        }

        form {
            background-color: white;
            border: 1px solid black;
            border-radius: 5px;
            padding: 20px; 
            max-width: 400px; 
            width: 100%; 
        }

        .form-input {
            width: 100%;
            border: 1px solid #ccc; 
            border-radius: 5px;
            height: 40px;
            margin-bottom: 15px; 
            padding: 10px; 
            font-size: 16px;         
        }

        .form-input:focus {
            border-color: cornflowerblue; 
            outline: none; 
        }

        .form-input::placeholder {
            color: #999; 
        }

        .form-submit {
            background-color: dodgerblue;
            color: white;
            border: none;
            border-radius: 5px;
            padding: 10px 20px;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.2s ease;
        }

        .form-submit:hover {
            background-color: #007acc;
        }

    </style>

</head>

<body>

    <main>
    <?php include ('menu.php'); ?>
        <form action="controller.php?controller=UsuarioController&method=salvar" method="POST" >
            <h1>Por Favor, insira os dados:</h1>
            <input type="hidden" name="method" value="salvar">
            <input type="text" name="nomeCompleto" class="form-input" placeholder="Nome Completo" required>
            <input type="text" name="apelido" class="form-input" placeholder="Apelido" required>
            <input type="password" name="senha" class="form-input" placeholder="Senha" required>
            <button type="submit" class="form-submit">Enviar</button>
        </form>
    </main>

</body>

</html>
