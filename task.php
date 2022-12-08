<?php

define("TASK", "Какая задача стоит перед вами сегодня? \n");
define("TASK_TIMING", "Сколько примерно времени эта задача займет? \n");
$strTask = "";
$taskSumTime = 0;

$taskCount=(int)readline("Введите количество задач, запланированных на день\n");

for ($i=1; $i<=$taskCount; $i++){
    $task=readline(TASK);
    $strTask .= "$i: $task ";
    $taskTime=(int)readline(TASK_TIMING);
    $strTask .= "(${taskTime}ч) \n";
    $taskSumTime += $taskTime;
}

echo <<<HERE
Сегодня у вас запланировано $taskCount приоритетных задачи на день: \n
$strTask
Примерное время выполнения плана = {$taskSumTime}ч
HERE;