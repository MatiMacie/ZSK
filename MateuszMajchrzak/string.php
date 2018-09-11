<!DOCTYPE html>
<html>

<head>
    <title>Moja stona internetowa</title>
</head>

<body>
    Masz na imię:
    <?php
        $imie = "Mateusz";
        echo "$imie<hr>";


    $tekst = <<<TEKST
        zsk - Zespół
        Szkół
        Komunikacji
TEKST;

    echo "Przed użyciem funkcji nl2br: <br>$tekst<hr>";
    echo "Po ozyciu funkcji nl2br: <br>";
    echo nl2br($tekst)."<hr>";

//zamiana na nowe litery
    echo strtolower($tekst)."<hr>";

//zamiana na duże litery
    echo mb_strtoupper($tekst)."<hr>";

//zamiana pierwszej litery na dużą
    $tekst = "jaN nowak KowAl";
    echo ucfirst($tekst)."<hr>";

//zamiana na duze litery
    echo ucwords($tekst)."<hr>";


//*************************************************************************************************************************

$lorem = "Lorem Ipsum jest tekstem stosowanym jako przykładowy wypełniacz w przemyśle poligraficznym. Został po raz pierwszy użyty w XV w. przez nieznanego drukarza do wypełnienia tekstem próbnej książki. Pięć wieków później zaczął być używany przemyśle elektronicznym, pozostając praktycznie niezmienionym. Spopularyzował się w latach 60. XX w. wraz z publikacją arkuszy Letrasetu, zawierających fragmenty Lorem Ipsum, a ostatnio z zawierającym różne wersje Lorem Ipsum oprogramowaniem przeznaczonym do realizacji druków na komputerach osobistych, jak Aldus PageMaker";

echo "$lorem <br><br>";

$kolumna = wordwrap($lorem, 50, "<br>")."<br><br>";


echo $kolumna;


// usuwanie białych znaków

    $imie2 = "Filip";
    $imie3 = "  Filip ";

    echo strlen($imie2);
    echo strlen($imie3);
    echo strlen(ltrim($imie3));
    echo strlen(rtrim($imie3));
    echo strlen(trim($imie3))."<br>";



 //przeszukiwanie
    $adres = "Poznań, ul. Fredry 13 tel.(61) 445-44-58";
    $szukaj = strstr($adres, "tel");
    echo $szukaj."<br>";

    $szukaj1 = strstr($adres, "tel", true);
    echo $szukaj1."<br>";

    $szukaj2 = strstr($adres, "Tel");
    echo $szukaj2."<br>";

    $szukaj3 = stristr($adres, "Tel");
    echo $szukaj3."<br>";

    $mail = strstr("zsk@poznan.pl",64);
    echo $mail."<br>";

    //******************************************************************************
    $ciag1 = "a";
    $ciag2 = "c";

    echo strcmp($ciag1,$ciag2);
    echo strcmp("zzz","zzz");
    echo strcmp("zzz","zza")."<br>";

    $poz = strpos("abcdefgh","cde")."<br>";
    echo $poz;

    $poz = strpos("abcdefgh","abc")."<br>";
    echo $poz;


    $tekst1 = "abcdabcd";
    $tekst2 = "ab";

    if(strpos($tekst1,$tekst2) === false)
        echo "Ciag $tekst2 nie został znaleziony w ciągu $tekst1";
    else{
        echo "Ciag $tekst2 został znaleziony w ciągu $tekst1";}
    echo "<br>";

//*****************************************************************************************

    //przetwarzanie ciagow znakow

    $zamien = str_replace("%imie%","Janusz","%imie% to nie imie %imie% to styl życia")."<br>";
    echo $zamien;

    $nazwisko = substr("Janusz Nowak", 7, 5);
    echo $nazwisko."<br>";

    $login = "Bączek";
    $cenzura = array("ą", "ę", "ś");
    $zamiana = array("a", "e", "s");
    $poprawnylogin = str_replace($cenzura, $zamiana, $login);


    echo $poprawnylogin;

    //napisz program, który będzie cenzurował zdanie podane przez użytkownika w formularzu
    echo <<<FORM
        <form method="post">
            <input type="text" name="dane">
            <input type="submit">
    </form>
FORM;

    if(isset($_POST['dane'])){
        $dane = $_POST['dane'];
        echo "$dane<hr>";
    }

    $cenzo = array("zsk", "zsł", "zse");
    $zamianka = array("*__*", "*__*", "*__*");
    $dane = $_POST['dane'];
    $poprawionedane = str_replace($cenzo, $zamianka, $dane);
    echo "dane przed zamianą $dane<br>";
    echo "dane po zmianie $poprawionedane<br>";

    ?>



</body>



</html>
