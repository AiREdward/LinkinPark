CREATE DATABASE lp_db;

DROP TABLE IF EXISTS utenti;
DROP TABLE IF EXISTS transazioni;

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
    data_creazione TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

INSERT INTO utenti (nome, cognome, email, password, indirizzo, ruolo) 
VALUES (
    'admin', 
    'test', 
    'admin@test', 
    '$2y$10$fQ2S5rViOrfy9RrcOcUAVuaWgEyaV8KdwqEKGqFLfB0vdphUcyJHO',
    'via test', 
    'admin'
);

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
VALUES (
    '1234567890123456', 
    'Mario Rossi', 
    '123', 
    '2024-12-31',
    49.99, 
    'articolo1, articolo2', 
    1
);
