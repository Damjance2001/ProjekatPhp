
CREATE DATABASE knjizevniklub;
USE knjizevniklub;




CREATE TABLE dogadjaj (
    ID INT AUTO_INCREMENT PRIMARY KEY,
    NazivDogadjaja VARCHAR(255) NOT NULL,
    Datum DATE NOT NULL,
    Lokacija VARCHAR(255) NOT NULL,
    Vreme TIME NOT NULL,
    Opis TEXT
);

CREATE TABLE knjige (
    ID INT AUTO_INCREMENT PRIMARY KEY,
    NazivKnjige VARCHAR(255) NOT NULL,
    AutorKnjige VARCHAR(255) NOT NULL,
    Zanr VARCHAR(100) NOT NULL,
    PDF VARCHAR(255) NOT NULL,
    Opis TEXT
);

CREATE TABLE komentari (
    ID INT AUTO_INCREMENT PRIMARY KEY,
    ID_Knjige INT NOT NULL,
    Korisnik VARCHAR(255) NOT NULL,
    Komentar TEXT NOT NULL,
    Datum TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (ID_Knjige) REFERENCES knjige(ID)
);

CREATE TABLE korisnici (
    ID INT AUTO_INCREMENT PRIMARY KEY,
    Ime VARCHAR(100) NOT NULL,
    Prezime VARCHAR(100) NOT NULL,
    Email VARCHAR(255) NOT NULL,
    Lozinka VARCHAR(255) NOT NULL,
    Datum_Uclanjenja DATE NOT NULL
);

CREATE TABLE poruke (
    ID INT AUTO_INCREMENT PRIMARY KEY,
    Ime VARCHAR(100) NOT NULL,
    Prezime VARCHAR(100) NOT NULL,
    Email VARCHAR(255) NOT NULL,
    Poruka TEXT NOT NULL
);


INSERT INTO korisnici (ID, Ime, Prezime, Email, Lozinka, Datum_Uclanjenja) 
VALUES 
(
    1, 
    'Damjan', 
    'Ilic', 
    'ddamjaniilic@gmail.com', 
    '0', 
    '2024-05-22'
),
(
    2, 
    'Marko', 
    'Markovic', 
    'markomarkovic@gmail.com', 
    '1234', 
    '2024-05-22'
),
(
    4, 
    'Darko', 
    'Radeka', 
    'darkoradeka@gmail.com', 
    '124', 
    '2024-05-22'
),
(
    6, 
    'Andjela', 
    'Djokic', 
    'aandjadjokic@gmail.com', 
    'andjelakra', 
    '2024-05-22'
),
(
    7, 
    'Uros', 
    'Tatomir', 
    'urostatomir@gmail.com', 
    'Uki123', 
    '2024-05-22'
),
(
    10, 
    'Aleksandar', 
    'Djalovic', 
    'aleksandardjalovic@gmail.com', 
    'aleksadjal', 
    '2024-05-22'
);


INSERT INTO dogadjaj (ID, NazivDogadjaja, Datum, Lokacija, Vreme, Opis) 
VALUES 
(
    1, 
    'Uloga knjizevnosti u savremenom drustvu', 
    '2024-06-26', 
    'Knjizevni klub, Sala 1', 
    '12:30:00', 
    'Diskusija sa književnim kritičarima i autorima o značaju književnosti u današnjem svetu. Razmotrićemo uticaj knjiga na društvene promene i lični razvoj. Pridružite se i doprinesite ovoj zanimljivoj debati.'
),
(
    2, 
    'Vreme kratkih prica', 
    '2024-06-21', 
    'Knjizevni klub, Sala 3', 
    '17:30:00', 
    'Uživajte u večeri posvećenoj kratkim pričama domaćih i stranih autora. Publika će imati priliku da čuje različite stilove i žanrove, kao i da učestvuje u diskusiji sa autorima. Dođite i podelite svoju priču!'
),
(
    5, 
    'Citanje Vasih pesama', 
    '2024-06-26', 
    'Knjizevni klub, Sala za zabavu', 
    '16:30:00', 
    'Veceras cemo po prvi put imati priliku da svecano otvorimo vece gde cemo sa uzivanjem imati mogucnost da slusamo nase clanove kluba, kako pred uzivo publikom, prezentuju dela koja su od svih krili! Dodjite i uzivajte, ko zna mozda Vas to navede da i vi nesto procitate od svog stvaralastva.'
),
(
    3,
    'Izlozba ilustracija za knjige',
    '2024-06-28',
    'Knjizevni klub, Sala 2',
    '16:00:00',
    'Pridružite nam se u debati gde ćemo raspravljati o vrednostima i uticaju klasične i savremene književnosti. Stručni panelisti će iznositi svoja mišljenja, a publika će imati priliku da postavlja pitanja i iznosi svoje stavove.'
);

INSERT INTO knjige (ID, NazivKnjige, AutorKnjige, Zanr, PDF, Opis) 
VALUES 
(
    1, 
    'Orlovi Rano Lete', 
    'Branko Copic', 
    'Roman', 
    'http://www.diogenpro.com/uploads/4/6/8/8/4688084/branko_opi-orlovi_rano_lete.pdf', 
    'Knjiga "Orlovi rano lete" je roman za decu u kome je pisac sa puno humora opisao odrastanje jedne grupe dečaka, a kao inspiracija su mu poslužili stvarni događaji iz njegovog detinjstva. U liku drskog i zlog učitelja ovekovečena je piščeva stroga učiteljica od koje su se on i njegovi školski drugovi krili u šumi. Roman se sastoji iz dva dela. Prvi deo romana opisuje bezbrižno detinjstvo dečaka, njihove dogodovštine, bezobrazluke i školske nestašluke. U drugom delu romana opisano je potpuno drugačije ponašanje dečaka. Součeni sa ratom i svime onome što ratni događaji donose, odrasli su pre vremena i na sebe preuzeli dužnosti koji nadmašuju njihove godine i njihovo životno iskustvo. O tom preranom odrastanju dečaka simbolično govori i sam naslov romana "Orlovi rano lete". U srprskoj narodnoj tradiciji ptica orao je simbol hrabrosti i slobode. Aludirajući na dečake o kojima govori, pisac ih smatra orlovima koji su silom prilika morali rano da polete. Početak prvog dela: Roman počinje opisom Prokinog gaja, mesta na kojem se zbiva najveći deo radnje. U njemu se nalazi grob hajduka Jovančeta i zaravan Tepsija na kome su deca najviše boravila.'
),
(
    2, 
    'The Great Gatsby', 
    'F. Scott Fitzgerald', 
    'Roman', 
    'https://ct02210097.schoolwires.net/site/handlers/filedownload.ashx?moduleinstanceid=26616&dataid=28467&FileName=The%20Great%20Gatsby.pdf', 
    '"The Great Gatsby" je roman američkog pisca F. Scott Fitzgeralda, prvi put objavljen 1925. godine. Radnja romana smeštena je u burne dvadesete godine prošlog veka, poznate kao "Jazz Age," i prati život bogatog i misterioznog Jay Gatsbyja. Gatsby je poznat po svojim raskošnim zabavama koje priređuje u svom luksuznom dvorcu na Long Islandu, ali malo ko zna njegovu pravu priču i motivaciju. Centralna tema romana je Gatsbyjeva opsesivna ljubav prema Daisy Buchanan, mladoj ženi iz visokog društva koja je udata za bogatog, ali okrutnog Toma Buchanana. Kroz priču o Gatsbyjevom usponu, bogatstvu i tragičnom padu, Fitzgerald kritikuje američki san i razotkriva moralne mane društva prepunog korupcije i praznine. Kroz likove i događaje, roman istražuje teme ljubavi, izdaje, iluzije i dekadencije. "The Great Gatsby" je danas smatran jednim od najvažnijih dela američke književnosti, poznat po svom elegantnom stilu, simbolici i dubokom uvidu u ljudsku prirodu i društvo.'
),
(
    3, 
    'Catcher in the Rye', 
    'J.D. Salinger', 
    'Roman', 
    'https://docenti.unimc.it/antonella.pascali/teaching/2018/19055/files/ultima-lezione/harry-potter-and-the-philosophers-stone', 
    '"The Catcher in the Rye" je roman američkog pisca J.D. Salingera, prvi put objavljen 1951. godine. Priča prati nekoliko dana u životu Holdena Caulfielda, buntovnog tinejdžera koji je izbačen iz privatne škole i luta po New Yorku. Holden je nezadovoljan i izgubljen, bori se s osećajem otuđenosti i nesigurnosti. Kroz njegovu priču, Salinger istražuje teme adolescencije, identiteta i emocionalnog bola. Roman je poznat po svom autentičnom glasu naratora i iskreno prikazanoj unutrašnjoj borbi mladih ljudi.'
);


INSERT INTO poruke (ID, Ime, Prezime, Email, Poruka) 
VALUES 
(
    1, 
    'Petar', 
    'Petrovic', 
    'petarp@gmail.com', 
    'Poštovani, želim da se zahvalim na organizaciji fantastičnih događaja. Voleo bih da se uključim u neki od budućih događaja.'
),
(
    2, 
    'Ana', 
    'Nikolic', 
    'ananikolic@gmail.com', 
    'Pozdrav, interesuje me da li se knjige mogu pozajmiti iz vaše biblioteke? Hvala.'
);

INSERT INTO komentari (ID, ID_Knjige, Korisnik, Komentar, Datum) 
VALUES 
(
    2, 
    2, 
    'Dule123', 
    'Svidja mi se deo gde mi mozemo da stavimo nase misljenje. Strava!', 
    '2024-08-11 15:47:55'
),
(
    3, 
    2, 
    'Damjan Ilic', 
    'Nije los sajt', 
    '2024-08-11 15:48:41'
),
(
    4, 
    2, 
    'Damjan Ilic', 
    'Ovo je dobra knjiga i zeleo sam da je nadjem negde gde mogu za dzabe da je citam. Hvala Vam, najbolji ste!', 
    '2024-08-11 15:55:00'
),
(
    5, 
    1, 
    'Marko Mirkovic', 
    'Dobar je roman i svidja mi se lakoca pristupa samom pdf fajlu sa kog ste nam obezbedili da citamo.', 
    '2024-08-11 15:55:00'
),
(
    6, 
    3, 
    'Andrea', 
    'Nije lose, malo da se poradi na estetici i sve ce da bude dobro.', 
    '2024-08-11 15:55:24'
);

