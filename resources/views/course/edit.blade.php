@extends('app')

@section('content')
@section('content')
<div class="container">
    
    <div class="col-md-offset-3 col-md-6">
        <h2>Editar Curso</h2>
        
        {{ Form::open(array('route' => array('course.update', $course->id), 'method' => 'put')) }}
            {{ Form::label('name', 'Nome:') }}
            {{ Form::text('name', $course->name, array('class' => 'form-control')) }}
            
            {{ Form::label('abbr', 'Abreviação:') }}
            {{ Form::text('abbr', $course->abbr, array('class' => 'form-control')) }}
            
            {{ Form::label('type', 'Tipo:') }}
            {{ Form::select('type', array('Bacharelado' => 'Bacharelado', 'Licenciatura' => 'Licenciatura', 'Tecnólogo' => 'Tecnólogo'), $course->type, array('class' => 'form-control')) }}
            
            <br>
            
            {{ Form::submit('Concluir', array('class' => 'btn btn-primary')) }}
        {{ Form::close() }}
    </div>
    
</div>
@endsection