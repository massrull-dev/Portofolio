<!DOCTYPE html>
<html>
<head>
    <title>Hitung Luas Segitiga</title>
</head>
<body>
    <h2>Hitung Luas Segitiga</h2>
    <form method="post">
        <label for="alas">Alas:</label>
        <input type="number" step="any" name="alas" required><br><br>
        
        <label for="tinggi">Tinggi:</label>
        <input type="number" step="any" name="tinggi" required><br><br>
        
        <input type="submit" value="Hitung">
    </form>
    
    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $alas = isset($_POST['alas']) ? floatval($_POST['alas']) : 0;
            $tinggi = isset($_POST['tinggi']) ? floatval($_POST['tinggi']) : 0;
            $luas = 0.5 * $alas * $tinggi;
            echo "<h3>Hasil: $luas cm²</h3>";
        }
    ?>
</body>
</html>
