<?php $v->layout("_theme"); ?>

<div class="main_product">
    <section class="main_product_box">
        <header class="main_product_header">
            <h1>Adicionar novo produto</h1>
            <p>Os produtos ficam armazenados até a finalização da sessão atual!</p>
        </header>

        <article class="main_product_form">
            <form action="<?= url("/produto") ?>" method="post" id="products">
                <input type="hidden" name="action" value="create">
                <label>
                    <span>Nome do Produto:</span>
                    <input name="name" type="text"  id="name"/>
                </label>

                <label>
                    <span>Valor:</span>
                    <input name="value" type="number"  id="value"/>
                </label>

                <label>
                    <span>Descrição:</span>
                    <textarea name="desc" id="desc"></textarea>
                </label>

                <label>
                    <span>Opcionais A:</span>
                    <select name="opA" id="opA">
                        <option value="1">Opcional 1</option>
                        <option value="1">Opcional 2</option>
                        <option value="1">Opcional 3</option>
                    </select>
                </label>

                <label class="radio">
                    <span>Opcionais B:</span><br>
                    <label>
                        <br><input value="4" name="opB" type="radio"> Opcional 4
                    </label>
                    <label>
                        <br><input value="5" name="opB" type="radio"> Opcional 5
                    </label>
                    <label>
                        <br><input value="6" name="opB" type="radio"> Opcional 6
                    </label>
                    <label>
                        <br><input value="7" name="opB" type="radio"> Opcional 7<br>
                    </label>
                </label>

                <div class="actions">
                    <button type="submit">Salvar</button>
                    <button type="reset">Redefinir</button>
                </div>

            </form>
        </article>
    </section>
</div>

