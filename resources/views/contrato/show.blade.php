<link rel="stylesheet" href="{{ asset ('/assets/css/bootstrap.min.css')}}" >

<div class="conteiner">

    <br><br>
      <div class="card" >
          <div class="card-header">
          <div class="row">
          <div class="col-md_8">
        <h2 class="card-title">
          <h class="badge bg-primary ">Contratos: {{$contrato->grup}} {{$contrato->grup2}}
        </div>
        <div class = "cold-md-4">
        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
  <a class= "btn btn-primary" href="{{route('contrato.index')}}">Regresar</a>
</div>
</div>
</div> </div>
      <div class="card-body">
    
      <table class="table table-success table-striped">

  <thead>
  <tr>
  <th>Artistas</th>
  <th>Fechas Agendadas</th>
  <th>Lugar</th>
  <th>Fechas ocupadas</th>
 

  </tr>
  </thead>

  <tbody>
  
  <tr>
    <td> 
        <p>Imagen</p>
    <td>

    <p ><b>Artista 1:</b>{{$contrato->grup}}</p>
    <p><b>Artista 2:</b>{{$contrato->grup2}}</p>
    <p><b>Eventos:</b>{{$contrato->eventName}}</p>
    <p><b>Ciudad:</b>{{$contrato->city}}</p>
    <p><b>Lugar:</b>{{$contrato->place}}</p>
    <p><b>Escenario</b>{{$contrato->stage}}</p>
    <p><b>Fecha:</b>{{$contrato->date}}</p>
    <p><b>Capacidad:</b>{{$contrato->capacity}}</p>
    <p><b>Pago:</b>$contrato->payment</p>
    <p class="text-uppercase"><b class class="text-capitalize">Artista 1:</b>{{$contrato->grup}}</p>
    </td>
    <td> <p>{{$contrato->description}}</p></td>
    </tr>
    </tbody>
  </tbody>
  </table>  
    <div class="card-footer">
    <div class = "col">
          <div class="d-grid gap-2 d-md-flex justify-content-md-end">
    <a class= "btn btn-primary" href="{{route('contrato.edit' , $contrato->id)}}">Editar</a>
    <form action="{{route('contrato.destroy', $contrato->id)}}" method="post">
      @csrf 
      @method('DELETE')
      <input class="btn btn-danger" type="submit" value="Eliminar">
    </form>
   
  </div>
    </div>
  </div>
  </div>