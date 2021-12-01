<?php 

echo "1. Объявить две целочисленные переменные \$a и \$b и задать им начальные значения. Затем написать скрипт, который работает по следующему принципу:
    если \$a и \$b положительные, вывести их разность;
    если \$а и \$b отрицательные, вывести их произведение;
    если \$а и \$b разных знаков, вывести их сумму;
    Ноль можно считать положительным числом.<br>";
    $a = rand(-99, 99);
    $b = rand(-99, 99);
    echo "\$a=".$a.'<br>';
    echo "\$b=".$b.'<br>';

    if($a>=0 && $b>=0){
        echo 'Разность чисел равна: ',$a-$b;
    }
    elseif ($a<0 && $b<0 ){
        echo 'Произведение чисел равно: ',$a*$b;
    }
    elseif ( ($a>=0 && $b<0) || ($a<0 && $b>=0) ){
        echo 'Сумма чисел равна',$a+$b;
    }
   
 echo "<br>2. Присвоить переменной \$а значение в промежутке [0..15]. С помощью оператора switch организовать вывод чисел от \$a до 15. <br>";

 $c = rand(0, 15);
 echo "переменная \$c $c<br>";
 switch ($c) {
    case 0:
        echo "0<br>";
    case 1:
        echo "1<br>";
    case 2:
        echo "2<br>";
    case 3:
        echo "3<br>";
    case 4:
        echo "4<br>";
    case 5:
        echo "5<br>";
    case 6:
        echo "6<br>";
    case 7:
        echo "7<br>";
    case 8:
        echo "8<br>";
    case 9:
        echo "9<br>";
    case 10:
        echo "10<br>";
    case 11:
        echo "11<br>";
    case 12:
        echo "12<br>";
    case 13:
        echo "13<br>";
    case 14:
        echo "14<br>";
    case 15:
        echo "15<br>";
    }

 echo "3. Реализовать основные 4 арифметические операции в виде функций с двумя параметрами. Обязательно использовать оператор return.<br>";

 function sum($a,$b){
     
    return  "сумма чисел равна : ".($a + $b)."<br>";
 }


 function subtraction($a, $b) {
	return "разность чисел равна : ".($a - $b)."<br>";
}


function multiply($a, $b) {
	return "Произведение чисел равно : ".($a * $b)."<br>";
}

function divide($a, $b) {
    // return ($b === 0) ? "не дели на ноль" : "Частное чисел равно : ".($a/$b)."<br>";
    return "Частное чисел равно : ".($a/$b)."<br>";
}


echo sum($a,$b),subtraction($a, $b), multiply($a, $b), divide($a, $b) ;


echo "4. Реализовать функцию с тремя параметрами: function mathOperation(\$arg1, \$arg2, \$operation), где \$arg1, \$arg2 – значения аргументов, \$operation – строка с названием операции. В зависимости от переданного значения операции выполнить одну из арифметических операций (использовать функции из пункта 3) и вернуть полученное значение (использовать switch). <br>";

function mathOperation($arg1, $arg2, $operation){
    switch ($operation){
 
        case "+":
        return sum($arg1,$arg2);
        break;

        case "-":
        return subtraction($arg1,$arg2);
        break;

        case "*":
        return multiply($arg1,$arg2);
        break;

        case "/":
        return divide($arg1,$arg2);
        break;
    }
}
echo mathOperation($a,$b,'+');
echo mathOperation($a,$b,'*');
echo mathOperation($a,$b,'/');

echo "5. Посмотреть на встроенные функции PHP. Используя имеющийся HTML-шаблон, вывести текущий год в подвале при помощи встроенных функций PHP.<br>";

echo '<a href="/php/lesson_1/minimalistica/">задание из первого урока</a><br>';

echo "6. *С помощью рекурсии организовать функцию возведения числа в степень. Формат: function power(\$val, \$pow), где \$val – заданное число, \$pow – степень.<br>";


function power($val, $pow)
	{
		if ($val == 0)
		return 0;
		elseif ($pow == 0)
		return 1;
		elseif ($pow < 0)
                return power(1/$val, -$pow);
		else
                return $val *  power($val, $pow-1);
	}
	       echo power($a, $b);

echo "<br>7. *Написать функцию, которая вычисляет текущее время и возвращает его в формате с правильными склонениями, например:
22 часа 15 минут
21 час 43 минуты<br>";


function myDate(){
    $hours = (int)date("H");
    $minutes = (int)date("i");

    if ( $hours == 1 || $hours == 21 ){
        $strHours = ' час ';
    } 
    else if ( ($hours > 1 && $hours < 5) || ($hours > 21 && $hours < 25)  ){
        $strHours = ' часа ';
    }
    else {
        $strHours = ' часов ';
    }    

    if ( $minutes == 1 || $minutes == 21 || $minutes == 31 || $minutes == 41 || $minutes == 51  ){
        $strMinutes = ' минута';
    } 
    else if ( ($minutes > 1 && $minutes < 5) || ($minutes > 21 && $minutes < 25) || ($minutes > 31 && $minutes < 35) || ($minutes > 41 && $minutes < 45) || ($minutes > 51 && $minutes < 55)){
        $strMinutes = ' минуты';
    }
    else {
        $strMinutes = ' минут';
    }    

   return $hours.$strHours.$minutes.$strMinutes;

}

echo myDate();

