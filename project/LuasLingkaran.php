<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hitung Luas Lingkaran</title>
</head>
<body>
    <h2>Hitung Luas Lingkaran</h2>
    <form method="post" action="">
        <label for="radius">Masukkan jari-jari:</label>
        <input type="number" step="any" name="radius" id="radius" required>
        <button type="submit">Hitung</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $radius = $_POST['radius'];
        $luas = pi() * pow($radius, 2);
        echo "<h3>Hasil:</h3>";
        echo "<p>Luas lingkaran dengan jari-jari $radius adalah " . number_format($luas, 2) . "</p>";
    }
    ?>
</body>
</html>
