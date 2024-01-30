<tr @class(['text-white bg-dark' => $post->is_archived])>
    <td class="col-3">{{ $post->title }}</td>
    <td class="col-7">{{ $post->content }}</td>
    <td class="col-2">
        @unless ($post->is_archived)
            <button
                type="button"
                wire:click="archieve"
            >
                Archieve
            </button>
        @endunless

        <button
            type="button"
            wire:click="$parent.delete({{ $post->id }})"
            {{-- wire:click="remove" --}}
            wire:confirm="Are you sure you want to delete this post?"
        >
            Delete
        </button>
    </td>
</tr>
