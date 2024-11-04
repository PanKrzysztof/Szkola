SELECT miejsce, liczbaDni FROM wycieczki WHERE cena<1000;
SELECT AVG(cena) sredniaCena FROM wycieczki GROUP BY liczbaDni;
SELECT miejsce, nazwa FROM zdjecia JOIN wycieczki ON zdjecia.Wycieczki_id=wycieczki.id WHERE cena>500;
CREATE USER 'EWA'@'localhost' identyfied BY 'EWA!EWA'