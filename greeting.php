<?php
// il file che gestisce i dati del form
$write = $_GET["user_write"];
$word = $_GET["censured_word"];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <section>
        <h1>Il testo che ha scritto :</h1>
        <p> <?php echo $write; ?> </p>
        <p>La frase che ha scritto è lunga <?php echo strlen($write); ?> caratteri</p>
    </section>

    <section>
        <h1>Il testo che ha scritto con la parola da censusare : <?php echo $word; ?></h1>
        <?php
        $risultato = str_ireplace($word, "***", $write);
        echo $risultato;
        ?>
        <p>Anch'essa lunga <?php echo strlen($write); ?> caratteri</p>
    </section>


</body>

</html>