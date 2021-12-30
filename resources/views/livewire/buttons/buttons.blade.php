<button type="button" wire:click.prevent="updateDeleteShow({{ $model }}, 'update')" title="update" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#updateModal">
    <i class="fa fa-edit"></i>
</button>

<button type="button" wire:click.prevent="updateDeleteShow({{ $model }}, 'show')" title="show" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#showModal">
    <i class="far fa-eye"></i>
</button>

<button type="button" wire:click.prevent="updateDeleteShow({{ $model }}, 'delete')" title="delete" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deleteModal">
    <i class="fa fa-trash-alt"></i>
</button>
