<?php
$nam = htmlspecialchars($_POST['name'], ENT_QUOTES);
$set = htmlspecialchars($_POST['set'], ENT_QUOTES);
$number = htmlspecialchars($_POST['number'], ENT_QUOTES);

echo "私の名前は、" . $nam . "<br>";
echo "ご希望の商品は、" . $set . "<br>";
echo "注文数は、" . $number . "<br>";

// $name = htmlspecialchars($_POST['name'], ENT_QUOTES);
// print "私の名前は、" . $name . "<br>";