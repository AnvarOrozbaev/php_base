
<?php

 //<-----1 задание ----->
    #установил xampp работает отлично (ссылка на мануал по установке https://fructcode.com/ru/blog/how-to-install-xampp-vm-on-mac-os-mojave-sierra-osx/)
 #<-----2------>

     echo "Hello, World!<br>"; # познакомились с выводом через echo;

        $name = "GeekBrains user";
        echo "Hello, $name!"; # познакомились c обьявлением переменных;

            define('MY_CONST', 100);
            echo MY_CONST."<br>"; # обьявление констант через define;
        
                $int10 = 42;
                $int2 = 0b101010;
                $int8 = 052;
                $int16 = 0x2A;
                echo "Десятеричная система $int10 <br>";
                echo "Двоичная система $int2 <br>";
                echo "Восьмеричная система $int8 <br>";
                echo "Шестнадцатеричная система $int16 <br>";
                var_dump($int2);
                var_dump($int8);
                var_dump($int16); # все это тип integer;
                echo var_dump($int10)."<br>";

                    $precise1 = 1.5;
                    $precise2 = 1.5e4;
                    $precise3 = 6E-8;
                    var_dump($precise2);
                    echo "$precise1 | $precise2 | $precise3 <br>"; # все это double
                    $a = 1;
                    echo "$a";      # использование двойных кавычек выведет значение, а '' текст
                    echo '$a<br>';
                    
                    
                        $b = (boolean)10;
                        var_dump($b) ;     # приведение типов в ручную             

                            $c = 'Hello,';
                            $d = 'world';
                            $e = $c . $d; # конкатинация
                            echo $e."<br>";

                                    $g = 4;
                                    $h = 5;
                                    echo $g + $h . '<br>';    // сложение
                                    echo $g * $h . '<br>';    // умножение
                                    echo $g - $h . '<br>';  // вычитание
                                    echo $g / $h . '<br>';  // деление
                                    echo $g % $h . '<br>'; // остаток от деления
                                    echo $g ** $h . '<br>'; // возведение в степень
                                    
                                   /* $a = 4;
                                    $b = 5;
                                    $a += $b;
                                    echo 'a = ' . $a;
                                    $a = 0;
                                    echo $a++;     // Постинкремент
                                    echo ++$a;    // Преинкремент
                                    echo $a­­--;     // Постдекремент
                                    echo ­­--$a;    // Предекремент */
                                    
                                        $a = 4;
                                        $b = 5;
                                        var_dump($a == $b);  // Сравнение по значению
                                        var_dump($a === $b); // Сравнение по значению и типу
                                        var_dump($a > $b);    // Больше
                                        var_dump($a < $b);    // Меньше
                                        var_dump($a <> $b);  // Не равно
                                        var_dump($a != $b);   // Не равно
                                        var_dump($a !== $b); // Не равно без приведения типов
                                        var_dump($a <= $b);  // Меньше или равно
                                        var_dump($a >= $b);  // Больше или равно 
 

 // <------3 задание ------>
 $a = 5;
$b = '05';
var_dump($a == $b);                             // Почему true? Сравнение по значению
var_dump((int)'012345');                        // Почему 12345? int - приведение к целому числу, строка 012345 будет равна 12345
var_dump((float)123.0 === (int)123.0); // Почему false?  Сравнение по значению и типу
var_dump((int)0 === (int)'hello, world'); // Почему true? строка преобразуется в 0  
 
# <-------4 задание ------>  в папке minimalistica
#<-------5 задание---------> 
echo "<br>";    
echo "<br>";   
$x = 1;
$y = 2;
//$x += +$y-$y = $x ;
$x^=$y^=$x^=$y;
//list($x,$y)=[$y,$x];

echo "x = $x y= $y";


 ?>
                                        







 

