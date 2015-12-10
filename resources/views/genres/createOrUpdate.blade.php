@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="col-sm-offset-2 col-sm-8">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Genere
                </div>

                <div class="panel-body">
                    <!-- Display Validation Errors -->
                    @include('common.errors')

                    @if(isset($genre))
                        {!! Form::model($genre, array('route' => array('genre.update', $genre->id), 'method' => 'PUT', 'class' => 'form-horizontal')) !!}

                    @else
                        {!! Form::open(array('action' => 'GenreController@store', 'class' => 'form-horizontal')) !!}
                    @endif

                    <div class="form-group">
                        {!! Form::label('genre-description', 'Descrizioe', array('class' => 'col-sm-3 control-label')) !!}
                        <div class="col-sm-6">
                            {!! Form::text('description', Input::old('description'), array('class' => 'form-control')) !!}
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-sm-offset-3 col-sm-6">
                        {!! Form::submit('Salva', array('class' => 'btn btn-default')) !!}
                        </div>
                    </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
