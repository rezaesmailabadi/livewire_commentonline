<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Comments extends Component
{
    public $comments = [];
    public $newComment;

    public function addComment()
    {
        array_unshift($this->comments, [
            'body' => $this->newComment,
        ]);
        $this->newComment = '';
    }
    
    public function render()
    {
        return view('livewire.comments');
    }
}
