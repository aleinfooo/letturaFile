<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lettura di un file di testo</title>
</head>
<body>
    <?php
        $fw = fopen("libri.txt", "r");

        if($fw == false){
            exit();
        }
        else{
            while(feof($fw) == false){
                $record = fgets($fw);
                echo $record;
            }
            fclose($fw);
        }
    ?>
</body>
</html>