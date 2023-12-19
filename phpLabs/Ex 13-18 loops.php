<?php
    //Ex 2
    echo "PHP появился в 1995 году! - by echo";
    echo "<br>";
    print "PHP появился в 1995 году! - by print";
    echo "<br><br>";

    //Ex 4
    $birthYear = 2001;
    $birthYearString = "Год моего рождения";

    //Ex 5
    echo $birthYear;
    echo "<br>";
    echo $birthYearString;
    echo "<br><br>";

    //Ex 6
    print $birthYearString . " " . $birthYear . " г.";
    echo "<br><br>";

    //Ex 7
    $birthDay = 10;
    $birthMonth = 11;
    echo $birthDay + $birthMonth . " - вывод суммы значений переменных";
    echo "<br>";
    echo "$birthDay + $birthMonth" . " - вывод значений переменных";;
    echo "<br>";
    echo '$birthDay + $birthMonth' . " - вывод как простой текст";;
    echo "<br><br>";

    //Ex 8
    echo 'В языке программирования “PHP” переменная не может начинаться на цифру';
    echo "<br><br>";
?>


<?php
    //Ex 9, 10
    $nume = 'Цулан'; // переменная фамилии студента
    $prenume = 'Владислав'; // переменная имени студента
    echo 'Фамилия студента '.$nume. ', а его имя ' .$prenume . '.'; // вывод информации о студенте
    $varsta = 22; // переменная возраста студента
    print '<br />Возраст студента ' .$varsta .'.'; // вывод возраста студента
    echo "<br>";
?>

<?php
    //Ex 11
    //if...else
    $d=date("D");
    if ($d=="Fri")
        echo "<br />Хороших вам выходных! $prenume ";
    elseif ($d=="Sun")
        echo "<br />Завтра начинается новая рабочая неделя! $prenume "; 
    else
        echo "<br />Приятного вам рабочего дня! $prenume ";

    //тернарный оператор
    echo "<br><br>Тернарный оператор:";
    // тернарный оператор делает тоже самое, что и конструкция if...else
    // если выражение дает true, выполняется код после символа '?',
    // если выражение дает false, выполняется код после символа ':'
    echo($d=="Fri") ? "<br />Хороших вам выходных! $prenume" : "<br />Приятного вам рабочего дня! $prenume";
    echo "<br><br>";

    //Ex 12
    //$weekDay = date("D");
    switch ($d) {
        case 'Mon':
            echo "Сегодня, понедельник, " . date("d.m.y");
            break;
        case 'Tue':
            echo "Сегодня, вторник, " . date("d.m.y");
            break;
        case 'Wed':
            echo "Сегодня, среда, " . date("d.m.y");
            break;
        case 'Thu':
            echo "Сегодня, четверг, " . date("d.m.y");
            break;
        case 'Fri':
            echo "Сегодня, пятница, " . date("d.m.y");
            break;
        case 'Sat':
            echo "Сегодня, суббота, " . date("d.m.y");
            break;
        case 'Sun':
            echo "Сегодня, воскресенье, " . date("d.m.y");
            break;
    }
    echo "<br><br>";
?>

<?php
    //Ex 13, 14
    $a = 0;
    $b = 0;
    for( $i=0; $i<=3; $i++ ) {
        echo "значение a на " . $i + 1 . " шаге: ";
        echo $a += 7;
        echo "<br>";
        echo "значение b на " . $i + 1 . " шаге: ";
        echo $b += 1;
        echo "<br><br>";
    }
    echo "Конец цикла, и значение a = " . $a . ", а значение b = " . $b;
    echo "<br>";
?>

<?php
    //Ex 15
    $i = 0;
    $num = 70;
    while( $i < 15)
    {
    $num--;
    $i++;
    }
    echo ("<br />Цикл завершен на i = $i шаге и num = $num" ); 
    echo "<br><br>";
?>

<?php
    //Ex 16, 17
    $adaos = 5;
    $pret = 150;
    do {
        echo "pret nou: " . $pret=$pret + $adaos;
        echo "<br>";
        $adaos++;
    }
    while( $adaos < 15 );
    echo ("<br />Новая цена товара будет -- $pret" );
?>

<?php
    //Ex 18
    echo "<p><b>For</b></p>";
    echo "<p><ul>
    <li>предоставляет удобный способ выполнять повторяющиеся действия с заранее известным числом итераций</li>
    <li>имеет три основные части: инициализация переменной, условие продолжения итераций, и выражение изменения переменной</li>
    </ul></p>";

    echo "<p><b>While</b></p>";
    echo "<p><ul>
    <li>выполняет блок кода, пока условие истинно</li>
    <li>условие проверяется перед каждой итерацией, и если оно ложно изначально, то код внутри цикла не выполнится ни разу</li>
    </ul></p>";

    echo "<p><b>Do While</b></p>";
    echo "<p><ul>
    <li>очень похож на 'WHILE', но он гарантирует, что блок кода выполнится как минимум один раз, даже если условие ложно изначально</li>
    <li>условие проверяется после каждой итерации</li>
    </ul></p>";
?>

