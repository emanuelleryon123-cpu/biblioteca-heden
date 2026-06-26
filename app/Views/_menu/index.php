<ul>
    <?php foreach($lista as $item) : ?>
        <li>
            <?=anchor(
                $item.'Controller/index',
                $item
            )?>
        </li>
    <?php endforeach ?>    
</ul>