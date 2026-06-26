<h2>Editar Usuário</h2>
<?= anchor('UsuarioController/index', 'Voltar para Lista') ?>
<hr>

<?= form_open('UsuarioController/salvar') ?>
    
    <input type="hidden" name="cpf" value="<?= $usuario['cpf'] ?>">

    <table>
        <tr>
            <td>CPF: 
                <input type="text" value="<?= $usuario['cpf'] ?>" disabled> 
                <small>(Não pode ser alterado)</small>
            </td>
            <td>Nome: 
                <input name='nome' type="text" value="<?= $usuario['nome'] ?>" required>
            </td>
        </tr>
        <tr>
            <td>Email: 
                <input name='email' type="email" value="<?= $usuario['email'] ?>">
            </td>
            <td>Telefone: 
                <input name='telefone' type="text" value="<?= $usuario['telefone'] ?>">
            </td>
        </tr>
        <tr>
            <td>Endereço: 
                <input name='endereco' type="text" value="<?= $usuario['endereco'] ?>">
            </td>
            <td>Número: 
                <input name='numero' type="text" value="<?= $usuario['numero'] ?>">
            </td>
        </tr>
        <tr>
            <td>Bairro: 
                <input name='bairro' type="text" value="<?= $usuario['bairro'] ?>">
            </td>
            <td>Cidade: 
                <input name='cidade' type="text" value="<?= $usuario['cidade'] ?>">
            </td>
        </tr>
        <tr>
            <td>UF: 
                <input name='uf' type="text" maxlength="2" value="<?= $usuario['uf'] ?>">
            </td>
            <td>Data Nasc.: 
                <input name='data_nascimento' type="date" value="<?= $usuario['data_nascimento'] ?>">
            </td>
        </tr>
        <tr>
            <td colspan="2">
                Tipo de Usuário:
                <select name="idtipo_usuario" required>
                    <?php foreach($tipos as $tipo) : ?>
                        <option value="<?= $tipo['id'] ?>" <?= ($tipo['id'] == $usuario['idtipo_usuario']) ? 'selected' : '' ?>>
                            <?= $tipo['nome'] ?>
                        </option>
                    <?php endforeach ?>
                </select>
            </td>
        </tr>
    </table>
    <br>
    <button type='submit'>Salvar Alterações</button>
    <?= anchor('UsuarioController/index', 'Cancelar') ?>
<?= form_close() ?>