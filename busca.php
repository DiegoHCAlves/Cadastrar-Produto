<style>
    .busca-container {
        margin: 20px 0;
        text-align: center;
        position: absolute;
        top: 15%;
        left: 50%;
        transform: translate(-50%, 0%);
    }

    .busca-container input {
        padding: 10px;
        width: 500px;
        border-radius: 5px;
        border: 1px solid #ddd;
    }

    .busca-container button {
        padding: 10px 15px;
        border-radius: 5px;
        border: none;
        background-color: #00796b;
        color: #ffffff;
        cursor: pointer;
    }

    .busca-container button:hover {
        background-color: #00796b;
    }
</style>

<div class="busca-container">
    <input type="text" id="busca" placeholder="Buscar por Id ou Nome">
    <button onclick="buscar()">Buscar</button>
</div>