<?php
    $jumlah = 3;
    $status = "aktif";
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LatihahPHP</title>
</head>
<body>
    <h1>Latihan PHP</h1>
    <p>jumlah pesan: <?= $jumlah ?></p>
    <?php if ($status === "tutup") : ?>
        <p>Form siap.</p>
    <?php else : ?>
        <p>Form ditutup</p>
    <?php endif; ?>
</body>
</html>