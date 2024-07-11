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
        background-color: #172026;
        border-radius: 5px;
    }
</style>

<div class="container-menu">
    <ul class="container-menu--items">
        <li>
            <a class="container-menu--item" href="controller.php?controller=ProdutoController&method=index">Pagina
                Inicial</a>
        </li>
        <li>
            <a class="container-menu--item"
                href="controller.php?controller=ProdutoController&method=cadastrar_produto">Cadastrar Produto</a>
        </li>
        <li>
            <a class="container-menu--item"
                href="controller.php?controller=ProdutoController&method=consultar_produto">Consultar Produtos</a>
        </li>
        <li>
            <a class="container-menu--item"
                href="controller.php?controller=ProdutoController&method=editar_produto">Alterar Produto</a>
        </li>
        <li>
            <a class="container-menu--item"
                href="controller.php?controller=ProdutoController&method=excluir_produto">Excluir Produto</a>
        </li>
    </ul>
</div>