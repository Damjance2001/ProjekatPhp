<?php 

require_once("PovezivanjeSaBazom.php"); 

if($_SERVER["REQUEST_METHOD"]=="POST"){
    if(isset($_POST["ime_kontakt"]) && isset($_POST["prezime_kontakt"]) && isset($_POST["mail_kontakt"]) && isset($_POST["poruka_kontakt"])){
        $ime_kontakt=$_POST["ime_kontakt"]; 
        $prezime_kontakt= $_POST["prezime_kontakt"]; 
        $mail_kontakt= $_POST["mail_kontakt"]; 
        $poruka= $_POST["poruka_kontakt"]; 


        $ubacivanje_poruke= mysqli_query($baza, "INSERT INTO `poruke` (`ID`, `Ime`, `Prezime`, `Email`, `Poruka`) VALUES (NULL, '$ime_kontakt', '$prezime_kontakt', '$mail_kontakt', '$poruka')");
        header("Location: Kontakti.php"); 
        exit(); 
    }
    else{
        echo "Nisu setovani podaci"; 
    }
}else{
    echo "Nije dobro prosledjena metoda"; 
}

?>