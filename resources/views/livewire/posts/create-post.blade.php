<div class="container-fluid">
    {{-- A good traveler has no fixed plans and is not intent upon arriving. --}}
    <div class="row" style="flex-wrap: nowrap; overflow-x: scroll;">
        <form class="row g-3 needs-validation" novalidate wire:submit="save">
            <div class="form-row flex-nowrap">
                <div class="col-md-6">
                    <label for="title" class="form-label">Title</label>
                    <div class="input-group has-validation">
                        <span class="input-group-text" id="inputGroupPrepend">@</span>
                        <input type="text" wire:model="title" class="form-control" id="title" aria-describedby="inputGroupPrepend" required>
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
                    <textarea wire:model="content" class="form-control" id="content" required></textarea>
                    <small>
                        Characters:
                        <span x-text="$wire.content.length"></span>
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
                    <button class="btn btn-primary" type="submit">Submit form</button>
                </div>
            </div>
        </form>
    </div>
</div>
