    <link rel="stylesheet" href="{{ asset ('/assets/css/bootstrap.min.css')}}" >

    <div class="container ">
        <h1>Formulario para crear registros</h1>
        <form action="{{route ('guitar.store')}}" method="post">

            @csrf 
            <div>
            <label for="">Marca</label>
            <input class="form-control" type="text" name="brand" id="" placeholder="Marca">
            </div>

        <div>
            <label for="">Color</label>
            <input class="form-control" type="text" name="color" id="" placeholder="Color">
            </div>

        <div>
            <label for="">Española</label>
            <input class="form-control" type="text" name="spanish" id="" placeholder="Española">
            </div>

        <div>
            <label for="">Clasica</label>
            <input class="form-control" type="text" name="classic" id="" placeholder="Clasica">
            </div>

        <div>
            <label for="">Descripcion</label>
            <textarea class="form-control" name="description" id="" cols="30" rows="10" placeholder="Descripción"> </textarea>
            </div> 
        <div>
            <label for="">Comentario</label>
            <input class="form-control" type="text" name="comment" id="" placeholder="Comentario">
        
            </div>

        <div>
            <label for="">Numero</label>
            <input class="form-control" type="number" name="number" id="" placeholder="Numero">
        
            </div>


                    <input class="btn btn-primary" type="submit" value="Guardar"> 
                    
                </input>
        </form>


    </div>


