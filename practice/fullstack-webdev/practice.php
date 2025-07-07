<?php
// 文字列の出力
/* 
aaa
*/
echo 'hello';
$name = 'Bob';
echo 'hello,' . $name . '<br>';
echo 'bye,' . $name . '<br>';

// 条件分岐
$num = 190;
$absent = 4;
if ($absent >= 5) {
  echo '不合格';
} else if ($num >= 70) {
  echo '秀';
} else if ($num >= 50) {
  echo '合格';
} else {
  echo '不合格';
}
echo '<br>';

/*  何か商品を買った際に合計金額を表示するための
プログラムを作成してみましょう。
 
$price: 一つ当たりの価格（$price >= 0の整数値）
$amount: 買った個数（$amount >= 0の整数値）
$sum: 合計金額
 
表示フォーマット
合計金額が0円より大きい場合
「○○円の商品を○○個買ったので合計金額は○○円です。 」と表示
 
合計金額が0円の場合
「何か商品を買いましょう。」と表示
 
ヒント：乗算は*を使用します。 */
$price = 100;
$amount = 0;
$sum = $price * $amount;
if($sum > 0) {
  echo $price . '円の商品を' . $amount . '個買ったので合計金額は' . $sum . '円です。';
} else {
  echo '何か商品を買いましょう。';
}

//配列と繰り返し処理
$array = [
  ['table', 1000],
  ['sofa', 100],
  ['shelf', 10],
  ['desk', 10000],
  ['chair', 1400],
  ['bed', 1050],
];

// array_shift($array);
// array_pop($array);
array_splice($array, 2, 3);
foreach($array as $value) {
  echo "{$value[0]}は{$value[1]}円です";
}

/* 理解度チェック（配列）
問１ 商品一覧
table 1000円　2個　
chair 500円　4個　
bed 10000円　2個　
light 5000円　1個　
*/ 

$products = [
  'table' => [1000, 2],
  'chair' => [500, 4],
  'bed' => [10000, 2],
  'light' => [5000, 1]
];

echo '<div>商品一覧</div>';
foreach($products as $key => $value) {
  echo "{$key}は{$value[0]}円で{$value[1]}個存在します。";
};

/*
$cartの商品を買いたいとして
$productsの在庫の有無で分岐
*/

$cart = [
  'table' => 4,
  'bed' => 2, 
];
echo "<div>商品購入</div>";

foreach($cart as $product_name => $quantity) {
  $stock = $products[$product_name][1];
  if ($quantity > $stock){
    echo "すみません。{$product_name}は{$stock}個しかありません。";
  } else {
    echo "はい。ありがとうございます。";
  }
}
