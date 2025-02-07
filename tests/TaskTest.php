<?php

use PHPUnit\Framework\TestCase;
use PHPUnit\Framework\Attributes\CoversClass;

require_once './app/models/Task.php';

#[CoversClass(Task::class)]
class TaskTest extends TestCase
{
    public function testAddTask()
    {
        $task = new Task();
        $task->addTask("Faire les courses");

        $this->assertContains("Faire les courses", $task->getTasks());
    }

    public function testRemoveTask()
    {
        $task = new Task();
        $task->addTask("Coder en PHP");
        $task->removeTask("Coder en PHP");

        $this->assertNotContains("Coder en PHP", $task->getTasks());
    }

    public function testGetTasks()
    {
        $task = new Task();
        $task->addTask("Lire un livre");

        $this->assertEquals(["Lire un livre"], $task->getTasks());
    }
}
