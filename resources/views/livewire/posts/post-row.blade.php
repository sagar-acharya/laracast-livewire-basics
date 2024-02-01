<tr @class(['text-white bg-dark' => $post->is_archived])>
    <td class="col-3">{{ $post->title }}</td>
    <td class="col-6">{{ $post->content }}</td>
    <td class="col-3">
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

        <button wire:click="openModal">
            Delete with Modal Confirmation
        </button>
        <x-modal wire:model="showModal">
            {{-- <x-modal.title>

            </x-modal.title>
            <x-modal.body>

            </x-modal.body>

            <x-modal.button>

            </x-modal.button> --}}
        </x-modal>
    </td>
</tr>
