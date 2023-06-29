<?php
// Definišite podatke koje želite da unesete u CSV fajl
$podaci = array(
    array('Ime', 'Prezime', 'Email'),
    array('John', 'Doe', 'john.doe@example.com'),
    array('Jane', 'Smith', 'jane.smith@example.com'),
    array('Mark', 'Johnson', 'mark.johnson@example.com')
);

// Definišite putanju i ime CSV fajla
$putanjaDoFajla = 'C:\Users\korisnik\Desktop\podaci.csv';

// Otvorite fajl za pisanje
$fajl = fopen($putanjaDoFajla, 'w');

// Prođite kroz svaki red podataka i zapišite ga u CSV fajl
foreach ($podaci as $red) {
    fputcsv($fajl, $red);
}

// Zatvorite fajl
fclose($fajl);

echo 'CSV fajl je uspešno generisan.';
?>