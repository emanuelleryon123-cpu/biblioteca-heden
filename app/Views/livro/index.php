<h2>Cadastro de Livro</h2>
<?= anchor('HomeController/index', 'Home') ?>
<hr>

<?= form_open('LivroController/salvar') ?>
    <table>
        <tr>
            <td>ISBN: <input name='isbn' type="text" required></td>
            <td>Páginas: <input name='paginas' type="number" required></td>
        </tr>
        <tr>
            <td>Ano: <input name='ano' type="number" required></td>
            <td>ID Obra: <input name='id_obra' type="number" required></td>
        </tr>
        <tr>
            <td colspan="2">
                ID Editora: <input name='id_editora' type="number" required>
            </td>
        </tr>
    </table>
    <br>
    <button type='submit'>Cadastrar Livro</button>
<?= form_close() ?>

<hr>

<h3>Lista de Livros</h3>
<table border="1" width="100%" style="border-collapse: collapse; text-align: left;">
    <thead style="background-color: #f2f2f2;">
        <tr>
            <th>ID</th>
            <th>ISBN</th>
            <th>Páginas</th>
            <th>Ano</th>
            <th>ID Obra</th>
            <th>ID Editora</th>
            <th>Ações</th>
        </tr>
    </thead>
    <tbody>
        <?php if (!empty($livros)) : ?>
            <?php foreach($livros as $l) : ?>
                <tr>
                    <td><?= $l['id'] ?></td>
                    <td><?= $l['isbn'] ?></td>
                    <td><?= $l['paginas'] ?></td>
                    <td><?= $l['ano'] ?></td>
                    <td><?= $l['id_obra'] ?></td>
                    <td><?= $l['id_editora'] ?></td>
                    <td>
                        <?= anchor('LivroController/editar/' . $l['id'], 'Editar') ?> | 
                        <?= anchor('LivroController/deletar/' . $l['id'], 'Excluir', ['onclick' => "return confirm('Deseja excluir?')"]) ?>
                    </td>
                </tr>
            <?php endforeach ?>
        <?php else : ?>
            <tr><td colspan="7">Nenhum livro cadastrado.</td></tr>
        <?php endif ?>
    </tbody>
</table>