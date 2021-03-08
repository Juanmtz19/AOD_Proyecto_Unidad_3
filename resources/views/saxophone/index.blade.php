<link rel="stylesheet" href="{{ asset ('/assets/css/bootstrap.min.css')}}" >

<div class="conteiner">

    <br><br>
      <div class="card" >
          <div class="card-header">
          <div class="row">
          <div class="col-md_8">
        <h2 class="card-title">Registro de marcas de Saxofones compradas</h2>
        </div>
        <div class = "cold-md-4">
        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
  <a href="{{route('saxophone.create')}}"><i class= "fa fas-add"></i>Nuevo Registro</a>

</div>
</div>
</div>
        </div>
      <div class="card-body">
    
      <table class="table table-success table-striped">

  <thead>
  <tr>
  <th>Saxofones</th>
  <th>Información</th>
  <th>Modelos</th>
  <th>Disponibles</th>
  </tr>
  </thead>

  <tbody>
  @forelse ($saxophone as $saxophones)
  <tr>
    <td> 
    <a class="btn btn-info btn-small" href="{{ route ('saxophone.show', $saxophones->id)}}">
    <h4>{{$saxophones->brand}} {{$saxophones->model}}</h4></td>
    </a>
    <td>

    <p><b>Modelo:</b>{{$saxophones->brand}}</p>
    <p><b>Marca:</b>{{$saxophones->mark}}</p>
    <p><b>Color:</b>{{$saxophones->color}}</p>
    <p><b>Número piezas:</b>{{$saxophones->Pieces}}</p>
    <p><b>Registro:</b>{{$saxophones->Register}}</p>
    </td>
    <td> <p>{{$saxophones->description}}</p></td>
   
  </tr>
  </tbody>
  


@empty
<h1>No existen datos en la tabla correspondiente</h1>

@endforelse

</tbody>

</table>  
</div>

</div>
