@extends('plantillaweb')
    @section('home_web')

    <h2>Editar registro de clientes {{$client->id}}</h2>
        
<form action="{{route('clients.update', $client)}}" method="POST" enctype="multipart/form-data">
    @method('PUT')
    @csrf

    <label> Nombres  </label>
    <input type="text" name="nombre" placeholder="Nombres.." class="form-control mb-2" value="{{$client->nombre}}">

    <label> Teléfono </label>
    <input type="number" name="telefono" placeholder="Direccion.." class="form-control mb-2" value="{{$client->telefono}}">

    <label> Dirección </label>
    <input type="text" name="direccion" placeholder="Celular.." class="form-control mb-2" value="{{$client->direccion}}">

    <button type="submit" class="btn btn-primary">Guardar</button>
</form>

    @endsection