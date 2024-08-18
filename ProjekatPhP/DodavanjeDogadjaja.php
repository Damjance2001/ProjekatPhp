<?php 

require_once("PovezivanjeSaBazom.php"); 


if($_SERVER["REQUEST_METHOD"]=="POST"){
    if(isset($_POST["nazivDogadjaja"]) && isset($_POST["vremeDogadjaja"]) && isset($_POST["datumDogadjaja"]) && isset($_POST["lokacijaDogadjaja"]) && isset($_POST["opisDogadjaja"]) ){
        $naziv_dogadjaja=$_POST["nazivDogadjaja"]; 
        $vreme_Dogadjaja= $_POST["vremeDogadjaja"]; 
        $datum_dogadjaja=$_POST["datumDogadjaja"]; 
        $lokacija_Dogadjaja= $_POST["lokacijaDogadjaja"]; 
        $opis= $_POST["opisDogadjaja"]; 

        $ubacivanje_dogadjaja= mysqli_query($baza, "INSERT INTO `dogadjaj` (`NazivDogadjaja`, `Datum`, `Lokacija`, `Vreme`, `Opis`) VALUES (' $naziv_dogadjaja', ' $datum_dogadjaja', ' $lokacija_Dogadjaja', ' $vreme_Dogadjaja', '$opis');");
        header("Location: Dogadjaji.php"); 
        exit(); 
    }
    else{
        echo "Nisu setovani podaci"; 
    }
}else{
    echo "Nije dobro prosledjena metoda"; 
}

?>