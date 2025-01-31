

-- Connessione locale
CREATE DATABASE lp_db;

-- Connessione Paolotti
-- CREATE DATABASE amio; // anche se è già creato
-- USE amio;

DROP TABLE IF EXISTS tour;
DROP TABLE IF EXISTS transazione;
DROP TABLE IF EXISTS utenti;

CREATE TABLE utenti (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL UNIQUE,
    nome VARCHAR(50) NOT NULL,
    cognome VARCHAR(50) NOT NULL,
    email VARCHAR(100) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    indirizzo TEXT NOT NULL,
    telefono VARCHAR(20) NULL,
    data_nascita DATE NULL,
    ruolo VARCHAR(20) NOT NULL DEFAULT 'utente',
    stato ENUM('attivo', 'bloccato') NOT NULL DEFAULT 'attivo',
    lastLogin TIMESTAMP NULL DEFAULT NULL,
    data_creazione TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

INSERT INTO utenti (username, nome, cognome, email, password, indirizzo, ruolo, stato) 
VALUES 
    ('admin', 'Admin', 'Test', 'admin@test', '$2y$10$DtD/uFtUSUPSznqliAdVgeX7tflJ62PgUqVvR7tVf1cRkoeERuC3K', 'via test', 'admin', 'attivo'),
    ('user', 'Utente', 'Test', 'user@test', '$2y$10$qSb11LcmGJXjeDLafimZ1usUsGbs9qsJVxzpea/wi3THeDb0pICoa', 'via test', 'utente', 'attivo'),
    ('block', 'Block', 'Test', 'block@test', '$2y$10$nx0vjdmO/U8dPT0cWS6M5OydWpdwOcTpRUwlaWCphyF57uzjvUUsS', 'via test', 'utente', 'bloccato');

CREATE TABLE transazione (
    id INT AUTO_INCREMENT PRIMARY KEY,
    n_carta VARCHAR(20) NOT NULL,
    titolare VARCHAR(100) NOT NULL,
    data_scadenza DATE NOT NULL,
    ccv VARCHAR(4) NOT NULL,
    totale DECIMAL(10, 2) NOT NULL,
    el_acquistati TEXT NOT NULL,
    quantita INT NOT NULL,
    utente_id INT NOT NULL,
    data_creazione TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (utente_id) REFERENCES utenti(id)
);

INSERT INTO transazione (n_carta, titolare, ccv, data_scadenza, totale, el_acquistati, quantita, utente_id) 
VALUES 
    ('1234567890123456', 'Lorenzo Chiesa', '123', '2029-12-31', 110.00, 'Maglia Mercurio, Felpa Urano', 2, 2),
    ('1122334455667788', 'Mario Retegui', '200', '2030-08-20', 50.00, 'Maglia Mercurio', 1, 2),
    ('9876543210987654', 'Andrea Pessina', '300', '2026-01-10', 230.00, 'Maglia Mercurio, Felpa Urano, Felpa Urano, Felpa Urano', 4, 2),
    ('0000111122223333', 'Antonio Sanabria', '400', '2024-10-25', 170.00, 'Maglia Mercurio, Felpa Urano, Felpa Urano', 3, 2),
    ('9999888877776666', 'Lewis Adams', '500', '2024-03-05', 50.00, 'Maglia Mercurio', 1, 2),
    ('5555222233331111', 'Aitana Hernandez', '600', '2024-04-11', 50.00, 'Maglia Mercurio', 1, 2),
    ('1234123412341234', 'Didier Okocha', '700', '2024-06-26', 50.00, 'Maglia Mercurio', 1, 2),
    ('5656232345451212', 'Morgan Kerr', '800', '2024-06-01', 50.00, 'Maglia Mercurio', 1, 2);

CREATE TABLE tour (
    id INT AUTO_INCREMENT PRIMARY KEY,
    evento VARCHAR(255) NOT NULL,
    data DATE NOT NULL,
    orario TIME NOT NULL,
    luogo VARCHAR(255) NOT NULL,
    citta VARCHAR(255) NOT NULL,
    paese VARCHAR(200) NOT NULL,
    descrizione TEXT NOT NULL,
    prezzo DECIMAL(10, 2) NOT NULL,
    data_creazione TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

INSERT INTO tour (evento, data, orario, luogo, citta, paese, descrizione, prezzo)
VALUES
    ('European Tour', '2025-06-24', '20:30:00', 'San Siro', 'Milano', 'Italia', 'Una serata magica nello storico stadio San Siro di Milano.', 85.50),
    ('European Tour', '2025-06-16', '19:00:00', 'Heinz-Von-Heiden Arena', 'Hanover', 'Germania', "Un evento unico all'arena di Hannover. Non perderti la musica dal vivo.", 70.00),
    ('European Tour', '2025-06-18', '19:30:00', 'Olympiastadion', 'Berlino', 'Germania', "Spettacolo imperdibile nell'iconico Olympiastadion di Berlino.", 80.00),
    ('European Tour', '2025-07-08', '21:00:00', 'Deutsche Bank Park', 'Francoforte', 'Germania', 'Vieni a vivere una notte di musica al Deutsche Bank Park.', 75.00),
    ('European Tour', '2025-06-28', '22:00:00', 'Wembley Stadium', 'Londra', 'Inghilterra', 'Un grande show nella leggendaria cornice di Wembley.', 100.00),
    ('Asian Tour', '2025-02-11', '21:30:00', 'Saitama Super Arena', 'Saitama', 'Giappone', 'Preparati per una performance straordinaria nella Saitama Super Arena.', 90.00),
    ('Asian Tour', '2025-02-16', '19:30:00', 'GBK Madya Stadium', 'Jakarta', 'Indonesia', 'Scopri la magia della musica dal vivo al GBK Madya Stadium.', 65.00),
    ('American Tour', '2025-08-16', '20:30:00', 'Wells Fargo Center', 'Detroit', 'USA', 'Un evento epico nel cuore di Detroit.', 95.00),
    ('American Tour', '2025-09-13', '22:30:00', 'Dodger Stadium', 'Los Angeles', 'USA', 'Una serata indimenticabile al Dodger Stadium di Los Angeles.', 120.00),
    ('American Tour', '2025-07-29', '18:30:00', 'Barclays Center', 'Brooklyn', 'USA', 'Non perdere il concerto al Barclays Center a New York.', 110.00),
    ('American Tour', '2025-08-01', '18:00:00', 'TD Garden', 'Boston', 'USA', "Un'esperienza incredibile al TD Garden di Boston.", 105.00),
    ('American Tour', '2025-08-18', '15:30:00', 'Wells Fargo Center', 'Philadelphia', 'USA', 'Philadelphia ti aspetta per un concerto imperdibile.', 92.00),
    ('American Tour', '2025-10-26', '16:30:00', 'Nemesio Camacho El Campín Stadium', 'Bogotá', 'Colombia', 'Un evento memorabile nello stadio di Bogotá.', 60.00),
    ('American Tour', '2025-11-01', '20:00:00', 'Estadio Alberto José Armando', 'Buenos Aires', 'Argentina', 'Buenos Aires ti offre una notte di grande musica.', 70.00),
    ('American Tour', '2025-11-10', '19:30:00', 'Neo Química Arena', 'São Paulo', 'Brasile', 'São Paulo accoglie la band per una performance unica.', 75.00);