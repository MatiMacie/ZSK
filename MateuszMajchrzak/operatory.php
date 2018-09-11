<!DOCTYPE html>
<html lang="pl">
  <head>
    <meta charset="utf-8">
    <title>OPERATORY</title>
  </head>
  <body>
<?php
      //OPERATORY
      $potegowanie = 2**10;
      $modulo = 11%3;
      echo $potegowanie."<br>";
      echo $modulo."<br>";
      //+,-,*

      //OPERATORY bitowe & (and), | (or), ~ (not), ^ (xor)
      //przesunięcie bitowe w lewo >>
      //przesunięcie bitowe w prawo <<
      $dziesiec = 0b1010;
          echo $dziesiec."<br>";
      $dziesiec = $dziesiec >>1;
          echo $dziesiec."<br>";
      $dziesiec = $dziesiec <<1;
          echo $dziesiec."<br>";
      $dziesiec = $dziesiec <<2;
          echo $dziesiec."<hr>";
      //operatory logiczne &&(and) ||(or) !(not) and or xor
/*
      $sklep = 'otwarty';
      $pieniadze = 1800;
      $romet = false;
      if ($sklep = 'otwarty' && $pieniadze >= 800 && $romet == true) {
          echo "Kupiłeś rower romet <br>";
      }else {
        echo "Idź piechto <br>";
      }
*/
?>
    <fieldset>
    <legend>Zakup rowera</legend>

    <form method="post">
        <select name="sklep">
            <option value="o">otwarty</option>
            <option value="z">zamkniety</option>
        </select><br>
        <input type="number" name="pieniadze"><br>
        <select name="romet">
            <option value="d">dostp</option>
            <option value="b">brak</option>
        </select><br>
        <input type="submit" name="guzik" value="sprawdz"><br>
    </form>
  </fieldset>
  <?php
if (isset($_POST['guzik']) && !Empty($_POST['pieniadze'])){
        $sklep = $_POST['sklep'];
        $number = $_POST['pieniadze'];
        $romet = $_POST['romet'];
      if ($sklep == 'o' && $number >= 800 && $romet == 'd') {
        echo "Kupiłeś rower romet <br>";
    } else {
        echo "Idź piechto <br>";
    }
  }
  ?>
  </body>
</html>
