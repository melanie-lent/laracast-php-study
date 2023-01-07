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
        <?php
            $fruit = ["apple", "pear", "peach", "grape"];
        ?>
        <header>
            <h1>aaaaaaa<?php echo "hi"; ?></h1>
        </header>
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
    </body>
</html>