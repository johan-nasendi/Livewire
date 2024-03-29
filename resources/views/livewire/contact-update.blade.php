<div>
    <form wire:submit.prevent="update">
        <input type="hidden" name="" wire:model="contactId">
        <div class="form-group">
            <div class="form-row">
                <div class="col">
                    <input type="text" wire:model="name" class="form-control @error('name') is-invalid @enderror" placeholder="Name">
                     @error('name')
                        <span class="invalid-feedback">
                            <strong>{{ $message }}</strong>
                        </span>
                     @enderror
                </div>
                <div class="col">
                    <input type="text" wire:model="phone" class="form-control @error('phone') is-invalid @enderror" placeholder="Phone">
                    @error('phone')
                        <span class="invalid-feedback">
                            <strong>{{ $message }}</strong>
                        </span>
                     @enderror
                </div>
            </div>
        </div>
        <button type="submit" class="btn btn-sm btn-success">Save </button>
    </form>
</div>
