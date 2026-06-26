<h2>Cadastro de Usuário</h2>
<?= anchor('HomeController/index', 'Home') ?>
<hr>

<?= form_open('UsuarioController/salvar') ?>
    <table>
        <tr>
            <td>CPF: <input name='cpf' type="text" required></td>
            <td>Nome: <input name='nome' type="text" required></td>
        </tr>
        <tr>
            <td>Email: <input name='email' type="email"></td>
            <td>Telefone: <input name='telefone' type="text"></td>
        </tr>
        <tr>
            <td>Endereço: <input name='endereco' type="text"></td>
            <td>Número: <input name='numero' type="text"></td>
        </tr>
        <tr>
            <td>Bairro: <input name='bairro' type="text"></td>
            <td>Cidade: <input name='cidade' type="text"></td>
        </tr>
        <tr>
            <td>UF: <input name='uf' type="text" maxlength="2"></td>
            <td>Data Nasc.: <input name='data_nascimento' type="date"></td>
        </tr>
        <tr>
            <td colspan="2">
                Tipo de Usuário:
                <select name="idtipo_usuario" required>
                    <?php foreach($tipos as $tipo) : ?>
                        <option value="<?= $tipo['id'] ?>"><?= $tipo['nome'] ?></option>
                    <?php endforeach ?>
                </select>
            </td>
        </tr>
    </table>
    <br>
    <button type='submit'>Cadastrar Usuário</button>
<?= form_close() ?>

<hr>

<h3>Lista de Usuários</h3>
<table border="1" width="100%" style="border-collapse: collapse; text-align: left;">
    <thead style="background-color: #f2f2f2;">
        <tr>
            <th>CPF</th>
            <th>Nome</th>
            <th>Email</th>
            <th>Telefone</th> <th>Cidade/UF</th>
            <th>Ações</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($usuarios as $u) : ?>
            <tr>
                <td><?= $u['cpf'] ?></td>
                <td><?= $u['nome'] ?></td>
                <td><?= $u['email'] ?></td>
                <td><?= $u['telefone'] ?></td> <td><?= $u['cidade'] ?>/<?= $u['uf'] ?></td>
                <td>
                    <?= anchor('UsuarioController/editar/' . $u['cpf'], 'Editar') ?> | 
                    <?= anchor('UsuarioController/deletar/' . $u['cpf'], 'Excluir', ['onclick' => "return confirm('Deseja excluir?')"]) ?>
                </td>
            </tr>
        <?php endforeach ?>
    </tbody>
</table>