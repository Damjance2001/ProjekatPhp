<?php
    require_once("PovezivanjeSaBazom.php");

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $idKnjige = $_POST['idKnjige'];
        $korisnik = $_POST['korisnik'];
        $komentar = $_POST['komentar'];

        $upit = "INSERT INTO komentari (ID_Knjige, Korisnik, Komentar) VALUES (?, ?, ?)";
        $stmt = mysqli_prepare($baza, $upit);
        mysqli_stmt_bind_param($stmt, 'iss', $idKnjige, $korisnik, $komentar);
        mysqli_stmt_execute($stmt);

        // Preusmeri na stranicu knjige
        header("Location: KnjigeStranica.php?id=$idKnjige");
        exit();
    }
?>