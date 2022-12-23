<?php

class Task{
  private string $description;
  private DateTime $dateCreated;
  private DateTime $dateUpdated;
  private DateTime $dateDone;
  private int $priority;
  private bool $isDone = false;
  private User $user;
  public array $comments = [];
  public function __construct(string $description, user $user)
  {
    $this->description = $description;
    $this->dateCreated = new DateTime();
  }
  public function markAsDone()
  {
    $this->isDone = true;
    $this->dateUpdated = new DateTime();
    $this->dateDone = new DateTime();
  }

  public function setComments(array $comment)
  {
    $this->comments[] = $comment;
  }

  public function getDescription(): string 
  {
    return $this->description;
  }

  public function setDescription($description) 
  {
    $this->description = $description;
    $this->dateUpdated = new DateTime();
  }

  public function getDateCreated(): DateTime 
  {
    return $this->dateCreated;
  }

  public function getdateUpdated(): DateTime 
  {
    return $this->dateUpdated;
  }

  public function getDateDone(): DateTime 
  {
    return $this->dateDone;
  }

  public function getPriority(): int 
  {
    return $this->priority;
  }

  public function setPriority($priority)
  {
    $this->priority = $priority;
  }

  public function getIsDone(): bool 
  {
    return $this->isDone;
  }

  public function getComment(): array
  {
    return $this->comments;
  }

}
