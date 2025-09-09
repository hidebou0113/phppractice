<?php

$array_member_2 = [
    '本田' => [
        'height' => 170,
        'hobby' => 'サッカー',
    ],
    '香川' => [
        'height' => 165,
        'hobby' => 'サッカー'
    ]
];

?>

<?php

$test1 = 7;
$test2 = 3;

$test3 = $test1 % $test2;


echo $test3;
?>

<?php

$height = 91;
if ($height !== 90) {
    echo '身長は90cmじゃない';
}

$test = '';
if (!empty($test)) {
    echo '変数はからです';
}

$signal_1 = 'red';
$signal_2 = 'blue';

if ($signal_1 === 'red' && $signal_2 === 'blue') {
    echo '赤と青です';
}


// $members_1 = [
//     'name' => '本田',
//     'height' => 170,
//     'hobby' => 'サッカー'
// ];

// foreach ($members1 as $member) {
//     echo $member;
// }


// foreach ($members1 as $key => $value) {
//     echo $key . 'は' . $value . 'です';
// }

// $members_2 = [
//     '本田' => [
//         'height' => 170,
//         'hobby' => 'サッカー'
//     ],
//     '香川' => [
//         'height' => 144,
//         'hobby' => 'サッカー'
//     ]

// ];

// foreach ($members_2 as $members_1) {
//     foreach ($member_1 as $member => $value)
//         echo $member . 'は' . $value . 'です';
// }




for ($i = 0; $i < 10; $i++) {
    if ($i === 5) {
        break;
        // continue;
    }
    echo $i;
}

echo '<br>';

$j = 0;
while ($j < 5) {
    echo $j;
    $j++;
}

echo '<br>';

$data = 1;

switch ($data) {
    case 1:
        echo '1です';
        break;
    case 2:
        echo '2です';
        break;
    default;
}


echo '<br>';

function test()
{
    echo 'てすと';
}

test();

echo '<br>';


$text = 'aaa';

// echo strlen($text);

echo mb_strlen($text);

$str = '文字列置換';

echo str_replace('置換', 'ちかん', $str);


$str_2 = '指定文字列、で分割します';
echo explode('、', $str_2);


echo '<br>';



$array = ['りんご', 'いちご'];
