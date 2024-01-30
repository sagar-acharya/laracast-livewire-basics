<tr>
    <td class="col-3">{{ $post->title }}</td>
    <td class="col-7">{{ $post->content }}</td>
    <td class="col-2">
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
