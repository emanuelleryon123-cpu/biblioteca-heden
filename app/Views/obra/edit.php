<h2>Obra #<?=obra['id']?></h2>
<hr>
<?=form_open('ObraController/salvar')?>
    <label>Título: </label>
    <input name='titulo' type="text" value='<?=$obra['titulo']?>'>
    <label>Gênero</label>
    <select name="id_genero">
        <?php foreach($generos as $genero) : ?>
            <?php if($obra['id_genero'] == $genero['id']) : ?>
                <option value="<?=$genero['id']?>" selected>
                    <?=$genero['nome']?>
                </option>
                <?php else : ?>
                    <option value="<?=$genero['id']?>">
                        <?=$genero['nome']?>
                    </option>
            <?php endif ?>
        <?php endforeach ?>    
    </select>
    <input type="hidden" name="id" value='<?=$obra['id']?>'>
    <button type='submit'>Atualizar</button>
    <?=anchor(
        'ObraController/index',
        'Cancelar'
    )?>
    
<?=form_close()?>