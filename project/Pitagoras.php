<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kalkulator Pythagoras</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            margin: 50px;
        }
        form {
            background: #f4f4f4;
            padding: 20px;
            display: inline-block;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }
        input {
            padding: 8px;
            margin: 5px;
            width: 80%;
        }
        button {
            padding: 10px 15px;
            background: #28a745;
            color: white;
            border: none;
            cursor: pointer;
        }
        button:hover {
            background: #218838;
        }
    </style>
</head>
<body>

    <h2>Kalkulator Pythagoras</h2>
    <p>Masukkan panjang sisi a dan sisi b untuk menghitung sisi miring (c)</p>

    <form method="POST">
        <label for="a">Sisi a:</label>
        <input type="number" name="a" required><br>

        <label for="b">Sisi b:</label>
        <input type="number" name="b" required><br>

        <button type="submit">Hitung</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $a = isset($_POST["a"]) ? floatval($_POST["a"]) : 0;
        $b = isset($_POST["b"]) ? floatval($_POST["b"]) : 0;

        if ($a > 0 && $b > 0) {
            $c = sqrt(($a * $a) + ($b * $b));
            echo "<h3>Hasil:</h3>";
            echo "<p>Panjang sisi miring (c): <strong>" . number_format($c, 2) . "</strong></p>";
        } else {
            echo "<p style='color:red;'>Masukkan angka yang valid!</p>";
        }
    }
    ?>

</body>
</html>
