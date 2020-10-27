@extends('layouts.app')

@section('content')

    <div class="container">
        @include('user.includes.results')
        <div class="row justify-content-center">
            <div class="col-md-6">
                @include('user.send.includes.form_send')

            </div>
            <div class="col-md-5">
                @include('user.send.includes.groupe_list')
            </div>
        </div>

        <div class="row justify-content-center">
            <div class="col-md-10">
                @include('user.includes.msg_list')
            </div>
        </div>



    </div>



@endsection
