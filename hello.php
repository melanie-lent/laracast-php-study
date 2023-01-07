<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
            <title>document</title>
            <style>
                header {
                    background:blue;
                }
            </style>
        </meta>
    </head>
    <body>
        <header>
            <h1>aaaaaaa<?php echo "hi"; ?></h1>
        </header>
        <h3>simple array stuff</h3>
        <?php
            $fruit = ["apple", "pear", "peach", "grape"];
            $cat = [
                'fur color' => 'black',
                'name' => 'lucy',
                'morals' => null,
                'collar' => false ,
                'smartness' => 0.05
            ];
        ?>
        <ul>
            <?php foreach ($fruit as $f) : ?>
                <li><?= $f; ?></li>
            <?php endforeach ?>
            <?php 
                foreach ($fruit as $f) {
                    echo "<li>$f</li>";
                }
            ?>
        </ul>
        <h3>associative array stuff</h3>
        <ul>
            <?php foreach ($cat as $key => $val) : ?>
                <li><?php echo "$key: $val"; ?></li>
            <?php endforeach ?>
        </ul>
    </body>
</html>