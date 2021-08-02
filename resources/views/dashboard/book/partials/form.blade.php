<div class="form-group">
    {!! Form::label('idAuthor', 'Autor: ') !!}
    {!! Form::select('idAuthor',$authors, null, ['class' => 'form-control author', 'placeholder' => 'Seleccione Autor...', 'style' => 'width:100%;']) !!}
    
    @error('idAuthor')
        <small class="text-danger">
            <strong>{{ $message }}</strong>
        </small>   
    @enderror
</div>

<div class="form-group">
    {!! Form::label('titulo', 'Titulo ') !!}
    {!! Form::text('titulo', null, ['class' => 'form-control' . ($errors->has('titulo') ? ' is-invalid' : ''), 'placeholder' => 'Titulo']) !!}
    @error('titulo')
        <span class="invalid-feedback">
            <strong>{{ $message }}</strong>
        </span>    
    @enderror
</div>

<div class="form-group">
    {!! Form::label('annoPublicacion', ' Año Publicacion ') !!}
    {!! Form::text('annoPublicacion', null, ['class' => 'form-control' . ($errors->has('annoPublicacion') ? ' is-invalid' : ''), 'placeholder' => ' Año Publicacion']) !!}
    @error('annoPublicacion')
        <span class="invalid-feedback">
            <strong>{{ $message }}</strong>
        </span>    
    @enderror
</div>

<div class="form-group">
    {!! Form::label('ubicacionLibrero', 'Ubicacion Librero ') !!}
    {!! Form::text('ubicacionLibrero', null, ['class' => 'form-control' . ($errors->has('ubicacionLibrero') ? ' is-invalid' : ''), 'placeholder' => 'Ubicacion Librero']) !!}
    @error('ubicacionLibrero')
        <span class="invalid-feedback">
            <strong>{{ $message }}</strong>
        </span>    
    @enderror
</div>

<div class="form-group">
    {!! Form::label('descripcion', 'Descripcion ') !!}
    {!! Form::textarea('descripcion', null, ['class' => 'form-control' . ($errors->has('descripcion') ? ' is-invalid' : ''), 'placeholder' => 'Descripcion', 'rows' => 4]) !!}
    @error('descripcion')
        <span class="invalid-feedback">
            <strong>{{ $message }}</strong>
        </span>    
    @enderror
</div>

<div class="form-group">
    {!! Form::label('numeroCopia', 'Numero Copia ') !!}
    {!! Form::text('numeroCopia', null, ['class' => 'form-control' . ($errors->has('numeroCopia') ? ' is-invalid' : ''), 'placeholder' => 'Numero Copia']) !!}
    @error('numeroCopia')
        <span class="invalid-feedback">
            <strong>{{ $message }}</strong>
        </span>    
    @enderror
</div>

<div class="form-group">
    {!! Form::label('name', 'Estado: ') !!}
    {!! Form::select('estado', [1 => 'Disponible', 0 => 'No Disponible'], null, ['class' => 'form-control']) !!}
    @error('codigo')
        <span class="invalid-feedback">
            <strong>{{ $message }}</strong>
        </span>    
    @enderror
</div>