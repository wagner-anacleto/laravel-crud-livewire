<div class="row">
    <div class="col-md-12">
      <label for="id">id</label>   
      <input type="text" class="form-control" wire:model.defer="data.id" placeholder="id" aria-label="id" readonly="readonly">
      @error('data.id') <span class="text-danger">{{ $message }}</span>@enderror
    </div>
    <div class="col-md-12">
      <label for="name">name</label> 
      <input type="text" class="form-control" wire:model.defer="data.name" placeholder="name" aria-label="name">
      @error('data.name') <span class="text-danger">{{ $message }}</span>@enderror
    </div>
    <div class="col-md-12">
      <label for="email">email</label>   
      <input type="text" class="form-control" wire:model.defer="data.email" placeholder="email" aria-label="email" readonly="readonly">
      @error('data.email') <span class="text-danger">{{ $message }}</span>@enderror
    </div>

</div> 