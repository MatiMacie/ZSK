<?php 
// echo 'Janusz';
$liczba1 = 100;
echo '$liczba <br><br>';
echo "Moja ulubiona liczba to: $liczba1";


//typ skalarny prosty

// boolean

$prawda = true;
$falsz = false;
echo '<br><br>';

//typ integer
$calkowita = 200;
$szesnastkowa = 0xA;
$osemkowa = 010;
$binarna = 0b010101100;

echo $szesnastkowa.'<br>';
echo $osemkowa;


echo 'binarna: '.$binarna;
echo '<br>';
$zmiennoprzecinkowa = 5.7;
    echo $zmiennoprzecinkowa.'<br>';

//string
$zmienna = 7.25;
echo '$zmienna <br>';
echo "$zmienna";

//heredoc
$imie = "Oliver"."<br>";
    $napis = <<<ETYKIETA
    Moję imię: $imie
    Lubię ZSK
ETYKIETA;

echo $napis."<br>";

//nowdoc
$nazwisko = 'Nowak';
$napis = <<<'B'
Twoje nazwisko: $nazwisko
B;
    
echo $napis;


//typy złożone 
    //typ aray(tablicowy)
    //typ object (obiektowy)

//typ specjalny
    //typ resorce
    //typ null

$inna = null; 
$inna1 = NULL;

//****************************************************************************************************

echo "<br>Zmienna o nazwie \$nazwisko ma wartość ", $nazwisko;




?>
