<?php
    $angka = [242, 24, 245, 576, 26, 754, 56];
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
            display: flex;
        }

        .box {
            margin-left: 10px;
            padding: 20px;
            background-color: cyan;
        }
    </style>
    <div class="container">
        <?php foreach ($angka as $key) {?>
            <div class="box"><?php echo $key;?></div>
        <?php }?>
    </div>
</body>
</html>