@extends('layouts.principal')


@section('contenido')
    <div class="container mt-5">
        <table class="table table-bordered table-hover">
            <thead class="table-dark">
                <tr>
                    <th>Tipus</th>
                    <th>Actiu</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($tipusUsuaris as $tipusUsuari)
                    <tr>
                        <td>{{ $tipusUsuari->tipus }}</td>
                        <td>
                            @if ($tipusUsuari->actiu)
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
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
