<?php
// $name = "Tanaka";
// $last_name = "Yamada";
// $first_name = "Sabro";

// echo $name . "Jiro";
// echo "<br />";
// echo $last_name . $first_name;





// 関数とは
// 「２回以上使うかもしれないコードをテンプレとしておいておく場所」というイメージ。
// はじめに関数ですよという宣言のために「function」は関数という英語。
// 今回は例として自己紹介。自己紹介＝「introduce」する。
// 関数　　関数の名前 ()を入れて、｛｝も入れる。｛｝の中に実行する内容を入れる。

function introduce () {
    echo "ゆうさく";
}
// 上記は引数なし


// 関数の定義方法
// function　関数名　(引数1, 引数2, 引数3...) {
//     実行内容
// }
// 関数の呼び出し方
// 関数名(); ← 引数なし
// 関数名(引数1, 引数2, 引数3...); ← 引数あり
// 引数とは「テンプレート化するときに違わざる得ない各要素を変数化して使えることができる便利なもの」ということ。

// 例　「結婚相談所」で作成
// まずは変数を指定。
$deviationscore = 55; // 大学の偏差値
$height = 180;  // 身長
$income = 700;  // 年収
// 女性の求める条件
$femaleLikedeviationscore = 60;  // 希望偏差値
$femaleLikeheight = 175;  // 希望身長
$femaleLikeincome = 400;  // 希望年収


// 関数を使わずに作成すると
$deviationscore = 55;
$height = 180;
$income = 700;

$femaleLikedeviationscore = 60;
$femaleLikeheight = 175;
$femaleLikeincome = 1000;


echo "偏差値：";
if ($deviationscore >= $femaleLikedeviationscore) {
    echo $deviationscore. "で、合格！<br>";
} else {
    echo $deviationscore. "で、不合格...<br>";
}

echo "身長：";
if ($height >= $femaleLikeheight) {
    echo $height. "で、合格！<br>";
} else {
    echo $height. "で、不合格...<br>";
}

echo "年収：";
if ($income >= $femaleLikeincome) {
    echo $income. "で、合格！<br>";
} else {
    echo $income. "で、不合格...<br>";
}

// 出力結果
// 偏差値：55で、不合格
// 身長：180で、合格！
// 年収：400で、合格！


// 関数で作成
// 男性スペックが女性の希望より上回っていたら合格、下回ったら不合格。
// 男性、偏差値：55、身長：180、年収：400
// 女性、希望偏差値：60、身長175：年収1000

$deviationscore = 55;
$height = 180;
$income = 400;

$femaleLikedeviationscore = 60;
$femaleLikeheight = 175;
$femaleLikeincome = 1000;

function specChecker ($specName, $spec, $femaleLike) {
    echo $specName. ": ";
    if ($spec >= $femaleLike) {
        echo $spec. "で、合格！<br>";
    } else {
        echo $spec. "で、不合格...<br>";
    }
}
specChecker("偏差値", $deviationscore, $femaleLikedeviationscore);
specChecker("身長", $height, $femaleLikeheight);
specChecker("年収", $income, $femaleLikeincome);

// 返り値（戻り値）
// 例　平均年収計算機
function getIncomeAverage ($income1, $income2, $income3) {
    $average = ($income1 + $income2 + $income3) / 3;
    return $average;
    // 「return」より下は処理されない。
}
$incomeAvarage = getIncomeAverage(300, 500, 1000);
echo $incomeAvarage . "<br>";

$femaleLikeincome = getIncomeAverage(300, 500, 1000);
specChecker("年収", $income, $femaleLikeincome);

// 出力結果
// 偏差値：55で、不合格...
// 身長：180で、合格！
// 年収：700で、不合格...
// 偏差値: 55で、不合格...
// 身長: 180で、合格！
// 年収: 700で、不合格...
// 600
// 年収: 700で、合格！


// クラス定義方法
// class クラス名 {
//     実行内容
// }

// RPG キャラの設計
class Character {
    // メンバ変数
    // ㏋
    public $hitpoint;

    // 初期化メソッド（コンストラクト）
    // public function initial () {
    //     $this ->hitpoint = 30;
    //     echo "初期HPは". $this->hitpoint. "です！<br>"
    // }
// 
    // メンバメソッド
    // 攻撃
    function hit () {
        echo "攻撃した！<br>";
    }
    // 逃げる
    function runAway () {
        echo "逃げる！<br>";
    }
}
// クラスをオブジェクト化して使う（動的）
// $オブジェクト名＝new クラス名（引数）;
// $オブジェクト名->メンバ変数 = 20;
// $オブジェクト名->メンバメソッド();

// 勇者というオブジェクトを作りたい場合は
$hero = new Character();
// 変数の中に＝で20を入れる。
$hero ->hitpoint = 20;
// 関数を実行
$hero ->hit();
// 実行されているか確認する為に「print_r(調べたい変数を入れる);」
print_r($hero);
echo "<br>";

// オブジェクト化しなくてそのまま使う（静的）
// クラス名::メンバメソッド();
Character::runAway();
// functionの前に「sutatic」を入れる。

// メンバメソッドの引数
// 5のダメージを与えるということにするには
// オブジェクト化はこうする
// $hero ->hit(5);
// 設計はこうなる()に引数入れる
// function hit ($point) {
//         echo "攻撃した！".$point."のダメージ！<br>";
//     }

// コンストラクタ
$hero->initial();

// 簡単なコントラスト方法（初期化）
public function __construct () {
        $this->hitpoint = 30;
        echo "初期HPは". $this->hitpoint. "です！<br>"
};