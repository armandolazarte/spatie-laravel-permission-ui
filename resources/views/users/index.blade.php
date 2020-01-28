@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        Usuarios
                        <div class="float-sm-right">
                            @can('usuario.create')
                                <a href="{{ route('user.create') }}" class="btn btn-success">Nuevo</a>
                            @endcan
                        </div>
                    </div>

                    <div class="card-body">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Nombre</th>
                                    <th>Email</th>
                                    <th>Tipo</th>
                                    <th>Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach($users as $user)
                            <tr>
                                <th>{{ $user->id }}</th>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                                <td>{{ $user->tipo }}</td>
                                <td>
                                    @can('usuario.show')
                                        <a href="{{ route('user.show', $user) }}" class="btn btn-info">Ver</a>
                                    @endcan

                                    @can('usuario.edit')
                                        <a href="{{ route('user.edit', $user) }}" class="btn btn-warning">Editar</a>
                                    @endcan

                                    @can('usuario.destroy')
                                        <a href="{{ route('user.destroy', $user) }}" class="btn btn-danger">Eliminar</a>
                                    @endcan
                                </td>
                            </tr>
                            @endforeach
                            </tbody>
                        </table>

                        {{ $users->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
