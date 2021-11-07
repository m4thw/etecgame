<form method="POST">
    <div class="mb-3 col-2" >
        <label class="form-label" for="codigousuarioinput">Código: </label>
        <input class="form-control text-center" type="text" name="codFunAlterar" readonly id="codigofuncionarioinput" value="<?php echo($funcionario->codFun)?>">
    </div>
    <div class="mb-3 col-6">
        <label class="form-label" for="emailusuarioinput">Nome: </label>
        <input class="form-control" type="text" name="nomeFun" id="nomeFun" value="<?php echo($funcionario->nomeFun)?>">
    </div>
    <div class="mb-3 col-6">
        <label class="form-label" for="emailusuarioinput">Telefone: </label>
        <input class="form-control" type="text" name="foneFun" id="foneFun" value="<?php echo($funcionario->foneFun)?>">
    </div>
    
    <div>
        <button type="submit" class="btn btn-primary">Alterar</button>
    </div>
</form>