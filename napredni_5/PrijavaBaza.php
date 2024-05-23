<?php
require_once("PovezivanjeSaBazom.php"); 


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["mail_prijava"]) && isset($_POST["lozinka_prijava"])) {
        $mail_prijava = $_POST["mail_prijava"];
        $lozinka_prijava = $_POST["lozinka_prijava"];

        $proveraKorisnika = mysqli_query($baza, "SELECT * FROM korisnici WHERE Email = '$mail_prijava' AND Lozinka = '$lozinka_prijava'");

        if (mysqli_num_rows($proveraKorisnika) > 0) {
            
            $korisnik = mysqli_fetch_assoc($proveraKorisnika);
            
            session_start();
            $_SESSION['registrovan'] = true;
            $_SESSION['email'] = $korisnik['Email'];

            
            header("Location: index.php");
            exit();
        } else {
            session_start(); 
            $_SESSION['greska']=true; 
            header("Location: Prijava.php"); 
            exit(); 
            //echo "Neispravan email ili lozinka.";
        }
    } else {
        echo "Nisu poslati svi podaci.";
    }
} else {
    echo "Neispravan pristup.";
}



?>