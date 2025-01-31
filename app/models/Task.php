<?php
class Task
{
    private $tasks = [];

    public function addTask(string $task)
    {
        $this->tasks[] = $task;
    }

    public function getTasks(): array
    {
        return $this->tasks;
    }

    public function removeTask(string $task)
    {
        $key = array_search($task, $this->tasks);
        if ($key !== false) {
            unset($this->tasks[$key]);
            $this->tasks = array_values($this->tasks);
        }
    }
}
