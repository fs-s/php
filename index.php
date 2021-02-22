<?php

//require 'function.php';

//todo Application
//
//todo, comment, User

class Task
{

    public $description;
    protected $completed = false;


    public function __construct($description)
    {
        //Automatically triggered on instantiation
        $this->description = $description;
    }

    public function complete()
    {
        $this->completed = true;
    }

    public function isComplete()
    {
        return $this->completed;
    }
}
$tasks = [
    new Task('Go to the store'),
    new Task('Finish my screencast'),
    new Task('clean my room'),
];

$tasks[0]->complete();

// $task->complete();

require 'index.view.php';
