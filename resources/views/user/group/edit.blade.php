@extends('layouts.app')

@section('content')

    <div class="container">
        @include('user.includes.results')


            <form method="POST" action="{{ route('group.manage.update', $group->id) }}">
                @method('PATCH')
                @csrf
                    <div class="row justify-content-center">
                        <div class="col-md-8">
                            @include('user.group.includes.form_group_edit')

                        </div>
                        <div class="col-md-3">
                            @include('user.group.includes.user_in_group')
                        </div>
                    </div>
            </form>

            <div class="row justify-left-center">
                <div class="col-md-8">
                    <div class="row justify-content-end">
                        <form method="POST" action="{{ route('group.manage.destroy', $group->id) }}">

                            @method('DELETE')
                            @csrf
                            <button type="submit" class="btn btn-link">Delete Group</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="row justify-left-center">
                <div class="col-md-8">

                        @include('user.includes.user_list')
                </div>
            </div>

    </div>
@endsection
