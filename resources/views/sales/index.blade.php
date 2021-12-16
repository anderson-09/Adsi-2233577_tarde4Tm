@extends('plantillaweb')

@section('home_web')

<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Akine</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
            <a class="nav-link" href="{{route('clients.index')}}">Clientes</a>
           </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('products.index')}}">Productos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('sales.index')}}">Ventas</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Formularios
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="{{route('clients.create')}}">Registro de clientes</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="{{route('products.create')}}">Registro de productos</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="{{route('sales.create')}}">Registro de ventas</a></li>
            </ul>
          </li>
          
        </ul>
      </div>
    </div>
  </nav>
  
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Cantidad de ventas</th>
                <th scope="col">Fecha</th>
                <th scope="col">Valor Total</th>
            </tr>
        </thead>
        <tbody>

            @foreach ($sale as $sale)
             <tr>
                    <th scope="row">{{$sale->id}}</th>
                    <td>{{$sale->cantidad}}</td>
                    <td>{{$sale->fecha}}</td>
                    <td>{{$sale->valor_total}}</td>
                    <td>
                        <a href="{{route('sales.edit', $sale)}}">
                            <button type="button"  class="btn btn-primary btn-sm">Editar</button></a>
                    </td>
                    <td>
                        <form  action="{{route('sales.destroy', $sale)}}" method="POST">
                            @method('DELETE')
                            @csrf

                            <button type="submit" class="btn btn-danger btn-sm"> Eliminar </button>
                        </form>
                    </td>
                </tr>
            @endforeach

        </tbody>
    </table>



@endsection