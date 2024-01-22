<div>
    {{-- A good traveler has no fixed plans and is not intent upon arriving. --}}
    <form class="row g-3 needs-validation" novalidate wire:submit="submitForm">
        <div class="col-md-6">
            <label for="validationCustomUsername" class="form-label">Email</label>
            <div class="input-group has-validation">
                <span class="input-group-text" id="inputGroupPrepend">@</span>
                <input type="text" wire:model="email" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" required>
                @error('email')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
                @enderror
            </div>
        </div>
        <div class="col-md-6">
            <label for="validationCustom02" class="form-label">Password</label>
            <input type="text" wire:model="password" class="form-control" id="validationCustom02" required>
            <div class="valid-feedback">
                Looks good!
            </div>
        </div>
        <div class="col-3">
            <button class="btn btn-primary" type="submit">Submit form</button>
        </div>
    </form>
</div>

