@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="col-sm-offset-2 col-sm-8">
            <div class="panel panel-default">
                <div class="panel-heading">
                    New Author
                </div>

                <div class="panel-body">
                    <!-- Display Validation Errors -->
                    @include('common.errors')

                            <!-- New Author Form -->
                    <form action="/author" method="POST" class="form-horizontal">
                        {{ csrf_field() }}

                                <!-- Author First Name -->
                        <div class="form-group">
                            <label for="author-first_name" class="col-sm-3 control-label">Nome</label>

                            <div class="col-sm-6">
                                <input type="text" name="first_name" id="author-first_name" class="form-control" value="{{ old('author') }}">
                            </div>
                        </div>

                        <!-- Author Last Name -->
                        <div class="form-group">
                            <label for="author-last_name" class="col-sm-3 control-label">Cognome</label>

                            <div class="col-sm-6">
                                <input type="text" name="last_name" id="author-last_name" class="form-control" value="{{ old('author') }}">
                            </div>
                        </div>

                        <!-- Author Bio -->
                        <div class="form-group">
                            <label for="author-bio" class="col-sm-3 control-label">Bio</label>

                            <div class="col-sm-6">
                                <textarea rows="4" cols="50" name="bio" id="author-bio" class="form-control" value="{{ old('author') }}"></textarea>
                            </div>
                        </div>

                        <!-- Add Task Button -->
                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-6">
                                <button type="submit" class="btn btn-default">
                                    <i class="fa fa-btn fa-plus"></i>Add Author
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <!-- Current Authors -->
            @if (count($authors) > 0)
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Current Authors
                    </div>

                    <div class="panel-body">
                        <table class="table table-striped task-table">

                            <!-- Table Headings -->
                            <thead>
                            <th>Last Name</th>
                            <th>First Name</th>
                            <th>&nbsp;</th>
                            </thead>

                            <!-- Table Body -->
                            <tbody>
                            @foreach ($authors as $author)
                                <tr>
                                    <!-- Author Last Name -->
                                    <td class="table-text">
                                        <div>{{ $author->last_name }}</div>
                                    </td>
                                    <!-- Author First Name -->
                                    <td class="table-text">
                                        <div>{{ $author->first_name }}</div>
                                    </td>

                                    <td>
                                        <form action="/author/{{ $author->id }}" method="POST">
                                            {{ csrf_field() }}
                                            {{ method_field('DELETE') }}

                                            <button class="btn btn-default">Delete Author</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            @endif
        </div>
    </div>
@endsection