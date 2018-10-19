<?php

$lokal=1; // hodeian 0, lokalean gauedenean 1


if ($lokal) {
   $server="localhost";
   $user="root";   // lokalean erabiltzailea root izan ohi da
   $pass="";               // eta ez da pasahitzarik jartzen
   $database="quiz";
} else {
   $server="localhost";
   $user="id7215556_root";
   $pass="wst131819";  // GitHub-en eremu hau EZABATU
   $database="id7215556_quizz";        // hodeiko db izena: hodeiko aurrizkia + zuek adierazitako db izena atzizki moduan
}
?>