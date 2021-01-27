create database flowerpower;

create table Winkel(
    WinkelID int not null auto_increment,
    Winkelnaam varchar(255),
    Winkeladres varchar(255),
    Winkelpostcode varchar(255),
    Vestigingplaats varchar(255),
    Telefoonnummer int,
    primary key (WinkelID)
);

create table Medewerker(
    MedewerkerID int not null auto_increment,
    Voorletters varchar(255),
    Voorvoegsels varchar(255),
    Achternaam varchar(255),
    Gebruikersnaam varchar(255),
    Wachtwoord varchar(255),
    primary key (MedewerkerID)
);

create table Klant (
    KlantID int not null auto_increment,
    Voorletters varchar(255),
    tussenvoegsels varchar(255),
    Achternaam varchar(255),
    Adres varchar(255),
    Postcode varchar(255),
    Woonplaats varchar(255),
    Geboortedatum date,
    Gebruikersnaam varchar(255),
    Wachtwoord varchar(255),
    primary key (KlantID)
);

create table Artikel(
    ArtikelID int not null auto_increment,
    Artikel varchar(255),
    Prijs Decimal(19,4),
    primary key (ArtikelID)
);

create table Bestelling(
    ArtikelID int,
    WinkelID int,
    Aantal int,
    KlantID int,
    MedewerkerID int,
    Afgehaald varchar(255),
    foreign key (ArtikelID) references Artikel(ArtikelID),
    foreign key (WinkelID) references Winkel(WinkelID),
    foreign key (KlantID) references Klant(KlantID),
    foreign key (MedewerkerID) references Medewerker(MedewerkerID)
);

create table Factuur(
    Factuurnummer int not null auto_increment,
    Factuurdatum date,
    KlantID int,
    primary key (Factuurnummer),
    foreign key (KlantID) references Klant(KlantID)
);

create table Factuurregel(
    Factuurnummer int,
    ArtikelID int,
    Aantal int,
    Prijs Decimal(19,4),
    foreign key (Factuurnummer) references Factuur(Factuurnummer),
    foreign key (ArtikelID) references Artikel(ArtikelID)
);