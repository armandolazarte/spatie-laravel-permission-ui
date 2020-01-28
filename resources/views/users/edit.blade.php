@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Actualizar usuario</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('user.update', $user) }}">
                            @csrf
                            @method('PUT')

                            @include('users.form')
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection