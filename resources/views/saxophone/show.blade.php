<link rel="stylesheet" href="{{ asset ('/assets/css/bootstrap.min.css')}}" >

<div class="conteiner">

    <br><br>
      <div class="card" >
          <div class="card-header">
          <div class="row">
          <div class="col-md_8">
        <h2 class="card-title">
          <h class="badge bg-primary ">Saxofones: {{$saxophone->brand}} {{$saxophone->mark}}
        </div>
        <div class = "cold-md-4">
        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
  <a class= "btn btn-primary" href="{{route('saxophone.index')}}">Regresar</a>
</div>
</div>
</div> </div>
      <div class="card-body">
    
      <table class="table table-success table-striped">

  <thead>
  <tr>
  <th>Saxofones</th>
  <th>Caracteristicas</th>
  <th>Recomendaciones</th>

  </tr>
  </thead>

  <tbody>
  
  <tr>
    <td> 
        <p>Imagen</p>
    <td>

    <p ><b>Marca:</b>{{$saxophone->mark}}</p>
    <p><b>Modelo:</b>{{$saxophone->brand}}</p>
    <p><b>Color:</b>{{$saxophone->color}}</p>
    <p><b>Numero piezas:</b>{{$saxophone->Pieces}}</p>
    <p><b>Registro:</b>{{$saxophone->Register}}</p>
    <p><b>Seguimiento:</b>{{$saxophone->charac}}</p>
    <p class="text-uppercase"><b class class="text-capitalize">Modelo:</b>{{$saxophone->brand}}</p>
    </td>
    <td> <p>{{$saxophone->description}}</p></td>
    </tr>
    </tbody>
  </tbody>
  </table>  
    <div class="card-footer">
    <div class = "col">
          <div class="d-grid gap-2 d-md-flex justify-content-md-end">
    <a class= "btn btn-primary" href="{{route('saxophone.edit' , $saxophone->id)}}">Editar</a>
    <form action="{{route('saxophone.destroy', $saxophone->id)}}" method="post">
      @csrf 
      @method('DELETE')
      <input class="btn btn-danger" type="submit" value="Eliminar">
    </form>
   
  </div>
    </div>
  </div>
  </div>