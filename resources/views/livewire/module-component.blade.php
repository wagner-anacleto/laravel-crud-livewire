<div>
    <div class="card">
      <div class="card-header text-white bg-dark">
      <i class="{{$icon}}"></i>  {{$name}}
      </div>
      <div class="card-body">
        
                <div class="card">
                <div class="card-header text-white bg-dark">
                <i class="{{$icon}}"></i> {{$plural}}
                </div>
                <div class="card-body">                    
                    <livewire:crud-form-component model="{{$model}}" form="{{$form}}" />
                    <livewire:crud-table-component model="{{$model}}" form="{{$form}}" />
                </div>
                <div class="card-footer text-muted">
                    <i class="{{$icon}}"></i> {{$plural}}
                </div>
                </div>

      </div>
      <div class="card-footer text-muted">
        <i class="{{$icon}}"></i> {{$plural}}
      </div>
    </div>   
</div>
