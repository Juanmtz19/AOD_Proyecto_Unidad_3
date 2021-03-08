<link rel="stylesheet" href="{{ asset ('/assets/css/bootstrap.min.css')}}" >

<div class="container ">
          <h class="badge bg-primary ">Contratos: {{$contrato->grup}} {{$contrato->grup2}}
    <h1>Agenda de contrataciones artisticas<b></b></h1>
    <form action="{{route ('contrato.update', $contrato->id)}}" method="post">

        @csrf 
        @method('PUT')

        <input type="hidden" name="id">

        <div class="row">

        <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
        <label for="">Artista 1:</label>
        <input class="form-control" type="text" name="grup" value="{{ $contrato->grup}}" required>
        </div>

        <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
        <label for="">Artista 2:</label>
        <input class="form-control" type="text" name="grup2" value="{{ $contrato->grup2}}" required>
        </div>

    <div class="col-xs-12 col-sm-6 col-md-4 col-xl-4">
        <label for="">Fechas De Eventos</label>
        <input class="form-control" type="text" name="eventName" value="{{ $contrato->eventName}}" required>
        </div>

        <div class="col-xs-12 col-sm-6 col-md-4 col-xl-4">
        <label for="">Ciudad</label>
        <input class="form-control" type="text" name="city" value="{{ $contrato->city}}" required>
        </div>

        <div class="col-xs-12 col-sm-6 col-md-4 col-xl-4">
        <label for="">Lugar</label>
        <input class="form-control" type="text" name="place" value="{{ $contrato->place}}" required>
        </div>

        <div class="col-xs-12 col-sm-6 col-md-4 col-xl-4">
        <label for="">Escenario</label>
        <input class="form-control" type="text" name="stage" value="{{ $contrato->stage}}" required>
        </div>


        </div>
    <br>
    <div class="row">


        <div class="col-xs-12 col-sm-6 col-md-4 col-xl-4">
        <label for="">Fecha</label>
        <input class="form-control" type="number" name="date" id="" placeholder="Fechas disponibles" required>
        </div>

        <div class="col-xs-12 col-sm-6 col-md-4 col-xl-4">
        <label for="">Pago</label>
        <input class="form-control" type="number" name="payment" id="" placeholder="Pago" required>
        </div>
        
        <div class="col-xs-12 col-sm-6 col-md-4 col-xl-4">
        <label for="">Capacidad</label>
        <input class="form-control" type="text" name="capacity" value="{{ $contrato->capacity}}"required>
        </div>

    <div>
    </div>
    <br>
        <label for="">Descripcion</label>
        <textarea class="form-control" name="description" id="" cols="30" rows="10" required>value="{{$contrato->description}}" </textarea>
        </div>             
   <div class="row">

   <label for="">Comentario</label>
        <input class="form-control" type="text" name="comment" value="{{$contrato->comment}}"required>
    
        </div>
       
   </div>
         <div class="d-grid gap-2 d-md-flex justify-content-md-end">
         <input class="btn btn-primary" type="submit" value="Guardar"> 
         <input class="btn btn-info" type="reset" value="Restablecer"> 
        <input class="btn btn-primary" type="submit" value="Eliminar"> 
                
            </input>
    </form>


</div>


