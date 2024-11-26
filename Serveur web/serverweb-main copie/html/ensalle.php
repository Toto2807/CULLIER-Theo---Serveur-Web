<?php
    $films=["Star Wars",
    "1001 pates",
    "Cars",
    "Raiponce",
    "Interstellar",
    "Gremlins"]
?>
<h2 class="page__title">Les films</h2>
<ul>
<?php for($index = 0; $index < count($films); $index++): ?>
    <li><?php echo $films[$index] ?></li>
<?php endfor ?>
<?php
$extras = [
      [
        'Popcorn',
        'L',
        2.9
      ],
      [
        'Popcorn',
        'XL',
        4
      ],
      [
        'Chips',
        '50g',
        2.5
      ],
      [
        'M&M\'s',
        '100g',
        4
      ],
      [
        'Soda',
        '33cl',
        3.2
      ],
      [
        'Evian',
        '33cl',
        3
      ]
    ];
?>
<h2 class="page__title">Les extras</h2>
<?php for($compteur = 0; $compteur < count($extras); $compteur++):?>
    <li><?php echo $extras [$compteur] [0] ?></li>
    <li><?php echo $extras [$compteur] [1] ?></li>
    <li><?php echo $extras [$compteur] [2]?></li>
<?php endfor ?>