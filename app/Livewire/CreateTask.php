<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Task;
use App\Models\Status;
use Carbon\Carbon;

class CreateTask extends Component
{
    public $showModal = false;

    public function openModal()
    {
        $this->showModal = true;
    }

    public function closeModal()
    {
        $this->showModal = false;
    }


    public $name;

    public $description;
 
    public function save() 
    {
        $task = Task::create([
            'name' => $this->name,
            'description' => $this->description
        ]);
        $task = Task::where('name', $task->name)->first();
        $status = Status::create([
            'task_id' => $task->id,
            'status' => 'в работе',
            'date' => Carbon::now()
        ]);

        return redirect()->to('/');
    }

    

    public function render()
    {
        return view('livewire.create-task');
    }
}
