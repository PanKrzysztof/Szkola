SELECT nazwa FROM marki;
SELECT model, rocznik, przebieg, paliwo, cena, zdjecie FROM samochody WHERE id=10;
SELECT nazwa, model, rocznik, cena, zdjecie FROM marki JOIN samochody ON marki.id = samochody.marki_id WHERE wyrozniony=1 LIMIT 4;
SELECT model, cena, zdjecie FROM samochody JOIN marki ON marki.id = samochody.marki_id WHERE nazwa="Audi";