<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TP5</title>
</head>
<?php
$var1 = 1;
$var2 = &$var1;
$res = $var2++;
for ($i = 0; $i < $var1; $i++)
    $res += $var2;
?>
<form action="TP5_cible.php?user=user<?= $var1 ?>" method="POST">
    <input name="res" value="<?php echo $res ?>"> <input type="submit" value="Envoyer">
</form>

<body>

</body>

</html>