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
        }


        main {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            text-align: center;
        }

        h1 {
            font-size: 40px;
        }

        p {
            font-size: 30px;
        }

        ul {
            list-style: none;
            margin: 0;
            padding: 0;
        }

        li {
            background-color: white;
            border: 1px solid black;
            border-radius: 15px;
            margin: 5px 0;
            padding: 10px;
            font-size: 30px;
        }

        li a {
            text-decoration: none;
            color: inherit;
            display: block;
            padding: 10px;
        }

        li a:hover {
            background-color: cadetblue;
            border-radius: 15px;
        }
    </style>

</head>

<body>

    <main>
        <div class="cabecalho">
            <h1>
                Seja Bem Vindo
            </h1>
            <p>
                O que deseja fazer?
            </p>
        </div>
        <div class="menu">
            <div class="container-menu">
                <div class="container-menu">
                    <ul class="container-menu--items">
                        <li>
                            <a class="container-menu--item"
                                href="controller.php?controller=UsuarioController&method=cadastrar_usuario">Cadastrar
                                Usuario</a>
                        </li>
                        <li>
                            <a class="container-menu--item"
                                href="controller.php?controller=UsuarioController&method=consultar_usuario">Consultar
                                Usuarios</a>
                        </li>
                        <li>
                            <a class="container-menu--item"
                                href="controller.php?controller=UsuarioController&method=nova_tarefa">Alterar
                                Usuario</a>
                        </li>
                        <li>
                            <a class="container-menu--item"
                                href="controller.php?controller=UsuarioController&method=listar_tarefa">Excluir
                                Usuario</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </main>


</body>

</html>