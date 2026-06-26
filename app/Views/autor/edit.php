<h2>Editar #<?=$autor['id']?></h2>
<hr>
<?=form_open('AutorController/salvar')?>
    <label>Nome: </label>
    <input type="hidden" name='id' value='<?=$autor['id']?>'>
    <input type="text" name='nome' value='<?=$autor['nome']?>'>
    <button type='submit'>Atualizar</button>
    <?=anchor(
        'AutorController/index',
        'Voltar'
    )?>
 <?=form_close()?>   