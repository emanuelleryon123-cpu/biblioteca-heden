<h2>Editar Livro</h2>
<?= anchor('LivroController/index', 'Voltar para Lista') ?>
<hr>

<?= form_open('LivroController/atualizar') ?>
    <input type="hidden" name="id" value="<?= $livro['id'] ?>">
    <table>
        <tr>
            <td>ISBN: <input name='isbn' type="text" value="<?= $livro['isbn'] ?>" required></td>
            <td>Páginas: <input name='paginas' type="number" value="<?= $livro['paginas'] ?>" required></td>
        </tr>
        <tr>
            <td>Ano: <input name='ano' type="number" value="<?= $livro['ano'] ?>" required></td>
            <td>ID Obra: <input name='id_obra' type="number" value="<?= $livro['id_obra'] ?>" required></td>
        </tr>
        <tr>
            <td colspan="2">
                ID Editora: <input name='id_editora' type="number" value="<?= $livro['id_editora'] ?>" required>
            </td>
        </tr>
    </table>
    <br>
    <button type='submit'>Salvar Alterações</button>
<?= form_close() ?>