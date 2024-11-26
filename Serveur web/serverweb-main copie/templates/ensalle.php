<h2 class="page__title">Les films</h2>
<ul>
<?php for ($index = 0; $index < count($films); $index++): ?>
<li><?=$films[$index]?></li>
<?php endfor; ?>
</ul>
<h2 class="page__title">Salles</h2>
<ul>
    <?php 
        for ($i = 0; $i < 4; $i++) : ?>
            <li><?=$rooms[$i]?></li>
        <?php endfor;?>
</ul>
