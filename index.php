<?php
// $i = 0;
// while($i <10){
//     echo "$i";
//     $i++;
// }
// echo '<br><hr />';

// $arr = [1, 2, 3, 4, 5];
// $len = count($arr);
// for ($i = 0; $i < $len; $i++){
//     if ($i < $len - $i -1){
//         $buf = $arr[$len - $i -1];
//         $arr[$len - $i -1] = $arr[$i];
//         $arr[$i] = $buf;
//     }

// }
// echo '<pre>';
// print_r ($arr);
// echo '</pre>';

// $arr2 = [1, 2, 3, 4, 5];
// $len2 = count($arr);
// $n = 0;
// for ($i = 0; $i < $len; $i++){
//     if($arr2[$i] > $n){
//         $n = $arr2[$i];
//     }
// }
// print_r ($n);

// $arr2 = [1,2,3,4,5];
// foreach($arr2 as $k => $v){
//     $arr2[$k] = $v*2;
// }

// echo '<pre>';
// print_r ($arr2);
// echo '</pre>';

// $arr3 = [1,2,3,4,5];
// foreach($arr3 as &$v){
//     $v = $v*2;
// }

// echo '<pre>';
// print_r ($arr3);
// echo '</pre>';

// $arr2 = [10,2,3,4,5];
// echo current($arr2);
// echo next($arr2);

// foreach (range(9,1, -1) as $i){
//     echo $i;
// };


echo '1. Если переменная $a пустая, то выведите \'Верно\', иначе выведите \'Неверно\'.
Проверьте работу скрипта при $a, равном 1, 3, -3, 0, null, true, \'\', \'0<br><br>';
$a;
if ($a == NULL){
    echo ("Верно<br><br>");
} else {
    echo ("Неверно<br><br>");
}

echo '2. Дано трехзначное число. Поменяйте среднюю цифру на ноль.<br><br>';
$a = 123;
$a = strval($a);
$a[1] = 0;
echo $a . '<br><br>';


echo '3. Если переменная $a равна или меньше 1, а переменная $b больше или
равна 3, то выведите сумму этих переменных, иначе выведите их разность
(результат вычитания). Проверьте работу скрипта при $a и $b, равном 1 и 3, 0
и 6, 3 и 5.<br><br>';
$a = 3;
$b = 5;
if ($a <= 1 AND $b >= 3){
    echo $a+$b . "<br><br>";
} else {echo $a - $b . "<br><br>";}

echo '4. Дана строка с символами, например, \'abcde\'. Проверьте, что первым
символом этой строки является буква \'a\'. Если это так - выведите \'да\', в
противном случае выведите \'нет\'.<br><br>';
$a = 'abcde';
if ($a[0] == 'a'){
    echo 'да<br><br>';
} else{echo 'нет<br><br>';}

echo '5. Дана строка из 6-ти цифр. Проверьте, что сумма первых трех цифр
равняется сумме вторых трех цифр. Если это так - выведите \'да\', в противном
случае выведите \'нет\'.<br><br>';

echo '6. Разработайте программу, которая определяла количество прошедших
часов по введенным пользователем градусах. Введенное число может быть от
0 до 360.<br><br>';

echo '7. Разработайте программу, которая из чисел 20 .. 45 находила те, которые
делятся на 5 и найдите сумму этих чисел.<br><br>';

echo '8. Дано пятизначное число. Цифры на четных позициях «занулить».
Например, из 12345 получается число 10305.<br><br>';

echo '9. Дано число $num=1000. Делите его на 2 столько раз, пока результат
деления не станет меньше 50. Какое число получится? Посчитайте
количество итераций, необходимых для этого (итерация - это проход цикла).
Решите задачу сначала через цикл while, а потом через цикл for.<br><br>';

echo '10. Вывести на экран фигуру из звездочек:<br>
*******<br>
*******<br>
*******<br>
*******<br>
(квадрат из n строк, в каждой строке n звездочек)<br><br>';