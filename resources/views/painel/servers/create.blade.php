@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Cadastrar MKAUTH</h1>
@stop

@section('content')
    <form method="post" action="{{route('servers.post')}}">
        @csrf
        <div class="form-group">
            <label for="name">Nome do MKAUTH</label>
            <input type="text" class="form-control" name="name" id="name" aria-describedby="emailHelp"
                   placeholder="Informe o nome para identificar o servidor">
            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div>
        <div class="row">
            <div class="col-6">
                <div class="form-group">
                    <label for="address">Endereço do MKAUTHr</label>
                    <input type="text" name="address" class="form-control" id="address" placeholder="EX: 172.67.56.1">
                </div>
            </div>
            <div class="col-6">
                <div class="form-group">
                    <label for="api_key">Key-MKAuth</label>
                    <input type="text" class="form-control" name="api_key" id="key" placeholder="EX: 911ab5b3642b9199425bfd51b4te9a17">
                </div>
            </div>
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
