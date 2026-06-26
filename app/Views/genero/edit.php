<h2>Gênero #<?=$genero['id']?></h2>
<hr>
<?=form_open('GeneroController/salvar')?>
<label>Nome: </label>
<input name='nome' type="text" value='<?=$genero['nome']?>'>
<input name='id' type="hidden" value='<?=$genero['id']?>'>
<button type='submit'>Atualizar</button>
<?=anchor(
    'GeneroController/index',
    'Voltar'
    )?>
<?=form_close()?>