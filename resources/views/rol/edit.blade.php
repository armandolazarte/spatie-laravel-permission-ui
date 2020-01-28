@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Editar rol</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('rol.update', $rol) }}">
                            @csrf
                            @method('PUT')

                            @include('rol.form')
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection