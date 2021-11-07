<form method="Post">
    <div>
        <h1> Para cadastrar um funcionário primeiro deve caddastrar como usuário</h1>
        <h2>Se já vez, coloque a informação abaixo</h2>
        <br>
        <label for="codusu" class="forma-label">Digite o código do Usuário</label>
        <input type="number" name="codusu" id="codusu" class="form-control" placeholder="Exemplo: 123">
    </div>
    <br>
    <div class="col-12">
        <button type="submit" class="btn btn-primary">Buscar</button>
    </div>
    <br>
</form>

<?php

$request = service('request');

$codusu = isset($usuario->codusu) ? $usuario->codusu : 0;

$emailUsu = isset($usuario->emailUsu) ? $usuario->emailUsu : '';

?>


<form method="Post">

    <div class="mb-1">
        <label for="codusu" class="form-label">Código Usuário </label>
        <input type="text" class="form-control" id="codusu" value=" <?= $codusu ?>" name="codusu" readonly aria-describedby="emailHelp">
    </div>

    <div class="mb-1">
        <label for="emaiUsu" class="form-label">Email do Usuário </label>
        <input type="text" class="form-control" id="emailUsu" value=" <?= $emailUsu ?>" name="emailUsu" readonly aria-describedby="emailHelp">
    </div>

    <div class="mb-1">
        <label for="nomeFun" class="form-label">Nome do Funcionário </label>
        <input type="text" class="form-control" id="nomeFun" name="nomeFun" aria-describedby="emailHelp">
    </div>

    <div class="mb-1">
        <label for="foneFun" class="form-label">Telefone do Funcionário </label>
        <input type="text" class="form-control" id="foneFun" name="foneFun" aria-describedby="emailHelp">
    </div>

    <br>
    <button type="submit" class="btn btn-success">Cadastrar</button>
</form>