<link rel="stylesheet" href="{{ asset ('/assets/css/bootstrap.min.css')}}" >

<div class="container ">
          <h class="badge bg-primary ">Teclados: {{$keyboard->brand}} {{$keyboard->mark}}
    <h1>Actualización de datos Teclado<b></b></h1>
    <form action="{{route ('keyboard.update', $keyboard->id)}}" method="post">

        @csrf 
        @method('PUT')

        <input type="hidden" name="id">

        <div class="row">

        <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
        <label for="">Modelo:</label>
        <input class="form-control" type="text" name="brand" value="{{ $keyboard->brand}}" required>
        </div>

        <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
        <label for="">Marca:</label>
        <input class="form-control" type="text" name="mark" value="{{ $keyboard->mark}}" required>
        </div>

    <div class="col-xs-12 col-sm-6 col-md-4 col-xl-4">
        <label for="">Color</label>
        <input class="form-control" type="text" name="color" value="{{ $keyboard->color}}" required>
        </div>

        <div class="col-xs-12 col-sm-6 col-md-4 col-xl-4">
        <label for="">Octavas</label>
        <input class="form-control" type="text" name="octaves" value="{{ $keyboard->octaves}}" required>
        </div>

        <div class="col-xs-12 col-sm-6 col-md-4 col-xl-4">
        <label for="">Estuche</label>
        <input class="form-control" type="text" name="case" value="{{ $keyboard->case}}" required>
        </div>

        </div>
    <br>
    <div class="row">
    <div class="col-xs-12 col-sm-6 col-md-4 col-xl-4">
        <label for="">Función</label>
        <input class="form-control" type="text" name="tune" id="" value="{{ $keyboard->tune}}" required>
        </div>

        <div class="col-xs-12 col-sm-6 col-md-4 col-xl-4">
        <label for="">Pedal</label>
        <input class="form-control" type="text" name="pedal" value="{{ $keyboard->pedal}}"required>
        </div>
        
    <div>
    </div>
    <br>
        <label for="">Descripcion</label>
        <textarea class="form-control" name="description" id="" cols="30" rows="10" required>value="{{$keyboard->description}}" </textarea>
        </div>             
   <div class="row">

   <label for="">Comentario</label>
        <input class="form-control" type="text" name="comment" value="{{$keyboard->comment}}"required>
    
        </div>
        <div>
            <label for="">Numero</label>
            <input class="form-control" type="text" name="chac" value="{{$keyboard->chac}}"  required>
        
            </div>
   </div>
         <div class="d-grid gap-2 d-md-flex justify-content-md-end">
         <input class="btn btn-primary" type="submit" value="Guardar"> 
         <input class="btn btn-info" type="reset" value="Restablecer"> 
        <input class="btn btn-primary" type="submit" value="Eliminar"> 
                
            </input>
    </form>


</div>


