<?php

do{
    $answer = (int)readline(
        "В каком году произошло крещение Руси? 
        - 810 
        - 988 
        - 740 \n");
} while ($answer!=810 && $answer!=988 && $answer!=740);
if($answer===988){
    echo ("Поздравляю! Ответ правильный!");
} else {
    echo("Ответ неправильный");
}

//                      второй вариант:

// while (true) {
//     $question = (int)readline(
//         "В каком году произошло крещение Руси?
//         - 810
//         - 740
//         - 988 \n");
//     if ($question == 810 || $question == 740) {
//         echo "Ответ неправильный";
//         break;
//     } elseif ($question == 988) {
//         echo "Поздравляю! Ответ правильный!";
//         break; 
//     }
// }










