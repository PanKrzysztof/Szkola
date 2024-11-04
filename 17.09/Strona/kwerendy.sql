SELECT tytul, plik FROM zdjecia WHERE polubienia >= 100;
SELECT plik, tytul, imie, nazwisko FROM zdjecia JOIN autorzy ON autorzy.id=zdjecia.autorzy_id ORDER BY nazwisko;
SELECT imie, COUNT(zdjecia.id) FROM autorzy JOIN zdjecia ON zdjecia.autorzy_id=autorzy.id GROUP BY autorzy.id;
ALTER TABLE zdjecia ADD rozmiarPliku INT;