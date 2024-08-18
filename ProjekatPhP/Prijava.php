<?php 
session_start(); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pocetna stranica</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="Style.css" rel="stylesheet">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="index.php">Književni Klub</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="">Početna</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="Dogadjaji.php">Dogadjaji</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="Knjige.php">Knjige</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="Kontakti.php">Kontakt</a>
                </li>
            </ul>
        </div>
    </nav>

    <header class="header">
        <div class="overlay"></div>
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12 text-center">
                    <h1 class="display-4 text-white">Dobrodošli u Književni Klub</h1>
                    <p class="lead text-white">Pridružite nam se u otkrivanju sveta knjiga</p>
                </div>
            </div>
        </div>
    </header>

    


    <div class="container mt-5">
    
    <?php if(isset($_SESSION['greska'])){
        if($_SESSION['greska'])
        {
        ?>
        <h2 class="text-center mb-4">Probaj ponovo</h2>
        <h5 class="text-center mb-4 text-muted">Uneli ste neispravnu lozinku ili e-mail adresu</h5>
        <?php }}else {?>
            <h2 class="text-center mb-4">Prijavi se</h2>
        <?php }?>

        <form action="PrijavaBaza.php" method="POST">
            <div class="form-group">
                <label for="inputEmail">Email</label>
                <input type="email" class="form-control"  name="mail_prijava" placeholder="Email" required>
            </div>
            <div class="form-group">
                <label for="inputPassword">Lozinka</label>
                <input type="password" class="form-control" name="lozinka_prijava" placeholder="Lozinka" required>
            </div>
            <button type="submit" class="btn btn-primary btn-block">Prijavi se</button>
            <br>
            <p>Niste registrovani? <a href="index.php">Registruj se!</a></p>
        
        </form>
    </div>





    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>