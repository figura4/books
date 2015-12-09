@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="col-sm-offset-2 col-sm-8">
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
