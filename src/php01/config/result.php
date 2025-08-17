<?php

$name = htmlspecialchars($_POST['name'], ENT_QUOTES);
echo "私の名前は、" . $name . "<br/>";
$item = htmlspecialchars($_POST['item'], ENT_QUOTES);
echo "ご希望商品は、" . $item . "<br/>";
$item_number = htmlspecialchars($_POST['item_number'], ENT_QUOTES);
echo "注文数は、" . $item_number . "<br/>";
