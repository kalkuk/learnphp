<?php
echo 'Hello world';
$name = 'Merle';
$list =['sai', 'leib', 'piim', 'juust'];
?>

<?php include 'views/partials/header.php' ?> 

    <h1>Hello <?=$name?></h1>
    <ul>
        <?php foreach($list as $element): ?>
            <li><?=$element?></li>
        <?php endforeach; ?>
    </ul>
    <?php include 'views/partials/footer.php' ?> 