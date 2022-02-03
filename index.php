<!DOCTYPE html>
<html lang="en,ru">

<head>
    <meta charset="UTF-8">

    <title></title>
</head>

<body>
    <?php
 ///////////  Делал как мог. Гдето с встроенными функциями т.к. не могу так быстро делать задания. 
 ///////////  Делал циклом и тд..но какие-то косяки.Если продолжал бы разбираться  - не успелбы остальные задачи даже начать.

    echo '1 Задание'. '<br/>';

    echo 'Дан массив: 1, 2, 5, 18, -30, 0, 11 '. '<br/>';
    function Mass ($a,$b,$c,$d,$e,$f,$g){
        $arr = [$a,$b,$c,$d,$e,$f,$g];
    echo 'Минимальное число : ' . min($arr). '<br/>';
    echo 'Максимальное число : ' . max($arr). '<br/>';
    }
    Mass(1, 2, 5, 18, -30, 0, 11);
    echo '<hr \>';
//////////////////////////////////////...мои попытки решения 2 задачи
     echo '2 Задание'. '<br/>';
     $str = 'developer-php';
     $arr=str_split($str,$length = 1);
     print_r ($arr);

     foreach ($array as $key => $value)
     {
     if ($key % 2 ==0){
     $arr1[] = $value[$i];
     }
    }
     print_r($arr1);
    

   /*  $str = 'developer-php';
      $arr=str_split($str,$length = 1);
      for ($i = 0; $i <= count($arr); $i++) {
        if ($i % 2 == 0) {
            $arr[$i] = 5;
      print_r ($arr);
    */
    echo '<hr \>';
////////////////////////////////////     
    echo '3 Задание'. '<br/>';
///1 Вариант 
function Mass2 ($a,$b,$c,$d,$e,$f,$g){
    $arr = [$a,$b,$c,$d,$e,$f,$g];
echo 'Дан массив: 1, 2, 3, 4, 5, 6, 7 '. '<br/>';
echo 'Сумма элементов массива: '. array_sum($arr);
}
Mass2 (1, 2, 3, 4, 5, 6, 7);
echo '<hr \>';
///2 Вариант
function Mass4 ($a,$b,$c,$d,$e,$f,$g){
    $arr = [$a,$b,$c,$d,$e,$f,$g];  
$sum = 0;
    $arr3 = [1, 2, 3, 4, 5, 6, 7];
    for ($i=0; $i < count($arr3); $i++) { 
      $sum += $arr3[$i];
    }
    echo 'Сумма элементов массива: '.$sum;
}
    Mass4 (1, 2, 3, 4, 5, 6, 7);
    echo '<hr \>';
 //////////////////////////////////           
  echo '4 Задание'. '<br/>';

function ArrR ($a,$b,$c,$d,$e,$f,$g){
    $arr = [$a,$b,$c,$d,$e,$f,$g];
  for ($i = 0; $i < count($arr) / 2; $i++) {
$p = $arr[count($arr)-1-$i];
$arr[count($arr)-1-$i]=$arr[$i];
$arr[$i]=$p;
}
echo '</pre>';
    print_r($arr);
echo '</pre>';
}
  ArrR(1, 2, 5, 18, 30, 2, 11);

    ?>
</body>

</html>