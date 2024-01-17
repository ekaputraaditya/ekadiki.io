<?php
    $angka = [[1,6,3],[9,5,3],[8,6,3],[4,5,6]];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <style>
        .eka {
            display: flex;
        }
        .diki {
            width: 20px;
            height: 20px;
            background-color: cyan;
            margin-left: 3px;
        }
    </style>
    <div class="eka">
    <?php foreach ( $angka as $a) : ?>
    <?php foreach ( $a as $b) : ?>
        <div class="diki"><?php echo $b; ?></div>
        <?php endforeach; ?>
    <?php endforeach; ?>
    </div>
</body>
</html>