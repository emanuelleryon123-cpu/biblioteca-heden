<h2>Cadastro de Empréstimo</h2>
<?= anchor('HomeController/index', 'Home') ?>
<hr>

<?= form_open('EmprestimoController/salvar') ?>
    <table>
        <tr>
            <td>Data Início: <input name='data_inicio' type="date" required></td>
            <td>Data Fim: <input name='data_fim' type="date"></td>
        </tr>
        <tr>
            <td>
                Livro:
                <select name="id_livro" required>
                    <option value="">Selecione um Livro</option>
                    <?php if (!empty($livros_lista)): ?>
                        <?php foreach($livros_lista as $livro) : ?>
                            <option value="<?= $livro['id'] ?>">ISBN: <?= $livro['isbn'] ?> (ID: <?= $livro['id'] ?>)</option>
                        <?php endforeach ?>
                    <?php endif; ?>
                </select>
            </td>
            <td>
                Usuário:
                <select name="id_usuario" required>
                    <option value="">Selecione um Usuário</option>
                    <?php if (!empty($usuarios_lista)): ?>
                        <?php foreach($usuarios_lista as $usuario) : ?>
                            <option value="<?= $usuario['cpf'] ?>"><?= $usuario['nome'] ?></option>
                        <?php endforeach ?>
                    <?php endif; ?>
                </select>
            </td>
        </tr>
        <tr>
            <td colspan="2">
                Bibliotecário:
                <select name="id_bibliotecario" required>
                    <option value="">Selecione o Bibliotecário</option>
                    <?php if (!empty($bibliotecarios)): ?>
                        <?php foreach($bibliotecarios as $bib) : ?>
                            <option value="<?= $bib['id'] ?>"><?= $bib['nome'] ?></option>
                        <?php endforeach ?>
                    <?php endif; ?>
                </select>
            </td>
        </tr>
    </table>
    <br>
    <button type='submit'>Cadastrar Empréstimo</button>
<?= form_close() ?>

<hr>

<h3>Lista de Empréstimos</h3>
<table border="1" width="100%" style="border-collapse: collapse; text-align: left;">
    <thead style="background-color: #f2f2f2;">
        <tr>
            <th>ID</th>
            <th>Data de Início</th>
            <th>Data de Fim</th>
            <th>ID Livro</th>
            <th>CPF Usuário</th>
            <th>ID Bibliotecário</th>
            <th>Ações</th>
        </tr>
    </thead>
    <tbody>
        <?php if (!empty($emprestimos)) : ?>
            <?php foreach($emprestimos as $e) : ?>
                <tr>
                    <td><?= $e['id'] ?></td>
                    <td><?= date('d/m/Y', strtotime($e['data_inicio'])) ?></td>
                    <td><?= $e['data_fim'] ? date('d/m/Y', strtotime($e['data_fim'])) : '<span style="color: orange;">Em aberto</span>' ?></td>
                    <td><?= $e['id_livro'] ?></td>
                    <td><?= $e['id_usuario'] ?></td>
                    <td><?= $e['id_bibliotecario'] ?></td>
                    <td>
                        <?= anchor('EmprestimoController/editar/' . $e['id'], 'Editar') ?> | 
                        <?= anchor('EmprestimoController/deletar/' . $e['id'], 'Excluir', ['onclick' => "return confirm('Deseja excluir?')"]) ?>
                    </td>
                </tr>
            <?php endforeach ?>
        <?php else : ?>
            <tr><td colspan="7">Nenhum empréstimo cadastrado.</td></tr>
        <?php endif ?>
    </tbody>
</table>