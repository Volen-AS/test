@extends('layouts.app')

@section('content')
    <div class="container">
        @include('user.includes.results')
        <div class="row justify-content-center">
            <din class="col-md-12">
                <nav class="navbar navbar-toggleable-md navbar-light bg-faded">
                    <a class="btn btn-primary" href="{{ route('group.manage.create') }}" > Create Group</a>
                </nav>
                <div class="card">

                    <div class="card-body">
                        <table class="table table-hover">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>User Group</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($paginator as $group)
                                @php
                                    /** @var \App\Models\Group $group */
                                @endphp
                                <tr>
                                    <td>{{ $group->id }}</td>
                                    <td>
                                        <a href="{{ route('group.manage.edit', $group->id) }}">{{ $group->group_name }}</a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                            <tfoot></tfoot>
                        </table>
                    </div>
                </div>
            </din>
        </div>

        @if($paginator->total() > $paginator->count())
            <br>
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            {{ $paginator->links() }}
                        </div>
                    </div>
                </div>
            </div>
        @endif
    </div>

@endsection
