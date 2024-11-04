SELECT `nazwa`, `rzeka`, `stanAlarmowy` FROM `wodowskazy`;
SELECT `nazwa`, `rzeka`, `stanOstrzegawczy`, `stanAlarmowy`, `stanWody` FROM `wodowskazy` INNER JOIN pomiary ON wodowskazy.id=pomiary.wodowskazy_id WHERE dataPomiaru = "2022-05-05";
SELECT dataPomiaru, AVG (stanwody) FROM `pomiary` GROUP BY dataPomiaru;