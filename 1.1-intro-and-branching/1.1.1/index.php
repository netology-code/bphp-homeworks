<?php

$variable = null;

if(is_bool($variable)){

    $type = 'bool';
    $description = 'Логический тип.<br>
        Переменные логического типа могут принимать два значения: true или false.';

} else if(is_float($variable)){

    $type = 'float';
    $description = 'Число с плавающей точкой.<br> Используется для вещественных чисел.';

} else if(is_int($variable)){

    $type = 'int';
    $description = 'Целое 32-битное число со знаком.<br>
        Возможные значения в диапазоне от -2 147 483 648 до 2 147 483 647.';

} else if(is_string($variable)){

    $type = 'string';
    $description = '
        Для работы с текстом можно применять строки.<br>
        Строки бывают двух типов: в двойных кавычках и одинарных.';

} else if(is_null($variable)){

    $type = 'null';
    $description = 'NULL указывает, что значение переменной не определено.<br>
        Использование данного значения полезно в тех случаях, когда мы, например, хотим указать, 
        что переменная не имеет значения';

} else{

    $type = 'other';
    $description = '';
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>bPHP - 1.1.1</title>
</head>
<body>
    <p><?=$variable?> is <?=$type?></p>
    <hr>
    <p><?=$description?></p>
</body>

</html>