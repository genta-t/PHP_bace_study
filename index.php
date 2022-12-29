<?php

// echo '<br>';
//$height = 105;

// if ($height >= 100){
//     echo '身長は' . $height . 'cmです';
// }

// if ($height <= 101){
//     echo '身長は' . $height . 'cmjanaidesu--';
// }

// if ($height !== 101){
//     echo '身長は' . $height . 'cm???-';
// }


// $test = '';

// if(!empty($test)){
//     echo 'naidesuu';
// }

// $signal_1 = 'red';
// $signal_2 = 'blue';

// if($signal_1 === 'red' && $signal_2 === 'blue'){
//     echo 'akatoaodesu';
// }

// $math = 80;

// $check = $math >= 80 ? 'good' : 'but';

// echo $check;

// $menbers = [
//     'honda' => [
//         'height' => 170,
//         'hobby' => 'sakka-'
//     ],
//     'kagawa' => [
//         'height' => 270,
//         'hobby' => 'sakka-'
//     ]
// ];


// echo '<br>';

// foreach ($menbers as $menber) {
//     foreach ($menber as $men) {
//         echo $men;
//     }
// }

// for ($i = 0; $i < 10; $i++) {
//     if ($i === 6) {
//         //break; 
//         //continue; なるべく使わない
//     }
//     echo $i;
// }

// $j = 0;
// while ($j < 5) {
//     echo $j;
//     $j++;
// }

// function test()
// {
//     echo 'test';
// }

// test();

// $comment = 'hoge';

// function getComment($string)
// {
//     echo $string;
// }

// getComment($comment);

// function getNumberComment()
// {
//     return 5;
// }

// echo getNumberComment();

// function sumPrice($int1, $int2)
// {
//     $int3 = $int1 + $int2;
//     return $int3;
// }

// $total = sumPrice(4,7);

// echo $total;

// $test = 'アイウエオ';

// echo mb_strlen($test);

// $str = '文字列を変更しますよ';

// echo str_replace('変更', 'へんこう', $str);

// $str = '文字列を。変更しますよ';

// echo '<pre>';
// var_dump(explode('。', $str));
// echo '</pre>';

// $str = '特定の文字列がある確認する';

// echo preg_match('/文字列/', $str);

// echo substr('abcdef', 3);
// echo mb_substr('かきくけこ', 3);

// $array = ['みかん', 'りんご'];

// array_push($array, 'いちご', 'なし');

// echo '<pre>';
// var_dump($array);
// echo '</pre>';

// $postalCode = '123-4567';

// function checkPostalCode($str)
// {
//     $reolaced = str_replace('-', '', $str);
//     $length = strlen($reolaced);

//     if ($length === 7) {
//         return true;
//     }

//     return false;
// }

// var_dump(checkPostalCode($postalCode));

// echo (checkPostalCode($postalCode));

$globalVariable = 'グローバル変数です';

function checkScope($str){
    $localVariable = 'ローカル変数です';
    echo $str;
}

echo $globalVariable;

checkScope($globalVariable);