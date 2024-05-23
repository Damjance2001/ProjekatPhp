CREATE DATABASE KnjizevniKlub;

USE KnjizevniKlub;

CREATE TABLE dogadjaj (
    ID INT AUTO_INCREMENT PRIMARY KEY,
    NazivDogadjaja VARCHAR(255) NOT NULL,
    Datum DATE NOT NULL,
    Lokacija VARCHAR(255) NOT NULL,
    Vreme TIME NOT NULL,
    Opis TEXT NOT NULL
);

CREATE TABLE knjige (
    ID INT AUTO_INCREMENT PRIMARY KEY,
    NazivKnjige VARCHAR(255) NOT NULL,
    AutorKnjige VARCHAR(255) NOT NULL,
    Zanr VARCHAR(255) NOT NULL,
    PDF VARCHAR(255) NOT NULL,
    Opis TEXT NOT NULL
);

CREATE TABLE korisnici (
    ID INT AUTO_INCREMENT PRIMARY KEY,
    Ime VARCHAR(255) NOT NULL,
    Prezime VARCHAR(255) NOT NULL,
    Email VARCHAR(255) NOT NULL,
    Lozinka VARCHAR(255) NOT NULL,
    Datum_Uclanjenja DATE NOT NULL
);

CREATE TABLE poruke (
    ID INT AUTO_INCREMENT PRIMARY KEY,
    Ime VARCHAR(255) NOT NULL,
    Prezime VARCHAR(255) NOT NULL,
    Email VARCHAR(255) NOT NULL,
    Poruka TEXT NOT NULL
);

INSERT INTO dogadjaj (NazivDogadjaja, Datum, Lokacija, Vreme, Opis) VALUES
('Književno veče sa autorom Milanom Petkovićem', '2024-06-15', 'Književni klub, Sala 1', '16:00:00', 'Provedite veče sa renomiranim autorom Milanom Petkovićem'),
('Dani poezije', '2024-06-20', 'Književni klub, Glavna sala', '19:00:00', 'Pridružite nam se na celodnevnom događaju posvećenom poeziji'),
('Uloga književnosti u savremenom društvu', '2024-06-26', 'Književni klub, Sala 2', '12:30:00', 'Diskusija sa književnim kritičarima i autorima o značaju književnosti u savremenom društvu'),
('Kreativno pisanje za početnike', '2024-06-12', 'Književni klub, Radionica sala', '18:00:00', 'Naučite osnove kreativnog pisanja sa iskusnim instruktorima'),
('Čitalački maraton: 24 sata književnosti', '2024-06-07', 'Književni klub, Glavna sala', '20:00:00', 'Pridružite se našem čitalačkom maratonu i uživajte u literaturi 24 sata'),
('Veče kratkih priča', '2024-06-21', 'Književni klub, Sala 1', '17:00:00', 'Uživajte u večeri posvećenoj kratkim pričama domaćih autora'),
('Izložba ilustracija za knjige', '2024-06-28', 'Književni klub, Sala 2', '21:00:00', 'Pridružite nam se u debati gde ćemo raspravljati o ilustracijama za knjige');

INSERT INTO knjige (NazivKnjige, AutorKnjige, Zanr, PDF, Opis) VALUES
('Orlovi Rano Lete', 'Branko Ćopić', 'Roman', 'http://www.diogenpro.com/uploads/4/6/8/8/4688084/branko_opi-orlovi_rano_lete.pdf','Knjiga "Orlovi rano lete" je roman za decu u kome je pisac sa puno humora opisao odrastanje jedne grupe dečaka, a kao inspiracija su mu poslužili stvarni događaji iz njegovog detinjstva.  U liku drskog i zlog učitelja ovekovečena je piščeva stroga učiteljica od koje su se on i njegovi školski drugovi krili u šumi.  Roman se sastoji iz dva dela. Prvi deo romana opisuje bezbrižno detinjstvo dečaka, njihove dogodovštine, bezobrazluke i školske nestašluke. U drugom delu romana opisano je potpuno drugačije ponašanje dečaka. Součeni sa ratom i svime onome što ratni događaji donose, odrasli su pre vremena i na sebe preuzeli dužnosti koji nadmašuju njihove godine i njihovo životno iskustvo. O tom preranom odrastanju dečaka simbolično govori i sam naslov romana "Orlovi rano lete". U srprskoj narodnoj tradiciji ptica orao je simbol hrabrosti i slobode. Aludirajući na dečake o kojima govori, pisac ih smatra orlovima koji su silom prilika morali rano da polete.  Početak prvog dela: Roman počinje opisom Prokinog gaja, mesta na kojem se zbiva najveći deo radnje. U njemu se nalazi grob hajduka Jovančeta i zaravan Tepsija na kome su deca najviše boravila.'),
('The Great Gatsby', 'F. Scott Fitzgerald', 'Roman', 'https://www.wsfcs.k12.nc.us/cms/lib/NC01001395/Centricity/Domain/7935/Gatsby_PDF_FullText.pdf', '"The Great Gatsby" je roman američkog pisca F. Scott Fitzgeralda, prvi put objavljen 1925. godine. Radnja romana smeštena je u burne dvadesete godine prošlog veka, poznate kao "Jazz Age," i prati život bogatog i misterioznog Jay Gatsbyja. Gatsby je poznat po svojim raskošnim zabavama koje priređuje u svom luksuznom dvorcu na Long Islandu, ali malo ko zna njegovu pravu priču i motivaciju. Centralna tema romana je Gatsbyjeva opsesivna ljubav prema Daisy Buchanan, mladoj ženi iz visokog društva koja je udata za bogatog, ali okrutnog Toma Buchanana. Kroz priču o Gatsbyjevom usponu, bogatstvu i tragičnom padu, Fitzgerald kritikuje američki san i razotkriva moralne mane društva prepunog korupcije i praznine. Kroz likove i događaje, roman istražuje teme ljubavi, izdaje, iluzije i dekadencije. "The Great Gatsby" je danas smatran jednim od najvažnijih dela američke književnosti, poznat po svom elegantnom stilu, simbolici i dubokom uvidu u ljudsku prirodu i društvo.'),
('Catcher in the Rye', 'J. D. Salinger', 'Roman', 'https://simontechnology.org/ourpages/auto/2013/1/23/53406450/Catcher%20in%20the%20Rye%20Text.pdf', '"The Catcher in the Rye" je roman američkog pisca J.D. Salingera, prvi put objavljen 1951. godine. Priča prati nekoliko dana u životu Holdena Caulfielda, buntovnog tinejdžera koji je izbačen iz privatne škole i luta po New Yorku. Holden je nezadovoljan i izgubljen, bori se sa osećajem otuđenosti i depresije dok pokušava da pronađe svoje mesto u svetu koji doživljava kao licemeran i površan. Njegova potraga za smislom života i osećajem pripadnosti je oslikana kroz njegove susrete sa raznim ljudima i refleksijama o životu, porodici, i društvu. Jedan od ključnih motiva romana je Holdenova želja da zaštiti nevinost dece, što se simbolično izražava kroz njegovu fantaziju o tome da bude "čuvar u žitu" (catcher in the rye) i spreči decu da padnu u korupciju odraslog sveta. Kroz Holdenov narativ, Salinger istražuje teme adolescencije, gubitka, nevinosti i pobune. "The Catcher in the Rye" je postao kultna knjiga i često je bio predmet kontroverzi zbog svog eksplicitnog jezika i tema, ali je i dalje jedan od najuticajnijih romana 20. veka, cenjen zbog svog dubokog uvida u ljudsku psihologiju i kritike društva.');

INSERT INTO korisnici (Ime, Prezime, Email, Lozinka, Datum_Uclanjenja) VALUES
('Damjan', 'Ilic', 'ddamjaniilic@gmail.com', '0', '2024-05-22'),
('Marko', 'Markovic', 'markomarkovic@gmail.com', '1234', '2024-05-22'),
('Darko', 'Radeka', 'darkoradeka@gmail.com', '124', '2024-05-22'),
('Andjela', 'Djokic', 'aandjadjokic@gmail.com', 'andjelakra', '2024-05-22'),
('Uros', 'Tatomir', 'urostatomir@gmail.com', 'Uki123', '2024-05-22'),
('Aleksandar', 'Djalovic', 'aleksandardjalovic@gmail.com', 'aleksadjal', '2024-05-22'),
('Nikola', 'Nikolic', 'nikolanikolic@gmail.com', 'nikola123', '2024-05-23'),
('Nikola', 'Nikolic', 'nikolanikolic1@gmail.com', '1235', '2024-05-23'),
('Damjan', 'Milosevic', 'damjanmilosevic@gmail.com', 'milosevic1', '2024-05-23'),
('Aleksandar', 'Jovanovic', 'aleksandarjovanovic@gmail.com', 'aleksandar', '2024-05-23'),
('Andjela', 'Djalovic', 'andjeladjalovic@gmail.com', 'andjeladjo', '2024-05-23'),
('Andjela', 'Tatomir', 'nikolajovanocii@gmail.com', '456747', '2024-05-23');

INSERT INTO poruke (Ime, Prezime, Email, Poruka) VALUES
('Damjan', 'Ilic', 'ddamjaniilic@gmail.com', 'Ne svidja mi se sajt, probajte nesto da promenite,...');