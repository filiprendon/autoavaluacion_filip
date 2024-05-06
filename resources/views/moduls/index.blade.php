@extends('layouts.principal')


@section('contenido')
    <div class="container mt-5">
        <table class="table table-bordered table-hover">
            <thead class="table-dark">
                <tr>
                    <th>Siglas</th>
                    <th>Nombre</th>
                    <th>Horas</th>
                    <th>Activo</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($moduls as $modul)
                    <tr>
                        <td>{{ $modul->codi }}</td>
                        <td>{{ $modul->nom }}</td>
                        <td>{{ $modul->hores }}</td>
                        <td>{{ $modul->actiu }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
