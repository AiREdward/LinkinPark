CREATE DATABASE lp_db;

DROP TABLE IF EXISTS biglietti;
DROP TABLE IF EXISTS tour;
DROP TABLE IF EXISTS transazioni;
DROP TABLE IF EXISTS utenti;

CREATE TABLE utenti (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(50) NOT NULL,
    cognome VARCHAR(50) NOT NULL,
    email VARCHAR(100) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    indirizzo TEXT NOT NULL,
    telefono VARCHAR(20) NULL,
    data_di_nascita DATE NULL,
    ruolo VARCHAR(20) NOT NULL DEFAULT 'utente',
    stato ENUM('attivo', 'bloccato') NOT NULL DEFAULT 'attivo',
    data_creazione TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

INSERT INTO utenti (nome, cognome, email, password, indirizzo, ruolo, stato) 
VALUES 
    ('admin', 'test', 'admin@test', '$2y$10$fQ2S5rViOrfy9RrcOcUAVuaWgEyaV8KdwqEKGqFLfB0vdphUcyJHO', 'via test', 'admin', 'attivo'),
    ('block', 'test', 'block@test', '$2y$10$nx0vjdmO/U8dPT0cWS6M5OydWpdwOcTpRUwlaWCphyF57uzjvUUsS', 'via test', 'utente', 'bloccato');

CREATE TABLE transazioni (
    id INT AUTO_INCREMENT PRIMARY KEY,
    n_carta VARCHAR(20) NOT NULL,
    nome VARCHAR(100) NOT NULL,
    data_scadenza DATE NOT NULL,
    ccv VARCHAR(4) NOT NULL,
    costo_tot DECIMAL(10, 2) NOT NULL,
    el_acquistati TEXT NOT NULL,
    utente_id INT NOT NULL,
    data_creazione TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (utente_id) REFERENCES utenti(id)
);

INSERT INTO transazioni (n_carta, nome, ccv, data_scadenza, costo_tot, el_acquistati, utente_id) 
VALUES 
    ('1234567890123456', 'Mario Rossi', '123', '2024-12-31', 49.99, 'articolo1, articolo2', 1);

CREATE TABLE tour (
    id INT AUTO_INCREMENT PRIMARY KEY,
    evento VARCHAR(255) NOT NULL,
    data DATE NOT NULL,
    orario TIME NOT NULL,
    luogo VARCHAR(255) NOT NULL,
    citta VARCHAR(255) NOT NULL,    
    paese VARCHAR(200) NOT NULL,
    data_creazione TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

INSERT INTO tour (evento, data, orario, luogo, citta, paese)
VALUES
    ('European Tour', '2025-06-24', '20:30:00', 'San Siro', 'Milano', 'Italia'),
    ('European Tour', '2025-06-16', '19:00:00', 'Heinz-Von-Heiden Arena', 'Hanover', 'Germania'),
    ('European Tour', '2025-06-18', '19:30:00', 'Olympiastadion', 'Berlino', 'Germania'),
    ('European Tour', '2025-07-08', '21:00:00', 'Deutsche Bank Park', 'Francoforte', 'Germania'),
    ('European Tour', '2025-06-28', '22:00:00', 'Wembley Stadium', 'Londra', 'Regno Unito'),
    ('Asian Tour', '2025-02-11', '21:30:00', 'Saitama Super Arena', 'Saitama', 'Giappone'),
    ('Asian Tour', '2025-02-16', '19:30:00', 'GBK Madya Stadium', 'Jakarta', 'Indonesia'),
    ('Asian Tour', '2024-12-12', '18:30:00', 'Soundstorm Music Festival', 'Riyadh', 'Arabia Saudita'),
    ('American Tour', '2025-08-16', '20:30:00', 'Wells Fargo Center', 'Detroit', 'Michigan'),
    ('American Tour', '2025-09-13', '22:30:00', 'Dodger Stadium', 'Los Angeles', 'California'),
    ('American Tour', '2025-07-29', '18:30:00', 'Barclays Center', 'Brooklyn', 'New York'),
    ('American Tour', '2025-08-01', '18:00:00', 'TD Garden', 'Boston', 'Massachusetts'),
    ('American Tour', '2025-08-16', '15:30:00', 'Wells Fargo Center', 'Philadelphia', 'Pennsylvania'),
    ('American Tour', '2025-10-26', '16:30:00', 'Nemesio Camacho El Campín Stadium', 'Bogotá', 'Colombia'),
    ('American Tour', '2025-11-01', '20:00:00', 'Estadio Alberto José Armando', 'Buenos Aires', 'Argentina'),
    ('American Tour', '2025-11-10', '19:30:00', 'Neo Química Arena', 'São Paulo', 'Brasile');

    CREATE TABLE biglietti (
    id INT AUTO_INCREMENT PRIMARY KEY,
    utente_id INT NOT NULL,
    tour_id INT NOT NULL,
    data_creazione TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (utente_id) REFERENCES utenti(id),
    FOREIGN KEY (tour_id) REFERENCES tour(id)
);