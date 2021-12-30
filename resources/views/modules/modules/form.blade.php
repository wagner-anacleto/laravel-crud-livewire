<div class="row">

    <div class="col-md-12">
      <label for="id">id</label>   
      <input type="text" class="form-control" wire:model.defer="data.id" placeholder="id" aria-label="id" readonly="readonly">
      @error('data.id') <span class="text-danger">{{ $message }}</span>@enderror
    </div>

    <div class="col-md-6">
      <label for="name">name</label> 
      <input type="text" class="form-control" wire:model.defer="data.name" placeholder="name" aria-label="name">
      @error('data.name') <span class="text-danger">{{ $message }}</span>@enderror
    </div>

    <div class="col-md-6">
      <label for="plural">plural</label> 
      <input type="text" class="form-control" wire:model.defer="data.plural" placeholder="plural" aria-label="plural">
      @error('data.plural') <span class="text-danger">{{ $message }}</span>@enderror
    </div>

    <div class="col-md-6">
      <label for="slug">slug</label> 
      <input type="text" class="form-control" wire:model.defer="data.slug" placeholder="slug" aria-label="slug">
      @error('data.slug') <span class="text-danger">{{ $message }}</span>@enderror
    </div>

    <div class="col-md-6">
      <label for="slugs">slugs</label> 
      <input type="text" class="form-control" wire:model.defer="data.slugs" placeholder="slugs" aria-label="slugs">
      @error('data.slugs') <span class="text-danger">{{ $message }}</span>@enderror
    </div>

    <div class="col-md-12">
      <label for="icon">icon</label> 
      <input type="text" class="form-control" wire:model.defer="data.icon" placeholder="icon" aria-label="icon">
      @error('data.icon') <span class="text-danger">{{ $message }}</span>@enderror
    </div>

    <div class="col-md-12">
      <label for="namespace">namespace</label> 
      <input type="text" class="form-control" wire:model.defer="data.namespace" placeholder="namespace" aria-label="namespace">
      @error('data.namespace') <span class="text-danger">{{ $message }}</span>@enderror
    </div>

    <div class="col-md-12">
      <label for="route">route</label> 
      <input type="text" class="form-control" wire:model.defer="data.route" placeholder="route" aria-label="route">
      @error('data.route') <span class="text-danger">{{ $message }}</span>@enderror
    </div>

    <div class="col-md-12">
      <label for="url">url</label> 
      <input type="text" class="form-control" wire:model.defer="data.url" placeholder="url" aria-label="url">
      @error('data.url') <span class="text-danger">{{ $message }}</span>@enderror
    </div>

    <div class="col-md-12">
      <label for="status">status</label> 
      <input type="text" class="form-control" wire:model.defer="data.status" placeholder="status" aria-label="status">
      @error('data.status') <span class="text-danger">{{ $message }}</span>@enderror
    </div>


    
</div>
