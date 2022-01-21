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
            <th scope="col">Cliente</th>
            <th scope="col">Valor</th>
            <th scope="col">Vencimento</th>
        </tr>
        </thead>
        <tbody>
        @foreach($titlesLosers as $title)

        <tr>
            <th scope="row">{{$title['titulo']}}</th>
            <th scope="row">{{$title['nome']}}</th>
            <td>{{$title['valor']}}</td>
            <td>{{$title['datavenc']}}</td>


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
