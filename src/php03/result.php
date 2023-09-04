<?php

require_once('./functions/search_city_time.php');

$tokyo = searchCityTime('東京');

$city = htmlspecialchars($_GET['city'], ENT_QUOTES);
$comparison = searchCityTime($city);

?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>World Clock</title>
    <link rel="stylesheet" href="css/sanitize.css">
    <link rel="stylesheet" href="css/common.css">
    <!-- <link rel="stylesheet" href="css/index.css"> -->
    <!-- 一旦確認のためにresult.css入れ込む。phpの記入するとき外す -->
    <link rel="stylesheet" href="css/result.css">
</head>
<body>
    <header class="header">
        <div class="header__inner">
            <a class="header__logo" href="/php03/index.php">World Clock
            </a>
        </div>
    </header>
    <div class="result__content">
        <div class="result-cards">
            <div class="result-card">
                <div class="result-card__img-wrapper">
                    <img class="result-card__img" src="img/<?php echo $tokyo['img']?>" alt="国旗">
                </div>
                <div class="result-card__body">
                    <div class="result-card__city">
                    <?php echo $tokyo['name']?>
                    </div>
                    <div class="result-card__time">
                    <?php echo $tokyo['time']?>
                    </div>
                </div>
            </div>
            <div class="result-card">
                <div class="result-card__img-wrapper">
                    <img class="result-card__img" src="img/<?php echo $comparison['img']?>" alt="国旗">
                </div>
                <div class="result-card__body">
                    <div class="result-card__city"><?php echo $comparison['name']?></div>
                    <div class="result-card__time"><?php echo $comparison['time']?></div>
                </div>
            </div>
        </div>
    </div>
    
</body>
</html>