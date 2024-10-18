<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kalkulator Sederhana</title>
</head>
<body>
    <h2>Aplikasi Kalkulator Sederhana</h2>
    <form method="POST" action="">
        <label>Masukkan Bilangan Pertama:</label><br>
        <input type="number" name="num1" step="any" required><br><br>

        <label>Masukkan Bilangan Kedua:</label><br>
        <input type="number" name="num2" step="any" required><br><br>

        <label>Pilih Operasi:</label><br>
        <input type="radio" name="operation" value="tambah" required> Penjumlahan (+)<br>
        <input type="radio" name="operation" value="kurang"> Pengurangan (-)<br>
        <input type="radio" name="operation" value="kali"> Perkalian (*)<br>
        <input type="radio" name="operation" value="bagi"> Pembagian (/)<br><br>

        <button type="submit" name="submit">Hitung</button>
    </form>

    <?php
    if (isset($_POST['submit'])) {
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];
        $operation = $_POST['operation'];
        $result = '';

        switch ($operation) {
            case 'tambah':
                $result = $num1 + $num2;
                break;
            case 'kurang':
                $result = $num1 - $num2;
                break;
            case 'kali':
                $result = $num1 * $num2;
                break;
            case 'bagi':
                if ($num2 != 0) {
                    $result = $num1 / $num2;
                } else {
                    $result = 'Error: Pembagian dengan nol!';
                }
                break;
            default:
                $result = 'Operasi tidak valid!';
        }

        echo "<h3>Hasil Perhitungan: $result</h3>";
    }
    ?>
</body>
</html>