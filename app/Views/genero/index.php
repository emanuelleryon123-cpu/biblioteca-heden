<h2>Gênero</h2>
<?=anchor(
    'HomeController/index',
    'Home'
)?>
<hr>
<h3>Novo Gênero</h3>
<?=form_open('GeneroController/salvar')?>
    <label>Nome: </label>
    <input name='nome' type="text">
    <button type='submit'>Cadastrar</button>
<?=form_close()?>
<h3>Gêneros</h3>
<table>
    <tr>
        <td>ID</td>
        <td>NOME</td>
    </tr>
    <?php foreach($generos as $g):?>
        <tr>
            <td><?=$g['id']?></td>
            <td>
                <?=anchor('GeneroController/editar/'.$g['id'],$g['nome'])?>
            </td>
        </tr>
        <?php endforeach?>
</table>
