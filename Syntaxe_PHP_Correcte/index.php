<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Syntaxe Correcte</title>
</head>
<body>
<h2>Ex 1</h2>
    <?php for($i = 1; $i <= 10; $i++) : ?>
        <p><?= $i ?></p>
    <?php endfor ?>


    <h2>Ex 2</h2>

    <?php for($i = 1; $i <= 10; $i++) : ?>
        <?php if($i != 3) :?>
            <p><?= $i ?></p>
        <?php endif ?>
    <?php endfor ?>

    <h2>Ex 3 </h2>
    <?php for($i = 1; $i <= 10; $i++) : ?>
        <?php if($i != 4 && $i != 5 && $i != 6 && $i != 7) : ?>
            <p><?= $i ?></p>
        <?php endif ?>
    <?php endfor ?>

    <h2>Ex 4</h2>
      <p>La valeur absolue de -5 vaut  <?=abs(-5)?> </p>
      <p> La valeur absolue de 10 vaut <?=abs(10)?> </p>
</body>
</html>