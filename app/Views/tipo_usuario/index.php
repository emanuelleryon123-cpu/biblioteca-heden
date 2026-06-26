<h2>Gerenciamento de Tipos de Usuário</h2>
<?= anchor('HomeController/index', 'Voltar para Home') ?> | <?= anchor('UsuarioController/index', 'Gerenciar Usuários') ?>
<hr>

<h3>Novo Tipo de Usuário</h3>
<?= form_open('TipoUsuarioController/salvar') ?>
    <label>Nome do Tipo: </label>
    <input name='nome' type="text" placeholder="Ex: Administrador" required>
    <button type='submit'>Cadastrar</button>
<?= form_close() ?>

<hr>

<h3>Tipos Cadastrados</h3>
<table border="1" width="50%" style="border-collapse: collapse; text-align: left;">
    <thead style="background-color: #f2f2f2;">
        <tr>
            <th>ID</th>
            <th>NOME</th>
            <th>AÇÕES</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($tipos as $tipo) : ?>
            <tr>
                <td><?= $tipo['id'] ?></td>
                <td><?= $tipo['nome'] ?></td>
                <td>
                    <?= anchor('TipoUsuarioController/editar/' . $tipo['id'], 'Editar') ?> | 
                    
                    <?= anchor('TipoUsuarioController/deletar/' . $tipo['id'], 'Excluir', ['onclick' => "return confirm('Deseja excluir este tipo?')"]) ?>
                </td>
            </tr>
        <?php endforeach ?>
    </tbody>
</table>