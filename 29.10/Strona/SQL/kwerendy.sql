INSERT INTO wynik ("bmi_id", "data_pomiaru", "wynik") VALUES (1, "2020-05-20", 15);
SELECT id, informacja, wart_min FROM bmi;
SELECT wynik.wynik, bmi.informacja FROM wynik, bmi WHERE bmi.id = wynik.bmi_id;
SELECT wart_min, wart_max FROM bmi WHERE informacja="niedowaga";