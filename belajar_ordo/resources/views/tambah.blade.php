<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Penjumlahan</title>
</head>
<body>
    <h1>Hasil Penjumlahan</h1>

    <form action="/tambah" method="get">
        <label for="angka1">Angka 1:</label>
        <input type="number" id="angka1" name="angka1" required>

        <label for="angka2">Angka 2:</label>
        <input type="number" id="angka2" name="angka2" required>

        <button type="submit">Jumlahkan</button>
    </form>

    @if (isset($hasil))
        <h2>Hasil penjumlahan: {{ $hasil }}</h2>
        <p>Angka 1: {{ $angka1 }}</p>
        <p>Angka 2: {{ $angka2 }}</p>
    @endif
</body>
</html>
