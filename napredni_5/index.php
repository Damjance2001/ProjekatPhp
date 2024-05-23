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
        <a class="navbar-brand" href="#">Književni Klub</a>
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
    <?php if(isset($_SESSION['registrovan'])) { ?>

        <header class="header">
            <div class="overlay"></div>
                <div class="container h-100">
                <div class="row h-100 align-items-center">
                    <div class="col-12 text-center">
                        <h1 class="display-4 text-white">Dobrodošlica našem članu zajednice!</h1>
                        <p class="lead text-white">Uzivajte u kontentu, druzite se i pustite svojoj kreativnosti na volju </p>
                    </div>
                </div>
            </div>
        </header>

        <div class="container mt-5">
        <h2 class="text-center mb-4">Zadovoljni članovi i njihova iskustva!</h2>
        </div>

        <div class="container mt-5">
        
    <div class="row">
            
            <div class="col-md-4 mb-4" v-for="event in events">
                <div class="card h-100">
                    <img src="Marko.webp" class="card-img-top" alt="Event Image">
                    <div class="card-body">
                        <h5 class="card-title">Marko Petrović</h5>
                        <p class="card-text">"Knjige su moja strast, a Književni klub mi je pružio priliku da je podelim sa istomišljenicima. Atmosfera je opuštena i prijatna, a diskusije su uvek inspirativne. Svaki događaj je jedinstveno iskustvo koje me dodatno motiviše da čitam i istražujem nove autore."</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4" v-for="event in events">
                <div class="card h-100">
                    <img src="Jelena.jpg" class="card-img-top" alt="Event Image">
                    <div class="card-body">
                        <h5 class="card-title">Jelena Jovanović</h5>
                        <p class="card-text">"Knjige su moj beg od svakodnevnog stresa, a Književni klub je mesto gde mogu da se opustim i uživam u društvu ljubitelja knjiga. Klub je veoma dobro organizovan, a događaji su raznovrsni i zanimljivi. Uvek se radujem narednom okupljanju!"</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4" v-for="event in events">
                <div class="card h-100">
                    <img src="Milan.jpg" class="card-img-top" alt="Event Image">
                    <div class="card-body">
                        <h5 class="card-title">Milan Nikolić</h5>
                        <p class="card-text">"Književni klub je pravo mesto za sve nas koji volimo knjige i uživamo u diskusijama o književnosti. Organizacija je vrhunska, a svaki događaj donosi nešto novo i uzbudljivo. Osećam se kao deo velike i prijateljske zajednice."</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4" v-for="event in events">
                <div class="card h-100">
                    <img src="assets/Ana.jpg" class="card-img-top" alt="Event Image">
                    <div class="card-body">
                        <h5 class="card-title">Ana Stojanović</h5>
                        <p class="card-text">""Kao dugogodišnji član Književnog kluba, mogu reći da je ovo najbolja zajednica ljubitelja knjiga koju sam pronašao. Događaji su dobro osmišljeni i uvek se nešto novo nauči. Klub mi je pomogao da proširim svoje čitalačke horizonte i steknem nova prijateljstva."</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4" v-for="event in events">
                <div class="card h-100">
                    <img src="Ivana.webp" class="card-img-top" alt="Event Image">
                    <div class="card-body">
                        <h5 class="card-title">Ivana Marković</h5>
                        <p class="card-text">"Pridruživanje Književnom klubu je jedna od najboljih odluka koje sam donela. Klub pruža fantastične prilike za razgovor o knjigama, upoznavanje novih ljudi i učestvovanje u interesantnim događajima. Svaka knjiga postaje još lepša kada je delimo sa drugima."</p>
                    </div>
                </div>
            </div>
    </div>

    <?php } else {?>

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
            if($_SESSION['greska']==true){ ?>
                <h2 class="text-center mb-4">Probaj ponovo</h2>
                <h5 class="text-center mb-4 text-muted">Email adresa koju ste uneli vec postoji</h5>
                
                <?php }
                session_destroy(); 
            }else{ ?>
             
            <h2 class="text-center mb-4">Registracija</h2>

            <?php }?>
        <form action="RadSaBazom.php" method="POST">
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="firstName">Ime</label>
                    <input type="text" class="form-control"  name="ime-registracija" placeholder="Ime" required>
                </div>
                <div class="form-group col-md-6">
                    <label for="lastName">Prezime</label>
                    <input type="text" class="form-control" name="prezime-registracija"placeholder="Prezime" required>
                </div>
            </div>
            <div class="form-group">
                <label for="inputEmail">Email</label>
                <input type="email" class="form-control"  name="email-registracija" placeholder="Email"required>
            </div>
            <div class="form-group">
                <label for="inputPassword">Lozinka</label>
                <input type="password" class="form-control" id="inputPassword" name="lozinka-registracija" placeholder="Lozinka"required>
            </div>
            <button type="submit" class="btn btn-primary btn-block">Registruj se</button>
            <br>
            <p>Vec imate nalog? <a href="Prijava.php">Prijavi se!</a></p>
        </form>
    </div>
    <?php } ?>


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
