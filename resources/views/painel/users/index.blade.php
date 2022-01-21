@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
    <table class="table table-striped">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Nome</th>
            <th scope="col">CPF</th>
            <th scope="col">Email</th>
            <th scope="col">Telefone</th>
            <th scope="col">Visualizar</th>
        </tr>
        </thead>
        <tbody>
        @foreach($clients['clientes'] as $client)

        <tr>
            <th scope="row">{{$client['id']}}</th>
            <td>{{$client['nome']}}</td>
            <td>{{$client['cpf_cnpj']}}</td>
            <td>{{$client['email']}}</td>
            <td>{{$client['email']}}</td>
            <td>
                <a href="{{route('users.show', $client['login'])}}" type="button" class="btn btn-success">Ver</a>
            </td>

        </tr>
        @endforeach

        </tbody>
    </table>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
