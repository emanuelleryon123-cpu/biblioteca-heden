<h2>Autor</h2>
<?=anchor(
    'HomeController/index',
     'Home'
)?>
<hr>
<h3>Novo Autor</h3>
<p>
    <?=form_open('AutorController/salvar')?>
    <label>Nome:</label>
    <input type="text" name="nome">
    <button type='submit'>Cadastrar</button>
    <?=form_close()?>
</p>
<h3>Autores</h3>
<p>
   <table>
    <tr>
        <td>ID</td>
        <td>NOME</td>
    </tr>
    <?php foreach($autores as $a) : ?>
        <tr>
            <td><?=$a['id']?></td>
            <td>
                <?=anchor(
                    'AutorController/editar/'.$a['id'],
                    $a['nome']
                )?>   
            </td>
        </tr>
    <?php endforeach ?>
   </table>
</p>