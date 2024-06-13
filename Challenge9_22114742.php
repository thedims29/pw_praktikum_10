<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Dinamis Aritmatika</title>
</head>
<body>
    <h1>Perhitungan Aritmatika</h1>
    <form action="#" method="post">
        <label for="nama">Nama:</label>
        <input type="text" id="nama" name="nama" required>
        <br>

        <label for="angka1">Masukkan angka pertama (1-10):</label>
        <input type="number" id="angka1" name="angka1" min="1" max="10" required>
        <br>

        <label for="angka2">Masukkan angka kedua (1-10):</label>
        <input type="number" id="angka2" name="angka2" min="1" max="10" required>
        <br>

        <label for="operator">Operator:</label>
        <select id="operator" name="operator" required>
            <option value="+">+</option>
            <option value="-">-</option>
            <option value="*">*</option>
            <option value="/">/</option>
        </select>
        <br>

        <button type="submit">Hitung</button>
    </form>

    <?php
    if (isset($_POST['nama']) && isset($_POST['angka1']) && isset($_POST['angka2']) && isset($_POST['operator'])) {
        $nama = $_POST['nama'];
        $angka1 = $_POST['angka1'];
        $angka2 = $_POST['angka2'];
        $operator = $_POST['operator'];

        switch ($operator) {
            case '+':
                $hasil = $angka1 + $angka2;
                break;
            case '-':
                $hasil = $angka1 - $angka2;
                break;
            case '*':
                $hasil = $angka1 * $angka2;
                break;
            case '/':
                if ($angka2 == 0) {
                    echo "Error: Pembagian dengan 0";
                    exit;
                }
                $hasil = $angka1 / $angka2;
                break;
            default:
                echo "Error: Operator tidak valid";
                exit;
        }

        echo "<br>Hasil untuk $nama:<br>";
        echo $angka1 . " " . $operator . " " . $angka2 . " = " . $hasil;
    }
    ?>
</body>
</html>