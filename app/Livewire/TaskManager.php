<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Task;
use App\Models\Status;

class TaskManager extends Component
{
 
    public $tasks;

    public $isSelected;

    public $id;

public function updatedIsSelected($value)
{
    dd($this->id);
}

    
    public function changeStatus() {
        dd($this->tasks);
    }


    public function mount()
    {
        $this->tasks = Status::with('task')->get()->toArray(); 
    }

    public function render()
    {
        return view('livewire.task-manager');
    }
}
