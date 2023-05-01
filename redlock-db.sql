CREATE DATABASE redlock;

USE redlock

CREATE TABLE users (
    ID INT PRIMARY KEY,
    Nama VARCHAR(255),
    Alamat VARCHAR(255),
    Jabatan VARCHAR(255)
);

INSERT INTO users VALUES
(1, 'Faiz', 'Kemanggisan', 'Komisaris'),
(2, 'Farrel', 'Karawaci', 'Direktur Utama'),
(3, 'Lutfi', 'Grogol', 'General Manager');


