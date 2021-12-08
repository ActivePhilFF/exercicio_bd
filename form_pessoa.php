<?php
$pattern = "^[a-z0-9.]+@[a-z0-9]+\.[a-z]+\.([a-z]+)?$";
if (!isset($pessoa)) {
    $pessoa['codigo'] = "";
    $pessoa['nome'] = "";
    $pessoa['email'] = "";
    $pessoa['imagem'] = "";
} ?>

<nav class="navbar navbar-dark bg-dark">
    <div id="form">
        <form name="form-pessoa" action="pessoa.php" method="POST" enctype="multipart/form-data">
            <input type="hidden" name="codigo" value="<?PHP echo $pessoa['codigo'] ?>">

            <div>
                <input pattern="[A-Za-z]+\s[A-Za-z]+" class="form-control me-2" type="text" name="nome" value="<?PHP echo $pessoa['nome'] ?>" required placeholder="Nome completo">
            </div>
            <div>
                <input pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" class="form-control me-2" type="text" name="email" value="<?PHP echo $pessoa['email'] ?>" required placeholder="E-mail">
            </div>
            <div class="btn-group" role="group" aria-label="Basic example">
                <label for="hiddenButton" class="btn btn-warning">Selecione uma imagem</label>
                <input style="visibility:hidden;" id="hiddenButton" type="file" name="imagem" value="<?PHP echo $pessoa['imagem'] ?>" required placeholder="Imagem">
                <input class="btn btn-secondary" type="submit" name="enviar" value="enviar">
            </div>

        </form>
    </div>
</nav>


<hr />