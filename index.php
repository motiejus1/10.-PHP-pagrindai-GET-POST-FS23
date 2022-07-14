<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP pagrindai</title>
</head>
<body>
    <h1>PHP pagrindai</h1>
<?php
//kintamojo deklaravimas + kintamojo priskyrimas
//kintamojo isvedimas
//$ tas apts kaip javascripte rasytume let
//javascripte retai uzbaigdavo eilute ;
//PHP tai yra privaloma !!!!!!!!
$skaicius1 = 5;
$skaicius2 = 4;

$suma = $skaicius1 + $skaicius1;

//echo komanda

echo "Labas";
echo 'Labas';
echo $suma;
echo "Dvieju skaiciu suma yra".$suma;
?>

<h2>
    <?php 
    $skaicius3 = 12;
    $skaicius4 = 17;

    echo $skaicius3 + $skaicius4;
     
    ?>
</h2>


<?php
 echo "<div class='labas'>Div sugeneruotas su php</div>";
?>


<?php 
$a = 5;
$b = 4;

if($a>$b) {
    echo "a daugiau uz b";
} else {
    echo "b daugiau uz a";
}

for($i=0; $i<9; $i++) {
    echo $i;
}

function test() {
    echo "Paleista funkcija";
}

test();

$masyvas = [0,1,2,3,4,5,6,7];
$masyvas1 = array(
    0 => "labas",
    1 => "labas1",
    2 => "labas3",
);

$masyvas2 = [];
$masyvas3 = array();


// GET ir POST 

//Skaiciuotuvas.
// Sudeti du skaicius is input laukeliu.


?>
</body>
</html>