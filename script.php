<?php
$bad_word = $_GET ['bad-word'];
$original_text = $_GET['text'];
$censured_text = $_GET['text'];

$censured_text = str_replace($bad_word, '***', $censured_text);
?>

<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="author" content="Leonardo Olia">
    <title>Bad Words</title>
</head>


<body>
    <!-- Testo originale -->
<h2>
    Testo originale:
</h2>

<p><?=$original_text  ?></p>

<h4>Lunghezza paragrafo originale: </h4>

<span><?= strlen($original_text)?> caratteri</span>

<hr>

<!-- Testo censurato -->
<h2>
    Ecco il testo censurato:
</h2>

<p><?=$censured_text  ?></p>

<h4>Lunghezza paragrafo censurato: </h4>

<span><?= strlen($censured_text)?> caratteri</span>

</body>

</html>
