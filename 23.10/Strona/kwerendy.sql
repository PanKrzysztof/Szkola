SELECT nazwisko, rok_urodzenia FROM `matematycy` WHERE rok_urodzenia < 1800;
SELECT id, imie, nazwisko FROM `matematycy` WHERE liczba_publikacji > 5 AND liczba_publikacji < 20;
SELECT imie, nazwisko, liczba_publikacji FROM `matematycy` WHERE rok_urodzenia < 1800 ORDER BY liczba_publikacji LIMIT 1;
DROP TABLE typy;