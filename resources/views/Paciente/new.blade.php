<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
        {{-- bootstrap.min.css --}}
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Add Pacientes</title>
</head>

<body>
  <div class="container">
    <div class="p-3 d-flex justify-content-center" style="margin-top: 10%">
      <div class="card">
    <div class="card-header">
    <h1>Add Pacientes</h1>  
  </div>

  <div class="card-body">
    <form method="POST" action="{{route('paciente.store')}}">
     @csrf
     <div class="row">
        <div class="col mb-3">
          <label for="documento" class="form-label">Cedula</label>
          <input type="number" class="form-control" id="documento" aria-describedby="documento" name="documento">
          <div id="documento" class="form-text">Maximo 10 caracteres</div>
        </div>


        <div class="col mb-3">
          <label for="nombres" class="form-label">Nombresombres</label>
          <input type="text" required class="form-control" id="nombres"  aria-describedby="nombres"
            name="nombres" placeholder="nombres">
        </div>
      </div>
      
      <div class="row">
        <div class="col mb-3">
            <label for="apellidos" class="form-label">Apellidos</label>
            <input type="text" required class="form-control" id="apellidos"  aria-describedby="apellidos"
              name="apellidos" placeholder="apellidos">
        </div>

        <div class="col mb-3">
            <label for="fecha_nacimiento" class="form-label">Fecha Nacimiento</label>
            <input type="date" required class="form-control" id="fecha_nacimiento"  aria-describedby="fecha_nacimiento"
              name="fecha_nacimiento" placeholder="fecha_nacimiento">
        </div>
      </div>

      <div class="row">
        <div class="col mb-3">
            <label for="edad" class="form-label">Edad</label>
            <input type="number" required class="form-control" id="edad"  aria-describedby="edad"
              name="edad" placeholder="edad">
        </div>

        <div class="col mb-3">
            <label for="telefono" class="form-label">Telefono</label>
            <input type="number" required class="form-control" id="telefono"  aria-describedby="telefono"
              name="telefono" placeholder="telefono">
        </div>
      </div>

      <div class="row">
        <div class="col mb-3">
            <label for="correo" class="form-label">Correo</label>
            <input type="email" required class="form-control" id="correo"  aria-describedby="correo"
              name="correo" placeholder="correo">
        </div>

        <div class="col mb-3">
            <label for="direccion" class="form-label">Direccion</label>
            <input type="text" required class="form-control" id="direccion"  aria-describedby="direccion"
              name="direccion" placeholder="direccion">
        </div>
      </div>

      <div class="row">
    <label for="estado">Estado del paciente</label>
    <select class="form-select" id="estado" name="estado" required>
        <option selected disabled value="">Choose one...</option>
        <option selected  value="Habilitado">Habilitado</option>
        <option selected  value="Deshabilitado">Deshabilitado</option>
     </select>
    </div>
        <div class="mt-3">
       <button type="submit" class="btn btn-primary">Save</button>
       <a href="{{route('paciente.index')}}" class="btn btn-warning">Close</a>
        </div>
      </form>
    </div>
  </div>
</div>
</div>
</body>
{{-- bootstrap.bundle.min.js --}}
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
{{-- popper.min.js --}}
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
{{-- bootstrap.min.js --}}
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</html>