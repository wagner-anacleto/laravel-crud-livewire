
<div>
    @if (session()->has('message'))
        <div class="alert alert-success">
            <a href="#" class="close" data-dismiss="alert">&times;</a>
            <strong>Sucesso!</strong>.<br><br>
            <ul style="list-style-type:none;">
                <li> {{ session('message') }}</li>
            </ul>
        </div>
    @endif
    @if (count($errors) > 0)
    <div class="alert alert-danger">
        <a href="#" class="close" data-dismiss="alert">&times;</a>
        <strong>Desculpe!</strong> Formulário invalido.<br><br>
        <ul style="list-style-type:none;">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
</div>
