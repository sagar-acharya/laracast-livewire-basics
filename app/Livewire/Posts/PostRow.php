<?php

namespace App\Livewire\Posts;

use Livewire\Component;

class PostRow extends Component
{
    public $post;

    public function mount($post)
    {
        $this->post = $post;
    }

    public function remove()
    {
        $this->dispatch('remove-tr', post: $this->post->id);
    }

    public function archieve()
    {
        $this->post->archieve();
    }

    public function render()
    {
        return view('livewire.posts.post-row');
    }
}
