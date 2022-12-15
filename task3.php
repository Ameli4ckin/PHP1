<?php

// Задача №3
// В качестве ключей массива используются названия групп. В качестве элементов — отношение студента и его оценки. Добавьте произвольные имена студентов и их оценки в обе группы. После подготовки массива, реализуйте скрипт командной строки, выполняющий следующие вычисления:
// Вычислить арифметическое среднее по всем оценкам в рамках группы. Вывести на экран название группы с самым большим вычисленным значением успеваемости;
// Составить список на отчисление, в который попадают студенты из любой группы, имеющие оценку ниже трёх. В списке студенты должны быть сгруппированы по их группе. Выведите полученные данные в консоль, с помощью функции print_r;

$studentsList = [
    'ИТ20' => [
        'Иванов Иван' => 2,
        'Кириллов Кирилл' => 5,
        'Иванов Евгений' => 2,
        'Сидоров Даниил' => 4,
        'Антипов Никита' => 5,
        'Парфенов Денис' => 4
    ],
    'БАП20' => [
        'Антонов Антон' => 2,
        'Павлов Сергей' => 4,
        'Баринов Александр' => 3,
        'Русляков Петр' => 5
    ]
];

$exclude = [];
$averageGrade = [];

foreach ($studentsList as $group => $groups) {
    $averageGrade[$group] = array_sum($groups) / count($groups);

    foreach ($groups as $studentName => $ball) {
        if ($ball < 3) {
            $exclude[$group][] = $studentName;
        }
    }
}

$topGroup = array_keys($averageGrade, max($averageGrade))[0];

echo "Наивысший балл у группы: \n $topGroup = $averageGrade[$topGroup];" . PHP_EOL;
echo "Список студентов на отчисление: " . PHP_EOL;

print_r($exclude);
