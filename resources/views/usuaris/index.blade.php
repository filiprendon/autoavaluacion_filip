@extends('layouts.principal')


@section('contenido')
<a href="{{ url('usuaris/create') }}" class="btn btn-primary btn-float-add">Añadir usuario</a>
<div class="container mt-5">
    <table class="table table-bordered table-hover">
        <thead class="table-dark">
            <tr>
                <th>ID</th>
                <th>Nom usuari</th>
                <th>Contraseña</th>
                <th>Email</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Activo</th>
                <th>Tipo</th>

            </tr>
        </thead>
        <tbody>
            @foreach ($usuaris as $usuari)
                <tr>
                    <td>{{ $usuari->id }}</td>
                    <td>{{ $usuari->nom_usuari }}</td>
                    <td>{{ $usuari->contrasenya }}</td>
                    <td>{{ $usuari->correu }}</td>
                    <td>{{ $usuari->nom }}</td>
                    <td>{{ $usuari->cognom }}</td>
                    <td>
                        @if ($usuari->actiu)
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="actiuBuscar" name="actiuBuscar"
                                    value="actiu" checked>
                                <label class="custom-control-label" for="actiuBuscar">Actiu</label>
                            </div>
                        @else
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="actiuBuscar" name="actiuBuscar"
                                    value="actiu">
                                <label class="custom-control-label" for="actiuBuscar">Actiu</label>
                            </div>
                        @endif
                    </td>
                    <td>{{ $usuari->tipus_usuari_id }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection