<?php
    $angka = [242, 24, 245, 576, 26, 754, 56, 67, 75];
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
        .container {
            display: grid;
            grid-template-columns: 50px 50px 50px;
            grid-template-rows: 50px 50px 50px;
            gap: 10px;
            align-items: center;
        }

        .box {
            padding: 15px;
            text-align: center;
            background-color: cyan;
        }
    </style>
    <div class="container">
        <?php foreach ($angka as $key) {?>
            <div class="box"><?= $key;?></div>
        <?php }?>
    </div>
</body>
</html>