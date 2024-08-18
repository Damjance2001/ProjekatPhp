<?php 

session_start(); 

if(isset($_SESSION['registrovan'])==false){
    header("Location: Prijava.php"); 
    exit(); 
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kontakt - Knjizevni Klub</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="StyleKontakti.css" rel="stylesheet">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="index.php">Književni Klub</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="index.php">Početna</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="Dogadjaji.php">Dogadjaji</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="Knjige.php">Knjige</a>
                </li>
            
                <li class="nav-item active">
                    <a class="nav-link" href="">Kontakt</a>
                </li>
                <li class="nav-item">
                <a class="btn btn-outline-danger" href="Odjava.php" onclick="return confirm('Da li ste sigurni da zelite da se izlogujte sa Vaseg naloga?');">Odjavi se</a>
                </li>
            </ul>
        </div>
    </nav>

    <header class="header">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12 text-center">
                    <h1 class="display-4 text-white">Kontaktirajte nas</h1>
                    <p class="lead text-white">Stojimo vam na raspolaganju za sva pitanja i sugestije</p>
                </div>
            </div>
        </div>
    </header>

    <div class="container mt-5">
        <h2 class="text-center mb-4">Kontakt informacije</h2>
        <div class="row">
            <div class="col-md-6">
                <h4>Adresa</h4>
                <p>Književni Klub<br>Ulica Radoja Domanovica 1<br>34000 Kragujevac, Srbija</p>
            </div>
            <div class="col-md-6">
                <h4>Kontakt podaci</h4>
                <p>Email: info@knjizevniklub.rs<br>Telefon: +381 34 123 4567</p>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-12">
                <h4>Pošaljite nam poruku</h4>
                <form action="KontaktBaza.php" method="POST">
                    <div class="form-group">
                        <label for="name">Ime</label>
                        <input type="text" class="form-control"  name="ime_kontakt" placeholder="Vaše ime ">
                    </div>
                    <div class="form-group">
                        <label for="name">Prezime</label>
                        <input type="text" class="form-control" name="prezime_kontakt" placeholder="Vaše prezime">
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" name="mail_kontakt" placeholder="Vaš email">
                    </div>
                    <div class="form-group">
                        <label for="message">Poruka</label>
                        <textarea class="form-control" id="message" rows="4" name="poruka_kontakt" placeholder="Vaša poruka"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary btn-block">Pošalji</button>
                </form>
            </div>
        </div>
    </div>

 
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
