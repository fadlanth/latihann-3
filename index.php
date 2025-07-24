<!DOCTYPE html>
<html>
<head>
    <title>Kalkulator Penjumlahan</title>
    <style>
        body { font-family: Arial, sans-serif; text-align: center; margin: 50px; }
        .calculator { max-width: 300px; margin: auto; padding: 20px; border: 1px solid #ddd; border-radius: 10px; box-shadow: 2px 2px 10px #ccc; }
        input { width: 90%; padding: 8px; margin: 5px; }
        .result { margin-top: 10px; font-weight: bold; }
    </style>
</head>
<body>
    <div class="calculator">
        <h2>Penjumlahan Sederhana</h2>
        <form method="POST">
            <input type="number" name="number1" placeholder="Masukkan angka pertama" required>
            <input type="number" name="number2" placeholder="Masukkan angka kedua" required>
            <input type="submit" value="Hitung">
        </form>
        <div class="result">
            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $number1 = $_POST['number1'];
                $number2 = $_POST['number2'];
                $result = $number1 + $number2;
                echo "Hasil penjumlahan: $number1 + $number2 = $result";
            }
            ?>
        </div>
    </div>
</body>
</html>