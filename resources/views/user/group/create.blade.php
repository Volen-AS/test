@extends('layouts.app')

@section('content')

    <div class="container">
        @include('user.includes.results')

            <form method="POST" action="{{ route('group.manage.store') }}">
                @csrf

                <div class="row justify-content-center">
                    <div class="col-md-8">
                        @include('user.group.includes.form_group_create')


                        @include('user.includes.user_list')
                    </div>
                </div>

            </form>
    </div>
@endsection
