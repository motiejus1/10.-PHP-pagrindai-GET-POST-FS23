<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Skaiciutuvas</title>
</head>
<body>
    <!-- GET/POST   php failo pavadinima kuriame uzprogramuotas veiksmas-->
    <!-- <form method="POST" action="skaiciuotuvasVeiksmas.php">
        <input id="skaicius1" class="skaicius1" name="skaicius1"  />
        <input id="skaicius2" class="skaicius2" name="skaicius2" />
        <button name="patvirtinti" type="submit">Skaiciuoti</button>
    </form> -->

    <form method="GET" action="skaiciuotuvas.php">
        <input id="skaicius1" class="skaicius1" name="skaicius1" value="<?php echo isset($_GET["skaicius1"]) ? $_GET["skaicius1"] : ""  ; ?>"  />
        <input id="skaicius2" class="skaicius2" name="skaicius2" value="<?php echo isset($_GET["skaicius2"]) ? $_GET["skaicius2"] : ""  ; ?>" />
        <button name="patvirtinti" type="submit">Skaiciuoti</button>
    </form>

    <div>
        <?php 

            if(isset($_GET["patvirtinti"])) {
                $skaicius1 = $_GET["skaicius1"];
                $skaicius2 = $_GET["skaicius2"];
            
            
                $suma = $skaicius1 + $skaicius2;
            
                echo $suma;
            }
        
        ?>
    </div>
</body>
</html>