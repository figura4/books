@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="col-sm-offset-2 col-sm-8">
            <!-- Current Books -->
            @if (count($books) > 0)
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Current Books
                    </div>

                    <div class="panel-body">
                        <table class="table table-striped task-table">

                            <!-- Table Headings -->
                            <thead>
                            <th>Titolo</th>
                            <th>Autore</th>
                            <th>&nbsp;</th>
                            </thead>

                            <!-- Table Body -->
                            <tbody>
                            @foreach ($books as $book)
                                <tr>
                                    <!-- Book Title -->
                                    <td class="table-text">
                                        <div>{{ $book->italian_title }}</div>
                                    </td>
                                    <!-- Book Author -->
                                    <td class="table-text">
                                        <div>{{ $book->author->last_name }}, {{ $book->author->first_name }}</div>
                                    </td>

                                    <td>
                                        <form action="/book/{{ $book->id }}" method="POST">
                                            {{ csrf_field() }}
                                            {{ method_field('DELETE') }}

                                            <button class="btn btn-default">Delete Book</button>
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
