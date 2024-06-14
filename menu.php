<style>
    .container-menu {
        position: fixed;
        top: 0;
        width: 100%;
        background-color: #023535;
        z-index: 1000;
        height: 70px;
    }

    .container-menu--items {
        list-style: none;
        display: flex;

    }

    .container-menu--items li {
        display: inline;
    }

    .container-menu--item {
        color: white;
        text-decoration: none;
        padding: 10px 15px;
        display: block;
    }

    .container-menu--item:hover {
        background-color: ##172026;
        border-radius: 5px;
    }
</style>

<div class="container-menu">
    <ul class="container-menu--items">
        <li>
            <a class="container-menu--item" href="controller.php?controller=UsuarioController&method=index">Pagina
                Inicial</a>
        </li>
        <li>
            <a class="container-menu--item"
                href="controller.php?controller=UsuarioController&method=cadastrar_usuario">Cadastrar Usuario</a>
        </li>
        <li>
            <a class="container-menu--item"
                href="controller.php?controller=UsuarioController&method=consultar_usuario">Consultar Usuarios</a>
        </li>
        <li>
            <a class="container-menu--item"
                href="controller.php?controller=UsuarioController&method=editar_usuario">Alterar Usuario</a>
        </li>
        <li>
            <a class="container-menu--item"
                href="controller.php?controller=UsuarioController&method=excluir_usuario">Excluir Usuario</a>
        </li>
    </ul>
</div>