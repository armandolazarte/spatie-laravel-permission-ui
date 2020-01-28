@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Crear rol</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('rol.store') }}">
                            @csrf
                            @include('rol.form')
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection