<table class="table">
    <thead>
        <th>Código</th>
        <th>Nome</th>
        <th>Telefone</th>
        <th>Alterar</th>
        <th>Excluir</th>

    </thead>
    <tbody class="border border-dark p-3 rounded">
        <?php foreach ($funcionarios as $funcionario) : ?>
            <tr>
                <td>
                    <?php echo ($funcionario->codFun) ?>
                </td>
                <td>
                    <?php echo ($funcionario->nomeFun) ?>
                </td>
                <td>
                    <?php echo ($funcionario->foneFun) ?>
                </td>
                <td>
                <form method="POST">
                        <input type="hidden" name="codFunAlterar" value="<?php echo ($funcionario->codFun) ?>">
                        <button type="submit" class="btn btn-warning">Alterar</button>
                    </form>
                </td>
                <td>
                    <form method="POST">
                        <input type="hidden" name="codFunDeletar" value="<?php echo ($funcionario->codFun) ?>">
                        <button type="submit" class="btn btn-danger">Deletar</button>
                    </form>

                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>