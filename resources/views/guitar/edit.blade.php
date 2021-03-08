<link rel="stylesheet" href="{{ asset ('/assets/css/bootstrap.min.css')}}" >

<div class="container ">
          <h class="badge bg-primary ">Guitarra: {{$guitar->brand}} {{$guitar->model}}
    <h1>Actualizar datos de Guitarra <b></b></h1>
    <form action="{{route ('guitar.update', $guitar->id)}}" method="post">

        @csrf 
        @method('PUT')

        <input type="hidden" name="id">

        <div class="row">

        <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
        <label for="">Marca</label>
        <input class="form-control" type="text" name="brand" value="{{ $guitar->brand}}" required>
        </div>

    <div class="col-xs-12 col-sm-6 col-md-4 col-xl-4">
        <label for="">Color</label>
        <input class="form-control" type="text" name="color" value="{{ $guitar->color}}" required>
        </div>

        </div>
    <br>
    <div class="row">
    <div class="col-xs-12 col-sm-6 col-md-4 col-xl-4">
        <label for="">Española</label>
        <input class="form-control" type="text" name="spanish" value="{{ $guitar->spanish}}"required>
        </div>

        <div class="col-xs-12 col-sm-6 col-md-4 col-xl-4">
        <label for="">Clasica</label>
        <input class="form-control" type="text" name="classic" value="{{ $guitar->classic}}"required>
        </div>

    <div>
    </div>
    <br>
        <label for="">Descripcion</label>
        <textarea class="form-control" name="description" id="" cols="30" rows="10" required>value="{{$guitar->description}}" </textarea>
        </div>             
   <div class="row">

   <label for="">Comentario</label>
        <input class="form-control" type="text" name="comment" value="{{$guitar->comment}}"required>
    
        </div>

    <div>
        <label for="">Numero</label>
        <input class="form-control" type="number" name="number" id="" placeholder="Numero" required>
    
        </div>

   </div>
         <div class="d-grid gap-2 d-md-flex justify-content-md-end">
         <input class="btn btn-primary" type="submit" value="Guardar"> 
         <input class="btn btn-info" type="reset" value="Restableces"> 
        <input class="btn btn-primary" type="submit" value="Guardar"> 
                
            </input>
    </form>


</div>


