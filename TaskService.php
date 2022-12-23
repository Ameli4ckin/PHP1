<?php

class TaskService
{
  static function addComment(User $user, Task $task, string $text)
  {
    $comment = new Comment($user, $task, $text);
    $task->setComments((array) $comment);
  }
}