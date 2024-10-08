<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contoh OOP dalam PHP</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            background-color: #f0f4f8;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            color: #333;
        }

        .container {
            max-width: 900px;
            background: #ffffff;
            border-radius: 10px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            padding: 30px;
            margin: 20px;
        }

        h3 {
            color: #007bff;
            border-bottom: 3px solid #007bff;
            padding-bottom: 10px;
            margin-bottom: 20px;
            font-weight: bold;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
            background-color: #fff;
            border-radius: 5px;
            overflow: hidden;
        }

        th, td {
            padding: 15px;
            border: 1px solid #dee2e6;
            text-align: left;
        }

        th {
            background-color: #007bff;
            color: white;
            font-weight: bold;
        }

        tr:nth-child(even) {
            background-color: #f8f9fa;
        }

        tr:hover {
            background-color: #e9ecef;
        }

        .info {
            font-size: 14px;
            color: #6c757d;
            margin-top: 10px;
            text-align: left;
        }

        .info strong {
            color: #333;
        }

        .table-container {
            margin-bottom: 20px;
        }
    </style>
</head>
<body>

<div class="container">

<?php

// 1. Contoh Kelas dan Objek
class Buku {
    public $judul;
    public $penulis;

    public function bukaBuku() {
        return "Buku dibuka!";
    }
}

$bukuBaru = new Buku();
$bukuBaru->judul = "Pemrograman PHP";
$bukuBaru->penulis = "John Doe";

echo "<h3>1. Contoh Kelas dan Objek</h3>";
echo "<div class='table-container'>
        <table>
            <tr>
                <th>Judul</th>
                <th>Penulis</th>
                <th>Aksi</th>
            </tr>
            <tr>
                <td>" . $bukuBaru->judul . "</td>
                <td>" . $bukuBaru->penulis . "</td>
                <td>" . $bukuBaru->bukaBuku() . "</td>
            </tr>
          </table>
          <div class='info'>Contoh kelas dan objek sederhana dalam PHP.</div>
      </div>";

?>

<?php

// 2. Encapsulation
class Film {
    private $judul;

    public function setJudul($judul) {
        $this->judul = $judul;
    }

    public function getJudul() {
        return $this->judul;
    }
}

echo "<h3>2. Encapsulation</h3>";
$filmBaru = new Film();
$filmBaru->setJudul("Inception");
echo "<div class='table-container'>
        <table>
            <tr>
                <th>Judul Film</th>
            </tr>
            <tr>
                <td>" . $filmBaru->getJudul() . "</td>
            </tr>
          </table>
          <div class='info'>Menggunakan encapsulation untuk mengamankan data.</div>
      </div>";

?>

<?php

// 3. Pewarisan / Inheritance
class PerangkatElektronik {
    public $nama;

    public function suara() {
        return "Perangkat ini mengeluarkan suara!";
    }
}

class Laptop extends PerangkatElektronik {
    public function suara() {
        return "Suara kipas menyala...";
    }
}

$laptopKu = new Laptop();
$laptopKu->nama = "MacBook Pro";

echo "<h3>3. Pewarisan / Inheritance</h3>";
echo "<div class='table-container'>
        <table>
            <tr>
                <th>Nama Perangkat</th>
                <th>Suara</th>
            </tr>
            <tr>
                <td>" . $laptopKu->nama . "</td>
                <td>" . $laptopKu->suara() . "</td>
            </tr>
          </table>
          <div class='info'>Demonstrasi pewarisan kelas di PHP.</div>
      </div>";

?>

<?php
// 4. Polimorfisme
class Kendaraan {
    public function suara() {
        return "Kendaraan ini memiliki suara";
    }
}

class Mobil extends Kendaraan {
    public function suara() {
        return "Brum brum!";
    }
}

class Motor extends Kendaraan {
    public function suara() {
        return "Vroom vroom!";
    }
}

$kendaraan1 = new Mobil();
$kendaraan2 = new Motor();

echo "<h3>4. Polimorfisme</h3>";
echo "<div class='table-container'>
        <table>
            <tr>
                <th>Jenis Kendaraan</th>
                <th>Suara</th>
            </tr>
            <tr>
                <td>Mobil</td>
                <td>" . $kendaraan1->suara() . "</td>
            </tr>
            <tr>
                <td>Motor</td>
                <td>" . $kendaraan2->suara() . "</td>
            </tr>
          </table>
          <div class='info'>Menampilkan polimorfisme dalam kelas kendaraan.</div>
      </div>";

?>

<?php

// 5. Abstraction
abstract class AlatTulis {
    abstract public function jenis();
}

class Pensil extends AlatTulis {
    public function jenis() {
        return "Pensil";
    }
}

echo "<h3>5. Abstraction</h3>";
$alatTulis = new Pensil();
echo "<div class='table-container'>
        <table>
            <tr>
                <th>Jenis Alat Tulis</th>
            </tr>
            <tr>
                <td>" . $alatTulis->jenis() . "</td>
            </tr>
          </table>
          <div class='info'>Demonstrasi abstraksi di PHP.</div>
      </div>";

?>

<?php

// 6. Akses Modifier
echo "<h3>6. Akses Modifier</h3>";
class AkunPengguna {
    public $username;
    private $password;
    protected $email;

    public function __construct($username, $password, $email) {
        $this->username = $username;
        $this->password = $password;
        $this->email = $email;
    }

    public function getUsername() {
        return $this->username;
    }

    public function setPassword($password) {
        $this->password = $password;
    }

    public function getEmail() {
        return $this->email;
    }
}

class Admin extends AkunPengguna {
    public function displayInfo() {
        return "<strong>Username:</strong> " . $this->getUsername() . "<br>" .
               "<strong>Email:</strong> " . $this->getEmail() . "<br>";
    }
}

$pengguna = new AkunPengguna("user123", "pass123", "user@example.com");
echo "<div class='table-container'>
        <table>
            <tr>
                <th>Username</th>
                <th>Password (private)</th>
                <th>Email (protected)</th>
            </tr>
            <tr>
                <td>" . $pengguna->getUsername() . "</td>
                <td>Cannot Access</td>
                <td>Cannot Access</td>
            </tr>
          </table>
          <div class='info'>Menampilkan penggunaan akses modifier pada class.</div>
      </div>";

$pengguna->setPassword("newpass123");

$admin = new Admin("admin123", "adminpass", "admin@example.com");
echo "<h4>Informasi Admin:</h4>";
echo "<div class='table-container'>
        <table>
            <tr>
                <th>Admin Info</th>
            </tr>
            <tr>
                <td>" . $admin->displayInfo() . "</td>
            </tr>
          </table>
      </div>";

?>

<?php
    // 7. Autoload
    require 'vendor/autoload.php';

    use Tugas4\Gitar;
    use Tugas4\Drum;

    echo "<h3>7. Autoload</h3>";

    // Ambil informasi dari objek Gitar dan Drum
    $Gitar = new Gitar();
    $Drum = new Drum();

    echo "<div class='table-container'>
            <table>
                <tr>
                    <th>Alat Musik</th>
                    <th>Penggunaan</th>
                </tr>
                <tr>
                    <td>Gitar</td>
                    <td>" . $Gitar->penggunaan() . "</td>
                </tr>
                <tr>
                    <td>Drum</td>
                    <td>" . $Drum->penggunaan() . "</td>
                </tr>
            </table>
          </div>";
?>

</div>
</body>
</html>
