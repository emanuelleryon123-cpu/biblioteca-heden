<h2>Editar Empréstimo</h2>
<?= anchor('EmprestimoController/index', 'Voltar para Lista') ?>
<hr>

<?= form_open('EmprestimoController/atualizar') ?>
    <input type="hidden" name="id" value="<?= $emprestimo['id'] ?>">
    <table>
        <tr>
            <td>Data Início: <input name='data_inicio' type="date" value="<?= $emprestimo['data_inicio'] ?>" required></td>
            <td>Data Fim: <input name='data_fim' type="date" value="<?= $emprestimo['data_fim'] ?>"></td>
        </tr>
        <tr>
            <td>
                Livro:
                <select name="id_livro" required>
                    <?php foreach($livros_lista as $livro) : ?>
                        <option value="<?= $livro['id'] ?>" <?= $livro['id'] == $emprestimo['id_livro'] ? 'selected' : '' ?>>
                            ISBN: <?= $livro['isbn'] ?> (ID: <?= $livro['id'] ?>)
                        </option>
                    <?php endforeach ?>
                </select>
            </td>
            <td>
                Usuário:
                <select name="id_usuario" required>
                    <?php foreach($usuarios_lista as $usuario) : ?>
                        <option value="<?= $usuario['cpf'] ?>" <?= $usuario['cpf'] == $emprestimo['id_usuario'] ? 'selected' : '' ?>>
                            <?= $usuario['nome'] ?>
                        </option>
                    <?php endforeach ?>
                </select>
            </td>
        </tr>
        <tr>
            <td colspan="2">
                Bibliotecário:
                <select name="id_bibliotecario" required>
                    <?php foreach($bibliotecarios as $bib) : ?>
                        <option value="<?= $bib['id'] ?>" <?= $bib['id'] == $emprestimo['id_bibliotecario'] ? 'selected' : '' ?>>
                            <?= $bib['nome'] ?>
                        </option>
                    <?php endforeach ?>
                </select>
            </td>
        </tr>
    </table>
    <br>
    <button type='submit'>Salvar Alterações</button>
<?= form_close() ?>