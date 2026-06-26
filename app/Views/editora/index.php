<h2>Editora</h2>
<?=anchor('HomeController/index','Home')?>
<hr>
<h3>Nova Editora</h3>
<?=form_open('EditoraController/salvar')?>
<p>
    <label>Nome: </label>
    <input name='nome' type="text">
</p>
<p>
    <label>E-mail: </label>
    <input name='email' type="text">
</p>
<p>
    <label>Telefone: </label>
    <input name='telefone' type="text">
</p>
<p>
    <button type='submit'>Cadastrar</button>
</p>
<?=form_close()?>
<h3>Editoras</h3>
<p>
    <table>
        <tr>
            <td>ID</td>
            <td>NOME</td>
            <td>E_MAIL</td>
            <td>TELEFONE</td>
        </tr>
        <?php foreach($editoras as $e) : ?>
            <tr>
                <td><?=$e['id']?></td>
                <td><?=anchor('EditoraController/editar'.$e['id'],$e['nome'])?></td>
                <td><?=$e['email']?></td>
                <td><?=$e['telefone']?></td>
            </tr>
         <?php endforeach ?>   
    </table>
</p>