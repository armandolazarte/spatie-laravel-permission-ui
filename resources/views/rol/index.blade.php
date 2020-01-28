@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        Roles
                        <div class="float-sm-right">
                            @can('rol.create')
                                <a href="{{ route('rol.create') }}" class="btn btn-success">Nuevo</a>
                            @endcan
                        </div>
                    </div>

                    <div class="card-body">
                        <table class="table">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Nombre a mostrar</th>
                                <th>Nombre</th>
                                <th>Descripcion</th>
                                <th>Acciones</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($roles as $rol)
                                <tr>
                                    <th>{{ $rol->id }}</th>
                                    <td>{{ $rol->display_name }}</td>
                                    <td>{{ $rol->name }}</td>
                                    <td>{{ $rol->description }}</td>
                                    <td>
                                        @can('rol.show')
                                            <a href="{{ route('rol.show', $rol) }}" class="btn btn-info">Ver</a>
                                        @endcan

                                        @can('rol.edit')
                                            <a href="{{ route('rol.edit', $rol) }}" class="btn btn-warning">Editar</a>
                                        @endcan

                                        @can('rol.destroy')
                                            <a href="{{ route('rol.destroy', $rol) }}" class="btn btn-danger">Eliminar</a>
                                        @endcan
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>

                        {{ $roles->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
