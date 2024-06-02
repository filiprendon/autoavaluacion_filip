@extends('layouts.principal')

@section('contenido')
<div class="container">
    <h1>Editar ciclo</h1>
    <form action="{{ action([App\Http\Controllers\UsuariController::class, 'update'], ['usuari' => $usuari->id]) }}" method="POST">
        @csrf
        @method('put')

        <div class="form-group">
            <label for="nombreUsuario">Nombre usuario</label>
            <input type="text" class="form-control" id="nombreUsuario" name="nombreUsuario" required>
        </div>

        <!-- <div class="form-group">
            <label for="password">Contraseña</label>
            <input type="password" class="form-control" id="password" name="password" required>
        </div> -->

        <div class="form-group">
            <label for="nom">Email</label>
            <input type="email" class="form-control" id="email" name="email" required>
        </div>

        <div class="form-group">
            <label for="nombre">Nombre</label>
            <input type="text" class="form-control" id="nombre" name="nombre" required>
        </div>

        <div class="form-group">
            <label for="apellido">Apellido</label>
            <input class="form-control" id="apellido" name="apellido" required>
        </div>

        <div class="form-group">
            <label for="tipo">Tipo de usario</label>
            <select id="tipo" name="tipo" required>
                <option value="1">Administrador</option>
                <option value="2">Profesor</option>
                <option value="3">Alumno</option>
            </select>
        </div>

        <div class="form-group">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" id="activo" name="activo" value="1">
                <label class="form-check-label" for="activo">
                    Activo
                </label>
            </div>
        </div>

        <button type="submit" class="btn btn-primary">Guardar</button>
        <button type="submit" class="btn btn-danger">Cancelar</button>
    </form>
</div>
@endsection
