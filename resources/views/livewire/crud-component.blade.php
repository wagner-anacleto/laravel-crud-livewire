<div>
    <div class="card text-left">
      <div class="card-header">
        {{$model}}
      </div>
      <div class="card-body">
        
                <div class="card text-left">
                <div class="card-header">
                    {{$form}}
                </div>
                <div class="card-body">
                    
                    <livewire:crud-form-component model="{{$model}}" form="{{$form}}" />
                    <livewire:crud-table-component model="{{$model}}" form="{{$form}}" />
                </div>
                <div class="card-footer text-muted">
                  ...
                </div>
                </div>

      </div>
      <div class="card-footer text-muted">
      ...
      </div>
    </div>   
</div>
