<?php

$name = readline("Как вас зовут? \n");
$age = readline("Сколько вам лет? \n");

$str = "Вас зовут $name, вам $age лет.\n";

echo $str;


$task1 = readline("Какая задача стоит перед вами сегодня? \n");
$taskTime1 = readline("сколько примерно времени эта задача займет? \n");

$task2 = readline("Какая задача стоит перед вами сегодня? \n");
$taskTime2 = readline("сколько примерно времени эта задача займет? \n");

$task3 = readline("Какая задача стоит перед вами сегодня? \n");
$taskTime3 = readline("сколько примерно времени эта задача займет? \n");

$taskSum = $taskTime1 + $taskTime2 + $taskTime3;
$taskTime1 .= "ч";
$taskTime2 .= "ч";
$taskTime3 .= "ч";
$taskSum .=  "ч";

echo <<<HERE
$name, сегодня у вас запланировано 3 приоритетных задачи на день:
- $task1 ($taskTime1)
- $task2 ($taskTime2)
- $task3 ($taskTime2)
Примерное время выполнения плана = $taskSum
HERE;

