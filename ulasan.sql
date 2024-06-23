CREATE DATABASE EksplorasiIndonesia;
USE EksplorasiIndonesia;

-- Table for Users
CREATE TABLE Users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nama VARCHAR(100) NOT NULL,
    email VARCHAR(100) UNIQUE NOT NULL,
    password VARCHAR(100) NOT NULL
);

-- Table for TempatWisata
CREATE TABLE TempatWisata (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nama VARCHAR(100) NOT NULL,
    deskripsi TEXT,
    lokasi VARCHAR(100)
);

-- Table for Ulasan
CREATE TABLE Ulasan (
    id INT AUTO_INCREMENT PRIMARY KEY,
    user_id INT NOT NULL,
    tempat_wisata_id INT NOT NULL,
    rating INT CHECK (rating >= 1 AND rating <= 5),
    comment TEXT,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (user_id) REFERENCES Users(id),
    FOREIGN KEY (tempat_wisata_id) REFERENCES TempatWisata(id)
);

-- Table for Registrasi
CREATE TABLE Registrasi (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nama VARCHAR(100) NOT NULL,
    email VARCHAR(100) UNIQUE NOT NULL,
    password VARCHAR(100) NOT NULL,
    registered_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Trigger to insert data from Registrasi to Users after insert
DELIMITER //
CREATE TRIGGER after_registrasi_insert
AFTER INSERT ON Registrasi
FOR EACH ROW
BEGIN
    INSERT INTO Users (nama, email, password)
    VALUES (NEW.nama, NEW.email, NEW.password);
END;
//
DELIMITER ;
