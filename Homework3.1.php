<?php

//Parašykite funkciją, kuri mestų kauliuką iki kol iškris 5 arba 6. Visus savo metimus išvestų į ekrana.(while).

function dice()
{
    $roll = rand(1, 6);
    if ($roll == 5 || $roll == 6)
    {
        exit("Finished");
    }
    else {
        while ($roll <= 4)
        {
          echo $roll . "<br>";
          $roll++;
        }
    }
        return $roll;

}
dice();

//Papildomas funkcionalumas žaidimui(papildomas sudėtingumas):
//Metame 2 kauliukus (arba vieną kauliuką 2 kartus).
//taisyklės:
//Jeigu kauliukų suma yra mažiau už 5 reiškia - jūs iškarto pralaimejote.
//Jeigu kauliukų suma daugiau už 5 ir:
//Išmesta buvo 6 ir 6, reiškia - laimėjote dviratį.
//Abiejų kauliukų išmestas skaičius yra vienodas, bet ne 6 ir 6 - reiškia jūs laimėjote bilietą į kiną.
//Kitais atvejais – kauliukas metamas dar kartą.
//Žaidimas turi vykti iki kol žaidėjas laimės / pralaimės(while)
//Visa žaidimo eiga turėtų būti išvesta į ekraną.

function rolldice()
{

$dice1 = rand(1,6);
$dice2 = rand(1,6);
$dicesum = $dice1 + $dice2;

$txt = "Game over";
$txt1 = "You won a bike";
$txt2 = "You won cinema ticket";
$txt3 = "Try again";

    if ($dicesum <=5)
    {
        echo $txt;
        echo "<br>";
    }
    elseif ($dicesum >=5 && $dicesum == 12)
    {
        echo $txt1;
        echo "<br>";
    }
    elseif ($dice1 == $dice2 && $dicesum !== 12)
    {
        echo $txt2;
        echo "<br>";
    }
    else
    {
        while ($dicesum <= 11)
        {
            echo $txt3 . "<br>";
            $dicesum++;
        }
    }
    return $dicesum;

}
rolldice();