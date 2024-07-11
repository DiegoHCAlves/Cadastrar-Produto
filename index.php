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

        main {
            height: 100vh;
            padding-top: 20px;
            margin-top: 70px;
            width: 100%;
            background-color: #e0f7fa;
            text-align: center;
        }

        main h1 {
            font-size: 60px;
        }

        main p {
            font-size: 40px;
        }

        .cabecalho {
            position: absolute;
            left: 50%;
            top: 50%;
            transform: translate(-50%, -50%);
            transition: all 0.5s ease;
            text-align: center;
            --rotate-direction: rotate(5deg);
        }

        .cabecalho.rotating {
            transform: translate(-50%, -50%) scale(1.1) var(--rotate-direction);
            color: white;
        }
    </style>
</head>

<body>
    <?php include ('menu.php'); ?>

    <main>
        <div class="cabecalho" data-rotate="right">
            <h1>
                Seja Bem Vindo
            </h1>
            <p>
                O que deseja fazer?
            </p>
        </div>
    </main>

    <script>
        const cabecalho = document.querySelector('.cabecalho');
        let contador = 0;

        function rotateAndChangeColor() {
            if (contador >= 6) return;

            contador++;
            const main = document.getElementsByTagName('main')[0];
            const menu = document.getElementsByClassName('container-menu')[0];
            const menuItems = document.querySelectorAll('.container-menu--item');

            if (cabecalho.dataset.rotate === 'right') {
                cabecalho.style.setProperty('--rotate-direction', 'rotate(-5deg)');
                cabecalho.dataset.rotate = 'left';
                main.style.backgroundColor = '#023535';
                menu.style.backgroundColor = '#e0f7fa';
                menuItems.forEach(item => item.style.color = 'black');
            } else {
                cabecalho.style.setProperty('--rotate-direction', 'rotate(5deg)');
                cabecalho.dataset.rotate = 'right';
                main.style.backgroundColor = '#e0f7fa';
                menu.style.backgroundColor = '#023535';
                menuItems.forEach(item => item.style.color = 'white');
            }

            cabecalho.classList.toggle('rotating');

            setTimeout(rotateAndChangeColor, 1000);
        }

        rotateAndChangeColor();
    </script>
</body>

</html>