@extends('layouts.angel')

@section('content')
<div class="container">
	<div class="row wrapper-login">
        <div class="col-sm-4 col-md-8 col-md-offset-2">

            <form class="well form-horizontal" action="{{ url('/register') }}" method="post"  id="login_form">
                {{ csrf_field() }}
                <fieldset>

                    <!-- Form Name -->
                    <legend><strong>{{ trans('auth/register.heading') }}</strong></legend>

                    @if (count($errors) > 0)
                    <!-- False message -->
                    <div class="alert alert-danger">
                        <button type="button" class="close" data-dismiss="alert">
                            <span aria-hidden="true">&times;</span>
                            <span class="sr-only">Close</span>
                        </button>
                        <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                        </ul>
                    </div>
                    @endif

                    @if(session()->has('success'))
                    <!-- Success message -->
                    	@include('partials/alert', ['type' => 'success', 'message' => session('success')])
                    @endif


                    <!-- Text input-->
                    <div class="form-group{{ $errors->has('username') ? ' has-error' : '' }}">
                        <label class="col-md-4 control-label" >{{ trans('auth/login.username') }}</label>
                        <div class="col-md-7 inputGroupContainer">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                <input name="username" placeholder="" class="form-control" value="{{ old('username') }}" type="text">
                            </div>
                        </div>
                    </div>


                    <!-- Text input-->
                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                        <label class="col-md-4 control-label" >{{ trans('auth/login.email') }}</label>
                        <div class="col-md-7 inputGroupContainer">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                                <input name="email" placeholder="" class="form-control" value="{{ old('email') }}" type="email">
                            </div>
                        </div>
                    </div>

                    <!-- Text input-->
                    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                        <label class="col-md-4 control-label" >{{ trans('auth/login.password') }}</label>
                        <div class="col-md-7 inputGroupContainer">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                                <input name="password" placeholder="" class="form-control" value="{{ old('password') }}" type="password">
                            </div>
                        </div>
                    </div>

                    <!-- Text input-->
                    <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                        <label class="col-md-4 control-label" >{{ trans('auth/register.password-confirmation') }}</label>
                        <div class="col-md-7 inputGroupContainer">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                                <input name="password_confirmation" placeholder="" class="form-control" value="{{ old('password_confirmation') }}" type="password">
                            </div>
                        </div>
                    </div>


                    <!-- Button -->
                    <div class="form-group">
                        <label class="col-md-4 control-label"></label>
                        <div class="col-md-4">
                            <button type="submit" class="btn btn-warning" >
                                {{ trans('auth/register.btn-submit') }}
                                <span class="glyphicon glyphicon-send"></span>
                            </button>
                        </div>
                    </div>

                </fieldset>
            </form>

        </div>
    </div>
</div>
@endsection
