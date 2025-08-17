<?php
require_once('functions/search_city_time.php');

$tokyo = searchCityTime("東京");

$city = htmlspecialchars($_GET["city"], ENT_QUOTES);
$comparison = searchCityTime($city);
?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>World Clock</title>
    <link rel="stylesheet" href="css/sanitize.css">
    <link rel="stylesheet" href="css/common.css">
    <link rel="stylesheet" href="css/result.css">
</head>

<body>
    <header class = "header">
        <div class = "header_inner">
            <a class = "header_logo" href="/php02/index.php">
                World Clock
            </a>
        </div>
    </header>

    <main>
        <div class="result_content">
            <div class = "result_cards">
                <div class = "result_card">
                    <div class = "result_card_img-wrapper">
                        <img class = "result_card_img" src="img/<?php echo $tokyo["img"]?>" alt="国旗">
                    </div>
                    <div class = "result_card_body">
                        <p class = "result_card_city"><?php echo $tokyo['name']?></p>
                        <p class = "result_card_time"><?php echo $tokyo['time']?></p>
                    </div>
                </div>
                <div class = "result_card">
                    <div class = "result_card_img-wrapper">
                        <img class = "result_card_img" src="img/<?php echo $comparison['img']?>" alt="国旗">
                    </div>
                    <div class = "result_card_body">
                        <p class = "result_card_city"> <?php echo $comparison['name']?></p>
                        <p class = "result_card_time"> <?php echo $comparison['time']?></p>
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>
</html>