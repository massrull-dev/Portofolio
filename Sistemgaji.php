<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nip = $_POST['nip'];
    $nama = $_POST['nama'];
    $golongan = $_POST['golongan'];
    $tahun_masuk = $_POST['tahun_masuk'];
    $tahun_sekarang = date("Y");
    $lama_kerja = $tahun_sekarang - $tahun_masuk;

    // Aturan gaji berdasarkan lama kerja
    if ($lama_kerja < 5) {
        $gaji = 2000000;
    } else {
        $gaji = 2000000 + (($lama_kerja - 5) * 500000);
    }
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Gaji</title>
</head>
<body>
    <h2>Form Input Data Karyawan</h2>
    <form method="post" action="">
        <label for="nip">NIP:</label>
        <input type="text" name="nip" required><br>
        
        <label for="nama">Nama:</label>
        <input type="text" name="nama" required><br>
        
        <label for="golongan">Golongan:</label>
        <input type="text" name="golongan" required><br>
        
        <label for="tahun_masuk">Tahun Masuk:</label>
        <input type="number" name="tahun_masuk" required><br>
        
        <button type="submit">Proses</button>
    </form>
    
    <?php if (isset($lama_kerja)): ?>
        <h3>Hasil:</h3>
        <p>NIP: <?php echo htmlspecialchars($nip); ?></p>
        <p>Nama: <?php echo htmlspecialchars($nama); ?></p>
        <p>Golongan: <?php echo htmlspecialchars($golongan); ?></p>
        <p>Lama Kerja: <?php echo $lama_kerja; ?> tahun</p>
        <p>Gaji Pokok: Rp <?php echo number_format($gaji, 0, ',', '.'); ?></p>
    <?php endif; ?>
</body>
</html>
