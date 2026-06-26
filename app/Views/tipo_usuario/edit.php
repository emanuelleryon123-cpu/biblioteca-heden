<h2>Editar Tipo de Usuário</h2>
<?= anchor('TipoUsuarioController/index', 'Cancelar e Voltar') ?>
<hr>

<?= form_open('TipoUsuarioController/salvar') ?>
    
    <input type="hidden" name="id" value="<?= $tipo['id'] ?>">

    <p>
        <label>ID:</label><br>
        <input type="text" value="<?= $tipo['id'] ?>" disabled> 
        <small>(O ID não pode ser alterado)</small>
    </p>

    <p>
        <label>Nome do Tipo:</label><br>
        <input name='nome' type="text" value="<?= $tipo['nome'] ?>" required>
    </p>

    <button type='submit'>Salvar Alterações</button>
    <?= anchor('TipoUsuarioController/index', 'Descartar') ?>

<?= form_close() ?>