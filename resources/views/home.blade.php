@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                        <br>
                    <div>
                        <a href="{{route('profile.user.index')}}">Profile</a>
                    </div>

                    <div>
                        <a href="{{route('group.manage.index')}}">Group</a>
                    </div>

                    <div>
                        <a href="{{route('msg_template')}}">Massage template</a>
                    </div>
                        <div>
                            <a href="{{route('mass-sending')}}">Group mass-sending</a>
                        </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
