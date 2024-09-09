<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="style.css"> -->
    <title>Tugas 1 2305551171</title>
    <style>
        body{
            align-content: center;
            /* border-width: 10ch; */
            padding-left: 50ch;
            padding-right: 50ch;
        }

        form{
            border-style: dashed;
            border-top-left-radius: 10ch;
            border-top-right-radius: 10ch;
            border-bottom-left-radius: 10ch;
            border-bottom-right-radius: 10ch;
            /* border-width: 1ch; */
            padding-bottom: 10ch;
            padding-top: 5ch;
        }

    </style>
</head>
<body>
    <center>
        <form action="" method="POST">
            <h1>Form Mahasiswa</h1>
            <div>
                <label>Nama</label>
                <input type="text" name="nama" id="nama">
            </div>
            <br>
            <div>
                <label>NIM</label>
                <input type="number" name="nim" id="nim">
            </div> 
            <br>
            <div>
                <label>Nilai</label>
                <input type="number" name="nilai" id="nilai"><br>
                <small style="color: red;">masukkan angka 1 - 100</small>
            </div>
            <br>
            <div>
                <button class="submit" type="submit" style="background-color:MediumSeaGreen;" name="simpan">Simpan</button>
            </div>
        </form>
        

<?php
    if(isset($_POST['simpan'])){
        $nama = $_POST['nama'];
        $nim  = $_POST['nim'];
        $nilai = $_POST['nilai'];
        $nilaiAngka = " "; 

        if($nilai >= 90){
            $nilaiAngka = "A";
        }elseif($nilai >= 83){
            $nilaiAngka = "B+";
        }elseif($nilai >= 75){
            $nilaiAngka = "B";
        }elseif($nilai >= 65){
            $nilaiAngka = "C+";
        }elseif($nilai >= 55){
            $nilaiAngka = "C";
        }elseif($nilai >= 40){
            $nilaiAngka = "D";
        }elseif($nilai < 40){
            $nilaiAngka = "E";
        }elseif($nilai > 100){
            $nilaiAngka = "Nilai Yang Dimasukkan Tidak Valid";
        }else {
            $nilaiAngka = "Nilai Yang Dimasukkan Tidak Valid";
        }

        echo "
        <form action=''>
            <h1>Hasil</h1>
            <div>
                <label>Nama</label>
                <input type='text' value='$nama' disable>
            </div>
            <div>
                <label>Nim</label>
                <input type='number' value='$nim' disable>
            </div>
            <div>
                <label>Nilai</label>
                <input type='number' value='$nilai' disable>
            </div>
            <div>
                <label>Nilai Angka</label>
                <input type='text' value='$nilaiAngka' disable>
            </div>
        </form>";
       

    }
?>


    </center>
</body>
</html>
