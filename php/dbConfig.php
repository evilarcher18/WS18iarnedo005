<?php

$lokal=1; // hodeian 0, lokalean gauedenean 1


if ($lokal) {
   $server="localhost";
   $user="root";   // lokalean erabiltzailea root izan ohi da
   $pass="";               // eta ez da pasahitzarik jartzen
   $database="quiz";
} else {
   $zerbitzaria="localhost";
   $erabiltzailea="idxxx_hodeikoErabiltzailea";
   $gakoa="ZuenPasahitza";  // GitHub-en eremu hau EZABATU
   $db="idxxx_quiz";        // hodeiko db izena: hodeiko aurrizkia + zuek adierazitako db izena atzizki moduan
}
?>