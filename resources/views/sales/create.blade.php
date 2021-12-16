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
            
        <form action="{{route('sales.store')}}" method="POST" >
            @csrf    
        <h2 class="text-center">Formulario para registro de ventas</h2>
        <div class="mb-3">
            <label>Cantidad :</label>
            <input type="number" class="form-control" name="cantidad" >
        </div>
        <div class="mb-3">
            <label>Fecha :</label>
            <input type="date" class="form-control" name="fecha" >
        </div>
        <div class="mb-3">
            <label>Valor total :</label>
            <input type="text" class="form-control" name="valor_total" >
        </div>
        <button type="submit" class="btn btn-primary">Enviar</button>
    </form>

@endsection
