@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="col-sm-offset-2 col-sm-8">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Libro
                </div>

                <div class="panel-body">
                    <!-- Display Validation Errors -->
                    @include('common.errors')

                    {!! Form::open(array('action' => 'BookController@store', 'class' => 'form-horizontal')) !!}

                    <div class="form-group">
                        {!! Form::label('book-italian_title', 'Titolo', array('class' => 'col-sm-3 control-label')) !!}
                        <div class="col-sm-6">
                            {!! Form::text('italian_title', Input::old('italian_title'), array('class' => 'form-control')) !!}
                        </div>
                    </div>

                    {!! echo Form::select('author_id', $author_list, null, ['class' => 'form-control']); !!}

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
