<x-livewire-modal id="my-modal" title="{{ $title }}">
    <div class="modal-body">
        <form wire:submit.prevent="submit">
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" id="name" wire:model="name">
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" wire:model="email">
            </div>
        </form>
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-secondary">Save</button>
    </div>
</x-livewire-modal>