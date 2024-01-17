<?php
$barangToko = [
    ['buku tulus', 'atk0001', '10.000,-', '100'],
    ['bolpen standard', 'atk0002', '2.500,-', '50'],
    ['penghapus', 'atk0003', '2.000,-','30'],
    ['fajar', 'atk0002', 'oo,-', '50']

];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Daftar Harga Barang</h2>
    <?php foreach ($barangToko as $brg) : ?>
      <ul>
        <li><?= $brg[0]; ?></li>
        <li><?= $brg[1]; ?></li>
        <li><?= $brg[2]; ?></li>
        <li><?= $brg[3]; ?></li>
      </ul>
    <?php endforeach; ?>
</body>
</html>