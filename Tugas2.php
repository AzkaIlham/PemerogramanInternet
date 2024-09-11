<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 2</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse; 
            margin-top: 20px;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 5px;
            text-align: center; 
        }

        th {
            background-color: #f2f2f2;
            color: black;
            font-weight: bold;
        }

        tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        tr:hover {
            background-color: #f1f1f1;
        }
    </style>
</head>
<body>

<?php 
    
    $siswa = [
        ["nama" => "Andi", "matematika" => 85, "bahasa_inggris" => 70, "ipa" => 80],
        ["nama" => "Budi", "matematika" => 60, "bahasa_inggris" => 50, "ipa" => 65],
        ["nama" => "Cici", "matematika" => 75, "bahasa_inggris" => 80, "ipa" => 70],
        ["nama" => "Dodi", "matematika" => 95, "bahasa_inggris" => 85, "ipa" => 90],
        ["nama" => "Eka", "matematika" => 50, "bahasa_inggris" => 60, "ipa" => 55],
    ];

    $totallulus = 0;
    $totaltidaklulus = 0;
    $nomer = 1;
    $no = 1;

    function RataRata($nilaiMTK, $nilaiBING, $nilaiIPA) {
        return ( ($nilaiMTK + $nilaiBING + $nilaiIPA) / 3 );
    }

    function MapelTerendah($matematika, $bahasaInggris, $ipa) {
        if ($matematika <= $bahasaInggris && $matematika <= $ipa) {
            return "Matematika";
        } elseif ($bahasaInggris <= $matematika && $bahasaInggris <= $ipa) {
            return "Bahasa Inggris";
        } else {
            return "IPA";
        }
    }
?>

<center><h1>Nilai Siswa</h1></center>

<table border="1">
     <thead>
         <tr>
             <th>No</th>
             <th>Nama</th>
             <th>Matematika</th>
             <th>Bahasa Inggris</th>
             <th>IPA</th>
         </tr>
     </thead>
     <tbody>
<?php
     foreach ($siswa as $row) {
?>
         <tr>
             <td><?= $nomer++?></td>
             <td><?= $row['nama'] ?></td>
             <td><?= $row['matematika']?></td>
             <td><?= $row['bahasa_inggris']?></td>
             <td><?= $row['ipa']?></td>
         </tr>
<?php
     }
?>
     </tbody>
 </table>

<center><h1>Hasil Nilai Siswa</h1></center>

    <table border="1">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Rata Rata</th>
                <th>Status Kelulusan</th>
                <th>Mapel Yang Kurang</th>
            </tr>
        </thead>
        <tbody>
        
<?php
    foreach($siswa as $data){
        $nilaiRataRata = RataRata($data['matematika'], $data['bahasa_inggris'], $data['ipa']);
        $status = $nilaiRataRata >= 75 ? "Lulus" : "Tidak Lulus";
?>

            <tr>
                <td><?=$no++?></td>
                <td><?=$data['nama']?></td>
                <td><?=number_format($nilaiRataRata, 2)?></td>
                <td><?=$status?></td>
                <td>
                    <?php
                    if ($status == "Tidak Lulus") {
                        echo MapelTerendah($data['matematika'], $data['bahasa_inggris'], $data['ipa']);
                        $totaltidaklulus++;
                    } else {
                        echo "-";
                        $totallulus++;
                    }
                    ?>
                </td>
            </tr>

<?php
    }
?>
        </tbody>
    </table>

<table>
    <tr>
        <td>Total Siswa Yang Lulus: <?= $totallulus ?></td>
        <td>Total Siswa Yang Tidak Lulus: <?= $totaltidaklulus ?></td>
    </tr>
</table>

    

</body>
</html>
