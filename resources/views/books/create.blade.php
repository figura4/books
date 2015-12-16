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
                    
                    @if(isset($book))
                        {!! Form::model($book, array('route' => array('book.update', $book->id), 'method' => 'PUT', 'class' => 'form-horizontal')) !!}

                    @else
                        {!! Form::open(array('action' => 'BookController@store', 'class' => 'form-horizontal')) !!}
                    @endif
                    
                    <div class="form-group">
                        {!! Form::label('book-italian_title', 'Titolo (*)', array('class' => 'col-sm-3 control-label')) !!}
                        <div class="col-sm-6">
                            {!! Form::text('italian_title', Input::old('italian_title'), array('class' => 'form-control')) !!}
                        </div>
                    </div>
                    
                    <div class="form-group">
                        {!! Form::label('book-original_title', 'Titolo originale', array('class' => 'col-sm-3 control-label')) !!}
                        <div class="col-sm-6">
                            {!! Form::text('original_title', Input::old('original_title'), array('class' => 'form-control')) !!}
                        </div>
                    </div>
                    
                    <div class="form-group">
                        {!! Form::label('book-pages', 'Pagine', array('class' => 'col-sm-3 control-label')) !!}
                        <div class="col-sm-6">
                            {!! Form::text('pages', Input::old('pages'), array('class' => 'form-control')) !!}
                        </div>
                    </div>
                    
                    <div class="form-group">
                        {!! Form::label('book-editor', 'Editore', array('class' => 'col-sm-3 control-label')) !!}
                        <div class="col-sm-6">
                            {!! Form::text('editor', Input::old('editor'), array('class' => 'form-control')) !!}
                        </div>
                    </div>
                    
                    <div class="form-group">
                        {!! Form::label('book-pub_year', 'Anno di pubblicazione', array('class' => 'col-sm-3 control-label')) !!}
                        <div class="col-sm-6">
                            {!! Form::text('pub_year', Input::old('pub_year'), array('class' => 'form-control')) !!}
                        </div>
                    </div>
                    
                    <div class="form-group">
                        {!! Form::label('book-vote', 'Voto (*)', array('class' => 'col-sm-3 control-label')) !!}
                        {!! Form::select('vote', [1, 2, 3, 4, 5], null, ['class' => 'form-control']) !!}
                    </div>
                    
                    <div class="form-group">
                        {!! Form::label('book-author', 'Autore', array('class' => 'col-sm-3 control-label')) !!}
                        {!! Form::select('author_id', $author_list, null, ['class' => 'form-control']) !!}
                        Se non trovi l'autore in elenco, {!! HTML::link('/author/create', 'creane uno nuovo') !!}
                    </div>
                    
                    <div class="form-group">
                        {!! Form::label('book-review', 'Recensione (*)', array('class' => 'col-sm-3 control-label')) !!}
                        <div class="col-sm-6">
                            {!! Form::textarea('review', Input::old('review'), array('class' => 'form-control', 'rows' => 4, 'cols' => 50)) !!}
                        </div>
                    </div>
                    
                    <div class="form-group">
                        {!! Form::label('book-review_pub_date', 'Data pubblicazione recensione', array('class' => 'col-sm-3 control-label')) !!}
                        <div class="col-sm-6">
                            {!! Form::text('review_pub_date', Input::old('review_pub_date'), array('class' => 'form-control')) !!}
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
