<?php $v->layout("_theme"); ?>

<section class="main_home">
    <header class="main_home_header">
        <h1>Lista de Produtos</h1>
        <p>Aqui você encontra uma lista dos produtos cadastrados com algumas ordenações aplicadas</p>
    </header>


    <!--Inversa Valor-->
    <article>
        <header>
            <h2>Padrão</h2>
            <p>Função utilizada: Nenhuma</p>
        </header>

        <table>
            <tr>
                <td>Nome</td>
                <td>Descrição</td>
                <td>Valor</td>
                <td>Opcionais</td>
            </tr>

            <?php foreach ($products as $product): ?>
                <tr>
                    <td><?= $product["produtos"]["nome"] ?></td>
                    <td><?= $product["produtos"]["descricao"] ?></td>
                    <td><?= $product["produtos"]["valor"] ?></td>
                    <td>
                        <ul>
                            <?php foreach ($product["produtos"]["opcionais"] as $item): ?>
                                <li><?= $item ?></li>
                            <?php endforeach; ?>
                        </ul>
                    </td>
                </tr>
            <?php endforeach  ?>
        </table>
    </article>

    <!--Padrão -->
    <article>
        <header>
            <h2>Inversa</h2>
            <p>Função utilizada: <a href="https://www.php.net/manual/pt_BR/function.arsort">arsort ( array &$array [, int $sort_flags ] ) : bool</a> </p>
        </header>

        <table>
            <tr>
                <td>Nome</td>
                <td>Descrição</td>
                <td>Valor</td>
                <td>Opcionais</td>
            </tr>

            <?php arsort($products); foreach ($products as $product): ?>
                <tr>
                    <td><?= $product["produtos"]["nome"] ?></td>
                    <td><?= $product["produtos"]["descricao"] ?></td>
                    <td><?= $product["produtos"]["valor"] ?></td>
                    <td>
                        <ul>
                            <?php foreach ($product["produtos"]["opcionais"] as $item): ?>
                                <li><?= $item ?></li>
                            <?php endforeach; ?>
                        </ul>
                    </td>
                </tr>
            <?php endforeach  ?>
        </table>
    </article>

    <!--Aleatório-->
    <article>
        <header>
            <h2>Aleatório</h2>
            <p>Função utilizada: <a href="https://www.php.net/manual/pt_BR/function.shuffle.php">shuffle ( array &$array ) : bool</a></p>
        </header>

        <table>
            <tr>
                <td>Nome</td>
                <td>Descrição</td>
                <td>Valor</td>
                <td>Opcionais</td>
            </tr>

            <?php shuffle($products); ;foreach ($products as $product): ?>
                <tr>
                    <td><?= $product["produtos"]["nome"] ?></td>
                    <td><?= $product["produtos"]["descricao"] ?></td>
                    <td><?= $product["produtos"]["valor"] ?></td>
                    <td>
                        <ul>
                            <?php foreach ($product["produtos"]["opcionais"] as $item): ?>
                                <li><?= $item ?></li>
                            <?php endforeach; ?>
                        </ul>
                    </td>
                </tr>
            <?php endforeach  ?>
        </table>
    </article>

    <!--Ordenada-->
    <article>
        <header>
            <h2>Ordenada</h2>
            <p>Função utilizada: <a href="https://www.php.net/manual/pt_BR/function.sort">sort ( array &$array [, int $sort_flags = SORT_REGULAR ] ) : bool</a> </p>
        </header>

        <table>
            <tr>
                <td>Nome</td>
                <td>Descrição</td>
                <td>Valor</td>
                <td>Opcionais</td>
            </tr>

            <?php sort($products); foreach ($products as $product): ?>
                <tr>
                    <td><?= $product["produtos"]["nome"] ?></td>
                    <td><?= $product["produtos"]["descricao"] ?></td>
                    <td><?= $product["produtos"]["valor"] ?></td>
                    <td>
                        <ul>
                            <?php foreach ($product["produtos"]["opcionais"] as $item): ?>
                                <li><?= $item ?></li>
                            <?php endforeach; ?>
                        </ul>
                    </td>
                </tr>
            <?php endforeach  ?>
        </table>
    </article>

</section>
