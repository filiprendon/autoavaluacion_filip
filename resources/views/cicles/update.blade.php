@extends('layouts.principal')

@section('contenido')
<div class="container">
    <h1>Editar ciclo</h1>
    <form action="{{ action([App\Http\Controllers\CicleController::class, 'update'], ['cicle' => $cicle->id]) }}" method="POST">
        @csrf
        @method('put')

        <div class="form-group">
            <label for="sigles">Siglas:</label>
            <input type="text" class="form-control" id="sigles" name="sigles" required>
        </div>

        <div class="form-group">
            <label for="nom">Nombre:</label>
            <input type="text" class="form-control" id="nom" name="nom" required>
        </div>

        <div class="form-group">
            <label for="descripcio">Descripción:</label>
            <textarea class="form-control" id="descripcio" name="descripcio" rows="3" required></textarea>
        </div>

        <div class="form-group">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" id="actiu" name="actiu" value="1">
                <label class="form-check-label" for="actiu">
                    Activo
                </label>
            </div>
        </div>

        <button type="submit" class="btn btn-primary">Guardar</button>
        <button type="submit" class="btn btn-danger">Cancelar</button>
    </form>
</div>
@endsection
