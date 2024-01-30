<?php

namespace App\Livewire\Posts;

use App\Models\Post;
use Livewire\Component;
use Livewire\Attributes\On;

class ShowPosts extends Component
{
    #[On('remove-tr')]
    public function delete(Post $post)
    {
        $post->delete();
    }

    public function render()
    {
        return view('livewire.posts.show-posts',['posts' => Post::all()]);
    }
}
