<div>
    {{-- The Master doesn't talk, he acts. --}}
    <h2>Posts:</h2>

    <table>
        <thead>
            <tr>
                <th>Title</th>
                <th>Content</th>
                <th>Delete</th>
                {{-- <th>Title</th> --}}
            </tr>
        </thead>
        <tbody>
            @foreach($posts as $post)
                @livewire('posts.post-row', ['post' => $post], key($post->id))
                {{-- <livewire:posts.post-row :post="$post" :key="$post->id" /> --}}
            @endforeach
        </tbody>
    </table>
</div>
