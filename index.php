<?php

$name = readline("Как вас зовут? \n");
$age = readline("Сколько вам лет? \n");

$str = "Вас зовут $name, вам $age лет.\n";

echo $str;

const TASK_QUESTION = "Какая задача стоит перед вами сегодня? \n";
const TASK_TIME_QUESTION = "Сколько примерно времени эта задача займет? \n";

$task1 = readline(TASK_QUESTION);
$taskTime1 = (int)readline(TASK_TIME_QUESTION);

$task2 = readline(TASK_QUESTION);
$taskTime2 = (int)readline(TASK_TIME_QUESTION);

$task3 = readline(TASK_QUESTION);
$taskTime3 = (int)readline(TASK_TIME_QUESTION);

$taskSum = $taskTime1 + $taskTime2 + $taskTime3;

echo <<<HERE
$name, сегодня у вас запланировано 3 приоритетных задачи на день:
- $task1 ({$taskTime1}ч)
- $task2 ({$taskTime2}ч)
- $task3 ({$taskTime3}ч)
Примерное время выполнения плана = {$taskSum}ч
HERE;

