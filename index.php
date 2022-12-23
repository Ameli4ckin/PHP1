<?php

include "Task.php";
include "User.php";
include "Comment.php";
include "TaskService.php";

$user1 = new User("Денис", "test1@mail.com");
$task1 = new Task("task 1", $user1);
$task1->setDescription("task 1 new");
$task1->markAsDone();

$user2 = new User("Павел", "test2@mail.com");
TaskService::addComment($user2, $task1, "Комментарий");
$task1->setDescription("Описание");