<h3>Editar Piloto</h3>

{{ Form::open(array('url' => "recursosHumanos/$rh->id/update")) }}

    {{ Form::label('nombre_personal_requerido', 'Nombre Personal Requerido') }}
    {{ Form::text('nombre_personal_requerido', $rh->nombre_personal_requerido) }}

    {{ Form::label('apellido1_personal_requerido', 'Apellido 1 Personal Requerido') }}
    {{ Form::text('apellido1_personal_requerido', $rh->apellido1_personal_requerido) }}

    {{ Form::label('apellido2_personal_requerido', 'Apellido 2 Personal Requerido') }}
    {{ Form::text('apellido2_personal_requerido', $rh->apellido2_personal_requerido) }}
    
    {{ Form::label('especialidad', 'Especialidad') }}
    {{ Form::text('especialidad', $rh->especialidad) }}

    {{ Form::label('proyecto_id', 'Proyectos') }}
    {{ Form::select('proyecto_id', array('Colones' => 'Colones', 'Dolares' => 'Dolares'),$rh->proyecto_id) }}    

    {{Form::submit('Salvar', array())}}

{{ Form::close() }}
