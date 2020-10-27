@extends('layouts.app')

@section('content')
    <div class="container">
        @include('user.includes.results')
        <div class="row">
            <div class="col-md-10 ">
                <div><h2>User profile</h2></div>



                @if($profile->exists)
                    <form method="POST" action="{{route('profile.user.update', [Auth::id()])}}" class="form-horizontal">
                        @method('PATCH')
                @else
                    <form method="POST" action="{{route('profile.user.store')}}" class="form-horizontal">

                @endif
                    @csrf

                        <!-- Text input-->
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="phone">Phone number </label>
                            <div class="col-md-4">
                                <div class="input">
                                    <div class="input-group-addon">
                                        <i class="fa fa-phone"></i>
                                    </div>
                                    <input id="phone"
                                           name="phone"
                                           type="tel"
                                           placeholder="Primary Phone number "
                                           class="form-control input-md"
                                           value="{{$profile->phone}}"
                                           required>

                                </div>
                            </div>
                        </div>

                        <!-- Text input-->
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="first_name">First Name</label>
                            <div class="col-md-4">
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fa fa-user">
                                        </i>
                                    </div>
                                    <input id="first_name"
                                           name="first_name"
                                           type="text"
                                           placeholder="First Name"
                                           class="form-control input-md"
                                           value="{{$profile->first_name}}"
                                           required>
                                </div>
                            </div>
                        </div>

                        <!-- Text input-->
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="last_name">Last Name</label>
                            <div class="col-md-4">
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fa fa-user">
                                        </i>
                                    </div>
                                    <input id="last_name"
                                           name="last_name"
                                           type="text"
                                           placeholder="Last Name"
                                           class="form-control input-md"
                                           value="{{$profile->last_name}}"
                                           required>
                                </div>
                            </div>
                        </div>

                        <!-- Multiple Radios (inline) -->
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="sex">Gender</label>
                            <div class="col-md-4">
                                <input type="radio" id="male" name="sex" value="1" @if($profile->sex ==  1) checked="checked" @endif>
                                <label for="male">Male</label><br>
                                <input type="radio" id="female" name="sex" value="2" @if($profile->sex ==  2) checked="checked" @endif>
                                <label for="female">Female</label><br>
                            </div>
                        </div>

                        <!-- Text input-->
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="date_of_birth">Date Of Birth</label>
                            <div class="col-md-4">

                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fa fa-birthday-cake"></i>
                                    </div>
                                    <input id="birth_date"
                                           name="birth_date"
                                           type="text"
                                           placeholder="01.01.1990"
                                           value="{{$profile->birth_date}}"
                                           class="form-control input-md">
                                </div>



                            </div>
                        </div>

                    @if($profile->exists)
                        <div class="card-body">
                            <button type="submit" class="btn btn-primary">Edit</button>
                        </div>
                    @else
                        <div class="card-body">
                            <button type="submit" class="btn btn-primary">Save</button>
                        </div>
                    @endif
                </form>
            </div>
        </div>
    </div>
@endsection
