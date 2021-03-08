<link rel="stylesheet" href="{{ asset ('/assets/css/bootstrap.min.css')}}" >

<div class="conteiner">

    <br><br>
      <div class="card" >
          <div class="card-header">
          <div class="row">
          <div class="col-md_8">
        <h2 class="card-title">Registro Venta de teclados Puebla</h2>
        </div>
        <div class = "cold-md-4">
        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
  <a href="{{route('keyboard.create')}}"><i class= "fa fas-add"></i>Registro Nuevo</a>

</div>
</div>
</div>
        </div>
      <div class="card-body">
    
      <table class="table table-success table-striped">

  <thead>
  <tr>
  <th>Teclados</th>
  <th>Marcas</th>
  <th>Modelos</th>
  <th>En existencia</th>
  <th>Envios</th>
  <th>Recomendaciones</th>
  </tr>
  </thead>

  <tbody>
  @forelse ($keyboard as $keyboards)
  <tr>
    <td> 
    <a class="btn btn-info btn-small" href="{{ route ('keyboard.show', $keyboards->id)}}">
    <h4>{{$keyboards->brand}} {{$keyboards->model}}</h4></td>
    </a>
    <td>

    <p><b>Modelo:</b>{{$keyboards->brand}}</p>
    <p><b>Marca:</b>{{$keyboards->mark}}</p>
    <p><b>Color:</b>{{$keyboards->color}}</p>
    <p><b>Octavas:</b>{{$keyboards->octaves}}</p>
    <p><b>Estuche:</b>{{$keyboards->case}}</p>
    <p><b>Función:</b>{{$keyboards->tune}}</p>
    </td>
    <td> <p>{{$keyboards->description}}</p></td>
   
  </tr>
  </tbody>
  


@empty
<h1>No existen registros</h1>

@endforelse

</tbody>

</table>  
</div>

</div>