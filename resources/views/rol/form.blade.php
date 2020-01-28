<div class="form-group row">
    <label for="display_name" class="col-md-4 col-form-label text-md-right">Nombre a mostrar</label>

    <div class="col-md-6">
        <input id="display_name" type="text" class="form-control @error('display_name') is-invalid @enderror" name="display_name" value="{{ old('display_name', $rol->name ?? null) }}" required autocomplete="display_name" autofocus>

        @error('display_name')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>
</div>

<div class="form-group row">
    <label for="name" class="col-md-4 col-form-label text-md-right">Nombre</label>

    <div class="col-md-6">
        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name', $rol->name ?? null) }}" readonly>

        @error('name')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>
</div>

<div class="form-group row">
    <label for="description" class="col-md-4 col-form-label text-md-right">Descripcion</label>

    <div class="col-md-6">
        <input id="description" type="text" class="form-control @error('description') is-invalid @enderror" name="description" value="{{ old('description', $rol->description ?? null) }}">

        @error('description')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>
</div>

<div class="col-md-12">
    <label for="permiso">Permisos</label><br>
    <a href="#" class="permiso-select-all">Seleccionar todo</a> / <a href="#" class="permiso-deselect-all">Deseleccionar todo</a>

    <ul class="list-unstyled permisos">
        <div class="row">
            @foreach($permisos->groupBy('table') as $table => $permiso)
                <div class="col-md-3 pt-3">
                    <li>
                        <div class="form-check">
                            <input type="checkbox" id="{{ $table }}" class="form-check-input permiso-group">
                            <label for="{{ $table }}" class="form-check-label">{{ $table }}</label>
                        </div>

                        <ul class="list-unstyled pl-4">
                            @foreach($permiso as $perm)
                                <li>
                                    <div class="form-check">
                                        <input type="checkbox" name="permisos[]" id="permiso-{{ $perm->id }}" class="form-check-input the-permiso" value="{{ $perm->id }}"
                                               @if(in_array($perm->id, old('permisos', isset($rol) ? $rol->permissions->pluck('id')->toArray() : []))) checked @endif
                                        >
                                        <label for="permiso-{{ $perm->id }}" class="form-check-label">{{ $perm->display_name }}</label>
                                    </div>
                                </li>
                            @endforeach
                        </ul>
                    </li>
                </div>
            @endforeach
        </div>
    </ul>
</div>

<div class="form-group row mb-0">
    <div class="col-md-6 offset-md-4">
        <button type="submit" class="btn btn-primary">Guardar</button>
        <a href="{{ route('rol.index') }}" class="btn btn-danger">Cancelar</a>
    </div>
</div>
