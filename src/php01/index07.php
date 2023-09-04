<?php 
// $color = "red";
// echo $color;
// colorという箱に入ったredをechoで呼び出した
// 変数にはデータを1つしか入れれない、


// $color = array("red", "blue", "green");
// colorという箱の中に、red・blue・greenという3つの値を入れ、使いまわすことができる。
// echo $color[0];
// redを取り出したい場合


// $people = array('Taro', 'Jiro', 'Saburo');
// $peopleという箱の中に、Taro・Jiro・Saburoという3つの値を入れ使いまわすことができる。
// var_dump($people);
// $peopleという変数の値を詳細に出力する。

// $people = array(
    // 変数$peapleの箱の中に
    // "persoal" => "Taro",
    // 「peasoal1というTaro」
    // "persoa2" => "Jiro",
    // 「peasoa21というJiro」
    // "persoa3" => "Saburo",
    // 「peasoal3というSaburo」
// );
// という３つの値を入れ使いまわす

// var_dump($people);
// 変数$peopleの値を詳細に出力する

// $people = [
//   'person1' => 'taro',
//   'person2' => 'jiro',
// ];
// 配列の値を取得するには、配列の変数にキーを［ ］（角括弧）で指定。

// echo $people['person1'];


// $people = [    // 変数$peapleの箱の中に（外枠の　[]（角括弧）で配列を指定）
//     // 下記の値を連想配列で指定（内枠の　[]（角括弧）で配列を指定）
//     // 大枠[0]
//     [    
//     // 内枠[0]だけど連想配列だからキーは"last_name"になる
//     "last_name" => "山田",  
//     // 内枠[1]だけど連想配列だからキーは"first_name"になる
//     "first_name" => "太郎",
//     // 内枠[2]だけど連想配列だからキーは"age"になる
//     "age" => 29,
//     // 内枠[3]だけど連想配列だからキーは"gender"になる
//     "gender" => "男性"
//     ],
//     // 大枠[1]
//     [
//     // 内枠[0]だけど連想配列だからキーは"last_name"になる
//     "last_name" => "鈴木",
//     // 内枠[1]だけど連想配列だからキーは"first_name"になる
//     "first_name" => "次郎",
//     // 内枠[2]だけど連想配列だからキーは"age"になる
//     "age" => 25,
//     // 内枠[3]だけど連想配列だからキーは"gender"になる
//     "gender" => "男性"
//     ],
//     // 大枠[2]
//     [
//     // 内枠[0]だけど連想配列だからキーは"last_name"になる
//     "last_name" => "佐藤",
//     // 内枠[1]だけど連想配列だからキーは"first_name"になる
//     "first_name" => "花子",
//     // 内枠[2]だけど連想配列だからキーは"age"になる
//     "age" => 20,
//     // 内枠[3]だけど連想配列だからキーは"gender"になる
//     "gender" => "女性"
//     ]

// ];

// echo $people[0]["last_name"];
// // 出力は[外枠0][内枠"last_name"（連想配列）]になるから
// // 結果は「山田」と出力される。


// $people = array('Taro', 'Jiro', 'Saburo');
// // $peopleという箱の中に、Taro・Jiro・Saburoという3つの値を入れ使いまわすことができる。

// foreach ($people as $person) {
// // 要素を取り出す配列（$people）as　配列から取り出して格納しておく変数（$person）
//     echo $person;
// // 変数（$person）を表示
//     echo '<br />';
// // 改行
// }

// $animalList = ["犬", "猫", "うさぎ"];

// foreach ($animalList as $animal){
//     echo $animal."<br>";
// }

// $animalList = array(
//     "dog" => "犬",
//     "cat" => "猫",
//     "rabbit" => "うさぎ");

// foreach($animalList as $key => $value) {
//     print $key."は" . $value."という意味です<br>";
// }


// 問題
// Taro(25歳men)
// Jiro(20歳men)
// hanako(16歳women)

// $people = [
//     ["taro", 25, "men"],
//     ["jiro", 20, "men"],
//     ["hanako", 16, "women"]
// ];

// foreach ($people as $person) {
//     echo $person[0] . '(' . $person[0] . '歳' . $person[2] . ')'. "<br>";
// }

// // 変数
// $title1 = 'タイトル 1';
// $content1 = 'PHPテストです 1';
// $post_at1 = '2023/08/05 1';
// $tag1 = ['PHP 1', 'プログラミング 1'];
// echo $title1;
// // 出力結果　title　と表示される。

// $title2 = 'タイトル 2';
// $content2 = 'PHPテストです 2';
// $post_at2 = '2023/08/05 2';
// $tag2 = ['PHP 2', 'プログラミング 2'];
// echo $title2;
// // 出力結果　title 2と表示される。


// // 配列
// $blog = array(
// $title, $content, $post_at, $tag
// );
// echo $blog[0];
// // 出力結果　タイトルと表示される


// // 連想配列（array）
// $blog1 = array(
// 'ttl1' => $title1,
// 'content1' => $content1,
// 'podt_at1' => $post_at1,
// 'tag1' => $tag1
// );
// echo $blog['ttl'];
// // 表示結果　タイトルと表示される

// $blog2 = array(
// 'ttl2' => $title2,
// 'content2' => $content2,
// 'podt_at2' => $post_at2,
// 'tag2' => $tag2
// );
// echo $blog['ttl2'];
// // 表示結果　タイトル 2と表示される



// // 連想配列（［］）
// $blog1 = [
// 'ttl1' => $title1,
// 'content1' => $content1,
// 'podt_at1' => $post_at1,
// 'tag1' => $tag1
// ];
// echo $blog['ttl'];
// // 表示結果　タイトルと表示される

// $blog2 = [
// 'ttl2' => $title2,
// 'content2' => $content2,
// 'podt_at2' => $post_at2,
// 'tag2' => $tag2
// ];
// echo $blog['ttl2'];
// // 表示結果　タイトル 2と表示される


// // 多次元配列
// $blogs = [$blog1, $blog2];

// // var_dumpで詳細確認
// echo '<pre>';
// var_dump($blogs);
// echo '</pre>';


// // foreach文　
// foreach ($blog2 as $key => $value) {
//     echo "<br>";
//     echo $key . "=" . $value;
// };

// // 多次元配列でのforeach文
// foreach ($blogs as $key) {
//     foreach ($key as $value) {
//     echo '<br>';
//     echo $value;
//     }
// };

// $a = 7;
// if ($a > 5) {
// echo "true";
// } else {
// echo "false";
// }

// 

// function addNumber($a, $b)
// {
//     $c = $a + $b;
//     return $c;
// }

// $ttl = addNumber(2, 3);
// print $ttl;
