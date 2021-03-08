<link rel="stylesheet" href="{{ asset ('/assets/css/bootstrap.min.css')}}" >

<div class="container ">
    <h1>Registro de contrataciones artisticas</h1>
    <form action="{{route('contrato.store')}}" method="post">

        @csrf 

        <div class="row">

        <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
        <label for="">Artista 1</label>
        <input class="form-control" type="text" name="grup" id="" placeholder="Artista 1" required>
        </div>

    <div class="col-xs-12 col-sm-6 col-md-4 col-xl-4">
        <label for="">Artista 2</label>
        <input class="form-control" type="text" name="grup2" id="" placeholder="Astista 2" required>
        </div>

        <div class="col-xs-12 col-sm-6 col-md-4 col-xl-4">
        <label for="">Eventos</label>
        <input class="form-control" type="text" name="eventName" id="" placeholder="Eventos" required>
        </div>


        <div class="col-xs-12 col-sm-6 col-md-4 col-xl-4">
        <label for="">Ciudad</label>
        <input class="form-control" type="text" name="city" id="" placeholder="Ciudad" required>
        </div>

        </div>
    <br>
    <div class="row">
    <div class="col-xs-12 col-sm-6 col-md-4 col-xl-4">
        <label for="">Lugar</label>
        <input class="form-control" type="text" name="place" id="" placeholder="Lugar"required>
        </div>

        <div class="col-xs-12 col-sm-6 col-md-4 col-xl-4">
        <label for="">Escenario</label>
        <input class="form-control" type="text" name="stage" id="" placeholder="Escenarios"required>
        </div>   

        <div class="col-xs-12 col-sm-6 col-md-4 col-xl-4">
        <label for="">Capacidad</label>
        <input class="form-control" type="number" name="capacity" id="" placeholder="Capacidad"required>
        </div>

        <div class="col-xs-12 col-sm-6 col-md-4 col-xl-4">
        <label for="">Fechas Disponibles</label>
        <input class="form-control" type="number" name="date" id="" placeholder="Fechas disponibles" required>
        </div>

        <div class="col-xs-12 col-sm-6 col-md-4 col-xl-4">
        <label for="">Pago</label>
        <input class="form-control" type="number" name="payment" id="" placeholder="Pago"required>
        </div>


    <div>
    </div>
    <br>
        <label for="">Descripción</label>
        <textarea class="form-control" name="description" id="" cols="30" rows="10" placeholder="Descripción" required> </textarea>
        </div>             
   <div class="row">

   <label for="">Comentario</label>
        <input class="form-control" type="text" name="comment" id="" placeholder="Comentario"required>
    
        </div>
   </div>
         <div class="d-grid gap-2 d-md-flex justify-content-md-end">
         <input class="btn btn-primary" type="submit" value="Guardar"> 
         <input class="btn btn-info" type="reset" value="Restablecer"> 
        <input class="btn btn-primary" type="submit" value="Guardar"> 
                
            </input>
    </form>
