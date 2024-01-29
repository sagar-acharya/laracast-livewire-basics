<?php

namespace App\Livewire\Posts;

use App\Models\Post;
use Livewire\Attributes\Validate;
use Livewire\Component;

class CreatePost extends Component
{
    #[Validate('required')]
    public $title = '';

    #[Validate('required')]
    public $content = '';

    public function save()
    {
        $this->validate();

        Post::create([
            'title' => $this->title,
            'content' => $this->content,
        ]);
    }

    public function render()
    {
        return view('livewire.posts.create-post');
    }
}
