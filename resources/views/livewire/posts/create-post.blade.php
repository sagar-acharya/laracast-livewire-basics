<div class="container-fluid">
    {{-- A good traveler has no fixed plans and is not intent upon arriving. --}}
    <div class="row" style="flex-wrap: nowrap; overflow-x: scroll;">

        <form class="row g-3 needs-validation" novalidate wire:submit="save">
            <div
                x-cloak
                x-show="$wire.showSuccess"
                x-effect="if($wire.showSuccess) setTimeout(() => $wire.showSuccess = false, 3000)"
                x-transition.out.opacity.duration.2000ms
                class="col-md-6 alert alert-success" role="alert">
                Form submitted successfully!!!
            </div>
            <div class="form-row flex-nowrap">
                <div class="col-md-6">
                    <label for="title" class="form-label">Title</label>
                    <div class="input-group has-validation">
                        <span class="input-group-text" id="inputGroupPrepend">@</span>
                        <input
                            type="text"
                            wire:model="title"
                            @class([
                                'form-control',
                                'is-invalid' => $errors->has('title')
                            ])
                            id="title"
                            aria-describedby="inputGroupPrepend"
                            required
                        >

                        @error('title')
                            <div class="invalid-feedback">
                                {{$message}}
                            </div>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="form-row flex-nowrap">
                <div class="col-md-6">
                    <label for="content" class="form-label">Content</label>
                    <textarea
                        wire:model="content"
                        @class([
                            'form-control',
                            'is-invalid' => $errors->has('content')
                        ])
                        id="content"
                        required
                    ></textarea>
                    <small>
                        Characters:
                        <span x-text="$wire.content.length"></span>
                    </small>
                    <small>
                        Words:
                        <span x-text="$wire.content.split(' ').length"></span>
                    </small>

                    @error('content')
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                    @enderror
                </div>
            </div>
            <div class="form-row flex-nowrap">
                <div class="col-3">
                    <button class="btn btn-primary" type="submit" wire:loading.attr="disabled">
                        Submit form
                        <span wire:loading class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>
