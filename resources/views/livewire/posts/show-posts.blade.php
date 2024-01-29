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
            <tr wire:key="{{ $post->id }}">
                <td class="col-3">{{ $post->title }}</td>
                <td class="col-7">{{ $post->content }}</td>
                <td class="col-2">
                    <button
                        type="button"
                        wire:click="delete({{ $post->id }})"
                        wire:confirm="Are you sure you want to delete this post?"
                    >
                        Delete
                    </button>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
