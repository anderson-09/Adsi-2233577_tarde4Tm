@extends('plantillaweb')
    @section('home_web')

    <h2>Editar registro de ventas {{$sale->id}}</h2>
        
<form action="{{route('sales.update', $sale)}}" method="POST" enctype="multipart/form-data">
    @method('PUT')
    @csrf

    <label> Cantidad  </label>
    <input type="number" name="cantidad" class="form-control mb-2" value="{{$sale->cantidad}}">

    <label> Fecha </label>
    <input type="date" name="fecha" class="form-control mb-2" value="{{$sale->fecha}}">

    <label> Valor Total </label>
    <input type="number" name="valor_total" class="form-control mb-2" value="{{$sale->valor_total}}">

    <button type="submit" class="btn btn-primary">Guardar</button>
</form>

    @endsection

    