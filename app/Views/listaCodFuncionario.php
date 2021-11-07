<form method="Post" class="border border-dark p-3 rounded">
    <div >
        <label for="codFun" class="forma-label"><h3>Digite o código do funcionário</h3></label>
        <br>
        <input type="number" name="codFun" id="codFun" class="form-control" placeholder="Exemplo: 123">
    </div>
    <br>
    <div class="col-12">
        <button type="submit" class="btn btn-primary">Buscar</button>
    </div>
</form>

<table class="table">
    <thead>
        <th>Código</th>
        <th>Nome</th>
        <th>Fone</th>
        <th>Alterar</th>
        <th>Deletar</th>
    </thead>
    <tbody  class="border border-dark p-3 rounded" >
        <?php
        $codFun = isset($funcionario->codFun) ? $funcionario->codFun : 0;
        $nomeFun = isset($funcionario->nomeFun) ? $funcionario->nomeFun : "";
        $foneFun = isset($funcionario->foneFun) ? $funcionario->foneFun : "";
        ?>
        <tr>
            <td><?php echo ($codFun) ?></td>
            <td><?php echo ($nomeFun) ?></td>
            <td><?php echo ($foneFun) ?></td>
            <td>
                <form method="POST">
                    <input type="hidden" name="codFunAlterar" value="<?php echo ($codFun) ?>">
                    <button type="submit" class="btn btn-warning">Alterar</button>
                </form>
            </td>
            <td>
                <form method="POST">
                    <input type="hidden" name="codFunDeletar" value="<?php echo ($codFun) ?>">
                    <button type="submit" class="btn btn-danger">Deletar</button>
                </form>
            </td>
        </tr>
        

    </tbody>
</table>