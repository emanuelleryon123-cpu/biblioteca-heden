<h2>Obra</h2>
<?=anchor(
    'HomeController/index',
    'Home'
)?>
<hr>
<h3>Nova Obra</h3>
<?=form_open('ObraController/salvar')?>
<label>Titulo: </label>
<input name='titulo' type="text">
<label>Gênero</label>
<select name="id_genero">
    <option selected>Selecione...</option>
    <?php foreach($generos as $g) : ?>
        <option value="<?=$g['id']?>">
            <?=$g['nome']?>
        </option>
    <?php endforeach ?>   
</select>
<button type='submit'>Cadastrar</button>
<?=form_close()?>
<h3>Obras</h3>
<table>
    <tr>
        <td>ID</td>
        <td>TITULO</td>
        <td>GÊNERO</td>
    </tr>
    <?php foreach($obras as $obra) : ?>
        <tr>
            <td><?=$obra['id']?></td>
            <td>
                <?=anchor(
                    'ObraController/editar/'.$obra['id'],
                    $obra['titulo']
                )?>
            </td>
            <td>
                <?php foreach($generos as $genero) : ?>
                    <?php if($obra['id_genero'] == $genero['id']) : ?>
                        <?=$genero['nome']?>
                    <?php endif ?>
                <?php endforeach ?>    
            </td>
        </tr>
        <?php endforeach ?>
</table> 