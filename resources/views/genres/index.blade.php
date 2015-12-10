@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="col-sm-offset-2 col-sm-8">
            <!-- Current Genres -->
            @if (count($genres) > 0)
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Current Genres
                    </div>

                    <div class="panel-body">
                        <table class="table table-striped task-table">

                            <!-- Table Headings -->
                            <thead>
                            <th>Description</th>
                            <th>&nbsp;</th>
                            </thead>

                            <!-- Table Body -->
                            <tbody>
                            @foreach ($genres as $genre)
                                <tr>
                                    <!-- Genre Description -->
                                    <td class="table-text">
                                        <div>{{ $genre->description }}</div>
                                    </td>
                                    <td>
                                        <form action="/genre/{{ $genre->id }}" method="POST">
                                            {{ csrf_field() }}
                                            {{ method_field('DELETE') }}

                                            <button class="btn btn-default">Delete Genre</button>
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
