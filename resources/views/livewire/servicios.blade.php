
@extends('adminlte::page')


@section('content_header')

    <h1>REGISTRO DE SERVICIOS</h1>
@stop

@section('content')
    <div>
        @if(session()->has('message'))
            <div class="bg-teal-100 rounded-b text-teal-900 px-4 py-4 shadow-md my-3" role="alert">
                <div class="flex">
                    <div>
                        <h4>{{ session('message')}}</h4>
                    </div>
                </div>
            </div>
        @endif


        <button wire:click="crear()" class="bg-green-500 hover:bg-green-600 text-white font-bold py-2 px-4 my-3" >Nuevo</button>
        @if($modal)
            @include('livewire.crear')   
        @endif    
    <table class="table table-bordered">
        
        <thead class="bg-primary">
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Descripcion</th>
                <th>CLIENTE</th>
                <th>DIRECCION</th>
                <th>PRECIO</th>
                <th>FECHA</th>
            </tr>
        </thead>
        <tbody>
            @foreach($servicios as $servicio)
            <tr>
                <td>{{$servicio->id}}</td>
                <td>{{$servicio->nombre}}</td>
                <td>{{$servicio->descripcion}}</td>
                <td>{{$servicio->cliente}}</td>
                <td>{{$servicio->direccion}}</td>
                <td>{{$servicio->precio}}</td>
                <td>{{$servicio->fecha}}</td>
                <td class="border px-4 py-2 text-center">
                <button wire:click="editar({{$servicio->id}})" class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4">Editar</button>
                <hr>
                    <button wire:click="borrar({{$servicio->id}})" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4">Borrar</button>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop

