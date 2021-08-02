<div class="form-group">
    {!! Form::label('nombre', 'Nombre ') !!}
    {!! Form::text('nombre', null, ['class' => 'form-control' . ($errors->has('nombre') ? ' is-invalid' : ''), 'placeholder' => 'Nombre']) !!}
    @error('nombre')
        <span class="invalid-feedback">
            <strong>{{ $message }}</strong>
        </span>    
    @enderror
</div>

<div class="form-group">
    {!! Form::label('apellido', 'Apellido ') !!}
    {!! Form::text('apellido', null, ['class' => 'form-control' . ($errors->has('apellido') ? ' is-invalid' : ''), 'placeholder' => 'Apellido']) !!}
    @error('apellido')
        <span class="invalid-feedback">
            <strong>{{ $message }}</strong>
        </span>    
    @enderror
</div>

<div class="form-group">
    {!! Form::label('dni', 'DNI ') !!}
    {!! Form::text('dni', null, ['class' => 'dni form-control' . ($errors->has('dni') ? ' is-invalid' : ''), 'placeholder' => 'DNI', 'maxlength' => '8']) !!}
    @error('dni')
        <span class="invalid-feedback">
            <strong>{{ $message }}</strong>
        </span>    
    @enderror
</div>

<div class="form-group">
    {!! Form::label('edad', 'Edad ') !!}
    {!! Form::text('edad', null, ['class' => 'edad form-control' . ($errors->has('edad') ? ' is-invalid' : ''), 'placeholder' => 'Edad']) !!}
    @error('edad')
        <span class="invalid-feedback">
            <strong>{{ $message }}</strong>
        </span>    
    @enderror
</div>

<div class="form-group">
    {!! Form::label('direccion', 'Direccion ') !!}
    {!! Form::text('direccion', null, ['class' => 'form-control' . ($errors->has('direccion') ? ' is-invalid' : ''), 'placeholder' => 'Direccion']) !!}
    @error('direccion')
        <span class="invalid-feedback">
            <strong>{{ $message }}</strong>
        </span>    
    @enderror
</div>

<div class="form-group">
    {!! Form::label('telefono', 'Telefono ') !!}
    {!! Form::text('telefono', null, ['class' => 'form-control' . ($errors->has('telefono') ? ' is-invalid' : ''), 'placeholder' => 'Telefono']) !!}
    @error('telefono')
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