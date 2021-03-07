      <link rel="stylesheet" href="{{ asset ('/assets/css/bootstrap.min.css')}}" >

      <div class="conteiner">

          <br><br>
            <div class="card" >
                <div class="card-header">
                <div class="row">
                <div class="col-md_8">
              <h2 class="card-title">Registro de marcas de guitarras compradas</h2>
              </div>
              <div class = "cold-md-4">
              <div class="d-grid gap-2 d-md-flex justify-content-md-end">
        <a href="{{route('guitar.create')}}"><i class= "fa fas-add"></i>+Nuevo Registro</a>
      
    </div>
    </div>
    </div>
              </div>
            <div class="card-body">
          
            <table class="table table-success table-striped">
      
        <thead>
        <tr>
        <th>Guitarra</th>
        <th>Información</th>
        <th>Descripción</th>
        <th>Tienda</th>
        </tr>
        </thead>

        <tbody>
        @forelse ($guitar as $guitars)
        <tr>
          <td> 
          <a class="btn btn-info btn-small" href="{{ route ('guitar.show', $guitars->id)}}">
          <h4>{{$guitars->brand}} {{$guitars->model}}</h4></td>
          </a>
          <td>

          <p><b>Española:</b>{{$guitars->spanish}}</p>
          <p><b>Clasica:</b>{{$guitars->classic}}</p>
          <p><b>Numero:</b>{{$guitars->number}}</p>
          <p><b>Marca:</b>{{$guitars->model}}</p>
          </td>
          <td> <p>{{$guitars->description}}</p></td>
          <td>ver | editar| eliminar</td>
        </tr>
        </tbody>
        
      

      @empty
      <h1>No existen datos en la tabla correspondiente</h1>

      @endforelse

      </tbody>

      </table>  
      </div>

      </div>
