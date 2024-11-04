SELECT * FROM `wycieczki` WHERE poczatek="Wieliczka" OR poczatek"Muszyna";
SELECT `nazwa`, `opis`, `poczatek`, zrodlo FROM `wycieczki` JOIN zdjecia ON wycieczki.zdjecia_id=zdjecia.id;
SELECT COUNT(id) FROM `wycieczki`;
ALTER TABLE wycieczki ADD COLUMN ocena Int;