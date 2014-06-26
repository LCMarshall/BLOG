<!doctype html>
<html lang="en">
<head>
    <title>Roll Dice</title>
</head>
<body>
    <h1>The random # is, <?php echo $number; ?>!</h1>
    <h1>Your Guess is, <?php echo $guess; ?>!</h1>
    <? if ($number == $guess) : ?>
    <p>Great Guess!!!!</p>
<? endif; ?>

</body>
</html>