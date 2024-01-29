<?php

namespace App\Livewire\Posts;

use App\Models\Post;
use Livewire\Component;

class ShowPosts extends Component
{
    public function delete(Post $post)
    {
        $post->delete();
    }

    public function render()
    {
        return view('livewire.posts.show-posts',['posts' => Post::all()]);
    }
}
