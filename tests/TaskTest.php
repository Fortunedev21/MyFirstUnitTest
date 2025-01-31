<?php

use PHPUnit\Framework\TestCase;
//use App\Models\Task;

require_once './app/models/Task.php';

class TaskTest extends TestCase
{
    /**
     * @covers Task::addTask
     */
    public function testAddTask()
    {
        $task = new Task();
        $task->addTask("Faire les courses");

        $this->assertContains("Faire les courses", $task->getTasks());
    }

    /**
     * @covers Task::removeTask
     */
    public function testRemoveTask()
    {
        $task = new Task();
        $task->addTask("Coder en PHP");
        $task->removeTask("Coder en PHP");

        $this->assertNotContains("Coder en PHP", $task->getTasks());
    }

    /**
     * @covers Task::getTasks
     */
    public function testGetTasks()
    {
        $task = new Task();
        $task->addTask("Lire un livre");

        $this->assertEquals(["Lire un livre"], $task->getTasks());
    }
}
