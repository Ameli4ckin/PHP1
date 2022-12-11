<?php

do {
    $userNum = (int)readline("Введите число \n");
} while ($userNum <= 0);

$i = $userNum % 8;

switch (true) {
    case $i == 1:
        $finger = 1;
        break;
    case $i == 0 || $i == 2:
        $finger = 2;
        break;
    case $i == 3 || $i == 7:
        $finger = 3;
        break;
    case $i == 4 || $i == 6:
        $finger = 4;
        break;
    case $i == 5:
        $finger = 5;
        break;
}

echo "Палец номер $finger";