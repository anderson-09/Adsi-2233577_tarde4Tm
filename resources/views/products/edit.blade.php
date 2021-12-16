@extends('plantillaweb')
    @section('home_web')

    <h2>Editar registro de productos {{$product->id}}</h2>
        
<form action="{{route('products.update', $product)}}" method="POST" enctype="multipart/form-data">
    @method('PUT')
    @csrf

    <label> Nombre  </label>
    <input type="text" name="nombre" placeholder="Nombres.." class="form-control mb-2" value="{{$product->nombre}}">

    <label> Precio </label>
    <input type="number" name="precio" placeholder="Direccion.." class="form-control mb-2" value="{{$product->precio}}">

    <label> Descripcion </label>
    <input type="text" name="descripcion" placeholder="Celular.." class="form-control mb-2" value="{{$product->descripcion}}">

    <button type="submit" class="btn btn-primary">Guardar</button>
</form>

    @endsection