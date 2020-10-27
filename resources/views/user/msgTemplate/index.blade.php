@extends('layouts.app')

@section('content')
    <div class="container">
        @include('user.includes.results')
                <form method="POST" action="{{ route('msg_template_post') }}">
                    @csrf
                    <div class="row justify-content-center">
                        <div class="col-md-8">
                            @include('user.msgTemplate.includes.msg_form')
                        </div>
                    </div>
                </form>

        <div class="row justify-content-center">
            <div class="col-md-10">
                @include('user.includes.msg_list')
            </div>
        </div>
    </div>
@endsection
