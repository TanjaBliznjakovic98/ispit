<?php

// Definišite podatke koje želite da pretvorite u JSON format
$podaci = array(
    'ime' => 'Tanja',
    'prezime' => 'bliz',
    'email' => 'tanja.b@nesto.com'
);

// Definišite putanju i ime JSON fajla
$putanjaDoFajla = 'C:\Users\korisnik\Desktop\podaci.json';

// Konvertujte podatke u JSON format
$jsonPodaci = json_encode($podaci, JSON_PRETTY_PRINT);

// Upisujte JSON podatke u fajl
file_put_contents($putanjaDoFajla, $jsonPodaci);

echo 'JSON fajl je uspešno generisan.';
?>