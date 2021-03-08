<link rel="stylesheet" href="{{ asset ('/assets/css/bootstrap.min.css')}}" >

<div class="conteiner">

    <br><br>
      <div class="card" >
          <div class="card-header">
          <div class="row">
          <div class="col-md_8">
        <h2 class="card-title">Contrataciones artisticas Virtual Music</h2>
        </div>
        <div class = "cold-md-4">
        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
  <a href="{{route('contrato.create')}}"><i class= "fa fas-add"></i>Registro Nuevo</a>

</div>
</div>
</div>
        </div>
      <div class="card-body">
    
      <table class="table table-success table-striped">

  <thead>
  <tr>
  <th>Contrataciones</th>
  <th>Agrupaciones</th>
  <th>Conciertos</th>
  <th>Bailes</th>
  <th>Fechas disponibles</th>
  </tr>
  </thead>

  <tbody>
  @forelse ($contrato as $contratos)
  <tr>
    <td> 
    <a class="btn btn-info btn-small" href="{{ route ('contrato.show', $contratos->id)}}">
    <h4>{{$contratos->grup}} {{$contratos->grup2}}</h4></td>
    </a>
    <td>

    <p><b>Primer Artista:</b>{{$contratos->grup}}</p>
    <p><b>Segundo Artista:</b>{{$contratos->grup2}}</p>
    <p><b>Eventos:</b>{{$contratos->eventName}}</p>
    <p><b>Ciudad:</b>{{$contratos->city}}</p>
    <p><b>Lugar:</b>{{$contratos->place}}</p>
    <p><b>Escenario:</b>{{$contratos->stage}}</p>
    </td>
    <td> <p>{{$contratos->description}}</p></td>
   
  </tr>
  </tbody>
  


@empty
<h1>No hay fechas disponibles consulte otras fechas</h1>

@endforelse

</tbody>

</table>  
</div>

</div>