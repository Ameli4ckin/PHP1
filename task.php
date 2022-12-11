<?php

define("TASK", "Какая задача стоит перед вами сегодня? \n");
define("TASK_TIME", "Сколько примерно времени эта задача займет? \n");
$strTask = "";
$taskSumTime = 0;

do {
    $taskCount = (int)readline(
        "Введите количество задач, запланированных на день\n");
} while ($taskCount <= 0);

for ($i=1; $i <= $taskCount; $i++){
    $task=readline(TASK);
    $taskTime=(int)readline(TASK_TIME);

    $strTask .= "$i: $task ";
    $strTask .= "({$taskTime}ч) \n";
    $taskSumTime += $taskTime;
}

echo <<<HERE
Сегодня у вас запланировано $taskCount приоритетных задачи на день: \n
$strTask
Примерное время выполнения плана = {$taskSumTime}ч
HERE;
