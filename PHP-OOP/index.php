<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
include 'Class.php';
include 'fileClass.php';



echo $account->getAcc() . '<br>';
echo $account->getBal() . '<br>';
echo $account->getName() . '<br>';
echo "<hr>";

echo $customer->getName(). '<br>';
echo $customer->getAge();

?>
    
</body>
</html>