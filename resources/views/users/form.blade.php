<div class="form-group row">
    <label for="name" class="col-md-4 col-form-label text-md-right">Apellido y Nombre</label>

    <div class="col-md-6">
        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name', $user->name ?? null) }}" required autocomplete="name" autofocus>

        @error('name')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>
</div>

<div class="form-group row">
    <label for="email" class="col-md-4 col-form-label text-md-right">Correo electrónico</label>

    <div class="col-md-6">
        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email', $user->email ?? null) }}" required autocomplete="email">

        @error('email')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>
</div>

<div class="form-group row">
    <label for="password" class="col-md-4 col-form-label text-md-right">Contraseña</label>

    <div class="col-md-6">
        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password">

        @error('password')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>
</div>

<div class="form-group row">
    <label for="password-confirm" class="col-md-4 col-form-label text-md-right">Confirmar contraseña</label>

    <div class="col-md-6">
        <input id="password-confirm" type="password" class="form-control" name="password_confirmation">
    </div>
</div>

<div class="form-group row">
    <label for="tipo" class="col-md-4 col-form-label text-md-right">Tipo de usuario</label>

    <div class="col-md-6">
        <select class="form-control" id="tipo" name="tipo">
            @foreach($roles as $rol)
            <option value="{{ $rol->name }}" {{ old('tipo', $user->tipo ?? null) == $rol->name ? 'selected' : '' }}>
                {{ $rol->display_name }}
            </option>
            @endforeach
        </select>
    </div>
</div>

<div class="form-group row mb-0">
    <div class="col-md-6 offset-md-4">
        <button type="submit" class="btn btn-primary">Guardar</button>
        <a href="{{ route('user.index') }}" class="btn btn-danger">Cancelar</a>
    </div>
</div>
