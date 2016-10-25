<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class ExampleTest extends TestCase
{
    /**
     * A basic functional test example.
     * @group failing
     * @return void
     */
    public function testBasicExample()
    {
        // /todos --> Mostra els todos del usuari logat
        $user = factory(\App\User::class)->make();
        $task = factory(\App\Task::class)->make();

// OPCIó 1:        $user->addTask($task);
// OPCIó 2:         $user->tasks()->save($task);
        $this->actingAs($user)
             ->visit('/tasks')
             ->see($task->name);
    }
}
