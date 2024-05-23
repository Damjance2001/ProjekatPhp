<?php 

require_once("PovezivanjeSaBazom.php"); 
if(isset($_POST["ime-registracija"]) && isset($_POST["prezime-registracija"]) && isset($_POST["email-registracija"]) && isset($_POST["lozinka-registracija"])){

    $ime_registracija=$_POST["ime-registracija"]; 
    $prezime_registracija=$_POST["prezime-registracija"]; 
    $mail_registracija= $_POST["email-registracija"]; 
    $lozinka_registracija=$_POST["lozinka-registracija"];

    $provera_mail= mysqli_query($baza, "SELECT Email FROM korisnici WHERE Email='$mail_registracija'");
    $rezultat= mysqli_num_rows($provera_mail);

    if($rezultat>0){
        header("Location: index.php"); 
        session_start(); 
        $_SESSION['greska']=true; 
        exit();
    }
    else{
        $ubacivanje_u_bazu=mysqli_query($baza, "INSERT INTO `korisnici` (`Ime`, `Prezime`, `Email`, `Lozinka`) VALUES ('$ime_registracija', '$prezime_registracija', '$mail_registracija', '$lozinka_registracija')"); 
        session_start(); 
        $_SESSION['registrovan']=true; 
        $_SESSION['email']= $mail_registracija; 

        header("Location: index.php");
        exit(); 
    }


}
else{
    echo "nisu setovane lepo metode"; 
}

//if(!isset($_POST["ime-registracija"])){
//    die("Ime ne postoji"); 
//}
//elseif(!isset($_POST["prezime-registracija"]))
//{
//    die("Prezime ne postoji"); 
//}
//elseif(!isset($_POST["email-registracija"])){
//    die("Mail ne postoji"); 
//}
//elseif(!isset($_POST["lozinka-registracija"])){
//    die("Lozinka ne postoji");
//}


//$ime_registracija=$_POST["ime-registracija"]; 
//$prezime_registracija=$_POST["prezime-registracija"]; 
//$mail_registracija= $_POST["email-registracija"]; 
//$lozinka_registracija=$_POST["lozinka-registracija"];



//$provera_mail= mysqli_query($baza, "SELECT Email FROM korisnici WHERE Email='$mail_registracija'");
//$rezultat= mysqli_num_rows($provera_mail);
//$provera_lozinke= mysqli_query($baza, "SELECT Lozinka FROM korisnici WHERE Lozinka='$lozinka_registracija'"); 
//$rezultat2= mysqli_num_rows($provera_lozinke); 

//if($rezultat>0 || $rezultat2>0){
//    
//    header("Location: index.php"); 
//   // session_start();
//   // $_SESSION['greska']=true; 
//   // header("Location: index.php"); 
//   // exit(); 
//}
//
//$ubacivanje_u_bazu=mysqli_query($baza, "INSERT INTO `korisnici` (`ID`, `Ime`, `Prezime`, `Email`, `Lozinka`) VALUES (NULL, '$ime_registracija', '$prezime_registracija', '$mail_registracija', '$lozinka_registracija')"); 
//
//session_start(); 
//$_SESSION['registrovan']=true; 
//$_SESSION['email']= $mail_registracija; 
//
//header("Location: index.php");
//exit();






?>