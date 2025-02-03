<?php
// 1. 1から100までの数値で、10の倍数だけを表示するプログラムを作成してください
// 100回処理
for($i=1; $i <= 100; $i++) {
    // 10の倍数を判定して表示
    if($i % 10 === 0) {
        echo $i . "\n";
    }
}
?>

<?php
// 2. 1から100までの数値で、偶数の数値の合計を出力してください
// 初期値(合計値)
$total = 0;

for($i = 1; $i <= 100; $i++) {

    if($i % 2 === 0) { // 偶数のみ加算
        $total = $total + $i;
    }

}
// 合計値の表示
echo $total;

?>

<?php
// 3. 1から100までの数値で、条件によって下記の表示をするプログラムを作成してください
// 3の倍数 -> Fizz、5の倍数 -> Buzz、15の倍数 -> FizzBuzz、それ以外 -> 数字

// 100以下の場合繰り返し処理
for($i = 1; $i <= 100; $i++){

    if($i % 15 === 0) { //　15の倍数を表示
        echo "FizzBuzz" . "\n";

    } else if($i % 5 === 0) { //　5の倍数を表示
        echo "Buzz" . "\n";

    } else if($i % 3 === 0) { //　3の倍数を表示
        echo "Fizz" . "\n";

    } else { //　それ以外の数字を表示
        echo $i . "\n";

    }
}

?>


<?php
// 4. 5つの数字の中から最も大きい数字を出力するプログラムを作成してください
// 組み込み関数を使うのは禁止です

// 数字の入力
$numbers = array(1, 2, 7, 4, 3);

// 初期値　最も大きい数字
$big_number = 0;

foreach($numbers as $number) {// 入力された数字を取り出す

    if($number > $big_number) {//入力された数字が大きければ数字を代入する
        $big_number = $number;
    }
}
// 数字の表示
echo $big_number;

?>



<?php
// // 5. 特定の文字列が回文かどうかを判別するプログラムを作成してください

// // 回文の格納
$word ="こんにんこ";

// // 文字列を1文字づつ配列へ
$array = mb_str_split($word);

// 文字列数
$length = mb_strlen($word);

// インデックスのカウント
$index = $length;

for($i = 0; $i < $length; $i++) {
    // インデックスの最大数から-1
    $index = $index - 1;
    // インデックスを逆順に格納
    $r_word[$i] = $array[$index];
}

// 回文の判定
if($word === implode($r_word)){
    echo "回文です";
} else {
    echo "回文ではありません";
}


?>

