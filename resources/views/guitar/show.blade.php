<link rel="stylesheet" href="{{ asset ('/assets/css/bootstrap.min.css')}}" >

<div class="conteiner">

    <br><br>
      <div class="card" >
          <div class="card-header">
          <div class="row">
          <div class="col-md_8">
        <h2 class="card-title">
          <h class="badge bg-primary ">Guitarra: {{$guitar->brand}} {{$guitar->model}}</h>
        </div>
        </div>
        <div class = "cold-md-4">
        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
  <a class= "btn btn-primary" href="{{route('guitar.index')}}">Regresar</a>
</div>
</div>
</div> </div>
      <div class="card-body">
    
      <table class="table table-success table-striped">

  <thead>
  <tr>
  <th>Guitarra</th>
  <th>Información</th>
  <th>Descripción</th>

  </tr>
  </thead>

  <tbody>
  
  <tr>
    <td> 
        <p>Imagen</p>
    <td>

    <p ><b>Española:</b>{{$guitar->spanish}}</p>
    <p><b>Clasica:</b>{{$guitar->classic}}</p>
    <p><b>Numero:</b>{{$guitar->number}}</p>
    <p class="text-uppercase"><b class class="text-capitalize">Marca:</b>{{$guitar->model}}</p>
    </td>
    <td> <p>{{$guitar->description}}</p></td>
    </tr>
    </tbody>
  </tbody>
  </table>  
    <div class="card-footer">
    <div class = "col">
          <div class="d-grid gap-2 d-md-flex justify-content-md-end">
    <a class= "btn btn-primary" href="{{route('guitar.edit' , $guitar->id)}}">Editar</a>
    <a class= "btn btn-danger" href="{{route('guitar.destroy', $guitar->id)}}">Dar de baja</a>
  </div>
    </div>
  </div>
  </div>