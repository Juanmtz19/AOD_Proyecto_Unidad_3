<link rel="stylesheet" href="{{ asset ('/assets/css/bootstrap.min.css')}}" >

<div class="container ">
    <h1>Registro venta de Teclados Puebla</h1>
    <form action="{{route('keyboard.store')}}" method="post">

        @csrf 

        <div class="row">

        <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
        <label for="">Modelo</label>
        <input class="form-control" type="text" name="brand" id="" placeholder="Modelo" required>
        </div>

    <div class="col-xs-12 col-sm-6 col-md-4 col-xl-4">
        <label for="">Marca</label>
        <input class="form-control" type="text" name="mark" id="" placeholder="Marca" required>
        </div>

        <div class="col-xs-12 col-sm-6 col-md-4 col-xl-4">
        <label for="">Sampler</label>
        <input class="form-control" type="text" name="sampler" id="" placeholder="Sampler" required>
        </div>


        <div class="col-xs-12 col-sm-6 col-md-4 col-xl-4">
        <label for="">Color</label>
        <input class="form-control" type="text" name="color" id="" placeholder="Color" required>
        </div>

        </div>
    <br>
    <div class="row">
    <div class="col-xs-12 col-sm-6 col-md-4 col-xl-4">
        <label for="">Octavas</label>
        <input class="form-control" type="text" name="octaves" id="" placeholder="Octavas"required>
        </div>

        <div class="col-xs-12 col-sm-6 col-md-4 col-xl-4">
        <label for="">Pedal</label>
        <input class="form-control" type="text" name="pedal" id="" placeholder="Pedal"required>
        </div>   

        <div class="col-xs-12 col-sm-6 col-md-4 col-xl-4">
        <label for="">Función</label>
        <input class="form-control" type="text" name="tune" id="" placeholder="tune"required>
        </div>

        <div class="col-xs-12 col-sm-6 col-md-4 col-xl-4">
        <label for="">Estuche</label>
        <input class="form-control" type="text" name="case" id="" placeholder="Estuche"required>
        </div>

    <div>
    </div>
    <br>
        <label for="">Descripcion</label>
        <textarea class="form-control" name="description" id="" cols="30" rows="10" placeholder="Descripción" required> </textarea>
        </div>             
   <div class="row">

   <label for="">Comentario</label>
        <input class="form-control" type="text" name="comment" id="" placeholder="Comentario"required>
    
        </div>

        <div>
            <label for="">Numero</label>
            <input class="form-control" type="text" name="chac" id="" placeholder="Numero" required>
        
            </div>
   </div>
         <div class="d-grid gap-2 d-md-flex justify-content-md-end">
         <input class="btn btn-primary" type="submit" value="Guardar"> 
         <input class="btn btn-info" type="reset" value="Restablecer"> 
        <input class="btn btn-primary" type="submit" value="Guardar"> 
                
            </input>
    </form>
