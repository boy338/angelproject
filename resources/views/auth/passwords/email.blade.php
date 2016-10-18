@extends('layouts.angel')

<!-- Main Content -->
@section('content')
<div class="container">
    <div class="row wrapper-login">
        <div class="col-sm-4 col-md-8 col-md-offset-2">

            <form class="well form-horizontal" action="{{ url('/password/email') }}" method="post"  id="login_form">
                {{ csrf_field() }}
                <fieldset>

                    <!-- Form Name -->
                    <legend><strong>{{ trans('auth/reset.heading') }}</strong></legend>

                	@if(session()->has('status'))
                	    @include('partials/alert', ['type' => 'success', 'message' => session('status')])
            	    @endif

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

                    <!-- Text input-->
                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                        <label class="col-md-4 control-label" >{{ trans('auth/reset.email') }}</label>
                        <div class="col-md-7 inputGroupContainer">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                                <input name="email" placeholder="" class="form-control" value="{{ old('email') }}" type="email">
                            </div>
                        </div>
                    </div>

                    <!-- Button -->
                    <div class="form-group">
                        <label class="col-md-4 control-label"></label>
                        <div class="col-md-4">
                            <button type="submit" class="btn btn-warning" >
                                {{ trans('auth/reset.btn-submit') }}
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
