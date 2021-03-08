<link rel="stylesheet" href="{{ asset ('/assets/css/bootstrap.min.css')}}" >

<div class="conteiner">

    <br><br>
      <div class="card" >
          <div class="card-header">
          <div class="row">
          <div class="col-md_8">
        <h2 class="card-title">
          <h class="badge bg-primary ">Teclados: {{$keyboard->brand}} {{$keyboard->mark}}
        </div>
        <div class = "cold-md-4">
        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
  <a class= "btn btn-primary" href="{{route('keyboard.index')}}">Regresar</a>
</div>
</div>
</div> </div>
      <div class="card-body">
    
      <table class="table table-success table-striped">

  <thead>
  <tr>
  <th>Teclados</th>
  <th>Caracteristicas</th>
  <th>Recomendaciones Tecladistas</th>
  <th>Opiniones</th>
  <th>Envios</th>

  </tr>
  </thead>

  <tbody>
  
  <tr>
    <td> 
        <p>Imagen</p>
    <td>

    <p ><b>Marca:</b>{{$keyboard->mark}}</p>
    <p><b>Modelo:</b>{{$keyboard->brand}}</p>
    <p><b>Color:</b>{{$keyboard->color}}</p>
    <p><b>Sampler:</b>{{$keyboard->sampler}}</p>
    <p><b>Octavas:</b>{{$keyboard->octaves}}</p>
    <p><b>Estuche:</b>{{$keyboard->estuche}}</p>
    <p><b>Función:</b>{{$keyboard->tune}}</p>
    <p><b>Pedal:</b>{{$keyboard->pedal}}</p>
    <p><b>Numero:</b>$keyboard->chac</p>
    <p class="text-uppercase"><b class class="text-capitalize">Modelo:</b>{{$keyboard->brand}}</p>
    </td>
    <td> <p>{{$keyboard->description}}</p></td>
    </tr>
    </tbody>
  </tbody>
  </table>  
    <div class="card-footer">
    <div class = "col">
          <div class="d-grid gap-2 d-md-flex justify-content-md-end">
    <a class= "btn btn-primary" href="{{route('keyboard.edit' , $keyboard->id)}}">Editar</a>
    <form action="{{route('keyboard.destroy', $keyboard->id)}}" method="post">
      @csrf 
      @method('DELETE')
      <input class="btn btn-danger" type="submit" value="Eliminar">
    </form>
   
  </div>
    </div>
  </div>
  </div>