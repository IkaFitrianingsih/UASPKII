<?php


    $nama = $_POST['nama'];

    $nim = $_POST['nim']; 

    $tempat = $_POST['tempat']; 

    $tanggal = $_POST['tanggal'];

    $bulan = $_POST['bulan'];
    
    $tahun = $_POST['tahun']; 

    $jurusan = $_POST['jurusan'];

    $jk = $_POST['kelamin'];

    $email = $_POST['email'];

    $komentar = $_POST['komentar'];

?> 
<html> 
    <head> 
       <title>UAS Praktikum Komputer</title> 
    </head> 
    <body> 
        <h1>Selamat Datang</h1> 
        <?php 
            echo "<p><h3>Terima kasih sudah mengisi form :</h3></p>";
            echo "<p>Nama Lengkap : ".$nama. "</p>";
            echo "<p>NIM : ".$nim. "</p>";
            echo "<p>Tempat Lahir : ".$tempat. "</p>"; 
            echo "<p>Tanggal Lahir : ".$tanggal. " ".$bulan. " ".$tahun. "</p>"; 
            echo "<p>Jurusan : ".$jurusan. "</p>"; 
            echo "<p>Jenis Kelamin : ".$jk. "</p>"; 
            echo "<p>Email : ".$email. "</p>"; 
            echo "<p>Komentar / Saran : ".$komentar. "</p>"; 
        ?>
