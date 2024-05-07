@extends('layouts.principal')


@section('contenido')
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Buscar</h5>
            <form action="{{ action([App\Http\Controllers\CicleController::class, 'index']) }}">
                <div class="form-row">
                    <div class="col-1">
                        @if (old('actiuBuscar') == 'actiu')
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
                    </div>
                    <div class="col-1">
                        <button type="submit" class="btn btn-secondary">Buscar</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div class="container mt-5">
        <table class="table table-bordered table-hover">
            <thead class="table-dark">
                <tr>
                    <th>Siglas</th>
                    <th>Nombre</th>
                    <th>Descripción</th>
                    <th>Activo</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($cicles as $cicle)
                    <tr>
                        <td>{{ $cicle->sigles }}</td>
                        <td>{{ $cicle->nom }}</td>
                        <td>{{ $cicle->descripcio }}</td>
                        <td>
                            @if ($cicle->actiu)
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
                        <td>
                            <form class="float-right ml-1"
                                action="{{ action([App\Http\Controllers\CicleController::class, 'destroy'], ['cicle' => $cicle->id]) }}"
                                method="POST">
                                @csrf
                                @method('delete')
                                <button type="submit" class="btn btn-sm btn-danger">Borrar</button>
                            </form>
                            <form class="float-right"
                                action="{{ action([App\Http\Controllers\CicleController::class, 'edit'], ['cicle' => $cicle->id]) }}"
                                method="POST">
                                @csrf
                                @method('put')
                                <button type="submit" class="btn btn-sm btn-secondary">Editar</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        {{ $cicles->links() }}
    </div>
    <a href="{{ url('cicle/create') }}" class="btn btn-primary btn-float-add">Añadir ciclo</a>
@endsection
