<!doctype html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Buku Tamu Kampus</title>
<link rel="stylesheet" href="style.css">
</head>
<body>
<main>
<h1>Buku Tamu Kampus</h1>   
<p>Semua kolom wajib diisi. Data tidak disimpan permanen.</p>
<form action="proses.php" method="post">
<!-- KOLOM FORM DI SINI -->
<label for="nama">Nama</label>
<input type="text" name="nama" id="nama" 
    required maxlength="80">
<label for="email">Email</label>
<input type="email" name="email" id="email" 
    required maxlength="150">
<label for="pesan">Pesan Max 500 Karakter</label>
<textarea name="pesan" id="pesan" 
    required maxlength="500" rows="5"></textarea>
<button type="submit">Kirim</button>
</form>
</main>
</body>
</html>