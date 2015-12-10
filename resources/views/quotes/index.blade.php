@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="col-sm-offset-2 col-sm-8">
            <!-- Current Quotes -->
            @if (count($quotes) > 0)
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Current Quotes
                    </div>

                    <div class="panel-body">
                        <table class="table table-striped task-table">

                            <!-- Table Headings -->
                            <thead>
                            <th>Testo</th>
                            <th>&nbsp;</th>
                            </thead>

                            <!-- Table Body -->
                            <tbody>
                            @foreach ($quotes as $quote)
                                <tr>
                                    <!-- Quote text -->
                                    <td class="table-text">
                                        <div>{{ $quote->body }}</div>
                                    </td>
                                    <td>
                                        <form action="/quote/{{ $quote->id }}" method="POST">
                                            {{ csrf_field() }}
                                            {{ method_field('DELETE') }}

                                            <button class="btn btn-default">Delete Quote</button>
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
