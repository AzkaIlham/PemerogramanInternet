<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Penyalaan AC</title>
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            margin: 0;
            padding: 0;
            background: linear-gradient(to right, #74ebd5, #ACB6E5);
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .container {
            background-color: white;
            padding: 40px;
            border-radius: 20px;
            box-shadow: 0 8px 30px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 400px;
            text-align: center;
        }
        h2 {
            color: #333;
            margin-bottom: 30px;
            font-size: 24px;
            letter-spacing: 1px;
        }
        label {
            display: block;
            margin-top: 20px;
            color: #666;
            font-weight: 500;
            font-size: 16px;
            text-align: left;
        }
        input[type="number"] {
            width: calc(100% - 20px);
            padding: 12px;
            margin-top: 10px;
            border: 2px solid #ddd;
            border-radius: 10px;
            outline: none;
            font-size: 16px;
            color: #333;
            background-color: #f9f9f9;
        }
        input[type="number"]:focus {
            border-color: #74ebd5;
        }
        button {
            width: 100%;
            padding: 12px;
            margin-top: 30px;
            background-color: #74ebd5;
            color: white;
            border: none;
            border-radius: 10px;
            cursor: pointer;
            font-size: 18px;
            transition: background-color 0.3s ease;
        }
        button:hover {
            background-color: #57d1bf;
        }
        .result {
            margin-top: 30px;
            padding: 20px;
            background-color: #f1f1f1;
            border-left: 5px solid #74ebd5;
            border-radius: 10px;
        }
        .result p {
            margin: 10px 0;
            font-size: 16px;
            color: #555;
        }
        .status {
            font-weight: bold;
            font-size: 18px;
            color: #333;
        }
        .input-values {
            color: #333;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Sistem Penyalaan AC</h2>
        <form action="" method="POST">
            <label for="suhu">Suhu (°C):</label>
            <input type="number" id="suhu" name="suhu" value="<?php echo isset($_POST['suhu']) ? htmlspecialchars($_POST['suhu']) : ''; ?>" required>

            <label for="kelembaban">Kelembaban (%):</label>
            <input type="number" id="kelembaban" name="kelembaban" value="<?php echo isset($_POST['kelembaban']) ? htmlspecialchars($_POST['kelembaban']) : ''; ?>" required>

            <button type="submit">Cek Status AC</button>
        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $suhu = isset($_POST['suhu']) ? (float)$_POST['suhu'] : 0;
            $kelembaban = isset($_POST['kelembaban']) ? (float)$_POST['kelembaban'] : 0;

            // Logika untuk menentukan status AC
            if ($suhu < 20 && $kelembaban < 50) {
                $status_ac = "AC Mati";
            } elseif ($suhu >= 20 && $suhu < 25 && $kelembaban >= 50 && $kelembaban < 70) {
                $status_ac = "AC Menyala Rendah";
            } elseif ($suhu >= 25 && $suhu < 30 && $kelembaban >= 70) {
                $status_ac = "AC Menyala Sedang";
            } elseif ($suhu >= 30) {
                $status_ac = "AC Menyala Berat";
            } else {
                $status_ac = "AC Mati";
            }

            // Tampilkan hasil status AC dan input yang dimasukkan
            echo "<div class='result'>";
            echo "<p>Suhu yang diinputkan: <span class='input-values'>$suhu °C</span></p>";
            echo "<p>Kelembaban yang diinputkan: <span class='input-values'>$kelembaban %</span></p>";
            echo "<p>Status AC: <span class='status'>$status_ac</span></p>";
            echo "</div>";
        }
        ?>
    </div>
</body>
</html>
