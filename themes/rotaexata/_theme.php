<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>Rota Exata</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300;400;500;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="<?= url("/themes/rotaexata/assets/css/boot.css") ?>">
        <link rel="stylesheet" href="<?= url("/themes/rotaexata/assets/css/style.css") ?>">
    </head>

    <body>
    <header class="main_header">
        <div class="main_header_content">
            <a href="#" class="logo">
                <h1>Rota Exata</h1>
            </a>

            <nav class="main_header_content_menu">
                <ul>
                    <li><a href="<?= url("/") ?>">Lista de Produtos</a></li>
                    <?php if(!\Source\Model\Auth::user()): ?>
                        <li><a href="<?= url("/login") ?>" class="action">Login</a></li>
                    <?php else: ?>
                        <li><a href="#">Adicionar Produto</a></li>
                        <li class="logout"><a href="<?= url("/logout") ?>">Sair</a></li>
                        <li class="auth"> Autenticado </li>
                    <?php endif ?>
                </ul>
            </nav>
        </div>
    </header>

    <main>
        <?= $v->section("content"); ?>
    </main>

    <script src="<?= url("/shared/scripts/jquery.min.js"); ?>"></script>
    <script src="<?= url("/shared/scripts/jquery-ui.js"); ?>"></script>
    <script src="<?= url("/themes/rotaexata/assets/js/scripts.js") ?>"></script>

    </body>
</html>